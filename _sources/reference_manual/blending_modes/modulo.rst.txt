.. meta::
   :description:
        Page about the modulo blending modes in Krita: 

.. metadata-placeholder

   :authors: - Reptorian <reptillia39@live.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Modulo
.. _bm_cat_modulo:

Modulo
------

Modulo modes are special class of blending modes which loops values when the value of channel blend layer is less than the value of channel in base layers. All modes in modulo modes retains the absolute of the remainder if the value is greater than the maximum value or the value is less than minimum value. Continuous modes assume if the calculated value before modulo operation is within the range between a odd number to even number, then values are inverted in the end result, so values are perceived to be wave-like. 

Furthermore, this would imply that modulo modes are beneficial for abstract art, and manipulation of gradients.

.. index:: ! Divisive Modulo
.. _bm_cat_divisive_modulo:

Divisive Modulo
~~~~~~~~~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Divisive Modulo" in English.

First, Base Layer is divided by the sum of blend layer and the minimum possible value after zero. Then, performs a modulo calculation using the value found with the sum of blend layer and the minimum possible value after zero.

.. figure:: /images/blending_modes/modulo/Blending_modes_Divisive_Modulo_Gradient_Comparison.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **Divisive Modulo**.

.. index:: ! Divisive Modulo - Continuous
.. _bm_cat_divisive_modulo-continuous:


Divisive Modulo - Continuous
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Divisive Modulo - Continuous" in English.

First, Base Layer is divided by the sum of blend layer and the minimum possible value after zero. Then, performs a modulo calculation using the value found with the sum of blend layer and the minimum possible value after zero. As this is a continuous mode, anything between odd to even numbers are inverted.

.. figure:: /images/blending_modes/modulo/Blending_modes_Divisive_Modulo_Continuous_Gradient_Comparison.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **Divisive Modulo - Continuous**.
   
.. index:: ! Modulo
.. _bm_modulo:

Modulo
~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Modulo" in English.

Performs a modulo calculation using the sum of blend layer and the minimum possible value after zero. 

.. figure:: /images/blending_modes/modulo/Blending_modes_Modulo_Gradient_Comparison.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **Modulo**.
   
.. index:: ! Modulo - Continuous
.. _bm_modulo-continuous:

Modulo - Continuous
~~~~~~~~~~~~~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Modulo - Continuous" in English.

Performs a modulo calculation using the sum of blend layer and the minimum possible value after zero. As this is a continuous mode, anything between odd to even numbers are inverted.

.. figure:: /images/blending_modes/modulo/Blending_modes_Modulo_Continuous_Gradient_Comparison.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **Modulo - Continuous**.
   
.. index:: ! Modulo Shift
.. _bm_modulo_shift:

Modulo Shift
~~~~~~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Modulo Shift" in English.

Performs a modulo calculation with the result of the sum of base and blend layer by the sum of blend layer with the minimum possible value after zero. 


.. figure:: /images/blending_modes/modulo/Blending_modes_Modulo_Shift_Gradient_Comparison.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **Modulo Shift**.
   
.. index:: ! Modulo Shift - Continuous
.. _bm_modulo_shift-continuous:

Modulo Shift - Continuous
~~~~~~~~~~~~~~~~~~~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "Modulo Shift - Continuous" in English.

Performs a modulo calculation with the result of the sum of base and blend layer by the sum of blend layer with the minimum possible value after zero.  As this is a continuous mode, anything between odd to even numbers are inverted.

.. figure:: /images/blending_modes/modulo/Blending_modes_Modulo_Shift_Continuous_Gradient_Comparison.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **Modulo Shift - Continuous**.
