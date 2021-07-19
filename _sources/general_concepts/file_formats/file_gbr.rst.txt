.. meta::
   :description:
        The GIMP Brush file format as used in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: *.gbr, GBR, Gimp Brush
.. _file_gbr:

======
\*.gbr
======

The GIMP brush format. Krita can open, save and use these files as :ref:`predefined brushes <predefined_brush_tip>`.

There's three things that you can decide upon when exporting a ``*.gbr``:

Name
    This name is different from the file name, and will be shown inside Krita as the name of the brush.
Spacing
    This sets the default spacing.
Use color as mask
    This'll turn the darkest values of the image as the ones that paint, and the whitest as transparent. Untick this if you are using colored images for the brush.

GBR brushes are otherwise unremarkable, and limited to 8bit color precision.
