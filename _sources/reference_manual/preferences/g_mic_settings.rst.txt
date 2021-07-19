.. meta::
   :description:
        How to setup G'Mic in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Preferences, Settings, Filters, G'Mic
.. _g_mic_settings:

==============
G'Mic Settings
==============

G'Mic or GREYC's Magic for Image Computing is an opensource filter framework. The G'Mic plugin for Krita exists only on Windows and Linux.

Krita has had G'Mic integration for a long time, but this is its most stable incarnation. On Windows, the plugin is included in the installer and Krita will find it automatically. On Linux, we are making an AppImage available for download.

You set it up as following:

#. Download the gmic-krita AppImage.
#. Make it executable.
#. Go to :menuselection:`Settings --> Configure Krita... --> G'Mic plugin` and set G'MIC to the filepath there.
#. Then restart Krita. 


Updates to G'Mic
----------------

There is a refresh button at the bottom of the G'Mic window that will update your version. You will need an internet connection to download the latest version.

If you have issues downloading the update through the plugin, you can also do it manually. If you are trying to update and get an error, copy the URL that is displayed in the error dialog. It will be to a ".gmic" file. Download it from from your web browser and place the file in one of the following directories. 

- Windows : %APPDATA%/gmic/update2XX.gmic
- Linux : $HOME/.config/gmic/update2XX.gmic

Load up the G'Mic plugin and press the refresh button for the version to update.

