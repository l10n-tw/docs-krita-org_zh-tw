.. meta::
   :description:
        The PBM, PGM and PPM file formats as exported by Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: *.pbm, *.pgm, *.ppm, PBM, PGM, PPM 
.. _file_pbm:
.. _file_pgm:
.. _file_ppm:

=========================
\*.pbm, \*.pgm and \*.ppm
=========================
``.pbm``, ``.pgm`` and ``.ppm`` are a series of file-formats with a similar logic to them. They are designed to save images in a way that the result can be read as an ASCII file, from back when email clients couldn't read images reliably.

They are very old file formats, and not used outside of very specialized usecases, such as embedding images inside code.

.pbm
    One-bit and can only show strict black and white.
.pgm
    Can show 255 values of gray (8bit).
.ppm
    Can show 8bit rgb values.
