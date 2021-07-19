.. meta::
   :description:
        How to use Screen Tone generation in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Deif Lou
   :license: GNU free documentation license 1.3 or later.

.. index:: Screentone, Halftone
.. _screentone_fill:

Screentone
----------

.. versionadded:: 4.4

Fills the layer with simple regular patterns like dots and lines like the ones used in traditional `screentone <https://en.wikipedia.org/wiki/Screentone>`_ or `halftone <https://en.wikipedia.org/wiki/Halftone>`_ techniques.

Screentone Type
    Pattern
        Select the global appearance (dots, lines).
    Shape
        Select the specific appearance of the pattern (for example: round dots, diamond dots, straight lines, sine wave lines).
    Interpolation
        Select how the pattern transitions from the foreground to the background.

        In most cases but the dot pattern with round shape combination, the effect of the interpolation mode is not very noticeable.

    .. figure:: /images/layers/fill_layer_screentone_type.png

        From left to right, top to bottom: 
        dot pattern with round shape, dot pattern with ellipse shape, 
        dot pattern with a diamond shape, dot pattern with a square shape, 
        line pattern with straight shape, line pattern with sine wave shape, line pattern with triangular wave shape, 
        line pattern with sawtooth wave shape and line pattern with a curtain shape.

Transformation
    Select how the pattern is arranged geometrically in the image (position, size, rotation, shear).  
    Some patterns benefit from the capability of choosing horizontal and vertical sizes separately. For example, the sin wave lines pattern has a small period by default and by choosing a large horizontal size the period will look also larger.

    .. figure:: /images/layers/fill_layer_screentone_transformation.png

        From left to right: 
        dot pattern with round shape without rotation, dot pattern with round shape and rotated 45 degrees, 
        line pattern with sine wave shape and a size of 20px horizontally and vertically, 
        line pattern with sine wave shape and a size of 50px horizontally and 20px vertically.

Postprocessing
    Background & Foreground
        Allows you to choose the color and opacity of the foreground (dots, lines) and the background.
    Invert
        This flips what is treated as foreground and background.
    Brightness & Contrast
        The brightness controls how close to the foreground or background color the pattern appears (how *dark* or *light* in the case of black foreground and white background). 
        So if you want to simulate small dots, for example, set the brightness to a high value and to obtain big dots set it to a low value.
        
        The contrast controls how smooth or sharp is the transition between the foreground and background colors. By default, the contrast is set to 50% (smooth).
        To achieve the typical sharp borders the contrast must be set to a higher value.

    .. figure:: /images/layers/fill_layer_screentone_postprocessing.png

        First row: different combinations of foreground and background colors. 
        Second row, from left to right: 25%, 50% and 75% brightness with 90% contrast. 
        Third row, from left to right: 25%, 50% and 75% contrast with 50% brightness.  
