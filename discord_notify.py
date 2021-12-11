#!/usr/bin/env python3

import logging
import os
import subprocess
import sys
from discord_webhook import DiscordWebhook

WEBHOOK_URL = os.environ["WEBHOOK_URL"]
GITHUB_REPOSITORY = os.environ["GITHUB_REPOSITORY"]
GITHUB_RUN_ID = os.environ["GITHUB_RUN_ID"]

logging.basicConfig(stream=sys.stdout, level=logging.DEBUG)


def send_message_unchecked(msg: str) -> None:
    """Sends message without checking its length. Messages shall have < 2000 characters."""
    webhook = DiscordWebhook(url=WEBHOOK_URL, content=msg, username="通知")
    response = webhook.execute()


def send_message_with_file_unchecked(msg: str, file_name: str, file_content: str) -> None:
    """Sends message with an embedded file attachment without checking its length. Messages shall have < 2000 characters."""
    webhook = DiscordWebhook(url=WEBHOOK_URL, content=msg, username="通知")
    webhook.add_file(filename=file_name, file=file_content)
    response = webhook.execute()


def get_latest_commit_time_str() -> str:
    res = subprocess.run(
        [
            "bash",
            "-c",
            'TZ=Asia/Taipei date -d "$(git log -1 --format=%cI)" "+%Y年%m月%d日 %H:%M"',
        ],
        capture_output=True,
    )
    if res.returncode > 0:
        raise RuntimeError(
            f"Failed to get latest commit date, subprocess returned {res.returncode}")
    return res.stdout.decode('utf-8')


def main() -> None:
    # TODO: Make this a parameter
    sphinx_warning_file = "/tmp/sphinx-build-warnings.log"
    if os.path.isfile(sphinx_warning_file):
        warnings = open(sphinx_warning_file, mode="r").readlines()
    else:
        warnings = None
    latest_commit_time = get_latest_commit_time_str()
    message = (
        "已建置翻譯更新預覽到 <http://l10n.tw/docs-krita-org_zh-tw/>\n"
        f"最後翻譯更動：{latest_commit_time}\n"
        f"建置事件：<https://github.com/{GITHUB_REPOSITORY}/actions/runs/{GITHUB_RUN_ID}>"
    )
    if warnings:
        message += f"\n警告數目：{len(warnings)}"
        send_message_with_file_unchecked(message, "警告.txt", '\n'.join(warnings))
    else:
        message += f"\n警告數目：0"
        send_message_unchecked(message)


if __name__ == "__main__":
    main()
