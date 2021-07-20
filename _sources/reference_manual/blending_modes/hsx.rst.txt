.. meta::
   :description:
        Page about the HSX blending modes in Krita, amongst which Hue, Color, Luminosity and Saturation.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Maria Luisac
   :license: GNU free documentation license 1.3 or later.

.. index:: Hue, Saturation, Lightness, Luma, Luminosity, Intensity, Value, Brightness
.. _bm_cat_hsx:

HSX
---

Krita has four different HSX coordinate systems. The difference between them is how they handle tone.

HSI
~~~

HSI is a color coordinate system, using Hue, Saturation and Intensity to categorize a color.
Hue is roughly the wavelength, whether the color is red, yellow, green, cyan, blue or purple. It is measure in 360°, with 0 being red.
Saturation is the measurement of how close a color is to gray.
Intensity, in this case is the tone of the color. What makes intensity special is that it recognizes yellow (rgb:1,1,0) having a higher combined rgb value than blue (rgb:0,0,1). This is a non-linear tone dimension, which means it's gamma-corrected.

HSL
~~~

HSL is also a color coordinate system. It describes colors in Hue, Saturation and Lightness.
Lightness specifically puts both yellow (rgb:1,1,0), blue (rgb:0,0,1) and middle gray (rgb:0.5,0.5,0.5) at the same lightness (0.5).

HSV
~~~

HSV, occasionally called HSB, is a color coordinate system. It measures colors in Hue, Saturation, and Value (also called Brightness).
Value or Brightness specifically refers to strength at which the pixel-lights on your monitor have to shine. It sets Yellow (rgb:1,1,0), Blue (rgb:0,0,1) and White (rgb:1,1,1) at the same Value (100%).

HSY
~~~

HSY is a color coordinate system. It categorizes colors in Hue, Saturation and Luminosity. Well, not really, it uses Luma instead of true luminosity, the difference being that Luminosity is linear while Luma is gamma-corrected and just weights the rgb components.
Luma is based on scientific studies of how much light a color reflects in real-life. While like intensity it acknowledges that yellow (rgb:1,1,0) is lighter than blue (rgb:0,0,1), it also acknowledges that yellow (rgb:1,1,0) is lighter than cyan (rgb:0,1,1), based on these studies.

HSX Blending Modes
~~~~~~~~~~~~~~~~~~

.. _bm_color:
.. _bm_hsv_color:
.. _bm_hsl_color:
.. _bm_hsi_color:
.. _bm_hsy_color:

Color, HSV, HSI, HSL, HSY
^^^^^^^^^^^^^^^^^^^^^^^^^

.. only:: non_english

   .. hint:: These blending modes are called "Color" in English.

This takes the Luminosity/Value/Intensity/Lightness of the colors on the lower layer, and combines them with the Saturation and Hue of the upper pixels. We refer to Color HSY as 'Color' in line with other applications.

.. figure:: /images/blending_modes/hsx/Blending_modes_Color_HSI_Gray_0.4_and_Gray_0.5.png
   :align: center

   Left: **Normal**. Right: **Color HSI**.

.. figure:: /images/blending_modes/hsx/Blending_modes_Color_HSI_Light_blue_and_Orange.png
   :align: center

   Left: **Normal**. Right: **Color HSI**.

.. figure:: /images/blending_modes/hsx/Blending_modes_Color_HSI_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Color HSI**.


.. figure:: /images/blending_modes/hsx/Blending_modes_Color_HSL_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Color HSL**.


.. figure:: /images/blending_modes/hsx/Blending_modes_Color_HSV_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Color HSV**.


.. figure:: /images/blending_modes/hsx/Blending_modes_Color_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Color**.

.. _bm_hue:
.. _bm_hsv_hue:
.. _bm_hsl_hue:
.. _bm_hsi_hue:
.. _bm_hsy_hue:

Hue HSV, HSI, HSL, HSY
^^^^^^^^^^^^^^^^^^^^^^

.. only:: non_english

   .. hint:: These blending modes are called "Hue" in English.

Takes the saturation and tone of the lower layer and combines them with the hue of the upper-layer.
Tone in this case being either Value, Lightness, Intensity or Luminosity.

.. figure:: /images/blending_modes/hsx/Blending_modes_Hue_HSI_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Hue HSI**.


.. figure:: /images/blending_modes/hsx/Blending_modes_Hue_HSL_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Hue HSL**.


.. figure:: /images/blending_modes/hsx/Blending_modes_Hue_HSV_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Hue HSV**.


.. figure:: /images/blending_modes/hsx/Blending_modes_Hue_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Hue**.


.. _bm_increase_value:
.. _bm_increase_lightness:
.. _bm_increase_intensity:
.. _bm_increase_luminosity:

Increase Value, Lightness, Intensity or Luminosity.
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

.. only:: non_english

   .. hint:: These blending modes are called "Increase Value / Lightness / Intensity / Luminosity" in English.

Similar to lighten, but specific to tone.
Checks whether the upper layer's pixel has a higher tone than the lower layer's pixel. If so, the tone is increased, if not, the lower layer's tone is maintained.

.. figure:: /images/blending_modes/hsx/Blending_modes_Increase_Intensity_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Increase Intensity**.


.. figure:: /images/blending_modes/hsx/Blending_modes_Increase_Lightness_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Increase Lightness**.


.. figure:: /images/blending_modes/hsx/Blending_modes_Increase_Value_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Increase Value**.


.. figure:: /images/blending_modes/hsx/Blending_modes_Increase_Luminosity_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Increase Luminosity**.


.. _bm_increase_saturation:
.. _bm_increase_hsv_saturation:
.. _bm_increase_hsl_saturation:
.. _bm_increase_hsi_saturation:
.. _bm_increase_hsy_saturation:

Increase Saturation HSI, HSV, HSL, HSY
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

.. only:: non_english

   .. hint:: These blending modes are called "Increase Saturation" in English.

Similar to lighten, but specific to Saturation.
Checks whether the upper layer's pixel has a higher Saturation than the lower layer's pixel. If so, the Saturation is increased, if not, the lower layer's Saturation is maintained.

.. figure:: /images/blending_modes/hsx/Blending_modes_Increase_Saturation_HSI_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Increase Saturation HSI**.


.. figure:: /images/blending_modes/hsx/Blending_modes_Increase_Saturation_HSL_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Increase Saturation HSL**.


.. figure:: /images/blending_modes/hsx/Blending_modes_Increase_Saturation_HSV_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Increase Saturation HSV**.


.. figure:: /images/blending_modes/hsx/Blending_modes_Increase_Saturation_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Increase Saturation**.


.. _bm_intensity:

Intensity
^^^^^^^^^

.. only:: non_english

   .. hint:: This blending mode is called "Intensity" in English.

Takes the Hue and Saturation of the Lower layer and outputs them with the intensity of the upper layer.

.. figure:: /images/blending_modes/hsx/Blending_modes_Intensity_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Intensity**.

.. _bm_value:

Value
^^^^^

.. only:: non_english

   .. hint:: This blending mode is called "Value" in English.

Takes the Hue and Saturation of the Lower layer and outputs them with the Value of the upper layer.

.. figure:: /images/blending_modes/hsx/Blending_modes_Value_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Value**.

.. _bm_lightness:

Lightness
^^^^^^^^^

.. only:: non_english

   .. hint:: This blending mode is called "Lightness" in English.

Takes the Hue and Saturation of the Lower layer and outputs them with the Lightness of the upper layer.

.. figure:: /images/blending_modes/hsx/Blending_modes_Lightness_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Lightness**.

.. _bm_luminosity:

Luminosity
^^^^^^^^^^

.. only:: non_english

   .. hint:: This blending mode is called "Luminosity" in English.

As explained above, actually Luma, but called this way as it's in line with the terminology in other applications.
Takes the Hue and Saturation of the Lower layer and outputs them with the Luminosity of the upper layer. 
The most preferred one of the four Tone blending modes, as this one gives fairly intuitive results for the Tone of a hue.

.. figure:: /images/blending_modes/hsx/Blending_modes_Luminosity_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Luminosity**.

.. _bm_saturation:
.. _bm_hsv_saturation:
.. _bm_hsl_saturation:
.. _bm_hsi_saturation:
.. _bm_hsy_saturation:

Saturation HSI, HSV, HSL, HSY
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

.. only:: non_english

   .. hint:: These blending modes are called "Saturation" in English.

Takes the Intensity and Hue of the lower layer, and outputs them with the HSI saturation of the upper layer.

.. figure:: /images/blending_modes/hsx/Blending_modes_Saturation_HSI_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Saturation HSI**.


.. figure:: /images/blending_modes/hsx/Blending_modes_Saturation_HSL_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Saturation HSL**.


.. figure:: /images/blending_modes/hsx/Blending_modes_Saturation_HSV_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Saturation HSV**.


.. figure:: /images/blending_modes/hsx/Blending_modes_Saturation_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Saturation**.

.. _bm_decrease_value:
.. _bm_decrease_lightness:
.. _bm_decrease_intensity:
.. _bm_decrease_luminosity:

Decrease Value, Lightness, Intensity or Luminosity
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

.. only:: non_english

   .. hint:: These blending modes are called "Decrease Value / Lightness / Intensity / Luminosity" in English.

Similar to darken, but specific to tone.
Checks whether the upper layer's pixel has a lower tone than the lower layer's pixel. If so, the tone is decreased, if not, the lower layer's tone is maintained.

.. figure:: /images/blending_modes/hsx/Blending_modes_Decrease_Intensity_Gray_0.4_and_Gray_0.5.png
   :align: center

   Left: **Normal**. Right: **Decrease Intensity**.

.. figure:: /images/blending_modes/hsx/Blending_modes_Decrease_Intensity_Light_blue_and_Orange.png
   :align: center

   Left: **Normal**. Right: **Decrease Intensity**.

.. figure:: /images/blending_modes/hsx/Blending_modes_Decrease_Intensity_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Decrease Intensity**.


.. figure:: /images/blending_modes/hsx/Blending_modes_Decrease_Lightness_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Decrease Lightness**.


.. figure:: /images/blending_modes/hsx/Blending_modes_Decrease_Value_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Decrease Value**.


.. figure:: /images/blending_modes/hsx/Blending_modes_Decrease_Luminosity_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Decrease Luminosity**.

.. _bm_decrease_saturation:
.. _bm_decrease_hsv_saturation:
.. _bm_decrease_hsl_saturation:
.. _bm_decrease_hsi_saturation:
.. _bm_decrease_hsy_saturation:

Decrease Saturation HSI, HSV, HSL, HSY
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

.. only:: non_english

   .. hint:: These blending modes are called "Decrease Saturation" in English.

Similar to darken, but specific to Saturation.
Checks whether the upper layer's pixel has a lower Saturation than the lower layer's pixel. If so, the Saturation is decreased, if not, the lower layer's Saturation is maintained.

.. figure:: /images/blending_modes/hsx/Blending_modes_Decrease_Saturation_HSI_Gray_0.4_and_Gray_0.5.png
   :align: center

   Left: **Normal**. Right: **Decrease Saturation HSI**.

.. figure:: /images/blending_modes/hsx/Blending_modes_Decrease_Saturation_HSI_Light_blue_and_Orange.png
   :align: center

   Left: **Normal**. Right: **Decrease Saturation HSI**.

.. figure:: /images/blending_modes/hsx/Blending_modes_Decrease_Saturation_HSI_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Decrease Saturation HSI**.


.. figure:: /images/blending_modes/hsx/Blending_modes_Decrease_Saturation_HSL_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Decrease Saturation HSL**.


.. figure:: /images/blending_modes/hsx/Blending_modes_Decrease_Saturation_HSV_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Decrease Saturation HSV**.


.. figure:: /images/blending_modes/hsx/Blending_modes_Decrease_Saturation_Sample_image_with_dots.png
   :align: center

   Left: **Normal**. Right: **Decrease Saturation**.
