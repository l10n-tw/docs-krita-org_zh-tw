.. meta::
   :description:
        How to get a backtrace in Krita using the dr. MinGW debugger.

.. metadata-placeholder

   :authors: - Scott Petrovic
             - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Raghavendra Kamath <raghavendr.raghu@gmail.com>
             - Alvin Wong
   :license: GNU free documentation license 1.3 or later.

.. index:: Backtrace, Debug
.. _dr_minw:

==================
Dr. MinGW Debugger
==================

.. note::

    The information on this page applies only to the Windows release of Krita. Usually, the %LOCALAPPDATA%\kritacrash.log log file will contain enough information for the developers to get an idea of why Krita crashed. Using the debug package is
    only needed when more precise information is needed.

Using the Debug Package
-----------------------

If you have your Krita version installed and you want to get a backtrace, it's best to download a portable version 
(either the latest release, or the one that someone told you to try, for example Krita Next or Krita Plus package). 
Alongside downloading the portable version, download the debug symbols package, too. It should be located in the same place
you download Krita. You can see which is which by checking the end of the name of the ZIP file - debug symbols package always ends with *-dbg.zip*.

* Links to the debug packages should be available on the release announcement news item on https://krita.org/, along with the release packages. You can find debug packages for any release either in https://download.kde.org/stable/krita for stable releases or in https://download.kde.org/unstable/krita for unstable releases (for example beta versions). Portable ZIP and debug ZIP are found next to each other.
* Make sure you’ve downloaded the same version of debug package for the portable package you intend to debug / get a better backtrace.
* Extract the portable Krita.
* Extract the files from the debug symbols package inside the portable Krita main directory, where the sub-directories *bin*, *lib* and *share* is located, like in the figures below:

    .. image:: /images/Mingw-dbg7zip.png
    
    .. image:: /images/Mingw-dbg7zip-dir.png

* After extracting the files, check the ``bin`` dir and make sure you see the ``.debug`` dir inside. If you don't see it, you probably extracted to the wrong place.


Getting a Backtrace
-------------------


#.
        
    When there is a crash, Krita might appear to be unresponsive for a short time, ranging from a few seconds to a few minutes, before the crash dialog appears.
    
    .. figure:: /images/Mingw-crash-screen.png
    
        An example of the crash dialog.
        
    * If Krita keeps on being unresponsive for more than a few minutes, it might actually be locked up, which may not give a backtrace. In that situation, you have to close Krita manually. Continue to follow the following instructions to check whether it was a crash or not.

#. Open Windows Explorer and type ``%LocalAppData%`` (without quotes) on the address bar and press the :kbd:`Enter` key.

    .. image:: /images/Mingw-explorer-path.png
    
#. Find the file ``kritacrash.log`` (it might appear as simply ``kritacrash`` depending on your settings.) 
#. Open the file with Notepad and scroll to the bottom, then scroll up to the first occurrence of “Error occurred on <time>” or the dashes.

    .. figure:: /images/Mingw-crash-log-start.png
    
        Start of backtrace.

    Check the time and make sure it matches the time of the crash. 
    
    .. figure:: /images/Mingw-crash-log-end.png
        
        End of backtrace.
            
    The text starting from this line to the end of the file is the most recent backtrace.
    
    * If ``kritacrash.log`` does not exist, or a backtrace with a matching time does not exist, then you don’t have a backtrace. This means Krita was very likely locked up, and a crash didn’t actually happen. In this case, make a bug report too.
    * If the backtrace looks truncated, or there is nothing after the time, it means there was a crash and the crash handler was creating the stack trace before being closed manually. In this case, try to re-trigger the crash and wait longer until the crash dialog appears.



