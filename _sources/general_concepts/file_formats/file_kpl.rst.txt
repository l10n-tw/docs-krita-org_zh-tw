.. meta::
   :description property=og\:description:
        The Krita Palette file format.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: *.kpl, KPL, Krita Palette
.. _file_kpl:

======
\*.kpl
======

Since 4.0, Krita has a new palette file-format that can handle colors that are wide gamut, RGB, CMYK, XYZ, GRAY, or LAB, and can be of any of the available bitdepths, as well as groups. These are Krita Palettes, or ``*.kpl``.

``*.kpl`` files are ZIP files, with two XMLs and ICC profiles inside. The *colorset.xml* file contains the swatches as ColorSetEntry and Groups as Group. The *profiles.xml* file contains a list of profiles, and the ICC profiles themselves are embedded to ensure compatibility over different computers.

A technical description in English can be found in :ref:`here <kpl_format_definition>`.
