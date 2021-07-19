.. meta::
   :description:
        The GIMP Image Hose file format in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: *.gih, GIH, Image Hose, Gimp Image Hose
.. _file_gih:

======
\*.gih
======

The GIMP image hose format. Krita can open and save these, as well as import via the :ref:`predefined brush tab <predefined_brush_tip>`.

Image Hose means that this file format allows you to store multiple images and then set some options to make it specify how to output the multiple images.

.. figure:: /images/brushes/Gih-examples.png
   :figwidth: 640px
   :align: center

   From top to bottom: Incremental, Pressure and Random

Dimension and ranks.
--------------------

The GIMP image hose format allows multiple dimensions for a given brush. You could for example have a dimension that updates incrementally, and one that updates on pressure, or updates randomly. Upon export, Krita will use the ranks to subdivide the layers per dimension. If you have a 24 layer image and three ranks, and the first dimension is set to 2, the second to 4 and the third to 3, then Krita will divide 24 into 2 groups of 12, each of which have unique images for the 2 parts of the first dimension. Then those 2 groups of 12 get divided into 8 groups of 4, each of which have unique brush tips for the four parts of the second dimension, and finally, the grouped three images have each a unique brush for the final dimension.

So, the following image has a table where dimension 1 is unique in one of 4 numbers, while dimension 2 is unique in one of 3 shapes. So our ranks for dimension 1 and dimension 2 need to be 4 and 3 respectively. Now, to order the layers, you need to subdivide the table first by the first dimension, and then by the second. So we end up with three layers each for a shape in the second dimension but for the first number, then another three layers, each for a shape, but then for the second number, and so forth.

.. figure:: /images/category_filetypes/gih_multi_dimension_explaination.png
   :figwidth: 800px
   :align: center

See `the GIMP documentation <https://docs.gimp.org/2.8/en/gimp-using-animated-brushes.html>`_ for a more thorough explanation.

GIMP image hose format options:
-------------------------------

Constant
    This'll use the first image, no matter what.
Incremental
    This'll paint the image layers in sequence. This is good for images that can be strung together to create a pattern.
Pressure
    This'll paint the images depending on pressure. This is good for brushes imitating the hairs of a natural brush.
Random
    This'll draw the images randomly. This is good for image-collections used in speedpainting as well as images that generate texture. Or perhaps more graphical symbols.
Angle
    This'll use the dragging angle to determine with image to draw.

When exporting a Krita file as a ``.gih``, you will also get the option to set the default spacing, the option to set the name (very important for looking it up in the UI) and the ability to choose whether or not to generate the mask from the colors.

Use Color as Mask
    This'll turn the darkest values of the image as the ones that paint, and the whitest as transparent. Untick this if you are using colored images for the brush.

We have a :ref:`Krita Brush tip page <brush_tip_animated_brush>` on how to create your own GIH brush.
