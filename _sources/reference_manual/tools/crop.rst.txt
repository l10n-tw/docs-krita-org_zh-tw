.. meta::
   :description property=og\:description:
        Krita's crop tool reference.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Tools, Crop, Trim
.. _crop_tool:

=========
Crop Tool
=========

The crop tool can be used to crop an image or layer. To get started, choose the :guilabel:`Crop` tool and then click once to select the entire canvas. Using this method you ensure that you don't inadvertently grab outside of the visible canvas as part of the crop. You can then use the options below to refine your crop. Press the :kbd:`Enter` key to finalize the crop action, or use the :guilabel:`Crop` button in the tool options docker.

At its most basic, the crop tool allows you to size a rectangle around an area and reduce your image or layer to only that content which is contained within that area. There are several options which give a bit more flexibility and precision.

The two numbers on the left are the exact horizontal position and vertical position of the left and top of the cropping frame respectively. The numbers are the right are from top to bottom: width, height, and aspect ratio. Selecting the check boxes will keep any one of these can be locked to allow you to manipulate the other two without losing the position or ratio of the locked property.

Center
    Keeps the crop area centered.
Grow
    Allows the crop area to expand beyond the image boundaries.
Applies to
    .. versionchanged:: 5.0
    
    Lets you apply the crop to the whole image or a subset:

    Image
        Crops the whole image, the canvas, all layers and all frames are cropped.
    Canvas
        Crops only the canvas, all layers and frames are left alone.
    Layer
        Crops only the current layer and its animation frames.
    Frame
        Crops only the current animation frame.

    When you are ready, hit the :guilabel:`Crop` button and the crop will apply to your image.
    
Decoration
    Help you make a composition by showing you lines that divide up the screen. You can for example show thirds here, so you can crop your image according to the `Rule of Thirds <https://en.wikipedia.org/wiki/Rule_of_thirds>`_.

Continuous Crop
---------------

If you crop an image, and try to start a new one directly afterwards, Krita will attempt to recall the previous crop, so you can continue it. This is the *continuous crop*. You can press the :kbd:`Esc` key to cancel this and crop anew.
