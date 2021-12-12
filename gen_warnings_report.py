#!/usr/bin/env python3

import functools
import html
import logging
import os
import re
import subprocess
import sys
import urllib.parse
from dataclasses import dataclass
from io import FileIO
from typing import Dict, Iterable, Optional, TextIO

import polib

logging.basicConfig(stream=sys.stdout, level=logging.DEBUG)

DOCS_PREFIX = "/home/runner/docs/"
DOCS_VIEW_URL = "http://l10n.tw/docs-krita-org_zh-tw/"
DOCS_EN_URL = "https://docs.krita.org/en/"
WEBLATE_BASE_URL = "https://weblate.slat.org/languages/zh_Hant/krita-docs/"


@functools.lru_cache(maxsize=None)
def load_catalog(pofile: str) -> polib.POFile:
    return polib.pofile(pofile)


@dataclass
class WarningItem:
    file: str
    line: int
    message: str
    msgid: str = ""
    msgstr: str = ""

    def load_msg(self) -> None:
        pofile = "locale/zh_TW/docs_krita_org_" + \
            self.file.replace("/", "___").replace(".rst", ".po")
        catalog = load_catalog(pofile)
        matches = [e for e in catalog if not e.obsolete and (
            "../../" + self.file, str(self.line)) in e.occurrences]
        if len(matches) == 1:
            self.msgid = matches[0].msgid
            self.msgstr = matches[0].msgstr
        elif len(matches) > 1:
            logging.warning(
                f"More than one matches for {self.file}:{self.line}")
        else:
            logging.warning(f"No matches for {self.file}:{self.line}")


WARNING_LINE_REGEX = re.compile(
    r'^([\w\/\.]+):(\d+)(?::<translated>:\d+)?: (\w+): (.+)$')


def parse_warning_line(warning: str) -> Optional[WarningItem]:
    warning = warning.rstrip('\n')
    matches = WARNING_LINE_REGEX.match(warning)
    if matches:
        file, line, _level, message = matches.groups()
        if file.startswith(DOCS_PREFIX):
            file = file[len(DOCS_PREFIX):]
        item = WarningItem(file=file, line=int(line), message=message)
        item.load_msg()
        return item
    else:
        logging.warning(f"Cannot parse warning line:\n    {warning}")
        return None


def write_html(w: TextIO, last_commit: str, warnings: Iterable[WarningItem]) -> None:
    def write_styles(w: TextIO) -> None:
        w.write(
            "<style>"
            r"""
            .rawmsg {
                border: 1px solid #ccc;
                padding: 4px 6px;
            }
            .nowrap {
                white-space: nowrap;
            }
            table#warning-list tr.primary td.icon > a {
                text-decoration: none;
            }
            table#warning-list tr.primary td.icon > a:before {
                content: '\2795';
            }
            table#warning-list tr.primary.expanded td.icon > a:before {
                content: '\2796';
            }
            table#warning-list tr.primary:not(.expanded) + tr.secondary {
                display: none;
            }
            """
            "</style>"
        )

    def write_scripts(w: TextIO) -> None:
        w.write(
            r"""
            <script>
            'use strict';
            document.getElementById("warning-list").addEventListener("click", ev => {
                if (ev.target.matches("table#warning-list tr.primary td.icon > a")) {
                    let el = ev.target.closest("tr.primary");
                    el.classList.toggle("expanded")
                }
            });
            document.getElementById("expand-all").addEventListener("click", ev => {
                for (let el of document.querySelectorAll("table#warning-list tr.primary")) {
                    el.classList.add("expanded");
                }
            });
            document.getElementById("collapse-all").addEventListener("click", ev => {
                for (let el of document.querySelectorAll("table#warning-list tr.primary")) {
                    el.classList.remove("expanded");
                }
            });
            </script>
            """
        )

    def write_warnings_table(w: TextIO, warnings: Iterable[WarningItem]) -> None:
        def write_row(w: TextIO, warning: WarningItem) -> None:
            w.write('<tr class="primary">')
            w.write(
                '<td class="icon"><a href="javascript:void(0)">&nbsp;</a></td>'
            )
            w.write(
                "<td>"
                f'<a target="_blank" href="{WEBLATE_BASE_URL}search/?q=location%3A%3D..%2F..%2F{urllib.parse.quote_plus(warning.file)}%3A{warning.line}">'
                f"{html.escape(warning.file)}:{warning.line}"
                "</a>"
                "</td>"
            )
            w.write(
                '<td class="nowrap">'
                f'<a target="_blank" href="{DOCS_VIEW_URL}{warning.file.replace(".rst", ".html")}">中文預覽</a>'
                "</td>"
            )
            w.write(
                '<td class="nowrap">'
                f'<a target="_blank" href="{DOCS_EN_URL}{warning.file.replace(".rst", ".html")}">英文</a>'
                "</td>"
            )
            w.write(
                "<td>"
                f'{warning.message}'
                "</td>"
            )
            w.write("</tr>")
            w.write(
                r'''
                <tr class="secondary">
                <td></td>
                <td colspan="4">
                <span>來源字串：</span>
                '''
                f'<div class="rawmsg">{html.escape(warning.msgid)}</div>'
                '<span>翻譯字串：</span>'
                f'<div class="rawmsg">{html.escape(warning.msgstr)}</div>'
                r'''
                </td>
                </tr>
                '''
            )
        w.write(
            '<table id="warning-list">'
            "<thead><td>&nbsp;</td><th>來源</th><th>&nbsp;</th><th>&nbsp;</th><th>警告</th></thead>"
            "<tbody>"
        )
        for warning in warnings:
            write_row(w, warning)
        w.write("</tbody></table>")
    w.write(
        "<!DOCTYPE html>"
        '<html lang="zh-Hant-TW"><head>'
        '<meta charset="utf-8">'
        "<title>Krita 說明文件翻譯警告清單</title>"
    )
    write_styles(w)
    w.write(
        "</head><body>"
        f"<p>最後翻譯更動：{last_commit}</p>"
        '<p>'
        '<a href="javascript:void(0)" id="expand-all">&#x2795;全部展開</a>&nbsp;'
        '<a href="javascript:void(0)" id="collapse-all">&#x2796;全部摺疊</a>'
        '</p>'
    )
    write_warnings_table(w, warnings)
    write_scripts(w)
    w.write("</body></html>")


def get_latest_commit_time_str() -> str:
    res = subprocess.run(
        [
            "bash",
            "-c",
            'TZ=Asia/Taipei date -d "$(git log -1 --format=%cI -- locale/zh_TW)" "+%Y年%m月%d日 %H:%M"',
        ],
        capture_output=True,
    )
    if res.returncode > 0:
        raise RuntimeError(
            f"Failed to get latest commit date, subprocess returned {res.returncode}")
    time_str = res.stdout.decode('utf-8')
    return time_str.rstrip('\n')


def main() -> None:
    # TODO: Make this a parameter
    sphinx_warning_file = "/tmp/sphinx-build-warnings.log"
    if os.path.isfile(sphinx_warning_file):
        warnings = open(sphinx_warning_file, mode="r",
                        encoding="utf-8").readlines()
        outfile = open("_warnings_report.html", mode="w", encoding="utf-8")
        write_html(
            outfile,
            last_commit=get_latest_commit_time_str(),
            warnings=(x for x in (parse_warning_line(w)
                      for w in warnings) if x),
        )
    else:
        warnings = None


if __name__ == "__main__":
    main()
