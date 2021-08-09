Krita 說明文件正體中文翻譯
================================

**Krita Manual Traditional Chinese Translations**

這是為 Weblate 翻譯流程而設的中轉儲存庫。這裏臨時存放了 Krita 5.0 說明文件正體中文未完全翻譯的
PO 編目檔。文件會由 GitHub Actions 自動建置並發佈 GitHub Pages 上，可在 http://l10n.tw/docs-krita-org_zh-tw/
查閱。

This repo stores the work-in-progress Traditional Chinese (zh_TW)
gettext PO catalogs for the Krita 5.0 Manual to be translated on Weblate. The WIP translated manual is automatically
built with GitHub Actions and published on GitHub Pages, viewable at http://l10n.tw/docs-krita-org_zh-tw/
for your pleasure.

- Krita 說明文件的 Git 原始碼儲存庫：  
  Git repo of the Krita Documentation Website:  
  https://invent.kde.org/documentation/docs-krita-org
- Team page for the KDE zh_TW l10n team:  
  https://l10n.kde.org/team-infos.php?teamcode=zh_TW

The templates are currently built from the documentation source instead of being
fetched from KDE SVN, partly due to reasons described in https://invent.kde.org/documentation/docs-krita-org/-/merge_requests/239
to avoid bloating our translation strings too much. As such, when the updated
PO catalogs are to be committed to KDE SVN, they will be merged with the
existing files on SVN using `msgmerge`.

The POT templates are rebuilt on demand. The translated PO catalogs are committed to
the `weblate-stage` branch, which is then manually committed to KDE SVN and
merged back to the `master` branch when necessary.

The POT templates and PO catalogs in this repo use the same license as the
source code of Krita, which is GNU Free Documentation License 1.3+.

---

如希望參與翻譯，可循以下渠道與 l10n-tw 社群的成員聯絡：

- ~~[zh-l10n 郵件論壇][zh-l10n]~~（由於設定問題，郵件論壇目前不能正常接收郵件）
- [l10n_tw Telegram 群組](https://t.me/l10n_tw)
- [KDE 的 kde-i18n-doc 郵件論壇][kde-i18n-doc]（如發送郵件到這個郵件論壇，請使用英文）

[zh-l10n]: https://lists.slat.org/mailman3/postorius/lists/zh-l10n.lists.linux.org.tw/
[kde-i18n-doc]: https://mail.kde.org/mailman/listinfo/kde-i18n-doc
