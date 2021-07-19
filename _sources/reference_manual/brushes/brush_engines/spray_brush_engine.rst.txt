.. meta::
   :description:
        The Spray Brush Engine manual page.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Brush Engine, Airbrush, Spray Brush Engine
.. _spray_brush_engine:

==================
Spray Brush Engine
==================

.. image:: /images/icons/spraybrush.svg 

A brush that can spray particles around in its brush area.

Options
-------

* :ref:`option_spray_area`
* :ref:`option_spray_shape`
* :ref:`option_brush_tip` (Used as particle if spray shape is not active)
* :ref:`option_opacity_n_flow`
* :ref:`option_size`
* :ref:`blending_modes`
* :ref:`option_shape_dyna`
* :ref:`option_color_spray`
* :ref:`option_rotation`
* :ref:`option_airbrush`

.. _option_spray_area:

Spray Area
----------

The area in which the particles are sprayed.

Diameter
    The size of the area.
Aspect Ratio
    It's aspect ratio: 1.0 is fully circular.
Angle
    The angle of the spray size: works nice with aspect ratios other than 1.0.
Scale
    Scales the diameter up.
Spacing
    Increases the spacing of the diameter's spray.

Particles
~~~~~~~~~

Count
    Use a specified amount of particles.
Density
    Use a % amount of particles.
Jitter Movement
    Jitters the spray area around for extra randomness.
Gaussian Distribution
    Focuses the particles to paint in the center instead of evenly random over the spray area.

.. _option_spray_shape:

Spray Shape
-----------

If activated, this will generate a special particle. If not, the brush-tip will be the particle.

Shape
    Can be...
    
    * Ellipse
    * Rectangle
    * Anti-aliased Pixel
    * Pixel
    * Image

Width & Height
    Decides the width and height of the particle.
Proportional
    Locks Width & Height to be the same.
Texture
    Allows you to pick an image for the :guilabel:`Image shape`.

.. _option_shape_dyna:

Shape Dynamics
--------------

Random Size
    Randomizes the particle size between 1x1 px and the given size of the particle in brush-tip or spray shape.
Fixed Rotation
    Gives a fixed rotation to the particle to work from.
Randomized Rotation
    Randomizes the rotation.
Follow Cursor Weight
    How much the pressure affects the rotation of the particles. At 1.0 and high pressure it'll seem as if the particles are exploding from the middle.
Angle Weight
    How much the spray area angle affects the particle angle.

.. _option_color_spray:

Color Options
-------------

Random HSV
    Randomize the HSV with the strength of the sliders. The higher, the more the color will deviate from the foreground color, with the direction indicating clock or counter clockwise.
Random Opacity
    Randomizes the opacity.
Color Per Particle
    Has the color options be per particle instead of area.
Sample Input Layer.
    Will use the underlying layer as reference for the colors instead of the foreground color.
Fill Background
    Fills the area before drawing the particles with the background color.
Mix with background color.
    Gives the particle a random color between foreground/input/random HSV and the background color.
