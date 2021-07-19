.. meta::
   :description:
        Page about the negative blending modes in Krita: Additive Subtractive, Arcus Tangent, Difference, Equivalence, Exclusion, Negation.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Maria Luisac
             - Reptorian <reptillia39@live.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Negative
.. _bm_cat_negative:

Negative
--------

These are all blending modes which seem to make the image go negative.

.. index:: ! Additive Subtractive
.. _bm_additive_subtractive:

Additive Subtractive
~~~~~~~~~~~~~~~~~~~~
Subtract the square root of the lower layer from the upper layer.

.. figure:: /images/blending_modes/negative/Blending_modes_Additive_Subtractive_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Additive Subtractive**.

.. index:: ! Arcus Tangent
.. _bm_arcus_tangent:

Arcus Tangent
~~~~~~~~~~~~~

Divides the lower layer by the top. Then divides this by Pi.
Then uses that in an Arc tangent function, and multiplies it by two.

.. figure:: /images/blending_modes/negative/Blending_modes_Arcus_Tangent_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Arcus Tangent**.

.. index:: ! Difference
.. _bm_difference:

Difference
~~~~~~~~~~

Checks per pixel of which layer the pixel-value is highest/lowest, and then subtracts the lower value from the higher-value.


.. figure:: /images/blending_modes/negative/Blending_modes_Difference_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Difference**.

.. index:: ! Equivalence
.. _bm_equivalence:

Equivalence
~~~~~~~~~~~

Subtracts the underlying layer from the upper-layer. Then inverts that. Seems to produce the same result as :ref:`bm_difference`.


.. figure:: /images/blending_modes/negative/Blending_modes_Equivalence_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Equivalence**.

.. index:: ! Exclusion
.. _bm_exclusion:

Exclusion
~~~~~~~~~

This multiplies the two layers, adds the source, and then subtracts the multiple of two layers twice.

.. figure:: /images/blending_modes/negative/Blending_modes_Exclusion_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Exclusion**.

.. index:: ! Negation
.. _bm_negation:
   
Negation
~~~~~~~~~

The absolute of the 1.0f value subtracted by base subtracted by the blend layer. abs(1.0f - Base - Blend)

.. figure:: /images/blending_modes/negative/Blending_modes_Negation_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Negation**.
