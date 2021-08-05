.. meta::
   :description property=og\:description:
        Overview of vector graphics in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Marcidy
   :license: GNU free documentation license 1.3 or later.

.. index:: Vector
.. _vector_graphics:

===============
Vector Graphics
===============

Krita 4.0 has had a massive rewrite of the vector tools. So here's a page explaining the vector tools:

What are vector graphics?
-------------------------

Krita is primarily a raster graphics editing tool, which means that most of the editing changes the values of the pixels on the raster that makes up the image.

.. image:: /images/Pixels-brushstroke.png

Vector graphics on the other hand use mathematics to describe a shape. Because it uses a formula, vector graphics can be resized to any size.

On one hand, this makes vector graphics great for logos and banners. On the other hand, raster graphics are much easier to edit, so vectors tend to be the domain of deliberate design, using a lot of precision.

Tools for making shapes
-----------------------

You can start making vector graphics by first making a vector layer (press the arrow button next to the :guilabel:`+` in the layer docker to get extra layer types). Then, all the usual drawing tools outside the Freehand, Dynamic and the Multibrush tool can be used to draw shapes.

The Path and Polyline tool are the tools you used most often on a vector layer, as they allow you to make the most dynamic of shapes.

On the other hand, the :guilabel:`Ellipse` and :guilabel:`Rectangle` tools allow you to draw special shapes, which then can be edited to make special pie shapes, or for easy rounded rectangles.

The calligraphy and text tool also make special vectors. The calligraphy tool is for producing strokes that are similar to brush strokes, while the text tool makes a text object that can be edited afterwards.

All of these will use the current brush size to determine stroke thickness, as well as the current foreground and background color.

There is one last way to make vectors: the :guilabel:`Vector Image` tool.  It allows you to add shapes that have been defined in an SVG file as symbols. Unlike the other tools, these have their own fill and stroke.

Arranging Shapes
----------------

A vector layer has its own hierarchy of shapes, much like how the whole image has a hierarchy of layers. So shapes can be in front of one another. This can be modified with the arrange docker, or with the :guilabel:`Select Shapes` tool.

The arrange docker also allows you to group and ungroup shapes. It also allows you to precisely align shapes, for example, have them aligned to the center, or have an even spacing between all the shapes.

Editing shapes
--------------

Editing of vector shapes is done with the :guilabel:`Select Shapes` tool and the :guilabel:`Edit Shapes` tool.

The :guilabel:`Select Shapes` tool can be used to select vector shapes, to group them (via |mouseright|), ungroup them, to use booleans to combine or subtract shapes from one another (via |mouseright|), to move them up and down, or to do quick transforms.

Fill
~~~~

You can change the fill of a shape by selecting it and changing the active foreground color.

You can also change it by going into the tool options of the :guilabel:`Select Shapes` tool and going to the :guilabel:`Fill` tab.

Vector shapes can be filled with a solid color, a gradient or a pattern.

Stroke
~~~~~~

Strokes can be filled with the same things as fills.

However, they can also be further changed. For example, you can add dashes and markers to the line.

Coordinates
~~~~~~~~~~~

Shapes can be moved with the :guilabel:`Select Shapes` tool, and in the tool options you can specify the exact coordinates.

Editing nodes and special parameters
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

If you have a shape selected, you can double-click it to get to the appropriate tool to edit it. Usually this is the :guilabel:`Edit Shape` tool, but for text this is the :guilabel:`Text` tool.

In the :guilabel:`Edit Shape` tool, you can move around nodes on the canvas for regular paths. For special paths, like the ellipse and the rectangle, you can move nodes and edit the specific parameters in the :guilabel:`Tool Options` docker.

Working together with other programs
------------------------------------

One of the big things Krita 4.0 brought was moving from ``ODG`` to ``SVG``. What this means is that Krita saves as ``SVG`` inside ``KRA`` files, and that means Krita can open ``SVG`` just fine. This is important as ``SVG`` is the most popular vector format.

Inkscape
~~~~~~~~

You can copy and paste vectors from Krita to Inkscape, or from Inkscape to Krita. Only the ``SVG 1.1`` features are supported, with exception of smaller features like the mesh gradients.
