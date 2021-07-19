.. meta::
   :description:
        The CSV file format as exported by Krita.

.. metadata-placeholder

   :authors: - Lazlo Fazekas
   :license: GNU free documentation license 1.3 or later.

.. index:: *.csv, CSV, Comma Separated Values
.. _file_csv:

======
\*.csv
======

``.csv`` is the abbreviation for Comma Separated Values. It is an open, plain text spreadsheet format. Since the CSV format is a plain text itself, it is possible to use a spreadsheet program or even a text editor to edit the ``*.csv`` file.

Krita supports the CSV version used by TVPaint, to transfer layered animation between these two softwares and probably with others, like Blender. This is not an image sequence format, so use the document loading and saving functions in Krita instead of the :guilabel:`Import animation frames` and :guilabel:`Render Animation` menu items.

The format consists of a text file with ``.csv`` extension, together with a folder under the same name and a ``.frames`` extension. The CSV file and the folder must be on the same path location. The text file contains the parameters for the scene, like the field resolution and frame rate, and also contains the exposure sheet for the layers. The folder contains :ref:`file_png` picture files. Unlike image sequences, a key frame instance is only a single file and the exposure sheet links it to one or more frames on the timeline.

.. figure:: /images/Csv_spreadsheet.png
   :align: center

   A ``.csv`` file as a spreadsheet in :program:`LibreOffice Calc`.

Krita can both export and import this format. It is recommended to use 8bit sRGB color space because that's the only color space for :program:`TVPaint`. Layer groups and layer masks are also not supported.

TVPaint can only export this format by itself. In :program:`TVPaint 11`, use the :guilabel:`Export to...` option of the :guilabel:`File` menu, and on the upcoming :guilabel:`Export footage` window, use the :guilabel:`Clip: Layers structure` tab.

.. figure:: /images/Csv_tvp_csvexport.png
   :align: center

   Exporting into ``.csv`` in TVPaint.

To import this format back into TVPaint there is a George language script extension. See the "Packs, Plugins, Third party" section on the TVPaint community forum for more details and also if you need support for other softwares. Moho/Anime Studio and Blender also have plugins to import this format.


.. seealso::

    - `CSV import script for TVPaint <https://forum.tvpaint.com/viewtopic.php?f=26&t=9759>`_.
    - `CSV import script for Moho/Anime Studio <https://forum.tvpaint.com/viewtopic.php?f=26&t=10050>`_.
    - `CSV import script for Blender <https://developer.blender.org/T47462>`_.
