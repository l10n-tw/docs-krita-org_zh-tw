.. meta::
   :description:
        Page about the lighten blending modes in Krita: Color Dodge, Gamma Illumination, Gamma Light, Easy Dodge, Flat Light, Fog Lighten, Hard Light, Lighten, Lighter Color, Linear Dodge, Linear Light, P-Norm A, P-Norm B, Pin Light, Screen, Soft Light, Tint and Vivid Light.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Maria Luisac
             - Reptorian <reptillia39@live.com>
   :license: GNU free documentation license 1.3 or later.


.. _bm_cat_lighten:

Lighten
-------

Blending modes that lighten the image.

.. index:: ! Color Dodge, Dodge
.. _bm_color_dodge:

Color Dodge
~~~~~~~~~~~

Similar to Divide.
Inverts the top layer, and divides the lower layer by the inverted top layer.
This results in a image with emphasized highlights, like Dodging would do in traditional darkroom photography.

.. figure:: /images/blending_modes/lighten/Blending_modes_Color_Dodge_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Color Dodge**.

.. index:: ! Gamma Illumination
.. _bm_gamma_illumination:

Gamma Illumination
~~~~~~~~~~~~~~~~~~

Inverted Gamma Dark blending mode.

.. figure:: /images/blending_modes/lighten/Blending_modes_Gamma_Illumination_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Gamma Illumination**.


.. index:: ! Gamma Light
.. _bm_gamma_light:

Gamma Light
~~~~~~~~~~~

Outputs the upper layer as power of the lower layer.

.. figure:: /images/blending_modes/lighten/Blending_modes_Gamma_Light_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Gamma Light**.

.. index:: ! Hard Light
.. _bm_hard_light:

Hard Light
~~~~~~~~~~

Similar to Overlay.
A combination of the Multiply and Screen blending modes, switching between both at a middle-lightness.

Hard light checks if the color on the upperlayer has a lightness above 0.5. Unlike overlay, if the pixel is lighter than 0.5, it is blended like in Multiply mode, if not the pixel is blended like in Screen mode.

Effectively, this decreases contrast.

.. figure:: /images/blending_modes/lighten/Blending_modes_Hard_Light_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Hard Light**.

.. _bm_lighten:

Lighten
~~~~~~~

With the darken, the upper layer's colors are checked for their lightness. Only if they are Lighter than the underlying color on the lower layer, will they be visible.

.. figure:: /images/blending_modes/lighten/Blending_modes_Lighten_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Lighten**.

.. _bm_lighter_color:

Lighter Color
~~~~~~~~~~~~~

.. figure:: /images/blending_modes/lighten/Blending_modes_Lighter_Color_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Lighter Color**.


.. _bm_linear_dodge:

Linear Dodge
~~~~~~~~~~~~

Exactly the same as :ref:`bm_addition`.

Put in for compatibility purposes.

.. figure:: /images/blending_modes/lighten/Blending_modes_Linear_Dodge_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Linear Dodge** (exactly the same as Addition).
   
.. _bm_easy_dodge:
   
Easy Dodge
~~~~~~~~~~

Aims to solve issues with Color Dodge blending mode by using a formula which falloff is similar to Dodge, but the falloff rate is softer. It is within the range of 0.0f and 1.0f unlike Color Dodge mode.

.. figure:: /images/blending_modes/lighten/Blending_modes_Easy_Dodge_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Easy Dodge**.
   
.. _bm_flatlight:
   
Flat Light
~~~~~~~~~~

The spreadout variation of Vivid Light mode which range is between 0.0f and 1.0f.

.. figure:: /images/blending_modes/lighten/Blending_modes_Flat_Light_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Flat Light**.

.. _bm_fog_lighten:

Fog Lighten (IFS Illusions)
~~~~~~~~~~~~~~~~~~~~~~~~~~~

Lightens the image in a way that there is a 'fog' in the end result. This is due to the unique property of fog lighten in which midtones combined are lighter than non-midtones blend.

.. figure:: /images/blending_modes/lighten/Blending_modes_Fog_Light_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Fog Lighten**.

.. _bm_linear_light:

Linear Light
~~~~~~~~~~~~

Similar to :ref:`bm_overlay`.

Combines :ref:`bm_linear_dodge` and :ref:`bm_linear_burn`. When the lightness of the upper-pixel is higher than 0.5, it uses Linear dodge, if not, Linear burn to blend the pixels.

.. figure:: /images/blending_modes/lighten/Blending_modes_Linear_Light_Gray_0.4_and_Gray_0.5.png
   :align: center

   Left: **Normal**. Right: **Linear Light**.

.. figure:: /images/blending_modes/lighten/Blending_modes_Linear_Light_Light_blue_and_Orange.png
   :align: center

   Left: **Normal**. Right: **Linear Light**.

.. figure:: /images/blending_modes/lighten/Blending_modes_Linear_Light_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Linear Light**.
   

.. _bm_luminosity_shine_sai:

Luminosity/Shine (SAI)
~~~~~~~~~~~~~~~~~~~~~~

Similar to :ref:`bm_addition`.

Takes the opacity of the new color (combined opacity of the layer, the brush, any used transparency masks etc.) and multiples the color by the opacity, then adds to the original/previous color.

.. math::

   c_{new} = c_{above}*{\alpha}_{above} + c_{below}

The result of this operation is the same as combining the new pixels with a fully opaque black layer in a :ref:`bm_normal` mode and then combining the result with the original layer using :ref:`bm_addition` mode. It should be also the same as the results of "Luminosity" blending mode in SAI1 or "Shine" blending mode in SAI2.



.. figure:: /images/blending_modes/lighten/Blending_modes_Luminosity_Shine_SAI_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Luminosity/Shine (SAI)**.




.. _bm_p-norm_a:

P-Norm A
~~~~~~~~

P-Norm A is similar to Screen blending mode which slightly darken images, and the falloff is more consistent all-around in terms of outline of values. Can be used an alternative to screen blending mode at times.

.. figure:: /images/blending_modes/lighten/Blending_modes_P-Norm_A_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **P-Norm A**.

.. _bm_p-norm_b:

P-Norm B
~~~~~~~~

P-Norm B is similar to Screen blending mode which slightly darken images, and the falloff is more consistent all-around in terms of outline of values. The falloff is sharper in P-Norm B than in P-Norm A. Can be used an alternative to screen blending mode at times.

.. figure:: /images/blending_modes/lighten/Blending_modes_P-Norm_B_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **P-Norm B**.

.. _bm_pin_light:

Pin Light
~~~~~~~~~

Checks which is darker the lower layer's pixel or the upper layer's double so bright.
Then checks which is brighter of that result or the inversion of the doubled lower layer.

.. figure:: /images/blending_modes/lighten/Blending_modes_Pin_Light_Gray_0.4_and_Gray_0.5.png
   :align: center

   Left: **Normal**. Right: **Pin Light**.

.. figure:: /images/blending_modes/lighten/Blending_modes_Pin_Light_Light_blue_and_Orange.png
   :align: center

   Left: **Normal**. Right: **Pin Light**.

.. figure:: /images/blending_modes/lighten/Blending_modes_Pin_Light_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Pin Light**.

.. _bm_screen:

Screen
~~~~~~

Perceptually the opposite of :ref:`bm_multiply`.

Mathematically, Screen takes both layers, inverts them, then multiplies them, and finally inverts them again.

This results in light tones being more opaque and dark tones transparent.

.. figure:: /images/blending_modes/lighten/Blending_modes_Screen_Gray_0.4_and_Gray_0.5.png
   :align: center

   Left: **Normal**. Right: **Screen**.

.. figure:: /images/blending_modes/lighten/Blending_modes_Screen_Light_blue_and_Orange.png
   :align: center

   Left: **Normal**. Right: **Screen**.

.. figure:: /images/blending_modes/lighten/Blending_modes_Screen_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Screen**.

.. _bm_soft_light:

Soft Light (Photoshop) & Soft Light SVG
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

These are less harsh versions of Hard Light, not resulting in full black or full white.

The SVG version is slightly different to the Photoshop version in that it uses a slightly different bit of formula when the lightness of the lower pixel is lower than 25%, this prevents the strength of the brightness increase.

.. figure:: /images/blending_modes/lighten/Blending_modes_Soft_Light_Photoshop_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Soft Light (Photoshop)**.


.. figure:: /images/blending_modes/lighten/Blending_modes_Soft_Light_SVG_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Soft Light (SVG)**.

Soft Light (IFS Illusions) & Soft Light (Pegtop-Delphi)
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

These are alternative versions of standard softlight modes which are made to solve discontinuities seen with the standard blend modes. Sometimes, these modes offer subtle advantages by offering more contrast within some areas, and these advantages are more or less noticeable within different color spaces and depth. 

.. figure:: /images/blending_modes/lighten/Blending_modes_Soft_Light_IFS_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Soft Light (IFS Illusions)**.


.. figure:: /images/blending_modes/lighten/Blending_modes_Soft_Light_PEGTOP_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Soft Light (Pegtop-Delphi)**.
   
.. _bm_super_light:

Super Light
~~~~~~~~~~~

Smoother variation of Hard Light blending mode with more contrast in it.

.. figure:: /images/blending_modes/lighten/Blending_modes_Super_Light_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Super Light**.

.. _bm_tint:

Tint (IFS Illusions)
~~~~~~~~~~~~~~~~~~~~

Basically, the blending mode only ends in shades of tints. This means that it's very useful for painting light colors while still in the range of tints.

.. figure:: /images/blending_modes/lighten/Blending_modes_Tint_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Tint**.

.. _bm_vivid_light:

Vivid Light
~~~~~~~~~~~

Similar to Overlay.

Mixes both Color Dodge and Burn blending modes. If the color of the upper layer is darker than 50%, the blending mode will be Burn, if not the blending mode will be Color Dodge.

.. warning::

    This algorithm doesn't use color dodge and burn, we don't know WHAT it does do but for Color Dodge and Burn you need to use :ref:`bm_hard_mix`.

.. figure:: /images/blending_modes/lighten/Blending_modes_Vivid_Light_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Vivid Light**.

