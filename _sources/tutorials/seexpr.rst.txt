.. meta::
   :description lang=en:
        Introduction to SeExpr

.. metadata-placeholder
   :authors: - L. E. Segovia <amy@amyspark.me>
   :license: GNU free documentation license 1.3 or later.

.. _seexpr_tut_intro:

Introduction to SeExpr
======================

.. versionadded:: 4.4

   This document will introduce you to the SeExpr expression language.

****************
What is SeExpr?
****************

SeExpr is an embeddable expression language, designed by Disney Animation,
that allows host applications to render dynamically generated content.
Pixar calls it `in its documentation <https://renderman.pixar.com/resources/RenderMan_20/PxrSeExpr.html>`_ a "scriptable pattern generator and
combiner".

SeExpr is available within Krita as a Fill Layer.

.. seealso::
    - :ref:`seexpr`
    - :ref:`seexpr_fill_layer`
    - :ref:`resource_seexpr_scripts`
    - `"Procedural texture generator (example and wishes)" on Krita Artists <https://krita-artists.org/t/procedural-texture-generator-example-and-wishes/7638>`_
    - `Inigo Quilez's articles <https://iquilezles.org/www/index.htm>`_
    - `The Book of Shaders <https://thebookofshaders.com/>`_

**********
Background
**********

To understand what SeExpr is about, we need to differentiate between two types
of graphics, *raster* and *procedural*.

The vast majority of the computer-generated stuff you see every day belong to
the first type-- images like photos, your favorite anime screenshots, memes,
are all a multitude of tiny little dots of color, or *pixels*, arranged into a
grid.

Raster graphics have two drawbacks. First, once you create them, their
resolution is **fixed**. You cannot zoom in and magically get any more detail.
And if you need to change them, either you go back to the source and sample it
again (which is sometimes impossible), or edit it with a raster graphics
program, like Krita.

One of the biggest problems, however, is that we are always limited by the
**space** our programs can use; either secondary storage, like SD cards, or
RAM. Unless compressed, image memory needs are `quadratic in the size of the
image <https://blender.stackexchange.com/questions/112505/why-is-my-half-resolution-render-taking-a-quarter-of-the-time-of-the-full-one>`_.
For a quick example, the :ref:`create_new_document` dialog of Krita tells
you three bits of information: its size in pixels, the size of the pixel
itself, and *the total memory needed*.

.. image:: /images/Krita_newfile.png

Here's a summary for square textures. Note that the memory needed
is for *one layer only*:

===== ==============
Size  Memory needed
===== ==============
256   256 KB
512   1 MB
1024  4 MB
2048  16 MB
4096  64 MB
===== ==============

An alternative is to use :ref:`vector_graphics`. Vector graphics, for instance 
SVGs, employ mathematic formulae like splines and Bézier curves to describe a
shape. As they are mathematically defined, they can be resized to suit your 
needs without losing resolution.

SeExpr belongs to a different class, *procedural graphics*. Similar to vector
graphics, procedural graphics only need a few KBs of secondary storage for
their definition. But they are not defined by mathematical formulae; you
actually *code* how the color is calculated at each point of the texture.
And, because it is not limited in its precision, you can render complex
patterns in your layers at completely arbitrary resolution.

****************
Writing a script
****************

In this tutorial, we'll show you how to write a script in SeExpr, render it to
a layer, and then save it as a preset.

We'll start by going to the :ref:`layer_docker`, and adding a new Fill Layer.
Then select the SeExpr generator from the list. You'll be greeted by this
window:

   .. image:: /images/seexpr/SeExpr_editor.png

The SeExpr generator dialog is divided into two tabs. For now, we'll stay on
:guilabel:`Options`.

.. note::
   :ref:`fill_layers` describes these tabs in more detail.

Let's start by painting a layer in light blue.

First, SeExpr scripts must define an output variable, let's call it ``$color``.
As SeExpr thinks of colors in the :ref:`RGB color space<model_rgb>`,
color variables are defined by a triplet of numbers known as a *vector*.
We'll start by defining the ``$color`` variable and giving it a value.

Go to the text box, and clear it if it has any text.
Then, define and set ``$color`` to something like ``[0.5, 0.5, 1]``
(half lit red, half lit green, fully lit blue)::

   $color = [0.5, 0.5, 1];

SeExpr needs to know which variable holds the final color value. This
is done by writing at the end, on its own line, the name of the variable::

   $color

The script should now look like this::

   $color = [0.5, 0.5, 1];
   $color

Click :guilabel:`OK`, and you'll render your first script!

   .. image:: /images/seexpr/SeExpr_first_render.png

.. warning::
   To be absolutely precise, SeExpr **has no color management**.
   It always renders textures as :ref:`32-bit float <bit_depth>`,
   :ref:`gamma corrected <linear_and_gamma>`,
   sRGB images. Krita transforms them into your document's color space
   using the sRGB-elle-V2-srgbtrc.icc profile.

   See :ref:`color_managed_workflow` for what this means.

**********************************
Managing your script using widgets
**********************************

There is also another way to define and edit your variables.
Open the fill layer's properties by right-clicking on :guilabel:`Fill Layer 1`,
and selecting :guilabel:`Layer Properties...`.

.. image:: /images/seexpr/SeExpr_prop_1.png

Notice the middle box? Once it detects a syntactically correct script,
SeExpr enables a whole chunk of knobs to manage individual variables.
In our example above, you can change ``$color``'s in three ways:

- enter the red, green, or blue channel's value in the input fields
- move the little colored sliders to change the respective channel
- click on the preview square to the left of the boxes, to select a completely new color.

The last button on the middle box is always :guilabel:`Add new variable`.
Click it and this dialog will open:

.. image:: /images/seexpr/SeExpr_add_variable.png

This dialog shows you all the types of variables that SeExpr accepts:

.. glossary ::

   Curve and Color curve
      They are the SeExpr version of :ref:`Stop Gradients <resource_gradients>`: they interpolate a ramp given by a set of values.

      Curves represent 1D gradients, returning a single float at each evaluation point.

      Color curves represent RGB gradients, returning a Color at each point.

   Integers and Floats
      Numbers.

   Vector
      A triplet of floats.

   Color
      A vector representing an RGB color.

   Swatch
      A list of Colors.

   String
      Usually single words.

For instance, you could replicate ``$color`` in the :guilabel:`Vector` tab:

.. image:: /images/seexpr/SeExpr_add_variable_vector.png

**************************
Creating your first preset
**************************

Once your script is ready, you can reuse it by making a preset.

You can create one through the top bar of the :guilabel:`Options` tab:

   .. image:: /images/seexpr/SeExpr_editor.png

Select :guilabel:`Save New SeExpr Preset...` and the following dialog will
open:

  .. image:: /images/seexpr/SeExpr_save.png

You can edit the name of the preset in the top line edit box, and set a  thumbnail for easy identification.

.. hint :: The dialog will append "Copy" to the preset's name if it is a copy of an existing one. You can change it at will.

The dialog provides the following choices for setting a thumbnail:

.. glossary::

   Load Existing Thumbnail
      If the preset already has a thumbnail (for instance, if you created it from an existing preset), this button will load and apply it.

   Load Image
      Applies an image from the filesystem as a thumbnail.

   Render Script to Thumbnail
      Renders your script to a 256x256 texture, and applies the latter as a thumbnail.

   Clear Thumbnail
      Deletes the thumbnail. Note that, if the preset is a copy of an existing one, this can be reverted by clicking :guilabel:`Load Existing Thumbnail`.

*************************
Changing existing presets
*************************

If you change a preset's script, you will notice two new buttons in the top bar of the :guilabel:`Options` tab:

   .. image:: /images/seexpr/SeExpr_overwrite_preset.png

The reload button will restore the preset to its original properties, while clicking on :guilabel:`Overwrite Preset` will save your changes.

Additionally, you can edit the preset's name by clicking on the rename button,
entering the new name, and clicking on :guilabel:`Save`:

   .. image:: /images/seexpr/SeExpr_rename_preset.png


*********************
Bundling your presets
*********************

Sharing your scripts is easy! SeExpr script presets are just like any other
resource in Krita. Follow the instructions in :ref:`resource_management` to
create your own bundles.
