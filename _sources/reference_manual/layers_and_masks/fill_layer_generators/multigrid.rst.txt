.. meta::
   :description:
        How to use the Multigrid generation in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Multigrid, Penrose, Rhombs, Quasicrystal
.. _multigrid_fill: 

Multigrid
---------

A fill layer based on de Bruijn's 1981 multigrid method to generate `Penrose Tilings <https://en.wikipedia.org/wiki/Penrose_tiling>`_ . This generator projects a hyperdimensional grid lattice onto a 2d plane, giving some pretty cool patterns. Besides looking cool, there's a few interesting and potentially useful features the resulting patterns have:

1. It always produces rhombs, that is diamond or rectangle shapes. This is particularly useful for 3d artists.
2. For all dimensions but 3, 4 and 6 the results are aperiodic, this means that it will never repeat itself in the width or height of the image.
3. The results do repeat symmetrically around the center. The amount of symmetric repetitions is the same as the amount of dimensions projected.

The resulting patterns are also known to show up in nature as quasicrystals.

Shapes
~~~~~~

The meat of the algorithm. The default values for this produce the Star Penrose tiling.


Dimensions
    The amount of dimensions the hyperlattice has. 3 is a lattice of cubes, 4 is a lattice of tesseracts, 5 is a lattice of penteracts, and so forth.
    
    .. figure:: /images/layers/multigrid-dimension-example.png
    
       Multigrid with different dimensions, starting at 3 and ending at 12. 3d, 4d and 6d are colored with the intersect color factor while the rest uses ratio exclusively. In 3d, 4d and 6d, all the rhombs have the same ratio.
    
Divisions
    Effectively a zoom-out. This is the subdivisions of the length of the width between the center and the corner of the image. This is then used to determine how many lines are projected for each dimension.
Offset
    This controls how much each set of lines is offset from the center of the image. Changing this value changes the pattern within the same dimension significantly.
    
    .. figure:: /images/layers/multigrid-offset-examples.png
    
       Multigrid with 5 dimensions and 20 divisions. The offsets from left to right are: 0.3, 0.1, 0.2 (Star Penrose tiling), 0.3, 0.4 (Sun Penrose Tiling), 0.48.
    

Lines
~~~~~

Line Width
    The width of the outlines of the rhombs in image pixels. Due to the way the rhombs are drawn, there is still a hairfine line visible at 0 px.
Connector Lines
    This optionally draws lines between the different sides of the shape. This is typically used to show that a specific tiling has certain matching rules, but it also gives cool looking results.
    
    Acute Angle
        Draws an arc between the sides that connect to an acute angle.
    Obtuse Angle
        Draws an arc between the sides that connect to an obtuse angle.
    Cross
        Draws two lines crossed between the sides of each rhomb. Particularly interesting with 0 line width.
        

Colors
~~~~~~

.. figure:: /images/layers/multigrid-color-examples.png

   Image showing the Star Penrose Tiling with 29 divisions and connector lines at the acute angles. The complex gradient and the combination of ratio and index to color the image results in some of the more impressive results that can be gotten from this fill layer.

This section controls all the colors, all grouped together because Krita's color buttons allow drag and dropping colors to one another. You can change the color for the outlines and the connector lines, and there is a gradient for coloring the individual rhombs.

The color factors determine which properties of each rhomb is used to determine its coloring. This value is used as a multiplier, to finally result in a value that can be used to get the value from the gradient.

Ratio
    This colors the rhombs based on their ratio. Thin rhombs have a low ratio, thick rhombs have a high ratio, and perfect squares have the largest ratio.
Intersect
    This colors the rhombs based on which intersecting lines resulted in this rhomb. In effect, this colors the rhomb depending on which side of the hyperlattice the rhomb is on, as is especially clear when setting the dimension to 3.
Index
    This colors the rhombs based on the index of the intersecting lines from the center. In effect, rhombs closer to the center will have a lower value, while rhombs further from the center will have a higher value.
    



