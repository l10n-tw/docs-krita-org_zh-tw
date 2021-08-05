.. meta::
   :description property=og\:description:
        How to use soft proofing in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Color, Softproofing
.. _soft_proofing:

=============
Soft Proofing
=============

When we make an image in Krita, and print that out with a printer, the image tends to look different. The colors are darker, or less dark than expected, maybe the reds are more aggressive, maybe contrast is lost. For simple documents, this isn’t much of a problem, but for professional prints, this can be very sad, as it can change the look and feel of an image drastically.

The reason this happens is simply because the printer uses a different color model (CMYK) and it has often access to a lower range of colors (called a gamut).

A naive person would suggest the following solution: do your work within the CMYK color model! But there are three problems with that:

* Painting in a CMYK space doesn’t guarantee that the colors will be the same on your printer. For each combination of Ink, Paper and Printing device, the resulting gamut of colors you can use is different, which means that each of these could have a different profile associated with them.
* Furthermore, even if you have the profile and are working in the exact color space that your printer can output, the CMYK color space is very irregular, meaning that the color maths isn’t as nice as in other spaces. Blending modes are different in CMYK as well.
* Finally, working in that specific CMYK space means that the image is stuck to that space. If you are preparing your work for different a CMYK profile, due to the paper, printer or ink being different, you might have a bigger gamut with more bright colors that you would like to take advantage of.

So ideally, you would do the image in RGB, and use all your favorite RGB tools, and let the computer do a conversion to a given CMYK space on the fly, just for preview. This is possible, and is what we call ''Soft Proofing''.

.. figure:: /images/softproofing/Softproofing_regularsoftproof.png
    :align: center
    :figwidth: 800
    
    On the left, the original, on the right, a view where soft proofing is turned on. The difference is subtle due to the lack of really bright colors, but the soft proofed version is slightly less blueish in the whites of the flowers and slightly less saturated in the greens of the leaves.

You can toggle soft proofing on any image using the :kbd:`Ctrl + Y` shortcut. Unlike other programs, this is per-view, so that you can look at your image non-proofed and proofed, side by side. The settings are also per image, and saved into the ``.kra`` file. You can set the proofing options in :menuselection:`Image --> Image Properties --> Soft Proofing`.

There you can set the following options:

Profile, Depth, Space
    Of these, only the profile is really important. This will serve as the profile you are proofing to. In a professional print workflow, this profile should be determined by the printing house.
Intent
    Set the proofing Intent. It uses the same intents as the intents mentioned in the :ref:`color managed workflow <color_managed_workflow>`.

    .. figure:: /images/softproofing/Softproofing_adaptationstate.png
        :align: center
        :figwidth: 800
    
        Left: Soft proofed image with Adaptation state slider set to max. Right: Soft proofed image with Adaptation State set to minimum.
Adaptation State
    A feature which allows you to set whether :guilabel:`Absolute Colorimetric` will make the white in the image screen-white during proofing (the slider set to max), or whether it will use the white point of the profile (the slider set to minimum). Often CMYK profiles have a different white as the screen, or amongst one another due to the paper color being different.
Black Point Compensation
    Set the black point compensation. Turning this off will crunch the shadow values to the minimum the screen and the proofing profile can handle, while turning this on will scale the black to the screen-range, showing you the full range of grays in the image.
Gamut Warning
    Set the color of the out-of-gamut warning.

You can set the defaults that Krita uses in :menuselection:`Settings --> Configure Krita... --> Color Management`.

To configure this properly, it's recommended to make a test image to print (and that is printed by a properly set-up printer) and compare against, and then approximate in the proofing options how the image looks compared to the real-life copy you have made.

Out of Gamut Warning
--------------------

The out of gamut warning, or gamut alarm, is an extra option on top of Soft-Proofing: It allows you to see which colors are being clipped, by replacing the resulting color with the set alarm color.

This can be useful to determine where certain contrasts are being lost, and to allow you to change it slowly to a less contrasted image.

.. figure:: /images/softproofing/Softproofing_gamutwarnings.png
    :align: center
    :figwidth: 800
    
    Left: View with original image, Right: View with soft proofing and gamut warnings turned on. Krita will save the gamut warning color alongside the proofing options into the KRA file, so pick a color that you think will stand out for your current image.

You can activate Gamut Warnings with the :kbd:`Ctrl + Shift + Y` shortcut, but it needs soft proofing activated to work fully.

.. note::
    Soft Proofing doesn’t work properly in floating-point spaces, and attempting to force it will cause incorrect gamut alarms. It is therefore disabled.

.. warning::
    Gamut Warnings sometimes give odd warnings for linear profiles in the shadows. This is a bug in LittleCMS, see `here <https://ninedegreesbelow.com/bug-reports/soft-proofing-problems.html>`_ for more info.
