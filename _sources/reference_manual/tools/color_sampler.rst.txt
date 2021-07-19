.. meta::
   :description:
        Krita's color sampler tool reference.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
             - Emmet O'Neill
   :license: GNU free documentation license 1.3 or later.

.. index:: Tools, Colors, Eyedropper, Color Sampler
.. _color_sampler_tool:

==================
Color Sampler Tool
==================


This tool allows you to choose a point from the canvas and make the color of that point the active foreground color. When a painting or drawing tool is selected the Color Sampler tool can also be quickly accessed by pressing the :kbd:`Ctrl` key.

.. image:: /images/tools/Color_Dropper_Tool_Options.png

There are several options shown in the :guilabel:`Tool Options` docker when the :guilabel:`Color Sampler` tool is active:

The first drop-down box allows you to select whether you want to sample from all visible layers or only the active layer. You can choose to have your selection update the current foreground color, to be added into a color palette, or to do both.

.. versionchanged:: 5

    The tool has been renamed and is now consistently called the *Color Sampler Tool*. (Beforehand it was non-consistently referred to as either *Color Picker* or *Color Selector*)

.. versionadded:: 4.1

    The middle section contains a few properties that change how the Color Sampler picks up color; you can set a :guilabel:`Radius`, which will average the colors in the area around the cursor, and you can now also set a :guilabel:`Blend` percentage, which controls how much color is "soaked up" and mixed in with your current color. Read :ref:`mixing_colors` for information about how the Color Sampler's blend option can be used as a tool for off-canvas color mixing.

At the very bottom is the Info Box, which displays per-channel data about your most recently picked color. Color data can be shown as 8-bit numbers or percentages.
