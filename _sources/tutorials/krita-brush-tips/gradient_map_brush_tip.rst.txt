.. meta::
   :description property=og\:description:
        How to use gradient map brush tips for loading multiple colors onto a brush.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Rosemåling, !Gradient Brush Tips,
.. _gradient_brush_tips:

=======================
Gradient Map Brush Tips
=======================

Used in Rosemåling and single-stroke flower paintings, the technique of loading two separate colors can be emulated in Krita with :ref:`gradient-mapped brush tips <predefined_brush_tip>`.

Gradient mapped tips work much in the same way as the gradient map filter does: The grey-values of each pixel in the brush is mapped to the gradient color. As gradients can have some of their colors be assigned to be the fore or background color, you can effectively make dual-loaded brush tips this way.

.. figure:: /images/brush-tips/gradient_map_example.svg
   :alt: Graphic demonstrating how gradients map to grayscale values.
   :width: 800
   
   If we imagine a continuous color gradient mapping to a grayscale gradient, we can imagine how grayscale colors can be transformed to the colors of the gradient. This is called gradient mapping, because you are mapping a grayscale to a gradient.
   

Making such a tip is actually quite easy:

1. Make a tip that's black on one side and white on the other
2. :menuselection:`Select --> Select All`
3. :menuselection:`Edit --> Copy Merged`
4. :kbd:`f5` to call up the brush settings. There, go to the :menuselection:`Brush tip --> Predefined` tab, and select :guilabel:`Clipboard`.
5. In the popup, give it any name you want, and then make sure to **untick** :guilabel:`Create Mask From Color` (as that would make the lighter colors transparent). Press ok.
6. Then select the new brush tip. Set :guilabel:`Brush mode` to :guilabel:`Gradient Map`, and adjust other brush settings like :guilabel:`Spacing`.
7. Draw with your brush. Switching the active gradient in the toolbar allows you to use different colors. The :guilabel:`Fore to Background` gradient is especially useful here, as it always uses the currently selected fore and background color.

.. figure:: /images/brush-tips/gradient_map_tips.png
   :alt: A selection of different brush tips and their gradient map results.
   
   Different brush tips lead to different kinds of strokes. The last stroke in the above examples was done using the :guilabel:`Lightness Map` brush mode, which only uses the current foreground color.

With :guilabel:`Rotation` to mapped to :guilabel:`Drawing angle`, you can easily create effects like Rosemåling, while you'll need a tilt-enabled tablet for single stroke brushes.

.. figure:: /images/brush-tips/gradient_map_brush_tip_rosemaling.png
   :alt: An example of Rosemåling, the drawing of curly decorative plant motives with gradiated strokes using the gradient map tips.
   
.. figure:: /images/brush-tips/gradient_map_brush_tip_flowers_patterned.png
   :alt: Example showing both gradient map on the brush tip and on the pattern.

The texture option also has the ability to map its greys to a texture. Combining both these gradient map functions together with the strength parameter to switch between either, and you can make cool results like the above.
