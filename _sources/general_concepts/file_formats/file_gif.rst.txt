.. meta::
   :description:
        The GIF file format in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: *.gif, GIF
.. _file_gif:

======
\*.gif
======

``.gif`` is a file format mostly known for the fact that it can save animations. It's a fairly old format, and it does its compression by :ref:`indexing <bit_depth>` the colors to a maximum of 256 colors per frame. Because we can technically design an image for 256 colors and are always able save over an edited GIF without any kind of extra degradation, this is a :ref:`lossless <lossless_compression>` compression technique.

This means that it can handle most grayscale images just fine and without losing any visible quality. But for color images that don't animate it might be better to use :ref:`file_jpg` or :ref:`file_png`.
