.. meta::
   :description:
        The Shape Brush Engine manual page.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Brush Engine, Shape Brush Engine, Experiment Brush Engine, Al.Chemy
.. _shape_brush_engine:

==================
Shape Brush Engine
==================

.. image:: /images/icons/shapebrush.svg 

An Al.chemy inspired brush-engine. Good for making chaos with!

Parameters
----------

* :ref:`option_experiment`
* :ref:`blending_modes`

.. _option_experiment:

Experiment Option
-----------------

Speed
    This makes the outputted contour jaggy. The higher the speed, the jaggier.
Smooth
    Smoothens the output contour. This slows down the brush, but the higher the smooth, the smoother the contour.
Displace
    This displaces the shape. The slow the movement, the higher the displacement and expansion. Fast movements shrink the shape.
Winding Fill
    This gives you the option to use a 'non-zero' fill rules instead of the 'even-odd' fill rule, which means that where normally crossing into the shape created transparent areas, it now will not.
Hard Edge
    Removes the anti-aliasing, to get a pixelized line.

