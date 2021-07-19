.. meta::
   :description:
        The Grid Brush Engine manual page.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Nathan Lovato
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Brush Engine, Grid, Grid Brush Engine
.. _grid_brush_engine:

=================
Grid Brush Engine
=================

.. image:: /images/icons/gridbrush.svg


The grid brush engine draws shapes on a grid. It helps you produce retro and halftone effects.

If you're looking to setup a grid for snapping, head to :ref:`grids_and_guides_docker`.

Options
-------

* :ref:`option_size_grid`
* :ref:`option_particle_type`
* :ref:`blending_modes`
* :ref:`option_opacity_n_flow`
* :ref:`option_color_grid`

.. _option_size_grid:

Brush Size
----------

Grid Width
    Width of the cursor area.
Grid Height
    Height of the cursor area.
Division
    Subdivides the cursor area and uses the resulting area to draw the particles.
Division by pressure
    The more you press, the more subdivisions. Uses Division as the finest subdivision possible.
Scale
    Scales up the area.
Vertical Border
    Forces vertical borders in the particle space, between which the particle needs to squeeze itself. 
Horizontal Border
    Forces a horizontal borders in the particle space, between which the particle needs to squeeze itself.
Jitter Borders
    Randomizes the border values with the Border values given as maximums.

.. _option_particle_type:

Particle Type
-------------

Decides the shape of the particle.

Ellipse
    Fills the area with an ellipse.
Rectangle
    Fills the area.
Line
    Draws lines from the lower left to the upper right corner of the particle.
Pixel
    Looks like an aliased line on high resolutions.
Anti-aliased Pixel
    Fills the area with little polygons.

.. _option_color_grid:

Color Options
-------------

Random HSV
    Randomize the HSV with the strength of the sliders. The higher, the more the color will deviate from the foreground color, with the direction indicating clock or counter clockwise.
Random Opacity
    Randomizes the opacity.
Color Per Particle
    Has the color options be per particle instead of area.
Sample Input Layer
    Will use the underlying layer as reference for the colors instead of the foreground color.
Fill Background
    Fills the area before drawing the particles with the background color.
Mix with background color
    Gives the particle a random color between foreground/input/random HSV and the background color.
 
