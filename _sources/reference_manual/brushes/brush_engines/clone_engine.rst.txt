.. meta::
   :description:
        The Clone Brush Engine manual page.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.


.. index:: Brush Engine, Clone Tool, Clone Brush Engine
.. _clone_brush_engine:

==================
Clone Brush Engine
==================

.. image:: /images/icons/clonebrush.svg

The clone brush is a brush engine that allows you to paint with a duplication of a section of a paint-layer. This is useful in manipulation of photos and textures. You have to select a source and then you can paint to copy or clone the source to a different area. Other applications normally have a separate tool for this, Krita has a brush engine for this.

Usage and Hotkeys
-----------------

To see the source, you need to set the brush-cursor settings to brush outline.

The clone tool can now clone from the projection and it's possible to change the clone source layer. Press the :kbd:`Ctrl +` |mouseleft| shortcut to select a new clone source on the current layer.

Settings
--------

* :ref:`option_size`
* :ref:`blending_modes`
* :ref:`option_opacity_n_flow`

Painting mode
~~~~~~~~~~~~~

Healing
    This turns the clone brush into a healing brush: often used for removing blemishes in photo retouching, and maybe blemishes in painting.
Perspective correction
    Only works when there's a perspective grid visible.
    
    .. warning::
        This feature is currently disabled.
Source Point move
    This will determine whether you will replicate the source point per dab or per stroke. Can be useful when used with the healing brush.
Source Point reset before a new stroke
    This will reset the source point everytime you make a new stroke. So if you were cloning a part in one stroke, having this active will allow you to clone the same part again in a single stroke, instead of using the source point as a permanent offset. 
Clone from all visible layers
    Tick this to force cloning of all layers instead of just the active one.

