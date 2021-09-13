.. meta::
   :description:
        Page about the binary blending modes in Krita: 

.. metadata-placeholder

   :authors: - Reptorian <reptillia39@live.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Binary
.. _bm_cat_binary:

Binary
------

Binary modes are a special class of blending modes which utilize binary operators for calculations. Binary modes are unlike every other blending modes as these modes have a fractal attribute with falloff similar to other blending modes. Binary modes can be used for generation of abstract art using layers with very smooth surfaces. All binary modes have capitalized letters to distinguish themselves from other blending modes. 

To clarify on how binary modes work, convert decimal values to binary values, then treat 1 or 0 as T or F respectively, and use binary operation to get the end result, and then convert the result back to decimal.

.. warning::
    
    Binary blending modes do not work on float images or negative numbers! So, don't report bugs about using binary modes on unsupported color spaces.

.. index:: ! AND
.. _bm_cat_AND:

AND
~~~

.. only:: non_english

   .. hint:: This blending mode is called "AND" in English.

Performs the AND operation for the base and blend layer. Similar to multiply blending mode.

.. figure:: /images/blending_modes/binary/Blend_modes_AND_map.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **AND**.

.. figure:: /images/blending_modes/binary/Blending_modes_AND_Gradients.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **AND**.
.. index:: ! CONVERSE
.. _bm_CONVERSE:


CONVERSE
~~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "CONVERSE" in English.

Performs the inverse of IMPLICATION operation for the base and blend layer. Similar to screen mode with blend layer and base layer inverted.

.. figure:: /images/blending_modes/binary/Blend_modes_CONVERSE_map.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **CONVERSE**.
   
.. figure:: /images/blending_modes/binary/Blending_modes_CONVERSE_Gradients.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **CONVERSE**.

.. index:: ! IMPLICATION
.. _bm_IMPLICATION:

IMPLICATION
~~~~~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "IMPLICATION" in English.

Performs the IMPLICATION operation for the base and blend layer. Similar to screen mode with base layer inverted.

.. figure:: /images/blending_modes/binary/Blend_modes_IMPLIES_map.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **IMPLICATION**.
   
.. figure:: /images/blending_modes/binary/Blending_modes_IMPLIES_Gradients.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **IMPLICATION**.
   
.. index:: ! NAND
.. _bm_NAND:

NAND
~~~~

.. only:: non_english

   .. hint:: This blending mode is called "NAND" in English.

Performs the inverse of AND operation for base and blend layer. Similar to the inverted multiply mode.

.. figure:: /images/blending_modes/binary/Blend_modes_NAND_map.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **NAND**.

.. figure:: /images/blending_modes/binary/Blending_modes_NAND_Gradients.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **NAND**.

.. index:: ! NOR
.. _bm_NOR:

NOR
~~~

.. only:: non_english

   .. hint:: This blending mode is called "NOR" in English.

Performs the inverse of OR operation for base and blend layer. Similar to the inverted screen mode. 

.. figure:: /images/blending_modes/binary/Blend_modes_NOR_map.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **NOR**.
   
.. figure:: /images/blending_modes/binary/Blending_modes_NOR_Gradients.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **NOR**.

.. index:: ! NOT CONVERSE
.. _bm_NOT_CONVERSE:

NOT CONVERSE
~~~~~~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "NOT CONVERSE" in English.

Performs the inverse of CONVERSE operation for base and blend layer. Similar to the multiply mode with base layer and blend layer inverted.

.. figure:: /images/blending_modes/binary/Blend_modes_NOT_CONVERSE_map.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **NOT CONVERSE**.
   
.. figure:: /images/blending_modes/binary/Blending_modes_NOT_CONVERSE_Gradients.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **NOT CONVERSE**.

.. index:: ! NOT IMPLICATION
.. _bm_NOT_IMPLICATION:

NOT IMPLICATION
~~~~~~~~~~~~~~~

.. only:: non_english

   .. hint:: This blending mode is called "NOT IMPLICATION" in English.

Performs the inverse of IMPLICATION operation for base and blend layer. Similar to the multiply mode with the blend layer inverted.

.. figure:: /images/blending_modes/binary/Blend_modes_NOT_IMPLICATION_map.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **NOT IMPLICATION**.
   
.. figure:: /images/blending_modes/binary/Blending_modes_NOT_IMPLICATION_Gradients.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **NOT IMPLICATION**.
    
.. index:: ! OR
.. _bm_OR:

OR
~~

.. only:: non_english

   .. hint:: This blending mode is called "OR" in English.

Performs the OR operation for base and blend layer. Similar to screen mode.

.. figure:: /images/blending_modes/binary/Blend_modes_OR_map.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **OR**.
   
.. figure:: /images/blending_modes/binary/Blending_modes_OR_Gradients.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **XOR**.
    
.. index:: ! XOR
.. _bm_XOR:

XOR
~~~

.. only:: non_english

   .. hint:: This blending mode is called "XOR" in English.

Performs the XOR operation for base and blend layer. This mode has a special property that if you duplicate the blend layer twice, you get the base layer. 

.. figure:: /images/blending_modes/binary/Blend_modes_XOR_map.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **XOR**.
   
.. figure:: /images/blending_modes/binary/Blending_modes_XOR_Gradients.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **XOR**.
    
.. index:: ! XNOR
.. _bm_XNOR:

XNOR
~~~~

.. only:: non_english

   .. hint:: This blending mode is called "XNOR" in English.

Performs the XNOR operation for base and blend layer. This mode has a special property that if you duplicate the blend layer twice, you get the base layer. 

.. figure:: /images/blending_modes/binary/Blend_modes_XNOR_map.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **XNOR**.

.. figure:: /images/blending_modes/binary/Blending_modes_XNOR_Gradients.png
   :align: center

   Left: **Base Layer**. Middle: **Blend Layer**. Right: **XNOR**.
