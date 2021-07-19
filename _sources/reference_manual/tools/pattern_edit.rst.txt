.. meta::
   :description:
        Krita's vector pattern editing tool reference.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Tools, Pattern
.. _pattern_edit_tool.rst:

====================
Pattern Editing Tool
====================

|toolpatternedit|

.. deprecated:: 4.0

    The pattern editing tool has been removed in 4.0, currently there's no way to edit pattern fills for vectors.

The Pattern editing tool works on Vector Shapes that use a Pattern fill. On these shapes, the Pattern Editing Tool allows you to change the size, ratio and origin of a pattern.

On Canvas-editing
-----------------

You can change the origin by click dragging the upper node, this is only possible in Tiled mode.

You can change the size and ratio by click-dragging the lower node. There's no way to constrain the ratio in on-canvas editing, this is only possible in Original and Tiled mode.

Tool Options
------------

There are several tool options with this tool, for fine-tuning:

First there are the Pattern options.

Repeat:
    This can be set to:
    
    Original:
        This will only show one, unstretched, copy of the pattern.
    Tiled (Default):
        This will let the pattern appear tiled in the x and y direction.
    Stretch:
        This will stretch the Pattern image to the shape.

Reference point:
    Pattern origin. This can be set to:

    * Top-left
    * Top
    * Top-right
    * Left
    * Center
    * Right
    * Bottom-left
    * Bottom
    * Bottom-right.

Reference Point Offset:
    For extra tweaking, set in percentages.

    X:
        Offset in the X coordinate, so horizontally.
    Y:
        Offset in the Y coordinate, so vertically.

Tile Offset:
    The tile offset if the pattern is tiled.
Pattern Size:
    Fine Tune the resizing of the pattern.

    W:
        The width, in pixels.
    H:
        The height, in pixels.

And then there's :guilabel:`Patterns`, which is a mini pattern docker, and where you can pick the pattern used for the fill.
