.. meta::
   :description lang=en:
        Krita's settings and preferences options.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
             - Michael Abrahams
   :license: GNU free documentation license 1.3 or later.
   
.. _preferences:

===========
Preferences
=========== 

Krita is highly customizable and makes many settings and options available to customize through the Preferences area. These settings are accessed by going to :menuselection:`Settings --> Configure Krita...` menu item. On macOS, the settings are under the topleft menu area, as you would expect of any program under macOS.

Krita's preferences are saved in the file ``kritarc``. This file is located in ``%LOCALAPPDATA%\`` on Windows, ``~/.config`` on Linux, and ``~/Library/Preferences`` on macOS. If you would like to back up your custom settings or synchronize them from one computer to another, you can just copy this file. It even works across platforms!

If you have installed Krita through the Windows store, the kritarc file will be in another location:

:file:`%LOCALAPPDATA%\\Packages\\49800Krita_{RANDOM STRING}\\LocalCache\\Local\\kritarc`


Custom shortcuts are saved in a separate file ``kritashortcutsrc`` which can also be backed up in the same way. This is discussed further in the shortcuts section.

.. toctree::
   :maxdepth: 1
   :glob:
   
   preferences/*
