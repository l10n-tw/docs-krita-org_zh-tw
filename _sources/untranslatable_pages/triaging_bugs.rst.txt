.. meta::
    :description:
        Guide to bugtriaging.

.. metadata-placeholder

    :authors: - Halla Rempt <boud@valdyas.org>
    :license: GNU free documentation license 1.3 or later.
    
.. _triaging_bugs:

=============
Triaging Bugs
=============

There are over 1000 bugs and 350 wishes reported against Krita per year, and that number is rising.
The Krita developers cannot handle that stream on their own! Please consider helping out by triaging bugs. This document gives some simple guidelines to get started, and some common cases that can often be answered with a standard text.

For more details, see also https://community.kde.org/Guidelines_and_HOWTOs/Bug_triaging

.. contents::

Status flow
-----------

A bug begins as ``UNCONFIRMED``. When triaging, only ``UNCONFIRMED`` bugs are still relevant.

Platform
~~~~~~~~

If the user has not entered the Platform correctly (i.e., it is "unspecified/Linux"), then ask which platform they are using. Mark the bug as ``NEEDDINFO/WAITINFORINFO``.

.. admonition:: Tell the user:

    Please indicate your operating system correctly. For Linux, select the distribution, AppImage or compiled from sources and Linux, for Windows, select MS Windows/MS Windows, for macOS or macOS, select macports, disk images or homebrew and macOS.

If the user has selected Windows CE for platform, set it to MS Windows without asking them.

Version
~~~~~~~
If the user has not entered the version (i.e., the version is unspecified), ask them for the version and mark the bug as ``NEEDDINFO/WAITINFORINFO``.

.. admonition:: Tell the user:

    Please select the version of Krita you are using. You can find the version in Help/About Krita.


Can Reproduce
~~~~~~~~~~~~~

* If you can reproduce the bug, add a comment indicating you can reproduce it, maybe with clearer steps to reproduce and anything pertinent that you observed. If you have a backtrace, also add it. Set the bug status to ``CONFIRMED`` and add the ``triaged`` keyword to the keywords.
* If you can reproduce the bug, and want to go the extra mile, use an older version of Krita to see whether you could reproduce it there as well. If you couldn't, it's a *regression*, so add the regression keyword to the keywords and mark which version of Krita the latest was that did not have the bug.

Cannot Reproduce
~~~~~~~~~~~~~~~~

* If you cannot reproduce, the user either has not given enough information or the bug is specific to their system.

* If there is not enough information, ask for more information. Depending on the report, the steps to reproduce might need to be described more clearly and/or a screenshot, a screen recording or the original files might be necessary. Set text (ask for what you think is needed):

    .. admonition:: Ask the user:

        I am sorry, I cannot reproduce your issue. Could you specify the steps to reproduce more clearly, and maybe add a screen recording/screenshot/original file

    * Mark the bug as ``NEEDINFO/WAITINGFORINFO``.
* If the issue seems to be specific to the user's system, ask for the output of help/System information for bug reports as well. Set text:

     .. admonition:: Tell the user:

        I am sorry, but I cannot reproduce the bug on my system. Please add the output of help/System Information for Bug reports as well.

    * Mark the bug as ``NEEDINFO/WAITINGFORINFO``.

Importance
~~~~~~~~~~
Importance is a tool for developers, not for bug reports. It's developers and triagers who decide what the importance is. If a bug reporter complains about a change in importance, use this text:

.. admonition:: Tell the user:

    I am sorry, but the importance field is a tool for the developers to work with. Please do not change the importance back.

There are the following Importances:

Critical:
    the bug leads to immediate dataloss. Example: a saved file cannot be opened in Krita
Grave:
    shouldn't be used, it doesn't mean a thing
Major:
    it's a bug, but it's kinda important.
Crash:
    the bug is about a crash or an assert [1]_
Normal:
    it's a bug
Minor:
    it's a bug, but it's kinda unimportant
Wish:
    it's a feature request
Task:
    not used.

The main difference is between Wish and the rest: Wishes are feature requests, and don't need immediate triaging. A wish bug is a bug that asks whether some functionality can be added to Krita, or complains that some functionality is missing.

The rest are bugs, that is, problems in Krita that can be fixed by changing Krita's code.

However, we also get many reports that are not bugs and not wishes: reports that are basically users asking for help because they do not understand Krita or their computer, or what a file is, or that Krita isn't the same application as Photoshop. Those reports need to be weeded out, and the status set to ``INVALID``.

Guidance for using Importance
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

* If you encounter a bug that reports dataloss when loading a saved file, set it to critical.
* If you encounter a bug that reports a crash or an assert but is not set to crash, set it to crash.
* If you encounter a report that asks for functionality that is not currently present, set it to wish.
* If you encounter a report that is a user request, check whether you can reply with a link to the faq (https://docs.krita.org/en/KritaFAQ.html), and maybe a canned answer, and change the status of the bug to ``INVALID``.

Asserts and Crashes
~~~~~~~~~~~~~~~~~~~

.. [1] **Crash or assert.**

    These are different things. A crash happens when Krita spontaneously stops working *or* hangs. An assert happens when Krita stops working because we, developers, have added some code to detect an invalid state.

    Asserts are printed to the terminal or shown in a popup window. You can identify an assert by asking for terminal output, debugview output or by checking the backtrace, if there is one.

    If the backtrace contains a line like::

        > SAFE ASSERT (krita): "!sanityCheckPointer.isValid()" in file /tmp/nix-build-krita-4.0.0-pre2c.drv-0/krita-1b1695a/libs/ui/KisDocument.cpp, line 490

    Or another mention of assert, Q_ASSERT or similar, it's an assert, not a crash.

Canned Answers and Recognizing Common Reports
---------------------------------------------

We get a lot of duplicate bug reports. Sometimes it's clear that it's a duplicate, and you can mark it a such. In all cases, we want to give the reporter useful information so they can solve their problems. Of course, (almost) all solutions are also in the FAQ, but just pointing people to the FAQ is often considered impolite.

So, do never reply to a bug report with:

    "Just read the FAQ."

It takes a bit of experience to recognize a bug from an often incomplete description. Here are a couple of common cases:

Cannot Save
~~~~~~~~~~~

For instance:
"I cannot save/my file doesn't get saved/it says it cannot copy the file"

This happens most often on Windows, if the user has got any security software installed that doesn't come with Windows. Examples are Sandboxie, Totaldefender, or others. Mark the bug as ``NEEDSINFO/WAITINGFORINFO`` and add this text:

.. admonition:: Ask the user:

    Are you using Windows? If so, do you have any non-standard security software installed such as Total Defender, Sandboxie or XXX? Please make an exception for Krita in the settings, or uninstall this software. Since Windows 10, it is no longer necessary to have any security software installed other than what comes with Windows.

If the user replies that they are using extra security software, close the bug as ``RESOLVED/INVALID``.

Broken Canvas
~~~~~~~~~~~~~


This happens on Windows. Symptoms will be: the canvas is black, the canvas stays blank, the canvas only updates when the user clicks outside the canvas. Mark the bug as a duplicate of https://bugs.kde.org/show_bug.cgi?id=360601, and add the following text:

.. admonition:: Tell the user:

    You probably are using a Windows system with an Intel display chip. Please update to Krita 3.3.3, which enables the Direct3D (Angle) renderer by default. If you do not want to update, check https://docs.krita.org/en/KritaFAQ.html#krita-starts-with-an-empty-canvas-and-nothing-changes-when-you-try-to-draw-or-krita-shows-a-black-or-blank-screen-or-krita-crashes-when-creating-a-document-or-krita-s-menubar-is-hidden-on-a-windows-system-with-an-intel-gpu

My stylus has an offset
~~~~~~~~~~~~~~~~~~~~~~~

This happens on Windows. Symptoms will be: the user reports that the stylus cursor has an offset or moves the cursor on another screen. Usually, the user will have a misconfigured multi-monitor system. Mark the bug as ``NEEDSINFO/WAITINGFORINFO`` and ask the user:

.. admonition:: Ask the user:

    Do you have a multi-monitor setup? If so, this is a configuration issue. Please reset your tablet driver's configuration and Krita's configuration (https://docs.krita.org/en/KritaFAQ.html#resetting-krita-configuration). If you have a single-monitor setup, then please calibrate your tablet.

If the user checks back and tells us the problems are solved, mark the bug as ``RESOLVED/UPSTREAM``.

Other tablet issues
~~~~~~~~~~~~~~~~~~~

Often, the user will tell you that their tablet will work perfectly with another application. This is not relevant.

.. admonition:: Tell the user:

    Windows tablet drivers often have a special code for different applications. Whether an application works or not depends on whether the programmers have tested their driver with an application or not. Tablet issues are almost always caused by the drivers being broken.

Krita lags
~~~~~~~~~~

The word "lag" is meaningless. Complaints about "lag" are not bug reports. However, we should help the complainer.

Mark the bug as ``NEEDSINFO/WAITINGFORINFO`` and ask the user:

.. admonition:: Ask the user:

 Have you enabled the stabilizer? Check the tool options panel for the freehand tool. Also check the other possibilities mentioned here: https://docs.krita.org/en/KritaFAQ.html#krita-is-slow

I cannot paint at all, in a particular document
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

The user probably created, accidentally, a tiny selection, and saved that with the document. Mark as ``NEEDSINFO/WAITINGFORINFO`` and ask them:

.. admonition:: Ask the user:

     Do you have a selection saved with that document? Use select/deselect on your image and check whether you can paint again. If not, please attach the ``.kra`` document to this bug report or make it available.
