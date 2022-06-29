.. meta::
   :description:
        The JPEG XL file format in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Alvin Wong
   :license: GNU free documentation license 1.3 or later.

.. index:: *.jxl, JPEG XL, JPEG-XL, JPEGXL, JXL
.. _file_jxl:

======
\*.jxl
======

JPEG XL (``.jxl``) is a new royalty-free image file format. It supports :ref:`lossy compression mode <lossless_compression>` designed for photographs similar to the :ref:`JPEG <file_jpeg>` file format, and also :ref:`lossless compression mode <lossless_compression>` similar to formats like :ref:`PNG <file_png>`. In addition, it also supports saving animations with multiple frames like :ref:`GIF <file_gif>`.

When deciding between lossy and lossless compression modes, the same advice for :ref:`JPEG <file_jpeg>` and :ref:`PNG <file_png>` applies. For images with a lot of gradients, like full scale paintings, lossy compression may work very well to produce small files with very little visual quality loss. But for images with a lot of sharp contrasts, like text and comic book styles, lossless compression is usually the better choice.

For JPEG XL files using lossy compression, it is not advised to save over the same file multiple times. The lossy compression will cause the file to reduce in quality each time you save it. This is a fundamental problem with lossy compression methods. Instead you should use the lossless compression mode, or a working file format while you are working on the image.

It is possible to losslessly transcode JPEG images into JPEG XL. Transcoding preserves the already-lossy compression data from the original JPEG image without any quality loss caused by re-encoding, while making the file size smaller than the original. To do this, you need to use specialized tools, for example the :program:`cjxl` command line tool from `libjxl <https://github.com/libjxl/libjxl>`_, to perform the conversion. Beware that you *cannot* do this by opening the JPEG image in Krita and re-exporting it into JPEG XL. Krita always exports files from the raw pixel data, therefore this does *not* have the same effect as transcoding directly from JPEG to JPEG XL.

Exporting animations from Krita as JPEG XL is supported, though this flattens all layers in the image. To export JPEG XL animations, use :term:`Export...` from the :ref:`file_menu` and then saving or exporting to a ``.jxl`` file. Make sure to enable :guilabel:`Save as animated JPEG XL` in the export options. This is different from :ref:`render_animation` in that it does not use FFmpeg.

.. seealso::

    - `JPEG XL official website <https://jpeg.org/jpegxl/>`_
    - `JPEG XL community website <https://jpegxl.info/>`_
    - `libjxl -- JPEG XL reference implementation <https://github.com/libjxl/libjxl>`_
