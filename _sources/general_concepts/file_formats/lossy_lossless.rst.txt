.. meta::
   :description:
        The difference between lossy and lossless compression.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: lossy, lossless, compression

.. _lossy_compression:
.. _lossless_compression:

====================================
Lossy and Lossless Image Compression
====================================


When we compress a file, we do this because we want to temporarily make it smaller (like for sending over email), or we want to permanently make it smaller (like for showing images on the internet).

*Lossless* compression techniques are for when we want to *temporarily* reduce information. As the name implies, they compress without losing information. In text, the use of abbreviations is a good example of a lossless compression technique. Everyone knows 'etc.' expands to 'etcetera', meaning that you can half the 8 character long 'etcetera' to the four character long 'etc.'.

Within image formats, examples of such compression is by for example 'indexed' color, where we make a list of available colors in an image, and then assign a single number to them. Then, when describing the pixels, we only write down said number, so that we don't need to write the color definition over and over.

*Lossy* compression techniques are for when we want to *permanently* reduce the file size of an image. This is necessary for final products where having a small filesize is preferable such as a website. That the image will not be edited anymore after this allows for the use of the context of a pixel to be taken into account when compressing, meaning that we can rely on psychological and statistical tricks.

One of the primary things JPEG for example does is chroma sub-sampling, that is, to split up the image into a grayscale and two color versions (one containing all red-green contrast and the other containing all blue-yellow contrast), and then it makes the latter two versions smaller. This works because humans are much more sensitive to differences in lightness than we are to differences in hue and saturation.

Another thing it does is to use cosine waves to describe contrasts in an image. What this means is that JPEG and other lossy formats using this are *very good at describing gradients, but not very good at describing sharp contrasts*.

Conversely, lossless image compression techniques are *really good at describing images with few colors thus sharp contrasts, but are not good to compress images with a lot of gradients*.

Another big difference between lossy and lossless images is that lossy file formats will degrade if you re-encode them, that is, if you load a JPEG into Krita edit a little, resave, edit a little, resave, each subsequent save will lose some data. This is a fundamental part of lossy image compression, and the primary reason we use working files.

.. seealso::

    If you're interested in different compression techniques, `Wikipedia's page(s) on image compression <https://en.wikipedia.org/wiki/Image_compression>`_ are very good, if not a little technical.
