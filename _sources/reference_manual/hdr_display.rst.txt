.. meta::
   :description:
        How to configure Krita for HDR displays.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: HDR, High Dynamic Range, HDR display

.. _hdr_display:

HDR Display
-----------

.. versionadded:: 4.2

.. Note::

    Currently only available on Windows.

Since 4.2 Krita can not just edit high bitdepths images, but also render them on screen in a way that an HDR capable setup can show them as HDR images. HDR images, to put it simply, are images with really bright colors. They do this by having a very large range of colors available, 16 bit and higher, and to understand the upper range of the available colors as brighter than the brightest white most screens can show. HDR screens, in turn, are screens which can show brighter colors than most screens can show, and can thus show the super-bright colors in these HDR images. This allows for images where bright things, like fire, sunsets, magic, look really spectacular! It also shows more subtle shadows and has a better contrast in lower color values, but this requires a sharper eye.

Configuring HDR
~~~~~~~~~~~~~~~

Krita cannot show HDR with any given monitor, you will need an HDR capable setup. HDR capable setups are screens which can show more than 100 nits, preferably a value like 1000 and can show the rec 2020 PQ space. You will need to have the appropriate display cable(otherwise the values are just turned into regular SDR) and a graphics card which supports HDR, as well as suitable drivers. You then also need to configure the system settings for HDR.

If you can confirm that the system understands your setup as an HDR setup, you can continue your :ref:`configuration in Krita<hdr_display_settings>`, in :menuselection:`Settings --> Configure Krita... --> Display`. There, you need to select the preferred surface, which should be as close to the display format as possible. Then restart Krita.

Painting in HDR
~~~~~~~~~~~~~~~

To create a proper HDR image, you will need to make a canvas using a profile with rec 2020 gamut and a linear TRC. :guilabel:`Rec2020-elle-V4-g10.icc` is the one we ship by default.

HDR images are standardized to use the Rec2020 gamut, and the PQ TRC. However, a linear TRC is easier to edit images in, so we don't convert to PQ until we're satisfied with our image.

For painting in this new exciting color space, check the :ref:`scene_linear_painting` page, which covers things like selecting colors, gotchas, which filters work and cool workflows.

Exporting HDR
~~~~~~~~~~~~~

Now for saving and loading.

The KRA file format can save the floating point image just fine, and is thus a good working file format.

For sharing with other image editors, :ref:`file_exr` is recommended. For sharing with the web we currently only have :ref:`HDR PNG export <file_png>`, but there's currently very little support for this standard. In the future we hope to see heif and avif support.

For exporting HDR animations, we support saving HDR to the new codec for mp4 and mkv: H.265. To use these options...

* Get a version of FFmpeg that supports H.265.
* Have an animation open.
* :menuselection:`File --> Render Animation`.
* Select :guilabel:`Video`.
* Select for :guilabel:`Render as`, 'MPEG-4 video' or 'Matroska'.
* Press the configure button next to the file format dropdown.
* Select at the top 'H.265, MPEG-H Part 2 (HEVC)'.
* Select for the :guilabel:`Profile`, 'main10 (HDR)'.
* :guilabel:`HDR Mode` should now enable. Toggle it.
* click :guilabel:`HDR Metadata` to configure the HDR metadata (options described below).
* finally, when done, click 'OK'.

HDR Metadata
~~~~~~~~~~~~

This is in the render animation screen. It configures the SMPTE ST.2086 or Master Display Color Volumes metadata and is required for the HDR video to be transferred properly to the screen by video players and the cable.

Master Display
    The colorspace characteristics of the display on for which your image was made, typically also the display that you used to paint the image with. There are two default values for common display color spaces, and a custom value, which will enable the :guilabel:`Display` options.
Display
    The precise colorspace characteristics for the display for which your image was made. If you do not have custom selected for :guilabel:`Master Display`, these are disabled as we can use predetermined values.
    
        Red/Green/Blue Primary
            The xyY x and xyY y value of the three chromacities of your screen. These define the gamut.
        White Point
            The xyY x and xyY y value of the white point of your screen, this defines what is considered 'neutral grey'.
        Min Luminance
            The darkest value your screen can show in nits.
        Max Luminance
            The brightest value your screen can show in nits.

MaxCLL
    The value of the brightest pixel of your animation in nits.
MaxFALL
    The average 'brightest value' of the whole animation.
            
