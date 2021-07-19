.. meta::
   :description:
        The Tangent Normal Brush Engine manual page.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Brush Engine, Normal Map, Tangent Normal Brush Engine
.. _tangent_brush_engine:

===========================
Tangent Normal Brush Engine
===========================

.. image:: /images/icons/tangentnormal.svg 


The Tangent Normal Brush Engine is an engine that is specifically designed for drawing normal maps, of the tangent variety. These are in turn used in 3d programs and game engines to do all sorts of lightning trickery. Common uses of normal maps include faking detail where there is none, and to drive transformations (Flow Maps).

A Normal map is an image that holds information for vectors. In particular, they hold information for Normal Vectors, which is the information for how the light bends on a surface. Because Normal Vectors are made up of 3 coordinates, just like colors, we can store and see this information as colors.

Normals can be seen similar to the stylus on your tablet. Therefore, we can use the tilt-sensors that are available to some tablets to generate the color of the normals, which can then be used by a 3d program to do lighting effects.

In short, you will be able to paint with surfaces instead of colors.

The following options are available to the tangent normal brush engine:

* :ref:`option_brush_tip`
* :ref:`blending_modes`
* :ref:`option_opacity_n_flow`
* :ref:`option_size`
* :ref:`option_ratio`
* :ref:`option_spacing`
* :ref:`option_mirror`
* :ref:`option_softness`
* :ref:`option_sharpness`
* :ref:`option_rotation`
* :ref:`option_scatter`
* :ref:`option_airbrush`
* :ref:`option_texture`

Specific Parameters to the Tangent Normal Brush Engine
------------------------------------------------------


Tangent Tilt
~~~~~~~~~~~~

These are the options that determine how the normals are calculated from tablet input.

Tangent Encoding
    This allows you to set what each color channel means. Different programs set different coordinates to different channels, a common version is that the green channel might need to be inverted (-Y), or that the green channel is actually storing the x-value (+X).
Tilt Options
    Allows you to choose which sensor is used for the X and Y.
Tilt
    Uses Tilt for the X and Y.
Direction
    Uses the drawing angle for the X and Y and Tilt-elevation for the Z, this allows you to draw flowmaps easily.
Rotation
    Uses rotation for the X and Y, and tilt-elevation for the Z. Only available for specialized Pens.
Elevation Sensitivity
    Allows you to change the range of the normal that are outputted. At 0 it will only paint the default normal, at 1 it will paint all the normals in a full hemisphere.

Usage
-----

The Tangent Normal Map Brush Engine is best used with the Tilt Cursor, which can be set in :menuselection:`Settings --> Configure Krita --> General --> Outline Shape --> Tilt Outline`.

Normal Map authoring workflow
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

#. Create an image with a background color of (128, 128, 255) blue/purple. 

    .. figure:: /images/brushes/Krita-normals-tutorial_1.png
       :figwidth: 500
       
       Setting up a background with the default color.

#. Set up group with a :guilabel:`Phong Bumpmap` filter mask. Use the :guilabel:`Use Normal map` checkbox on the filter to make it use normals.

    .. figure:: /images/brushes/Krita-normals-tutorial_2.png
       :figwidth: 500
       
       Creating a phong bump map filter layer, make sure to check 'Use Normal map'.

    .. figure:: /images/brushes/Krita-normals-tutorial_3.png
       :figwidth: 500
       
       These settings give a nice daylight-esque lighting setup, with light 1 being the sun, light 3 being the light from the sky, and light 2 being the light from the ground.

#. Make a :guilabel:`Normalize` filter layer or mask to normalize the normal map before feeding it into the Phong bumpmap filter for the best results.
#. Then, paint on layers in the group to get direct feedback. 

    .. figure:: /images/brushes/Krita-normals-tutoria_4.png
       :figwidth: 500
       
       Paint on the layer beneath the filters with the tangent normal brush to have them be converted in real time.

#. Finally, when done, hide the Phong bumpmap filter layer (but keep the Normalize filter layer!), and export the normal map for use in 3d programs.

Drawing Direction Maps
~~~~~~~~~~~~~~~~~~~~~~

Direction maps are made with the :guilabel:`Direction` option in the :guilabel:`Tangent Tilt` options. These normal maps are used to distort textures in a 3d program (to simulate for example, the flow of water) or to create maps that indicate how hair and brushed metal is brushed. Krita can't currently give feedback on how a given direction map will influence a distortion or shader, but these maps are a little easier to read.

Just set the :guilabel:`Tangent Tilt` option to :guilabel:`Direction`, and draw. The direction your brush draws in will be the direction that is encoded in the colors.

Only editing a single channel
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Sometimes you only want to edit a single channel. In that case set the blending mode of the brush to :guilabel:`Copy <channel>`, with <channel> replaced with red, green or blue. These are under the :guilabel:`Misc` section of the blending modes.

So, if you want the brush to only affect the red channel, set the blending mode to :guilabel:`Copy Red`.

.. figure:: /images/brushes/Krita_Filter_layer_invert_greenchannel.png
   :figwidth: 500
    
   The copy red, green and blue blending modes also work on filter-layers.

This can also be done with filter layers. So if you quickly want to flip a layer's green channel, make an invert filter layer with :guilabel:`Copy Green` above it.

Mixing Normal Maps
~~~~~~~~~~~~~~~~~~

For mixing two normal maps, Krita has the :guilabel:`Combine Normal Map` blending mode under :guilabel:`Misc`.
