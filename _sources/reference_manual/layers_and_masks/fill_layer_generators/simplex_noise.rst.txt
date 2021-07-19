.. meta::
   :description:
        How to use Simplex Noise generation in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Simplex Noise, Perlin Noise
.. _simplex_fill:

Simplex Noise
-------------

.. versionadded:: 4.2

.. image:: /images/layers/fill_layer_simplex_noise.png

This fills the layer with generated OpenSimplex noise. OpenSimplex is different from the more common Perlin noise (often named 'clouds' in other software) and also different from Improved Perlin noise. OpenSimplex has less dimensional artifacts (the subtle "checker" texture often found high frequency Perlin noise) and is a ubiquitous open standard. Since OpenSimplex noise is important to texture generation, this fill layer has the option
to loop around the canvas edge. You can read more about OpenSimplex `here
<https://en.wikipedia.org/wiki/OpenSimplex_noise>`_.

There are a few different use cases for simplex noise. One of these is to create interesting looping patterns, achieved by stacking multiple simplex noise fills with different blending modes. It becomes even more expressive when combined with the levels adjustment layers. For texture artists, this can be a useful utility when combined with a gradient map filter layer to provide color diversity to a looping texture.
For traditional artists, simplex noise layers can be converted to selection masks to create brush transparency dynamics and masking effects. Experimenting with different combinations can be fun and produce interesting results!

Looping
    Whether or not to force the pattern to loop.
Frequency
    The frequency of the waves used to generate the pattern. Higher frequency results in a finer noise pattern.
Ratio
    The ratio of the waves in the x and y dimensions. This makes the noise have a rectangular appearance.
Use Custom Seed
    The seed for the random component. You can input any value or text here, and it will always try to use this value to generate the random values with (which then are always the same for a given seed). Leaving the value empty will use the randomly-assigned seed value on layer creation. 
