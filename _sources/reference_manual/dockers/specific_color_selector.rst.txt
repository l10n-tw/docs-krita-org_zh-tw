.. meta::
   :description:
        Overview of the specific color selector docker.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Raghavendra Kamath <raghu@raghukamath.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Color, Color Selector, Specific Color Selector, Color Space
.. _specific_color_selector_docker:

=======================
Specific Color Selector
=======================

.. image:: /images/dockers/Krita_Specific_Color_Selector_Docker.png

The specific color selector allows you to choose specific colors within a color space.

Color Space Chooser Dropdown
----------------------------

Fairly straightforward. This color space chooser dropdown allows you to pick the color space, the bit depth and the ICC profile in which you are going to pick your color.

Sliders
-------

These change per color space.
If you chose 16bit float or 32 bit float, these will go from 0 to 1.0, with the decimals deciding the difference between colors. When you choose 8 bit integer or 16 bit integer, a button with percentage sign (%) will appear besides the dropdown, which will allow you to input values in percentages.

Hex Color Selector
------------------

This is only available for the color spaces with a depth of 8 bit.
This allows you to input hex color codes, and receive the RGB, CMYK, LAB, XYZ or YCrCb equivalent, and the other way around!
