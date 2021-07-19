.. meta::
   :description lang=en:
        Common workflows used in Krita.

.. metadata-placeholder
   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Vancemoss
             - Raghavendra Kamath <raghavendr.raghu@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. _common_wokflows:

================
Common Workflows
================

Krita's main goal is to help artists create a digital painting from scratch. Krita is used by comic artists, matte painters, texture artists, and illustrators around the world. This section explains some common workflow that artists use in Krita. When you open a new document in Krita for the first time, you can start painting instantly. The brush tool is selected by default and you just have to paint on the canvas. However, let us look at what artists do in Krita. Below are some of the common workflows used in Krita:

Speed Painting and Conceptualizing
----------------------------------

Some artists work only on the digital medium, sketching and visualizing concepts in Krita from scratch. As the name suggests a technique of painting done within a matter of hours to quickly visualize the basic scene, character, look and feel of the environment or to denote the general mood and overall concept is called a **speed painting**. Finishing and finer details are not the main goals of this type of painting, but the representation of form value and layout is the main goal.

Some artists set a time limit to complete the painting while some paint casually. Speed painting then can be taken forward by adding finer details and polish to create a final piece. Generally, artists first block in the composition by adding patches and blobs of flat colors, defining the silhouette, etc. Krita has some efficient brushes for this situation, for example, the brushes under **Block Tag** like Block fuzzy, Block basic, layout_block, etc.

After the composition and a basic layout has been laid out the artists add as many details as possible in the given limited time, this requires a decent knowledge of forms, value perspective and proportions of the objects. Below is an example of speed paint done by `David Revoy <https://www.davidrevoy.com/>`_ in an hours time.

.. image:: /images/Pepper-speedpaint-deevad.jpg
    :alt: Speedpaint of Pepper & Carrot by deevad (David Revoy).
    :width: 800

Artwork by David Revoy, license : `CC-BY <https://creativecommons.org/licenses/by/3.0/>`_

You can view the recorded speed painting demo for the above image `on Youtube <https://www.youtube.com/watch?v=93lMLEuxSLk>`_.

Colorizing Line Art
-------------------

Often an artist, for example a comic book colorist, will need to take a pencil sketch or other line art of some sort and use Krita to paint underneath it. This can be either an image created digitally or something that was done outside the computer and has been scanned.

Preparing the line art
^^^^^^^^^^^^^^^^^^^^^^

If your images have a white or other single-tone background, you can use either of the following methods to prepare the art for coloring:

Place the line art at the top of the layer stack and set its layer blending mode to :guilabel:`Multiply`.

If you want to clean the line art a bit you can press the :kbd:`Ctrl + L` shortcut or go to :menuselection:`Filters --> Adjust --> Levels`.

.. image:: /images/filters/Levels-filter.png
    :alt: Level filter dialog.

You can clean the unwanted grays by moving the white triangle in the input levels section to left and darken the black by moving the black triangle to right.

If you draw in blue pencils and then ink your line art you may need to remove the blue lines first to do that go to :menuselection:`Filters --> Adjust --> Color adjustment curves` or press the :kbd:`Ctrl + M` shortcut.

.. image:: /images/common-workflows/Color-adjustment-cw.png
    :alt: Remove blue lines from image step 1.

Now select **Red** from the drop-down, click on the top right node on the graph and slide it all the way down. Or you can click on the top right node and enter **0** in the input field. Repeat this step for **Green** too.

.. image:: /images/common-workflows/Color-adjustment-02.png
    :alt: Removing blue lines from scan step 2.

Now the whole drawing will have a blue overlay, zoom in and check if the blue pencil lines are still visible slightly. If you still see them, then go to **Blue** Channel in the color adjustment and shift the top right node towards left a bit, Or enter a value around 190 (one that removes the remaining rough lines) in the input box.

.. image:: /images/common-workflows/Color-adjustment-03.png
    :alt: Remove blue lines from scans step 3.

Now apply the color adjustment filter, yes we still have lots of blue on the artwork. Be patient and move on to the next step. Go to :menuselection:`Filters --> Adjust --> Desaturate` or press the :kbd:`Ctrl + Shift + U` shortcut. Now select :guilabel:`Max` from the list.

.. image:: /images/common-workflows/Color-adjustment-04.png
    :alt: Remove blue lines from scans step 4.

.. hint:: It is good to use non-photo-blue pencils to create the blue lines as those are easy to remove. If you are drawing digitally in blue lines use #A4DDED color as this is closer to non-photo-blue color.

You can learn more about doing a sketch from blue sketch to digital painting `here in a tutorial by David Revoy <https://www.davidrevoy.com/article239/clean-blue-sketch-traditional-line-art-to-color-it-digital-with-in-krita>`_.

After you have a clean black and white line art you may need to erase the white color and keep only black line art, to achieve that go to :menuselection:`Filters --> Colors --> Color to Alpha...` menu item. Use the dialog box to turn all the white areas of the image transparent. The Color Selector is set to White by default. If you have imported scanned art and need to select another color for the paper color then you would do it here.

.. image:: /images/filters/Color-to-alpha.png
    :alt: Color to alpha dialog box.

This will convert the white color in your line art to alpha i.e. it will make the white transparent leaving only the line art. Your line art can be in grayscale color space, this is a unique feature in Krita which allows you to keep a layer in a color-space independent from the image.

Laying in Flat Colors
^^^^^^^^^^^^^^^^^^^^^

There are many ways to color a line art in Krita, but generally, these three are common among the artists.

1. Paint blocks of color directly with block brushes.
2. Fill with Flood Fill Tool.
3. Use a Colorize Mask.

Blocking with brush
"""""""""""""""""""

The first is the more traditional method of taking a shape brush or using the geometric tools to lay in color. This would be similar to using an analog marker or brush on paper. There are various block brushes in Krita, you can select **Block** Tag from the drop-down in the brush presets docker and use the brushes listed there.

Add a layer underneath your line art layer and start painting with the brush. If you want to correct any area you can press the :kbd:`E` key and convert the same brush into an eraser. You can also use a layer each for different colors for more flexibility.

Filling with Flood Fill tool
""""""""""""""""""""""""""""

The second method is to use the Flood fill tool to fill large parts of your line art quickly. This method generally requires closed gaps in the line art. To begin with this method place your line art on a separate layer. Then activate the flood fill tool and set the :guilabel:`Grow selection` to 2px, uncheck :guilabel:`Limit to current layer` if previously checked.

.. image:: /images/common-workflows/Floodfill-krita.png
    :alt: Flood fill in krita.

Choose a color from color selector and just click on the area you want to fill the color. As we have expanded the fill with grow selection the color will be filled slightly underneath the line art thus giving us a clean fill.


Colorize Mask
"""""""""""""

The third method is to take advantage of the built-in :ref:`colorize_mask`. This is a powerful tool that can dramatically improve your workflow and cut you down on your production time. To begin coloring with the Colorize Mask, select your line art layer and click the :guilabel:`Colorize Mask Editing Tool` icon in the toolbar.

.. image:: /images/common-workflows/krita-colorize-mask-01.png
    :alt: Colorize Mask Editing Tool in the toolbar.
    :width: 300

With the Colorize Mask Editing Tool enabled, click on the canvas—this will add a Colorize Mask layer to your document and make your lineart look a little blurry. You can now lay down solid brush strokes to indicate which areas should be colored in what colors:

.. image:: /images/common-workflows/krita-colorize-mask-02.png
    :alt: Colorize Mask with brush strokes

Whenever you press the :guilabel:`Update` button in the Tool Options, you will see which colors will fill which areas. You can continue to edit your brush strokes until you are happy with the result. To get a clean look of your painting, disable the "Edit key strokes" checkbox:

.. image:: /images/common-workflows/krita-colorize-mask-03.png
    :alt: Colorize Mask result

Once you are done, you can convert the Colorize Mask layer into a paint layer in the Layers docker. Have a look at the :ref:`colorize_mask` manual to learn more about this tool.

Changing Line Art Color
^^^^^^^^^^^^^^^^^^^^^^^

To change the color of your line art, you can use the Alpha Lock feature. In the layer docker, click on the rightmost icon of your line art layer. It's the icon that looks like a little checker board:

.. image:: /images/common-workflows/layer-alpha-lock.png
    :alt: Alpha lock button
    :width: 400

When Alpha Lock is enabled, you can only change the *color* of the pixels, not their opacity—meaning that everything you paint will only change the colors of your existing lines, not add new lines.

If you want to change the color of your line art to one solid color, you can now use the bucket fill tool and it will only apply to your existing lines. Or if you want to apply several different colors to specific areas of your line art, you can quickly paint over your line art with a broad brush:

.. image:: /images/common-workflows/color-lineart.png
    :alt: Changing Line Art Color


Painting
--------

Starting from chaos
^^^^^^^^^^^^^^^^^^^

Here, you start by making a mess through random shapes and texture, then taking inspirations from the resulting chaos you can form various concepts. It is kind of like making things from clouds or finding recognizable shapes of things in abstract and random textures. Many concept artists work with this technique.

You can use brushes like the shape brush, or the spray brush to paint a lot of different shapes, and from the resulting noise, you let your brain pick out shapes and compositions.

.. image:: /images/common-workflows/Chaos2.jpg
    :alt: Starting a painting from chaotic sketch.

You then refine these shapes to look more like shapes you think they look, and paint them over with a normal paintbrush. This method is best done in a painting environment.

Starting from a value based underground
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

This method finds its origins in old oil-painting practice: You first make an under-painting and then paint over it with color, having the dark underground shine through.

With Krita you can use blending modes for this purpose. Choosing the color blending mode on a layer on top allows you to change the colors of the image without changing the relative luminosity. This is useful, because humans are much more sensitive to tonal differences than the difference in saturation and hue. This'll allow you to work in grayscale before going into color for the polishing phase.

You can find more about this technique `here <https://www.davidrevoy.com/article185/tutorial-getting-started-with-krita-1-3-bw-portrait>`_.

Preparing Tiles and Textures
----------------------------

Many artists use Krita to create textures for 3d assets used for games animation, etc. Krita has many texture templates for you to choose and get started with creating textures. These templates have common sizes, bit depth and color profiles that are used for texturing workflow.

Krita also has a real-time seamless tile mode to help texture artist prepare tiles and texture easily and check if it is seamless on the fly. The tiled mode is called wrap-around mode, to activate this mode  got to :menuselection:`View --> Wrap Around Mode`. Now when you paint the canvas is tiled in real-time allowing you to create seamless pattern and texture, it is also easy to prepare interlocking patterns and motifs in this mode.

Creating Pixel Art
------------------

Krita can also be used to create a high definition pixel painting. The pixel art look can be achieved by using Index color filter layer and overlaying dithering patterns. The general layer stack arrangement is as shown below.

.. image:: /images/common-workflows/Layer-docker-pixelart.png
    :alt: Layer stack setup for pixel art.

The index color filter maps specific user-selected colors to the grayscale value of the artwork. You can see the example below, the strip below the black and white gradient has an index color applied to it so that the black and white gradient gets the color selected to different values.

.. image:: /images/common-workflows/Gradient-pixelart.png
    :alt: Color mapping in index color to grayscale.

You can choose the required colors and ramps in the index color filter dialog as shown below.

.. image:: /images/common-workflows/Index-color-filter.png
    :alt: Index color filter dialog.

Dithering can be used to enhance the look of the art and to ease the banding occurred by the index color filter. Krita has a variety of dithering patterns by default, these can be found in pattern docker. You can use these patterns as fill layer, then set the blend mode to **overlay** and adjust the opacity according to your liking. Generally, an opacity range of 10% - 25% is ideal.

Paint the artwork in grayscale and add an index color filter layer at the top then add the dithering pattern fill layer below the index color filter but above the artwork layer, as shown in the layer stack arrangement above. You can paint or adjust the artwork at any stage as we have added the index color filter as a filter layer.

You can add different groups for different colors and add different dithering patterns for each group.

Below is an example painted with this layer arrangement.

.. image:: /images/common-workflows/Kiki-pixel-art.png
    :alt: Pixel art done in Krita.
