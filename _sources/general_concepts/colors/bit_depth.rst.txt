.. meta::
   :description:
        Bit depth in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Color, Color Bit Depth, Bit Depth, Deep Color, Indexed Color, Real Color, Floating Point Color, Color Channels
.. _bit_depth:

=========
Bit Depth
=========

Bit depth basically refers to the amount of working memory per pixel you reserve for an image.

Like how having a A2 paper in real life can allow for much more detail in the end drawing, it does take up more of your desk than a simple A4 paper.

However, this does not just refer to the size of the image, but also how much precision you need per color.

To illustrate this, I'll briefly talk about something that is not even available in Krita:

Indexed Color
---------------

In older programs, the computer would have per image, a palette that contains a number for each color. The palette size is defined in bits, because the computer can only store data in bit-sizes.

 
.. figure:: /images/color_category/Kiki_lowbit.png 
   :figwidth: 453
   :align: center


1bit
    Only two colors in total, usually black and white.
4bit (16 colors)
    16 colors in total, these are famous as many early games were presented in this color palette.
8bit
    256 colors in total. 8bit images are commonly used in games to save on memory for textures and sprites.

However, this is not available in Krita. Krita instead works with channels, and counts how many colors per channel you need (described in terms of ''bits per channel''). This is called 'real color'.

Real Color
----------

.. figure:: /images/color_category/Rgbcolorcube_3.png
   :figwidth: 800
   :align: center

   1, 2, and 3bit per channel don't actually exist in any graphics application out there, however, by imagining them, we can imagine how each bit affects the precision: Usually, each bit subdivides each section in the color cube meaning precision becomes a power of 2 bigger than the previous cube.

4bit per channel (not supported by Krita)
    Also known as Hi-Color, or 16bit color total. A bit of an old system, and not used outside of specific displays.
8bit per channel
    Also known as "True Color", "Millions of colors" or "24bit/32bit". The standard for many screens, and the lowest bit-depth Krita can handle.
16bit per channel
    One step up from 8bit, 16bit per channel allows for colors that can't be displayed by the screen. However, due to this, you are more likely to have smoother gradients. Sometimes known as "Deep Color". This color depth type doesn't have negative values possible, so it is 16bit precision, meaning that you have 65536 values per channel.
16bit float
    Similar to 16bit, but with more range and less precision. Where 16bit only allows coordinates like [1, 4, 3], 16bit float has coordinates like [0.15, 0.70, 0.3759], with [1.0,1.0,1.0] representing white. Because of the differences between floating point and integer type variables, and because Scene-referred imaging allows for negative values, you have about 10-11bits of precision per channel in 16 bit floating point compared to 16 bit in 16 bit int (this is 2048 values per channel in the 0-1 range). Required for HDR/Scene referred images, and often known as 'half floating point'.
32bit float
    Similar to 16bit float but with even higher precision. The native color depth of OpenColor IO, and thus faster than 16bit float in HDR images, if not heavier. Because of the nature of floating point type variables, 32bit float is roughly equal to 23-24 bits of precision per channel (16777216 values per channel in the 0-1 range), but with a much wider range (it can go far above 1), necessary for HDR/Scene-referred values. It is also known as 'single floating point'.


This is important if you have a working color space that is larger than your device space: At the least, if you do not want color banding.

And while you can attempt to create all your images a 32bit float, this will quickly take up your RAM. Therefore, it's important to consider which bit depth you will use for what kind of image.
