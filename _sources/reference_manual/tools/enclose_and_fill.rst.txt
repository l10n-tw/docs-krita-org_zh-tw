.. meta::
   :description property=og\:description:
        Krita's enclose and fill tool reference.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Deif Lou <ginoba@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Tools, Fill, Bucket
.. _enclose_and_fill_tool:

=====================
Enclose and Fill Tool
=====================

|toolenclosefill| 

The Enclose and Fill Tool is a different method of filling large colored areas. Instead of :ref:`selecting each area you want to fill <fill_tool>`, or :ref:`drawing the associated color of each area <colorize_mask>`, this tool allows you to select an area, and it will fill everything inside said area.

.. figure:: /images/tools/enclose_and_fill_basic_usage.png

    Simple usage of the enclose and fill. Draw a rectangle around everything you wish to fill and :program:`Krita` will try to find all possible areas inside that rectangle that can be filled.

Tool Options
------------

Enclosing Method
~~~~~~~~~~~~~~~~
What kind of method to use for the enclosing area. Different images call for different methods.

Rectangle
    Use a rectangle to draw the enclosing area.
Ellipse
    Use an ellipse, much like the elliptical selection to draw the enclosing area.
Bezier Curve
    Use a bezier curve to draw the enclosing area.
Lasso
    Use a freehand selection to draw out the enclosing area.
Brush
    Use a brush with the current brush size to draw out an enclosing area. The brush size is determined by the size of the active brush, and can be resized with :kbd:`Shift` + |mouseleft|.

What to fill
~~~~~~~~~~~~
Besides choosing how to create an enclosing area, it is also possible to choose which found regions will be filled. Krita can differentiate between the color (or lack thereof) of a region as well as the colors it is surrounded by. For some of these options a specific color needs to be selected, and thus a color selection button is shown. The :guilabel:`Region Extent` options control how precise a given color should match this selected color.

.. figure:: /images/tools/enclose_and_fill_potential_areas.png

   An image illustrating the different areas that can be found by this tool within this image. Each area has a different outline to indicate it's a separate area. The following examples all show these outlines to demonstrate which areas are selected, but note that they are for demonstration only and would not show in a real situation.

.. note::

    When :guilabel:`Reference` is set to :guilabel:`All Layers` only areas of the canvas that show the transparency checkers are considered transparent.

All these options have a toggle for :guilabel:`invert`, which inverts which regions are filled.

.. figure:: /images/tools/enclose_and_fill_potential_areas_fill_all.png

   Demonstration of which areas will be filled when using :guilabel:`All Regions` and the given enclosing area. Blue areas are the selected areas.

All Regions.
    Any regions found will be filled. Most basic option.

The following options have an option for :guilabel:`Include Contour Regions`, which will also fill everything that follows the chosen conditions, but isn't completely enclosed by the enclosing area.

.. figure:: /images/tools/enclose_and_fill_potential_areas_fill_area.png

   Topleft: :guilabel:`Regions of a Specific Color` set to cream white, topright: :guilabel:`Transparent Regions`, bottom: :guilabel:`Regions of a specific color or transparent`.

Regions of a Specific Color.
    Only regions that are a specific color will be filled. If you have a complex image where separate figures have their whole silhouette in a seperate color, this can be used to only affect the silhouette of a single figure.
Transparent Regions.
    Only regions that are transparent will be filled. Useful for filling a line art.
Regions of a specific color or transparent.
    Combines the transparent and specific color options.

.. figure:: /images/tools/enclose_and_fill_potential_areas_fill_all_except.png

   Topleft: :guilabel:`All regions except those of a specific color` set to cream white, topright: :guilabel:`All regions except transparent ones`, bottomleft: :guilabel:`All regions except those of a specific color or transparent`, and bottomright: :guilabel:`All regions except transparent ones` with :guilabel:`Include Contour Regions` turned on, limited to a small area.

All regions except those of a specific color.
    Fill all regions except ones with the selected color. If you set the selected color to red and the :guilabel:`Threshold` to say, 50, then not just red, but also colors close to red, like pink and orange will be avoided.
All regions except transparent ones.
    Fill all regions except transparent ones. This is useful when you've first filled out a silhouette, so only select areas that are within that silhouette.
All regions except those of a specific color or transparent.
    Fill neither transparent nor the specific color.

.. figure:: /images/tools/enclose_and_fill_potential_areas_fill_surrounded.png

   Topleft: To demonstrate the following features the sample image got some adjustments: The outlines were colored and some red silhouettes of strawberries were added. Topright :guilabel:`Regions surrounded by a specific color` set to grey, bottomleft: :guilabel:`Regions surrounded by transparent`, and bottomright: :guilabel:`Regions surrounded by a specific color or transparent`.

Regions surrounded by a specific color.
    Fill all regions surrounded by a specific color. This is useful when you have line art that uses different colored outlines for different features.
Regions surrounded by transparent.
    Fill regions that are surrounded by transparent. If you set the blending mode to :guilabel:`Erase`, this can be used to clean up tiny dots and other noise in a transparent area without affecting the main drawing.
Regions surrounded by a specific color or transparent.
    Combines the previous two.

Features shared with the fill tool
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Beyond these, a number of features are shared with the fill tool, amongst which :guilabel:`Region Extent`, :guilabel:`Adjustments` and :guilabel:`Reference`. These function much the same as the ones documented on the :ref:`Fill Tool page <fill_tool>`, with exception of :guilabel:`Region Extent`, which affects the color selected for region selection.
