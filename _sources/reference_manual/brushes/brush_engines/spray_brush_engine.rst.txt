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

Here you can set different properties related to the area where the particles are distributed and how they are distributed.

Area
~~~~

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
Jitter Movement
    Jitters the spray area around for extra randomness.

Particles
~~~~~~~~~

Amount
    Count
        Use a specified number of particles.
    Density
        Use a percentage for the number of particles.

Distribution
    .. versionadded:: 5.1

    Here you can set how the particles are distributed in the spray area. The particles are distributed using `polar coordinates <https://en.wikipedia.org/wiki/Polar_coordinate_system>`_, so you can set different distributions for the angle and the distance of the particles relative to the center of the spray area.

    Angular
        You can specify how the particles are distributed around the center using one of the following options:

        * :guilabel:`Uniform`: Distributes the particles uniformly. Each angle is equally likely to receive a particle.
        * :guilabel:`Curve`: You can set a custom curve that models how the particles should be distributed. The left side of the curve represents an angle of 0 degrees and the right side an angle of 360 degrees. Higher values in the vertical direction mean that there is a higher probability that a particle ends up at that particular angle. In the spray area the angle increases clockwise.

            * :guilabel:`Repeat`: Have the curve repeat itself multiple times from 0 to 360 degrees. Without this, you would need to build a very complex curve with too many control points to achieve the same result.

    Radial
        You can specify how the particles are distributed from the center to the edge of the spray area using one of the following options:

        * :guilabel:`Uniform`: Distributes the particles uniformly.

            * :guilabel:`Center-biased spread (legacy)`: This option ensures compatibility with the brushes made prior to version 5.1. Before, the particles were distributed uniformly in terms of distance from the center, but that ended up concentrating more particles in the center of the spray area from a 2d space perspective. For example, a circumference at a distance of 10 pixels from the center ended having roughly the same number of particles as a circumference at a distance of 100 pixels, while being 10 times smaller in length.

        * :guilabel:`Gaussian`: distributes the particles using a gaussian or `normal distribution <https://en.wikipedia.org/wiki/Normal_distribution>`_.

            * :guilabel:`Standard deviation`: Sets the standard deviation of the distribution. Higher values will make the particles more spread.
            * :guilabel:`Center-biased spread (legacy)`: This option ensures compatibility with the brushes made prior to version 5.1. See the previous point for more information.

        * :guilabel:`Cluster`: This will allow you to quickly concentrate the particles towards the center or the edge of the spray area.

            * :guilabel:`Clustering amount`: Positive values will make the particles concentrate towards the center of the spray area. Negative values will make the particles concentrate towards the border of the spray area. Values near 0 will make the particles spread more uniformly.

        * :guilabel:`Curve`: You can set a custom curve that models how the particles should be distributed. The left side of the curve represents the center of the spray area and the right side represents its border. Higher values in the vertical direction mean that there is a higher probability that a particle ends up at that particular distance.

            * :guilabel:`Repeat`: Have the curve repeat itself multiple times from the center of the spray area to its edge. Without this, you would need to build a very complex curve with too many control points to achieve the same result.

.. figure:: /images/brushes/krita-spray-brush-engine-distribution.png

   Different distribution types on display:

   1. Uniform for both Angular and Radial, with `Center-biased spread (legacy)` turned on.
   2. Uniform for both Angular and Radial, with `Center-biased spread (legacy)` turned off.
   3. Clustered for Radial, with Clusting Amount: 0.0.
   4. Clustered for Radial, with Clusting Amount: -5.0.
   5. Clustered for Radial, with Clusting Amount: +5.0.
   6. Curve for Angular, using the default curve and 0 repeats.
   7. Curve for Angular, using the default curve and 5 repeats.
   8. Curve for Radial, using the default curve with 3 repeats.
   9. Curve for Angular using a hill shaped curve, 7 repeats, and Clustered for Radial, with Clusting Amount: -5.0.
   10. Gaussian for Radial, with Standard Deviation: 25.
   11. Gaussian for Radial, with Standard Deviation: 50.
   12. Gaussian for Radial, with Standard Deviation: 80.

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
