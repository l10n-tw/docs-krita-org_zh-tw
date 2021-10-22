.. meta::
    :description:
        Guide to Reporting Bugs.

.. metadata-placeholder

    :authors: - Halla Rempt <boud@valdyas.org>
    :license: GNU free documentation license 1.3 or later.

.. _bugs_reporting:

==============
Reporting Bugs
==============

Krita is, together with many other projects, part of the KDE community. Therefore, bugs for Krita are tracked in KDE's bug tracker: `KDE's bug tracker <https://bugs.kde.org>`_. The bug tracker is a tool for Krita's developers to help them manage bugs in the software, prioritize them and plan fixes. It is not a place to get user support!

The bug tracker contains two kinds of reports: bugs and wishes. Bugs are errors in Krita's code that interrupt using Krita. Wishes are feature requests: the reporter thinks some functionality is missing or would be cool to have.

Do not just create a feature request in the bug tracker: follow `Feature Requests <https://krita.org/en/item/ways-to-help-krita-work-on-feature-requests/>`_ to learn how to create a good feature request.

This guide will help you create a good bug report. If you take the time to create a good bug report, you have a much better chance of getting a developer to work on the issue. If there is not enough information to work with, or if the bug report is unreadable, a developer will not be able to understand and fix the issue.


.. contents::

Only Report Bugs
----------------

A bug is a problem in Krita's code.

- If you have problems with your drawing tablet, for instance no support for pressure, then that is unlikely to be a problem in Krita's code: it is almost certain to be a problem with your setup or the driver for your tablet.
- If you've lost the toolbox, that's not a bug.
- If you have deleted your work, that is not a bug.
- If Krita works differently from another application, that's not a bug.
- If Krita works differently than you expected, that's not a bug.
- If Krita is slower than you expected, that's not a bug.


- If Krita crashes, that's a bug.
- If a file you save comes out garbled, that's a bug.
- If Krita stops working, that's a bug.
- If Krita stops displaying correctly, that's a bug.


Check the FAQ
-------------

If you've got a problem with Krita, first check the `FAQ <https://docs.krita.org/en/KritaFAQ.html>`_. See whether your problem is mentioned there. If it is, apply the solution.

Ask on Krita Artists or IRC Chat Channel
-------------------------------------------------------

If uncertain, ask us in the chatroom "#krita" via matrix. A introduction about Matrix is given `here <https://community.kde.org/Matrix>`_. Create a matrix on kde.org account and join the #krita:kde.org channel. Or ask a question on `Krita Artists <https://krita-artists.org/c/support/6>`_ forum.

Krita's chat channel is maintained on Libera.Chat. Developers and users hang out to discuss Krita's development and help people who have questions.

.. important::
    Most Krita developers live in Europe, and the channel is very quiet when it's night in Europe. You also have to be patient: it may take some time for people to notice your question even if they are awake.


.. admonition:: Also ...

   Krita does not have a paid support staff. You will chat with volunteers, users and developers. It is not a help desk.


But you can still ask your question, and the people in the channel are a friendly and helpful lot.


Use the Latest Version of Krita
-------------------------------

Check Krita's website to see whether you are using the latest version of Krita. There are two "latest" versions:

- Latest stable: check the `Download page <https://krita.org/download/>`_. Always try to reproduce your bug with this version.
- Stable and Unstable Nightly builds: The stable nightly build is built from the last release plus all bug fixes done since the last release. This is called **Krita Plus** The unstable nightly build contains new features and is straight from the development branch of Krita. This is called **Krita Next**. You can download these builds from the `Download page <https://krita.org/download/>`_.


Be Complete and Be Completely Clear
-----------------------------------

Give all information. That means that you should give information about your operating system, hardware, the version of Krita you're using and, of course about the problem.

- Open the `the bug tracker <https://bugs.kde.org/enter_bug.cgi?product=krita>`_.
- If you do not have an account yet, create one.

.. image:: /images/untranslatable/bugzilla_simple.png
   :width: 800
   :align: center
   :alt: the bug tracker's new bug form, advanced fields hidden

In the New Bug form, fill in the following fields:   

- Component: if you experience an issue when running a filter, select Filters. If you don't know the component, select "* Unknown"
- Version: select the correct version. You can find the version of Krita in :menuselection:`Help-->About Krita.`
- Severity: if you have experienced a crash, select "crash". If you are making a feature request, select "wish". Otherwise, "normal" is correct. Do not select "major" or "grave", not even if you feel the issue you are reporting is really important.
- Platform: select the from the combobox the platform you run Krita on, for instance "Microsoft Windows"
- OS: this probably already correctly preselected. (If you're wondering why there are two fields that have more or less the same meaning, it's because "Platform" should allow you to select between Windows Installer, Windows Portable Zip File, Windows Store or Steam", it's a bug in bugzilla that it doesn't have those options.)
- Summary: a one line statement of what happened, like "Krita crashes when opening the attached PSD file".
- Description: this is the most important field.

    Here you need to state very clearly:

    - what happened,
    - what had you expected to happen instead,
    - how the problem can be reproduced.

    Give a concise and short description, then enumerate the steps needed to reproduce the problem. If you cannot reproduce the problem, and it isn't a crash, think twice before making the report: the developers likely cannot reproduce it either.

    The template here is used for all projects in the KDE community and isn't especially suitable for Krita.

- Attachments

    - In all cases, attach the contents of the :menuselection:`Help --> Show system information for bug reports` dialog to the bug report.
    - In all cases, attach the contents of the :menuselection:`Help --> Show krita log for bug reports` dialog to the bug report.

    - Your file
    
        If at all possible, attach your original Krita file (the one that ends in ``.kra``) to the bug report, or if it's too big, add a link for download. If you do that, make sure the file will be there for **years** to come: do not remove it. If the problem is with loading or saving a file in another format, please attach that file.

    - A video
    
        If you think it would be useful, you can also attach or link to a video. Note that the Krita developers and bug triagers are extremely busy, and that it takes less time to read a good description and a set of steps to reproduce than it takes to watch a video for clues for what is going on.

        When making a video or a screenshot, include the whole Krita window, including the titlebar and the statusbar.

    - If you are reporting a crash, attach a crash log. On Windows, you will find a kritacrash.log file in the local AppData folder. On Linux, follow your distribution's instructions to install debug symbols if you have installed Krita from a distribution package. It is not possible to create a useful crash log with Linux AppImages.



After You Have Filed the Report
-------------------------------

After you have filed your bug, mail will be sent out to all Krita developers and bug triagers. You do not have to go to the chat channel and tell us you created a bug.

When a developer decides to investigate your report, they will start adding comments to the bug. There might be additional questions: please answer them as soon as possible.

When the developer has come to a conclusion, they will **resolve** the bug. That is done by changing the resolution status in the bug tracker. These statuses are phrased in developer speak, that is to say, they might sound quite rude to you. There's nothing that we can do about that, so do not take it personally. The bug reporter should *never* change the status after a developer changed it.

These are the most used statuses:

- Unconfirmed: your bug has not been investigated yet, or nobody can reproduce your bug.
- Confirmed: your bug is a bug, but there is no solution yet.
- Assigned: your bug is a bug, someone is going to work on it.
- Resolved/Fixed: your bug was a genuine problem in Krita's code. The developer has fixed the issue and the solution will be in the next release.
- Duplicate: your bug has been reported before.
- Needinfo/WaitingForInfo. You need to provide more information. If you do not reply within a reasonable amount of time the bug will be closed automatically.
- Resolved/Not a Bug: your report was not about a bug: that is, it did not report something that can be fixed in Krita's code.
- Resolved/Upstream: the issue you observed is because of a bug in a library Krita uses, or a hardware driver, or your operating system. We cannot do anything about it.
- Resolved/Downstream: Only on Linux. The issue you observed happens because your Linux distribution packages Krita in a way that causes problems.

See also our chapter on `Bug Triaging <https://docs.krita.org/en/untranslatable_pages/triaging_bugs.html>`_
