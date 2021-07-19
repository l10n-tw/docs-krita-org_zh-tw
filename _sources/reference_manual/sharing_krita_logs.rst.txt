.. meta::
   :description:
        How to get a Krita Usage Log, Krita's backtrace or Krita's text output.

.. metadata-placeholder

   :authors: 
                - Agata Cacko <cacko.azh@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Backtrace, Debug, Log
.. _sharing_logs:

==================
Getting Krita logs
==================


There are three different kinds of logs that Krita can produce. Depending on the issue, you might be asked for a specific one or for all of them. This page will tell you how to gather the necessary information to give to Krita developers or user supporters.


#. :ref:`Krita Usage Log <krita_usage_log>` -- this log contains your last 10 Krita sessions (one session means opening Krita). It shows times when you opened it, basic information about your system and Krita, and all files you created, opened and saved, including all auto-saves.
#. :ref:`System information <getting_system_information>` -- this is not exactly a log, but a file that contains detailed system information related to Krita.
#. :ref:`Crash log/backtrace <getting_backtrace>` -- this log is created when Krita closes incorrectly because of an internal issue. This log is often necessary to get the issue fixed if developers cannot reproduce issue (repeat steps to get the crash).
#. :ref:`Krita console output/Log Viewer output/DebugView output <krita_console_debugview>` -- this log contains anything random that Krita felt the need to report. It often contains some useful additional information that can help solving the issue.


************
Quick access
************

* Windows
    
    * :ref:`Krita Usage Log <krita_usage_log>`
    * :ref:`System information <getting_system_information>`
    * :ref:`Backtrace  <getting_backtrace_windows>`
    * Krita text output from :ref:`Log Viewer (in GUI) <krita_text_output_logviewer>`, :ref:`console <krita_text_output_console>` or :ref:`DebugView (external application) <using_debug_view>`

* Linux

    * :ref:`Krita Usage Log <krita_usage_log>`
    * :ref:`System information <getting_system_information>`
    * :ref:`Backtrace  <getting_backtrace_linux>`
    * Krita text output from :ref:`Log Viewer (in GUI) <krita_text_output_logviewer>` or :ref:`console <krita_text_output_console>`

* macOS

    * :ref:`Krita Usage Log <krita_usage_log>`
    * :ref:`System information <getting_system_information>`
    * :ref:`Backtrace  <getting_backtrace_mac>`
    * Krita text output from :ref:`Log Viewer (in GUI) <krita_text_output_logviewer>` or :ref:`console <krita_text_output_console>`




.. _krita_usage_log:

***************
Krita Usage Log
***************

Through GUI
===========


The easiest way to get Krita Usage Log is through Krita's GUI. Go to  :menuselection:`Help --> Show Krita Log for bug reports`. A new dialog will open, showing the content of the log.


From the file system
====================

Sometimes however it is not possible to use Krita's GUI, for example when it doesn't even open. Since logs are regular text files, you can get them from your file system by yourself.

The file is called :file:`krita.log`. Location of the file:

    Linux
        :file:`$HOME/.local/share/krita.log`
    Windows
        :file:`%LOCALAPPDATA%\\krita.log`
    macOS
        :file:`$HOME/Library/Application Support/krita.log`

.. note::

    In Windows you can simply paste this path into the Windows Explorer's search box, on the top bar, and it will find the file for you.



.. _getting_system_information:

***********************************
System information related to Krita
***********************************

Through GUI
===========


The easiest way to get system information related to Krita is through Krita's GUI. Go to  :menuselection:`Help --> Show system information for bug reports`. A new dialog will open, showing the content.


From the file system
====================

Sometimes however it is not possible to use Krita's GUI, for example when it doesn't even open. Since logs are regular text files, you can get them from your file system by yourself.

The file is called :file:`krita-sysinfo.log`. Location of the file:

    Linux
        :file:`$HOME/.local/share/krita-sysinfo.log`
    Windows
        :file:`%LOCALAPPDATA%\\krita-sysinfo.log`
    macOS
        :file:`$HOME/Library/Application Support/krita-sysinfo.log`

.. note::
    
    In Windows you can simply paste this path into the file browser textbox on the top bar and it will find you the file.

.. _getting_backtrace:

***********************
Crash log and backtrace
***********************

Location and the way to get a backtrace is different on all systems.


.. _getting_backtrace_windows:

Windows
=======

Usually, it is sufficient to share the content of :menuselection:`Help --> Show Krita Log for bug reports` as it contains the backtrace.

If you cannot open Krita because it crashes on startup, please provide the :file:`%LOCALAPPDATA%\\kritacrash.log`. Sometimes more detailed information is needed, then you will be asked to closely follow :ref:`Dr. Mingw debugger <dr_minw>` guide.

.. _getting_backtrace_linux:

Linux
=====

On Linux, there are five ways of installing Krita.

    * Using distribution packages
    * Building Krita yourself from source
    * Using a snap package
    * Using a flatpak package
    * Using the official AppImage
    
Only distribution packages and built-from-source can produce usable crash logs/backtraces. For distribution packages, you will need to install the corresponding debug or dbg packages; the method for that is different from distribution to distribution. If you use distribution packages and the KDE Plasma Desktop, a crash dialog will be shown that has the backtrace in the "Developer" tab. 

Otherwise, you have to use :literal:`gdb` in a terminal window.

#. Open Krita in :literal:`gdb`:

    .. code:: bash
    
        # if you have Krita installed from repositories, you may need to only write 'gdb krita'
        # if not, write the path to the executable file
        gdb path/to/krita

#. Disable pagination:

    .. code::
    
        set pagination off

#. Run Krita:

    .. code::
    
        run

#. Make it crash.
#. Get the short backtrace:

    .. code::
    
        thread apply all bt
        
#. Get the long backtrace:

    .. code::
    
        thread apply all bt full
        
#. Short and long backtraces save to separate text files.
#. From the short backtrace, it's recommended to cut out all threads that are identical to some others or don't seem to hold any additional information. 

    If you feel like you know which part of the backtrace is the most important (it's usually the longest thread), then cut it out and put this fragment in the bug report in a comment. Both backtraces still will be needed: attach them to the bug report as well.

    If you prefer not to make this decision, just attach both files with backtraces to the bug report.

.. _getting_backtrace_mac:

macOS
=====


On macOS it's recommended to use :literal:`lldb`.

#. Open Terminal.app
#. Open Krita in :literal:`lldb`:

    .. code:: bash
    
        lldb /Applications/krita.app/Contents/MacOS/krita

#. Run Krita:

    .. code::
    
        run
#. Make it crash.
#. Get the backtrace:

    .. code::
    
        thread backtrace all
        
        
#. Save the backtrace to a text file.
#. From the backtrace it's recommended to cut out all threads that are identical to some others or don't seem to hold any additional information to put into the comment (so it's easily accessible for the developer).

    If you feel like you know which part of the backtrace is the most important (it's usually the longest thread), then cut it out and put this fragment in the bug report in a comment. The full backtrace still will be needed: attach it to the bug report as well.

    If you prefer not to make this decision, just attach the file with the backtrace to the bug report.


.. _krita_console_debugview:

*******************
Krita's text output
*******************

Most of Krita's text output can be gathered using :guilabel:`Log Viewer`. The only exception are messages from when Krita is starting up, so there is no GUI yet, or when it closes or crashes so no user interaction is possible after the event.

.. _krita_text_output_logviewer:

Through GUI
===========

#. Go to :menuselection:`Settings --> Dockers --> Log Viewer`. 

#. The first button from the left enables and disables logging, so make sure it is pressed.

#. Do the thing you want to get the output of.

#. Use the third button (tooltip says: *Save the log*) to save the log to a file.

#. Attach the file to the bug report.

.. _krita_text_output_console:

From the console
================

Using the console is the most reliable way to get Krita's text output. This way is similar on macOS and Linux.

    .. versionchanged:: 5.0

        This is now also possible on Windows using the :file:`krita.com` executable.

        .. note::

            The :program:`krita.com` executable starts Krita as a command-line program with a console window. This was not available before Krita version 5.0. If you have an older version or would prefer to use the :program:`krita.exe` program without a console window, see :ref:`DebugView guide <using_debug_view>`.

#. On macOS open :program:`Terminal.app`, on Linux open your favorite terminal or console application. On Windows, open a Command Prompt by typing :code:`cmd.exe` on the Start Menu and pressing :kbd:`Enter`.

#. Write the path to the Krita executable.

    .. code:: bash
    
        # On Linux, if installed from repositories:
        krita
        # On Linux, in all other cases:
        #  (remember that if you want to reference a file from the directory
        #   you're currently in, you need to write: './krita_filename' instead of 'krita_filename'
        #   and remember that this file need to have execution rights to be executed)
        path/to/krita
    
    .. code:: bash

        # On macOS:
        /Applications/krita.app/Contents/MacOS/krita

    .. code:: bat

        REM  On Windows:
        REM  By default, cmd.exe will prefer running the .COM file over the .EXE, so
        REM  you may also leave out the .COM file extension.
        "C:\Program Files\Krita (x64)\bin\krita.com"

#. Do the thing you want to get the output of.

#. Copy the content, save to a file and attach to the bug report.


.. _using_debug_view:

From the DebugView
==================
To get the text output of Krita on Windows using the graphical program, you need an external program called :literal:`DebugView`. Compared to using the console, DebugView has the benefit of including timestamps to the log entries.


#. `Download DebugView <https://docs.microsoft.com/en-us/sysinternals/downloads/debugview>`_ if you haven't already. Click on the blue bold :guilabel:`Download DebugView` text with underline, downloading should start immediately.

#. The file you download is a .zip archive. Windows 10 has a zip archive opener already included. Just extract all of the files somewhere. You can learn more about extracing on `Windows extracting manual page <https://support.microsoft.com/en-us/help/4028088/windows-zip-and-unzip-files>`_.

#. There is a file inside the archive that is called :file:`DbgView.exe` (which you can see as :file:`DbgView`, depending on your system settings). Double-click on it.

#. Let the program run and open Krita.

#. Do things you want to get output of.

#. Switch to DebugView and copy the content. Save to a file and attach to the bug report.








