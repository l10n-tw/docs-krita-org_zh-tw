.. meta::
   :description:
        Krita's Brush Engine options overview.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Raghavendra Kamath <raghavendr.raghu@gmail.com>
             - Scott Petrovic
             - Hulmanen
             - Nmaghrufusman
             - Peter Schatz
   :license: GNU free documentation license 1.3 or later.

.. _brush_options:

=======
Options
=======

.. index:: Airbrush
.. _option_airbrush:

Airbrush
--------

.. image:: /images/brushes/Krita_2_9_brushengine_airbrush.png

If you hold the brush still, but are still pressing down, this will keep adding color onto the canvas. The lower the rate, the quicker the color gets added.

.. index:: Mirror
.. _option_mirror:

Mirror
------

.. image:: /images/brushes/Krita_Pixel_Brush_Settings_Mirror.png

This allows you to mirror the Brush tip with Sensors.

Horizontal
    Mirrors the mask horizontally.
Vertical
    Mirrors the mask vertically.

.. image:: /images/brushes/Krita_2_9_brushengine_mirror.jpg

Some examples of mirroring and using it in combination with :ref:`option_rotation`.

.. _option_rotation:

Rotation
--------

This allows you to affect Angle of your brush tip with Sensors.

.. image:: /images/brushes/Krita_2_9_brushengine_rotation.png

.. image:: /images/brushes/Krita_Pixel_Brush_Settings_Rotation.png

In the above example, several applications of the parameter.

#. Drawing Angle -- A common one, usually used in combination with rake-type brushes. Especially effect because it does not rely on tablet-specific sensors. Sometimes, Tilt-Direction or Rotation is used to achieve a similar-more tablet focused effect, where with Tilt the 0° is at 12 o'clock, Drawing angle uses 3 o'clock as 0°.
#. Fuzzy -- Also very common, this gives a nice bit of randomness for texture.
#. Distance -- With careful editing of the Sensor curve, you can create nice patterns.
#. Fade -- This slowly fades the rotation from one into another.
#. Pressure -- An interesting one that can create an alternative looking line.

.. _option_lightness_strength:

Lightness Strength
------------------
.. versionadded:: 4.4
    This allows you to affect the Lightness Strength of your brush tip with Sensors. Only available with brush tips in Lightness Map mode.

.. image:: /images/brushes/lightness_strength_demo.png

This changes the contrast of the brush tip, so that at 100%, the full effect of the lightness variation is visible in the brush, while at 0% the brush paints without any lightness variation.  This allows a variable impasto effect with lightness brushes, and for variation in texture stamp brushes that use a lightness-enabled brush tip.

.. _option_scatter:

Scatter
-------

This parameter allows you to set the random placing of a brush-dab. You can affect them with Sensors.

X
    The scattering on the angle you are drawing from.
Y
    The scattering, perpendicular to the drawing angle (has the most effect).

.. image:: /images/brushes/Krita_2_9_brushengine_scatter.png

.. _option_sharpness:

Sharpness
---------

.. image:: /images/brushes/Krita_Pixel_Brush_Settings_Sharpness.png

Puts a threshold filter over the brush mask. This can be used for brush like strokes, but it also makes for good pixel art brushes.

Strength
    Controls the threshold, and can be controlled by the sensors below.
Soften Edge
    Controls the extra non-fully opaque pixels. This adds a little softness to the stroke.
    
.. versionchanged:: 4.2

    The sensors now control the threshold instead of the subpixel precision, softness slider was added.


Align the brush preview outline to the pixel grid.
    Whether to have the brush outline align to the pixel grid. This is useful with some forms of pixel art.
    
    .. versionadded:: 5.1

.. _option_size:

Size
----

.. image:: /images/brushes/Krita_Pixel_Brush_Settings_Size.png

This parameter is not the diameter itself, but rather the curve for how it's affected.

So, if you want to lock the diameter of the brush, lock the Brush tip. Locking the size parameter will only lock this curve. Allowing this curve to be affected by the Sensors can be very useful to get the right kind of brush. For example, if you have trouble drawing fine lines, try to use a concave curve set to pressure. That way you'll have to press hard for thick lines.

.. image:: /images/brushes/Krita_2_9_brushengine_size_01.png

Also popular is setting the size to the sensor fuzzy or perspective, with the later in combination with a :ref:`assistant_perspective`.

.. image:: /images/brushes/Krita_2_9_brushengine_size_02.png

.. _option_softness:

Softness
--------

This allows you to affect Fade with Sensors.

.. image:: /images/brushes/Krita_2_9_brushengine_softness.png

Has a slight brush-decreasing effect, especially noticeable with soft-brush, and is overall more noticeable on large brushes.

.. _option_source:

Source
------

Picks the source-color for the brush-dab.

Plain Color
    Current foreground color.
Gradient
    Picks active gradient.
Uniform Random
    Gives a random color to each brush dab.
Total Random
    Random noise pattern is now painted.
Pattern
    Uses active pattern, but alignment is different per stroke.
Locked Pattern
    Locks the pattern to the brushdab.

.. _option_mix:

Mix
---

Allows you to affect the mix of the :ref:`option_source` color with Sensors. It will work with Plain Color and Gradient as source. If Plain Color is selected as source, it will mix between the currently selected foreground and background color. If Gradient is selected, it chooses a point on the gradient to use as painting color according to the sensors selected.

.. image:: /images/brushes/Krita_2_9_brushengine_mix_01.png

Uses
~~~~

.. image:: /images/brushes/Krita_2_9_brushengine_mix_02.png

Flow map
    The above example uses a :program:`Krita` painted flowmap in the 3D program :program:`Blender`.
    A brush was set to :menuselection:`Source --> Gradient` and :menuselection:`Mix --> Drawing angle`. The gradient in question contained the 360° for normal map colors. Flow maps are used in several Shaders, such as brushed metal, hair and certain river-shaders.

.. _option_gradient:

Gradient
~~~~~~~~

Exactly the same as using :menuselection:`Source --> Gradient` with :guilabel:`Mix`, but only available for the Color Smudge Brush. 

.. image:: /images/brushes/Krita-tutorial5-I.6-1.png

You can either:

* Leave the default :menuselection:`Foreground --> Background gradient` setting, and just change the foreground and background colors
* Select a more specific gradient
* Or make custom gradients.

.. index:: Spacing
.. _option_spacing:

Spacing
-------

.. image:: /images/brushes/Krita_Pixel_Brush_Settings_Spacing.png

This allows you to affect :ref:`option_brush_tip` with :ref:`sensors`.

.. image:: /images/brushes/Krita_2_9_brushengine_spacing_02.png

Isotropic spacing
    Instead of the spacing being related to the ratio of the brush, it will be on diameter only.

.. image:: /images/brushes/Krita_2_9_brushengine_spacing_01.png

.. index:: Ratio
.. _option_ratio:

Ratio
-----

Allows you to change the ratio of the brush and bind it to parameters. This also works for predefined brushes.

.. image:: /images/brushes/Krita_3_0_1_Brush_engine_ratio.png

