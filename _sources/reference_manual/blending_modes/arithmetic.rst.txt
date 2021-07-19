.. meta::
   :description lang=en:
        Page about the arithmetic blending modes in Krita: Addition, Divide, Inverse Subtract, Multiply and Subtract.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Maria Luisac
   :license: GNU free documentation license 1.3 or later.

.. _bm_cat_arithmetic:

Arithmetic
----------

These blending modes are based on simple maths.

.. index:: Addition (Blending Mode)
.. _bm_addition:

Addition
~~~~~~~~

Adds the numerical values of two colors together:

Yellow(1, 1, 0) + Blue(0, 0, 1) = White(1, 1, 1)

Darker Gray(0.4, 0.4, 0.4) + Lighter Gray(0.5, 0.5, 0.5) = Even Lighter Gray (0.9, 0.9, 0.9) 

.. figure:: /images/blending_modes/arithmetic/Blending_modes_Addition_Gray_0.4_and_Gray_0.5_n.png
   :align: center

   Left: **Normal**. Right: **Addition**.

Light Blue(0.1608, 0.6274, 0.8274) + Orange(1, 0.5961, 0.0706) = (1.1608, 1.2235, 0.8980) → Very Light Yellow(1, 1, 0.8980)

.. figure:: /images/blending_modes/arithmetic/Blending_modes_Addition_Light_blue_and_Orange.png
   :align: center

   Left: **Normal**. Right: **Addition**.

Red(1, 0, 0) + Gray(0.5, 0.5, 0.5) = Pink(1, 0.5, 0.5)

.. figure:: /images/blending_modes/arithmetic/Blending_modes_Addition_Red_plus_gray.png
   :align: center

   Left: **Normal**. Right: **Addition**.

When the result of the addition is more than 1, white is the color displayed. Therefore, white plus any other color results in white. On the other hand, black plus any other color results in the added color.

.. figure:: /images/blending_modes/arithmetic/Blending_modes_Addition_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Addition**.

.. _bm_divide:

Divide
~~~~~~

Divides the numerical value from the lower color by the upper color.

Red(1, 0, 0) / Gray(0.5, 0.5, 0.5) = (2, 0, 0) → Red(1, 0, 0)

Darker Gray(0.4, 0.4, 0.4) / Lighter Gray(0.5, 0.5, 0.5) = Even Lighter Gray (0.8, 0.8, 0.8) 

.. figure:: /images/blending_modes/arithmetic/Blending_modes_Divide_Gray_0.4_and_Gray_0.5_n.png
   :align: center

   Left: **Normal**. Right: **Divide**.

Light Blue(0.1608, 0.6274, 0.8274) / Orange(1, 0.5961, 0.0706) = (0.1608, 1.0525, 11.7195) → Aqua(0.1608, 1, 1)

.. figure:: /images/blending_modes/arithmetic/Blending_modes_Divide_Light_blue_and_Orange.png
   :align: center

   Left: **Normal**. Right: **Divide**.

.. figure:: /images/blending_modes/arithmetic/Blending_modes_Divide_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Divide**.

.. _bm_inverse_subtract:

Inverse Subtract
~~~~~~~~~~~~~~~~

This inverts the lower layer before subtracting it from the upper layer.

Lighter Gray(0.5, 0.5, 0.5)_(1_Darker Gray(0.4, 0.4, 0.4)) = (-0.1, -0.1, -0.1) → Black(0, 0, 0)

.. figure:: /images/blending_modes/arithmetic/Blending_modes_Inverse_Subtract_Gray_0.4_and_Gray_0.5_n.png
   :align: center

   Left: **Normal**. Right: **Inverse Subtract**.

Orange(1, 0.5961, 0.0706)_(1_Light Blue(0.1608, 0.6274, 0.8274)) = (0.1608, 0.2235, -0.102) → Dark Green(0.1608, 0.2235, 0)

.. figure:: /images/blending_modes/arithmetic/Blending_modes_Inverse_Subtract_Light_blue_and_Orange.png
   :align: center

   Left: **Normal**. Right: **Inverse Subtract**.

.. figure:: /images/blending_modes/arithmetic/Blending_modes_Inverse_Subtract_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Inverse Subtract**.

.. _bm_multiply:

Multiply
~~~~~~~~

Multiplies the two colors with each other, but does not go beyond the upper limit.

This is often used to color in a black and white lineart.
One puts the black and white lineart on top, sets the layer to 'Multiply', and then draws in color on a layer beneath. Multiply will allow all the color to go through.

White(1,1,1) x White(1, 1, 1) = White(1, 1, 1)

White(1, 1, 1) x Gray(0.5, 0.5, 0.5) = Gray(0.5, 0.5, 0.5)

Darker Gray(0.4, 0.4, 0.4) x Lighter Gray(0.5, 0.5, 0.5) = Even Darker Gray (0.2, 0.2, 0.2)

.. figure:: /images/blending_modes/arithmetic/Blending_modes_Multiply_Gray_0.4_and_Gray_0.5_n.png
   :align: center

   Left: **Normal**. Right: **Multiply**.

Light Blue(0.1608, 0.6274, 0.8274) x Orange(1, 0.5961, 0.0706) = Green(0.1608, 0.3740, 0.0584)

.. figure:: /images/blending_modes/arithmetic/Blending_modes_Multiply_Light_blue_and_Orange.png
   :align: center

   Left: **Normal**. Right: **Multiply**.

.. figure:: /images/blending_modes/arithmetic/Blending_modes_Multiply_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Multiply**.

.. _bm_subtract:

Subtract
~~~~~~~~

Subtracts the top layer from the bottom layer.

White(1, 1, 1)_White(1, 1, 1) = Black(0, 0, 0)

White(1, 1, 1)_Gray(0.5, 0.5, 0.5) = Gray(0.5, 0.5, 0.5)

Darker Gray(0.4, 0.4, 0.4)_Lighter Gray(0.5, 0.5, 0.5) = (-0.1, -0.1, -0.1) → Black(0, 0, 0)

.. figure:: /images/blending_modes/arithmetic/Blending_modes_Subtract_Gray_0.4_and_Gray_0.5_n.png
   :align: center

   Left: **Normal**. Right: **Subtract**.

Light Blue(0.1608, 0.6274, 0.8274) - Orange(1, 0.5961, 0.0706) = (-0.8392, 0.0313, 0.7568) → Blue(0, 0.0313, 0.7568)

.. figure:: /images/blending_modes/arithmetic/Blending_modes_Subtract_Light_blue_and_Orange.png
   :align: center

   Left: **Normal**. Right: **Subtract**.

.. figure:: /images/blending_modes/arithmetic/Blending_modes_Subtract_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Subtract**.

