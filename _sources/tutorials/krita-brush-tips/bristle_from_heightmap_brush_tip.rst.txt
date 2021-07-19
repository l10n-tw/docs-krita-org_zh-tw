.. meta::
   :description property=og\:description:
        Tutorial on how to create a presure sensitive brush with a bristle effect.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Sharpness, Bristle brushes, Lightness Map
.. _heightmap_bristle_brush_tips:

============================
Heightmap Bristle Brush Tips
============================

When looking at oil paintings, especially the impressionistic ones, it is hard not to be in awe of the effect the visible brush strokes have on the the painting. While a digital painting program is a fundamentally different medium from the oil paint one, we can utilize some tricks to get visible brush strokes.

The simplest way to get a visible brush stroke is to select a :ref:`predefined brush <predefined_brush_tip>`. If you select one with several separate dots, and lower the spacing to 0.02, you can get a sort of brush stroke effect. But we can do better, for example, how about a brush which gives more coverage, the harder you press?

.. figure:: /images/brush-tips/sharpness_bristle_examples_0.png
   :alt: Image showing a simple bristle-like stroke.

Using the sharpness option.
---------------------------

We can achieve that effect with the sharpness option. Consider the following brush tip. We've used the gradient tool to draw two concentric foreground-to-transparent gradients side by side on a white-filled layer. Then we used the elliptical selection tool with :menuselection:`Edit --> Copy Merged` to cut out an ellipse shape, and then used the clipboard option in the predfined brush chooser to create a new brush.

.. figure:: /images/brush-tips/sharpness_bristle_examples_1.png
   :alt: Simple brush with many gradients as a stroke.


By default this isn't a very interesting brush. But when selecting the :guilabel:`Sharpness` option available in the pixel brush engine, it gives a totally different result:

.. figure:: /images/brush-tips/sharpness_bristle_examples_2.png
   :alt: Image as above but then with sharpness option enabled.

The darker areas of the brush will be drawn first, and the lightest areas of the brush only at very high pressure. By adding more soft dots to the whole, we can get an even more interesting brush:

.. figure:: /images/brush-tips/sharpness_bristle_examples_3.png
   :alt: Image as above but then with a complexer main image.

In effect, we are creating a kind of heightmap here. With the darkest dots representing the longest hairs, and the lightest pixels the shortest. With some effort, you can represent a ton of different brushes this way:

.. figure:: /images/brush-tips/sharpness_bristle_brushes_shapes.png
   :alt: A collection of potential bristle brushes with a little image of the kind of brush that is being simulated.
   
   By putting the darkest spot into different locations, we can get a variety of strokes.

But we can go even further. For example, how about making this a lightness brush? This can be done by...

1. Opening the brush in Krita.
2. Inverting via :menuselection:`Filter --> Adjust --> Invert`
3. Duplicating the layer.
4. Then using :menuselection:`Filter --> Map --> Phongbump Map` on the topmost layer.
5. Then select the lowest layer. |mouseright| for the context menu, then select :menuselection:`convert --> to transparency mask`.
6. Finally, to soften the result, you can merge the layer and apply a bit of motion blur. Especially when using together with rotation set to drawing angle or tilt, some plain horizontal motion blur will reduce stray pixel artifacts.

Then select all, copy, and use the clipboard function in the predefined brushes menu, and make sure to make sure to **untick** :guilabel:`Create Mask From Color`. What we're effectively doing here is ensuring that the transparency is being used for the sharpness, while having the color be using for the lightness map.

Now select the brush and set the :guilabel:`Brush mode` to :guilabel:`Lightness Map`, and draw with a color that isn't black for the best effect.

.. figure:: /images/brush-tips/sharpness_lightness_examples.png
   :alt: Image showing various lightnes map strokes.
   
   A variety of brushes made with the lightness method. You can adjust the brush by changing the neutral tone, brightness and contrast in the brush settings, or by adjusting these before hand while making the brush. A good lightness brush has both a bit of darkness and brightness.

.. tip::

   For Step 4 you can also use the edge detection filter (with modes set to 'top edge' or 'bottom edge') or the emboss filters.
   
We can also do similar things for the :ref:`gradient brush tip <gradient_brush_tips>`:

.. figure:: /images/brush-tips/sharpness_gradient_example.png
   :alt: Image showing various gradient strokes.
   
   The above effect is all achieved with the same brush tip set to :guilabel:`Gradient Map`. By increasing the contrast or changing the neutral tone, the center point of the gradient is adjusted, giving different options in the same brush.

However, this sharpness option is not available for the color smudge brush, so what to do there?

Animated pressure brush
-----------------------

You can make brush tips that are :ref:`animated <animated_brush_tips>`.

If we take our example brush, and duplicate that layer 16 times or so.

Now, for each layer, start at the top, going to the bottom, you will want to apply the :menuselection:`Filter --> Adjust --> Threshold`, with different values. Starting from 255, and then each time, decrease the value by 16. So, the topmost layer should be at 255, next layer 240, the layer after that 224 and so forth. Eventually you should have each layer have less coverage that the one above that. Now, go to the predefined brushes tab, and select :guilabel:`Stamp`. There select :guilabel:`Animated` for :guilabel:`Style` and :guilabel:`Pressure` for :guilabel:`Selection Mode`.

If everything went right, you now have a brush-tip that can be used with the color smudge brush. For a brush that uses the gradient map, or the lightness mode, a similar principle applies, except you first |mouseright| for the context menu, then select :menuselection:`Split Alpha --> Alpha into Mask`, and then only apply the threshold to the transparency mask. A softer result can be made by using the :menuselection:`Filter --> Adjust --> Levels` or :menuselection:`Filter --> Adjust --> Curves` to isolate the pixels for the given amount of pressure.

.. TODO: Add images once the new color smudge settings are added.
