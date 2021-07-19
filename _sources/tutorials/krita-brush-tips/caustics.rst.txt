.. meta::
   :description lang=en:
        Creating the caustic effects of underwater with Krita.

.. metadata-placeholder
   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. _caustics:

====================
Brush Tips: Caustics
====================

Question
--------

Could you do a tutorial on how to recreate the look of light refracting in water?

Sure, caustics, it’s not like it’s the most complicated effect known to CG graphics… Okay, so the first thing is that light effects never work in isolation: you need to be spot on with colors and other effects to make it work. So we first need to recreate the surroundings a bit.

.. image:: /images/brush-tips/Krita-brushtips-caustics_01.png
    :alt: Background gradient for creating caustic effects.
    :width: 800

We set up something simple with gradients. Some radial, some linear. The eraser mode works with gradients as well, so use that to your advantage!

We create a simple smudge brush by taking smudge_soft and adding scattering to it, as well as an s-curve on the smudge length.

.. image:: /images/brush-tips/Krita-brushtips-caustics_02.png
    :alt: Brush Settings.

And then we build up a quick base:

.. image:: /images/brush-tips/Krita-brushtips-caustics_03.gif
    :alt: Building a base for the caustic effects from the brush.

Note how the smudge brush here is used not just to mix areas, but also to create definition of borders by lowering the scatter. (If you reverse the pressure curve on the scatter, this’ll be easily done by increasing the pressure on the stylus)

Now for the real magic. Caustics are a bit hairy, which means it’s a good candidate for the sketch brush engine.

.. image:: /images/brush-tips/Krita-brushtips-caustics_04.png
    :alt: Settings for the brush to create the caustic lines.

Take *sketch_ink_big*, and add pressure to the :guilabel:`Line width` while setting :guilabel:`Density` under the :guilabel:`Brush size` to 100%. This makes it extra hairy.

.. image:: /images/brush-tips/Krita-brushtips-caustics_05.png
    :alt: Set color blending mode the color dodge.

Set the brush blending mode to :guilabel:`Color Dodge`, and select the color of our caustics. Color dodge will cause a move towards white by applying special dodge color maths to our brush dabs instead of the :guilabel:`Normal` averaging color maths.

Outside of pressure for making varying strokes, glowiness for the light and extra density, we also want to have the size of the line decrease the further away it is…

.. image:: /images/brush-tips/Krita-brushtips-caustics_06.png
    :alt: Setup the perspective assistant.

Then, use the assistant editor tool to add a perspective grid. It doesn’t need to be perfectly in perspective, because we’ll only use it for the perspective sensor.

.. image:: /images/brush-tips/Krita-brushtips-caustics_07.png
    :alt: Select the perspective parameter in the brush settings.

This will cause the brush to give smaller lines the further it registers on the perspective assistant. (It only works per single perspective assistant, making it not very good for chaining, but for our purpose this is good.)

Then you start slowly building up your lines. (Make sure to make a copy of the layer. The color dodge blending doesn’t work well on a separate layer, so do it on one that also has the ground on it.)

.. image:: /images/brush-tips/Krita-brushtips-caustics_08.png
    :alt: Painting the caustics.

Make sure to try and follow the shapes you made. (*I failed at this*) The great thing about the sketch brush is that it causes those little ‘melt-togethers’ where two lines cross. This is only per stroke, so make a lot of long ongoing strokes with this brush to make use of it.

.. image:: /images/brush-tips/Krita-brushtips-caustics_09.png
    :alt: Adding a little gradient.

Then take the gradient tool, and set the blending mode to color and the paint tool to a light blue, so we can get in the bluish atmospheric effect.

.. image:: /images/brush-tips/Krita-brushtips-caustics_10.png
    :alt: Adding some atmospheric effect.

Then use the airbrush_pressure with the line tool to make some light-shafts of different sizes on a separate layer. (Don’t forget you can use the eraser mode for subtle erasing with the line tool as well)

.. image:: /images/brush-tips/Krita-brushtips-caustics_11.png
    :alt: Add some light shafts.

Set the blending mode to color dodge and lower the opacity.

.. image:: /images/brush-tips/Krita-brushtips-caustics_12.png
    :alt: Change the blend mode to color dodge of the layer.

Finally, polish the piece with the airbrush tool and some local color picking.

.. figure:: /images/brush-tips/Krita-brushtips-caustics_13.png
    :alt: Final polish.

    Final Result
