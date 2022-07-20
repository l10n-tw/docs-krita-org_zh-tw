.. meta::
   :description:
        The WebP file format in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: *.webp, WebP
.. _file_webp:

=======
\*.webp
=======

WebP is a file format based on the `RIFF container specification <https://developers.google.com/speed/webp/docs/riff_container>`_ that, like :ref:`file_heif`, it builds upon a video codec (`VP8 <https://developers.google.com/speed/webp/docs/compression#lossy_webp>`_) to support :ref:`lossy_compression`. WebP tends to be largely used for websites, though not all websites support uploading such files. If you self-host you can investigate whether WebP is an improvement over :ref:`file_jpeg` or :ref:`file_png`. However, it is not very widely supported by image editors, so if you are doing collaboration with other artists, it may be better to use a different file format.

:program:`Krita` has supported simple WebP export for a while, but since 5.1 it supports all the export options offered by `libwebp <https://chromium.googlesource.com/webm/libwebp>`_.

Export Options:
---------------

Instead of making you responsible for the precise settings, the WebP exporter will try out different techniques to compress better. You give a goal (a given quality or a certain file size) to aim for, and it will try its best to reach that goal. To do this, it may actually try to redo a given step of the encoding process several times. In the end, what you will have to choose is whether you want a high quality result at the cost of a slow export, or a quick export at the cost of quality.

General:
~~~~~~~~

Preset:
    WebP offers some presets for given a given type of photo. For stylized images, use :guilabel:`Line Drawing`, for painterly images, use :guilabel:`Portrait` or :guilabel:`Outdoor Photo`.
Lossless Compression:
    Use the :ref:`lossless compression mode <lossless_compression>` mode, this is a slightly different algorithm, which is heavier but gives better results for sharp contrasts.
Quality:
    Slider for quality.
    
    With :guilabel:`Lossless Compression`, 0% means the library will use the fewest amount of algorithmic tricks to reduce file size. This means fast saving times, at the expense of larger files. Conversely, 100% means all algorithmic tricks will be used, leading to the smallest file size, but saving will take longer. The first is best for a situation where speed is more important than size, such as files you share via USB. The latter is useful for situations where the file size can become a problem, such as serving it over the Internet.

    Without :guilabel:`Lossless Compression`, image information considered redundant will be removed, rather than compressed. This means that at 0%, the most information wll be lost and thus the smallest file size is achieved. This also reduces the overall quality. Conversely, 100% will remove the least amount of image information and thus maintain quality at the expense of a large file size.
Trade Off
    A slider that allows you to select whether saving speed is more important than quality.
Dithering:
    This enables dithering, which allows storing fewer colors while still keeping good gradients.

Advanced
~~~~~~~~

SNS Strength:
    Specifies the strength of the Spatial Noise Shaping algorithm, which tries to see if parts of the image can be better compressed than other parts. 
Filter Strength:
    Strength of the deblocking filter. 0% will mean there's no filtering after decoding, with increasing filter strength the image will appear smoother.
Filter Sharpness:
    Defines the sharpness of the deblocking filter, with 0 being the sharpest and 7 being the least sharp.
Filter Type:
    Type of deblocking filter, options are :guilabel:`Strong` and :guilabel:`Simple`.
Alpha Plane Compression:
    Whether to losslessly compress the alpha channel (Lossless) or outright discard it (None).
    None
Predictive Filtering for Alpha Plane:
    Whether to use predictive filtering for the alpha/transparency.:guilabel:`Best` will try all potential predictive filter modes before deciding which one to use, making it slower than :guilabel:`Fast`, which just makes a guess and selects that.
Alpha Plane Quality:
    Compression quality for the alpha channel. 0% means smallest size, 100% means no compression. Only with :guilabel:`Alpha Plane Compression` set to Lossless.
Show Compressed:
    Tells libwebp to skip the in-loop filtering step. May adversely affect the quality of the end file.
Multithreaded Encoding:
    Use multithreading for encoding if possible.
Reduce Memory Usage:
    Try to reduce memory usage at the cost of speed.
Exact:
    Preserve RGB values in transparent areas instead of defaulting them to transparent black.
Use Sharp YUV:
    Whether to use the slower, but more accurate, RGB to YUV conversion.

Lossy Compression
`````````````````
The following options only apply if :guilabel:`Lossless Compression` is off.

Target Size:
    Specify the amount of bytes to aim for.
Target PSNR:
    PSNR means `Peak Signal to Noise Ratio <https://en.wikipedia.org/wiki/Peak_signal-to-noise_ratio_>`, and indicates how much noise the image has. Higher values mean less noise is accepted. 
Segments:
    How many segments the VP8 video codec can divide the image into. VP8 accepts between 1 and 4 segments.
Partitions:
    Sets how many partitions can the VP8 codec use for storing decompression information. Must be between 0 and 3. Default is 0 to make decoding easier.
Auto Adjust Filter Stretch:
    The encoder will spend some time tuning and selecting the best filter options before encoding.
Entropy Passes:
     Number of passes to do for selecting the best option between target size and target PSNR.
Emulate JPEG Size:
    The encoder will try to match the size of a jpeg of similar dimensions.
Minimum Quality:
    Used with 'entropy passes', the lowest allowed quality for the image.
Maximum Quality:
    Used with 'entropy passes', the highest allowed quality for the image.
Preprocessing Filter:
    Whether or not to add :guilabel:`Pseudo Random Dithering` to the image before converting RGB to YUV.


Lossless compression
````````````````````
The following options only work with :guilabel:`Lossless Compression` on.

Partition Limit:
    Limit how big a given segment is in bytes. The higher this is, the less possible information is stored per segment.
Near Lossless:
    The encoder is able to minimally adjust pixel-values so they compress better in lossless compression mode. This enables this feature.
    Automatically triggers :guilabel:`Lossless Compression`.


.. seealso::
    https://developers.google.com/speed/webp/docs/compression
