.. meta::
   :description property=og\:description:
        Krita's gradient tool reference.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
             - Miguel Lopez <reptillia39@live.com>

   :license: GNU free documentation license 1.3 or later.

.. index:: Tools, Gradient
.. _gradient_tool:

=============
Gradient Tool
=============

|toolgradient|

The Gradient tool is found in the Tools Panel. Left-Click dragging this tool over the active portion of the canvas will draw out the current gradient.  If there is an active selection then, similar to the :ref:`fill_tool`, the paint action will be confined to the selection's borders.

Tool Options
------------

Shape:
    Linear
        This will draw a straight gradient.

        .. figure:: /images/gradients/gradient_painter/linear.png
           :alt: Linear Gradient.

           Left: **None**. Middle: **Forwards**. Right: **Alternating**.

    Bilinear
       This will draw a straight gradient, mirrored along the axis.

       .. figure:: /images/gradients/gradient_painter/bilinear.png

          Left: **None**. Middle: **Forwards**. Right: **Alternating**.

    Radial
       This will draw the gradient from a center, defined by where you start the stroke.

       .. figure:: /images/gradients/gradient_painter/radial.png

          Left: **None**. Middle: **Forwards**. Right: **Alternating**.

    Square
        This will draw the gradient from a center in a square shape, defined by where you start the stroke.

        .. figure:: /images/gradients/gradient_painter/square.png

           Left: **None**. Middle: **Forwards**. Right: **Alternating**.

    Conical
        This will wrap the gradient around a center, defined by where you start the stroke.

        .. figure:: /images/gradients/gradient_painter/conical.png

           Left: **None**. Middle: **Forwards**. Right: **Alternating**.

    Conical-symmetric
        This will wrap the gradient around a center, defined by where you start the stroke, but will mirror the wrap once.

        .. figure:: /images/gradients/gradient_painter/conical_symmetric.png

           Left: **None**. Middle: **Forwards**. Right: **Alternating**.

    Spiral
        This will draw the gradient spiral from a center, defined by where you start the stroke.

        .. figure:: /images/gradients/gradient_painter/spiral.png

           Left: **None**. Middle: **Forwards**. Right: **Alternating**.

    Reverse Spiral
        This will draw the gradient spiral from a center, defined by where you start the stroke, but direction is flipped perpendicular to the direction of stroke.

        .. figure:: /images/gradients/gradient_painter/reverse_spiral.png

           Left: **None**. Middle: **Forwards**. Right: **Alternating**.

    Shaped
        This will shape the gradient depending on the selection or layer.
        
        .. figure:: /images/gradients/gradient_painter/shaped.png

Repeat:
    None
        This will extend the gradient into infinity.
    Forward
        This will repeat the gradient into one direction.
    Alternating
        This will repeat the gradient, alternating the normal direction and the reversed.

Antialias threshold
    Controls how smooth is the border between repetitions.

    * A value equal to 0 means there is no smoothing. The border is aliased.
    * A value greater than 0 tells Krita how many pixels to each side of the border should be smoothed.

    .. figure:: /images/gradients/gradient_painter/antialias_threshold.png

       Left: **0**. Middle: **0.5**. Right: **1**.

Reverse
    Reverses the direction of the gradient.

Dither
    .. versionadded:: 5.0
    
    8 bits of color depth is not enough depth to make a truly smooth gradient. This option eleviates this by adding blue noise style dithering to gradients in 8 bit.

    .. figure:: /images/gradients/krita_gradient_dithering.svg
       :alt: Example showing gradients with and without dithering.

       In the above example, the topleft is a subtle gradient without dithering. The bottom left is with blue noise dithering. The right two examples are the same as the left, but with a contrast filter applied so the blue noise dithering pattern becomes obvious.
        
