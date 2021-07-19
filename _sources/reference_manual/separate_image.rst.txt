.. meta::
   :description:
        The channel separation dialog in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Channel Separation, Separate Image

.. _separate_image:

Separate Image
--------------

The separate image dialog allows you to separate the channels of the image into layers. This is useful in game texturing workflows, as well as more advanced CMYK workflows. When confirming, :guilabel:`Separate Image` creates a series of layers for each channel. So for RGB, it will create Red, Green and Blue layers, each representing the pixels of that channel, and for CMYK, Cyan, Magenta, Yellow and Key layers.

Source
    Which part of the image should be separated.

        Current Layer
            The active layer.
        Flatten all layers before separation
            The total image.

Alpha Options
    What to do with the alpha channel. All Krita images have an alpha channel, which is the transparency. How should it be handled when separating?

        Copy Alpha Channel to Each separate channel as an alpha channel.
            This adds the transparency of the original source to all the separation layers.
        Discard Alpha Channel
            Just get rid of the alpha altogether.
        Create separate separation from alpha channel
            Create a separate layer with the alpha channel as a grayscale layer.

Downscale to 8bit before separating.
    Convert the image to 8bit before doing the separation.
Output to color, not grayscale.
    This results in the Red separation using black to red instead of black to white. This can make it easier to recombine using certain methods.
Activate the current channel
    If the separated layers are in color, activate only the channel that was the origin of this separation layer.
