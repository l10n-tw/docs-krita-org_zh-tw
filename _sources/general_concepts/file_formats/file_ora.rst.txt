.. meta::
   :description:
        The Open Raster Archive file format as exported by Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: *.ora, ORA, Open Raster Archive
.. _file_ora:

======
\*.ora
======

``.ora``, or the Open Raster format, is an interchange format. It was designed to replace :ref:`file_psd` as an interchange format, as the latter isn't meant for that. Like :ref:`file_kra` it is loosely based on the Open Document structure, thus a ZIP file with a bunch of XMLs and PNGs, but where Krita's internal file format can sometimes have fully binary chunks, ``.ora`` saves its layers as :ref:`file_png` making it fully open and easy to support.

As an interchange format, it can be expected to be heavy and isn't meant for uploading to the internet.

.. seealso::

    `Open Raster Specification <https://www.openraster.org/>`_
