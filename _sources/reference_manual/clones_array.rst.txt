.. meta::
   :description:
        The Clones Array functionality in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Clones Array, Clone

.. _clones_array:

Clones Array
------------

Allows you to create a set of clone layers quickly. These are ordered in terms of rows and columns. The default options will create a 2 by 2 grid. For setting up tiles of an isometric game, for example, you'd want to set the X offset of the rows to half the value input into the X offset for the columns, so that rows are offset by half. For a hexagonal grid, you'd want to do the same, but also reduce the Y offset of the grids by the amount of space the hexagon can overlap with itself when tiled.

\- Elements
    The amount of elements that should be generated using a negative of the offset.
\+ Elements
    The amount of elements that should be generated using a positive of the offset.
X offset
    The X offset in pixels. Use this in combination with Y offset to position a clone using Cartesian coordinates.
Y offset
    The Y offset in pixels. Use this in combination with X offset to position a clone using Cartesian coordinates.
Distance
    The line-distance of the original origin to the clones origin. Use this in combination with angle to position a clone using a polar coordinate system.
Angle
    The angle-offset of the column or row. Use this in combination with distance to position a clone using a polar coordinate system.
