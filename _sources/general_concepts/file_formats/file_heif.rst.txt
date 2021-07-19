.. meta::
   :description property=og\:description:
        The HEIF and AVIF file formats in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: ! High Efficiency Image Format, ! AV1 Image Format, ! \*.heif, ! \*.avif, ! \*.heic, hdr, AVIF, HEIF, HEIC
.. _file_heif:
.. _file_avif:

===================
\*.heif and \*.avif
===================

The High Efficiency Image Format (``*.heif``, ``*.heic``), and it's cousin, AV1 Image Format (``*.avif``) are formats which use video codecs (``H264``, ``H265`` and ``AV1``) to store their data. They are more and more popular with mobile phones as their default image file format, and ``*.avif`` is to be natively supported by all web browsers within the next few years.

Krita supports saving :ref:`model_gray` and :ref:`model_rgb` images to these formats. Furthermore, it can save 8 bit, will save 16 bit integer as 12 bit, and can save 16 and 32 bit float as 12 bit, with an HDR color space.

Compared to :ref:`file_png` and :ref:`file_jpeg`, these formats tend to smooth out textures to make them easier to compress, and therefore great for sharp images with a lot of smooth gradients. Images with a lot of texture or fine details may lose said detail (for example, cat whiskers seem to get lost), and thus :ref:`file_jpeg` might be better suited.

Import Options
--------------

Krita supports all the color spaces that these formats can handle, and will convert in the case of the few formats it cannot handle. This has been automated for the most part, with Krita selecting or generating the appropriate ICC profile where necessary.

Images that are HDR images, so the ones that have the Perceptual Quantizer, Hybrid Log Gamma or SMPTE ST 428 transfer functions, will be converted to a linear 32 bit floating point version of that color space.

However, Hybrid Log Gamma needs an extra conversion step inbetween, as Krita currently does not support sending HLG data to the display. For this :dfn:`Scene Linear to Display Linear` conversion, it would need to know your :dfn:`display gamma` and :dfn:`maximum brightness`. The default brightness and gamma values are the ones used for a HLG to PQ conversion, and probably your best bet when your monitor is able to display Krita's HDR. When exporting this image with HLG, it's recommended to reuse the same values for the reverse OOTF there.

Apply Hybrid Log Gamma OOTF
    Whether to apply the extra conversion step. This will convert scene linear values to display linear, and thus it's necessity is completely dependant on your HDR workflow. If in doubt, apply.
Gamma
    Approximate display gamma. Default value is 1.2 for conversion to PQ.
Brightness
    Maximum display brightness. Default value is 10.000 cd/m² for conversion to PQ.

Export Options
--------------

Lossless
    Use the lossless encoding options. Disables the :guilabel:`Lossy Advanced Settings`.
Lossy Advanced Settings
    Quality
        Determines how much the encoder should prioritize quality over compression. Higher values look better, but lower values have a lower file size.
Chroma
    Chroma Subsampling settings. Humans are more sensitive to the brightness of an image than it's colorfulness, so halving the colors of an image can be a very useful way to compress an image. This is best used with images that have few sharp contrasts, as that is where the reduced resolution is most obvious.

    420
        The brightness of the image will be at full resolution, while the colorfulness will be halved in both dimensions.
    422
        The brightness of the image will be at full resolution, while the colorfulness will be halved horizontally.
    444
        Both brightness and colorfulness of the image will be at full resolution.

Conversion Settings
~~~~~~~~~~~~~~~~~~~

These only appear on floating point images, and are used to store the images with values above 1.0 as HDR images by encoding them with a specific transfer function.

Space:
    Encoding the right color space depends on how compatible the current color space is with the ``ITU H.273 CICP`` values [ituh273]_, as this is how ``PQ``, ``HLG`` and ``SMPTE ST 428`` are stored. ``Rec 2100 PQ`` or ``Rec 2100 HLG`` are the expected values for HDR images [rec2100]_.
    
    In all cases when we store ``CICP`` values instead of an ICC profile, the Matrix Coefficient value will be set to 0 (Identity Matrix), as Krita does no conversion to ``YUV``.

    Rec 2100 PQ
        Image will first be converted to Rec 2020 linear. Then encoded with the Perceptual Quantizer function (also known as ``SMPTE 2048`` curve). This is the most common HDR encoding, and useful for images where the relative brightness is important.
    Rec 2100 HLG
        Image will first be converted to Rec 2020 linear. Then encoded with the Hybrid Log Gamma function, and finally, if chosen, the reverse Hybrid Log Gamma OOTF is applied. This is useful for images where the final display may not understand PQ.
    Keep Colorants, encode PQ
        Shows only for images with an ``ITU H.273`` compatible color space [ituh273]_. The image will be linearized first, and then encoded with a perceptual quantizer curve. 
    Keep Colorants, encode HLG
        Shows only for images with an ``ITU H.273`` compatible color space [ituh273]_. The image will be linearized first, and then encoded with a Hybrid Log Gamma curve. Finally, the reverse HLG OOTF may be applied.
    Keep Colorants, encode SMPTE ST 428
        Shows only for images with an ``ITU H.273`` compatible color space [ituh273]_. The image will be linearized first, and then encoded with ``SMPTE ST 428``. Krita always opens images like these as linear floating point, this option is there to save them as ``ST 428`` again.
    No Changes, Clip
        The image will be converted plainly to 12bit integer, and values that are out of bounds are clipped, the ICC profile will be embedded.
Apply reverse Hybrid Log Gamma OOTF
    Whether to apply the extra conversion step. It's necessity is completely dependant on your HDR workflow. If in doubt, apply, always apply when you've imported an image with OOTF option enabled.
Gamma
    Approximate display gamma. Default value is 1.2 for conversion to PQ.
Brightness
    Maximum display brightness. Default value is 10.000 cd/m² for conversion to PQ.

.. seealso::

    - `High Efficiency Image File Format on Wikipedia <https://en.wikipedia.org/wiki/High_Efficiency_Image_File_Format>`_
    
    .. [ituh273] `H.273 : Coding-independent code points for video signal type identification <https://www.itu.int/rec/T-REC-H.273/en>`_
    .. [rec2100]
       - `BT.2100 : Image parameter values for high dynamic range television for use in production and international programme exchange <https://www.itu.int/rec/R-REC-BT.2100-2-201807-I/en>`_
       - `Perceptual Quantizer on Wikipedia <https://en.wikipedia.org/wiki/Perceptual_quantizer>`_
       - `Hybrid Log Gamma on Wikipedia <https://en.wikipedia.org/wiki/Hybrid_log%E2%80%93gamma>`_
