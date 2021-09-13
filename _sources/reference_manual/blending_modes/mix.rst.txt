.. meta::
   :description:
        Page about the mix blending modes in Krita: Allanon, Alpha Darken, Behind, Erase, Geometric Mean, Grain Extract, Grain Merge, Greater, Hard Mix, Hard Overlay, Interpolation, Interpolation2x, Normal, Overlay, Parallel, Penumbra A, B, C and D.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Maria Luisac
             - Reptorian <reptillia39@live.com>
             - Deif Lou <ginoba@gmail.com>
   :license: GNU free documentation license 1.3 or later.


.. _bm_cat_mix:

Mix
---

.. index:: ! Allanon
.. _bm_allanon:

Allanon
~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Allanon" in English.

Blends the upper layer as half-transparent with the lower. (It adds the two layers together and then halves the value).

.. figure:: /images/blending_modes/mix/Blending_modes_Allanon_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Allanon**.

.. index:: ! Interpolation
.. _bm_interpolation:

Interpolation
~~~~~~~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Interpolation" in English.

Subtract 0.5f by 1/4 of cosine of base layer subtracted by 1/4 of cosine of blend layer assuming 0-1 range.
The result is similar to Allanon mode, but with more contrast and functional difference to 50% opacity.

.. figure:: /images/blending_modes/mix/Blending_modes_Interpolation_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Interpolation**.
   
.. index:: ! Interpolation2x
.. _bm_interpolation2x:

Interpolation - 2X
~~~~~~~~~~~~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Interpolation - 2X" in English.

Applies Interpolation blend mode to base and blend layers, then duplicates to repeat interpolation blending.

.. figure:: /images/blending_modes/mix/Blending_modes_Interpolation_X2_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Interpolation - 2X**.

.. index:: ! Alpha Darken
.. _bm_alpha_darken:

Alpha Darken
~~~~~~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Alpha Darken" in English.

As far as I can tell this seems to premultiply the alpha, as is common in some file-formats.

.. figure:: /images/blending_modes/mix/Blending_modes_Alpha_Darken_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Alpha Darken**.

.. index:: ! Behind
.. _bm_behind:

Behind
~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Behind" in English.

Does the opposite of Normal, and tries to have the upper layer rendered below the lower layer.

.. figure:: /images/blending_modes/mix/Blending_modes_Behind_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Behind**.

.. index:: ! Erase (Blending Mode)
.. _bm_erase:

Erase
~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Erase" in English.

This subtracts the opaque pixels of the upper layer from the lower layer, effectively erasing.

.. figure:: /images/blending_modes/mix/Blending_modes_Erase_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Erase**.

.. index:: ! Geometric Mean
.. _bm_geometric_mean:

Geometric Mean
~~~~~~~~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Geometric Mean" in English.

This blending mode multiplies the top layer with the bottom, and then outputs the square root of that.

.. figure:: /images/blending_modes/mix/Blending_modes_Geometric_Mean_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Geometric Mean**.

.. index:: ! Grain Extract
.. _bm_grain_extract:

Grain Extract
~~~~~~~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Grain Extract" in English.

Similar to Subtract, the colors of the upper layer are subtracted from the colors of the lower layer, and then 50% gray is added.

.. figure:: /images/blending_modes/mix/Blending_modes_Grain_Extract_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Grain Extract**.

.. index:: ! Grain Merge
.. _bm_grain_merge:

Grain Merge
~~~~~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Grain Merge" in English.

Similar to Addition, the colors of the upper layer are added to the colors, and then 50% gray is subtracted.

.. figure:: /images/blending_modes/mix/Blending_modes_Grain_Merge_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Grain Merge**.

.. index:: ! Greater (Blending Mode)
.. _bm_greater:

Greater
~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Greater" in English.

A blending mode which checks whether the painted color is painted with a higher opacity than the existing colors. If so, it paints over them, if not, it doesn't paint at all.

.. image:: /images/blending_modes/mix/Greaterblendmode.gif
   :align: center

.. index:: ! Hard Mix
.. _bm_hard_mix:
   
Hard Mix
~~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Hard Mix" in English.

Similar to Overlay.

Mixes both Color Dodge and Burn blending modes. If the color of the upper layer is darker than 50%, the blending mode will be Burn, if not the blending mode will be Color Dodge.

.. figure:: /images/blending_modes/mix/Blending_modes_Hard_Mix_Sample_image_with_dots.png
   :figwidth: 800
   :align: center
   
   Left: **Normal**. Right: **Hard Mix**.

.. index:: ! Hard Mix (Photoshop)
.. _bm_hard_mix_photoshop:

Hard Mix (Photoshop)
~~~~~~~~~~~~~~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Hard Mix (Photoshop)" in English.

This is the Hard Mix blending mode as it is implemented in Photoshop.

.. figure:: /images/blending_modes/mix/Krita_4_0_hard_mix_ps.png
   :figwidth: 800
   :align: center
   
   **Left**: Dots are mixed in with the normal blending mode, on the **Right**: Dots are mixed in with hardmix.
   
This add the two values, and then checks if the value is above the maximum. If so it will output the maximum, otherwise the minimum.

.. index:: ! Hard Mix Softer (Photoshop)
.. _bm_hard_mix_softer_photoshop:

Hard Mix Softer (Photoshop)
~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Hard Mix Softer (Photoshop)" in English.

.. versionadded:: 5.0

This is the Hard Mix blending mode as it is implemented in Photoshop for texturing brushes. It produces softer edges
than the normal *Hard Mix (Photoshop)*.

.. figure:: /images/blending_modes/mix/Blending_modes_Hard_Mix_Softer_Photoshop_Sample_image_with_dots.png
   :figwidth: 800
   :align: center
   
   **Left**: Dots are mixed in with the normal blending mode, on the **Right**: Dots are mixed in with hard mix softer.
   
This is like the Inverse Subtract mode but the two terms are scaled up to increase the contrast. This is not really a
Hard Mix mode in the sense that it doesn't choose between a result or another based on a threshold, although in most
cases the result looks like the normal *Hard Mix (Photoshop)* but with softer edges.

.. index:: ! Hard Overlay
.. _bm_hard_overlay:

Hard Overlay
~~~~~~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Hard Overlay" in English.

.. versionadded:: 4.0

Similar to Hard Light but Hard Light use Screen when the value is above 50%. Divide gives better results than Screen, especially on floating point images.

.. figure:: /images/blending_modes/mix/Blending_modes_Hard_Overlay_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Hard Overlay**.

.. index:: ! Normal (Blending Mode), Source Over
.. _bm_normal:

Normal
~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Normal" in English.

As you may have guessed this is the default Blending mode for all layers.

In this mode, the computer checks on the upper layer how transparent a pixel is, which color it is, and then mixes the color of the upper layer with the lower layer proportional to the transparency.

.. figure:: /images/blending_modes/mix/Blending_modes_Normal_50_Opacity_Sample_image_with_dots.png
   :align: center

   Left: **Normal** 100% Opacity. Right: **Normal** 50% Opacity.

.. index:: ! Overlay (Blending Mode)
.. _bm_overlay:

Overlay
~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Overlay" in English.

A combination of the Multiply and Screen blending modes, switching between both at a middle-lightness.

Overlay checks if the color on the upper layer has a lightness above 0.5. If so, the pixel is blended like in Screen mode, if not the pixel is blended like in Multiply mode.

This is useful for deepening shadows and highlights.

.. figure:: /images/blending_modes/mix/Blending_modes_Overlay_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Overlay**.

.. index:: ! Parallel
.. _bm_parallel:

Parallel
~~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Parallel" in English.

This one first takes the percentage in decimals for both layers.
It then adds the two values.
Divides 2 by the sum.

.. figure:: /images/blending_modes/mix/Blending_modes_Parallel_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Parallel**.

.. index:: ! Penumbra A
.. _bm_penumbra_a:

Penumbra A
~~~~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Penumbra A" in English.

Creates a linear penumbra falloff. This means most tones will be in the midtone ranges.

.. figure:: /images/blending_modes/mix/Blending_modes_Penumbra_A_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Penumbra A**.
   
.. index:: ! Penumbra B
.. _bm_penumbra_b:

Penumbra B
~~~~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Penumbra B" in English.

Penumbra A with source and destination layer swapped.

.. figure:: /images/blending_modes/mix/Blending_modes_Penumbra_B_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Penumbra B**.
   
.. index:: ! Penumbra C
.. _bm_penumbra_c:

Penumbra C
~~~~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Penumbra C" in English.

Creates a penumbra-like falloff using arc-tangent formula. This means most tones will be in the midtone ranges.

.. figure:: /images/blending_modes/mix/Blending_modes_Penumbra_C_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Penumbra C**.
   
.. index:: ! Penumbra D
.. _bm_penumbra_d:

Penumbra D
~~~~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Penumbra D" in English.

Penumbra C with source and destination layer swapped.

.. figure:: /images/blending_modes/mix/Blending_modes_Penumbra_D_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Penumbra D**.
