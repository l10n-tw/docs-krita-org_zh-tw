.. meta::
   :description lang=en:
        Overview of the small color selector docker.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Color, Color Selector, Small Color Selector
.. _small_color_selector:

====================
Small Color Selector
====================

.. image:: /images/dockers/Krita_Small_Color_Selector_Docker.png

This is Krita's most simple color selector. On the left there's a bar with the hue, and on the right a square where you can pick the value and saturation.

.. versionadded:: 4.2
    
    The small color selector is the only selector which can show HDR values. When your build of Krita is HDR enabled and you are on Windows, you can drag the slider at the bottom to increase the 'nits' of the colors in the small selector. This is the direct value of the brightness of the colors, and you need a value above 100 (100 being the maximum value used for the brightest value of sRGB colors), to have an HDR color. The small color selector will also select wide gamut values.
