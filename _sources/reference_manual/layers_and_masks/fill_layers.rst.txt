.. meta::
   :description property=og\:description:
        How to use fill layers in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
             - Alan
             - L. E. Segovia <amy@amyspark.me>
   :license: GNU free documentation license 1.3 or later.

.. index:: Layers, Fill, Generator
.. _fill_layers:

===========
Fill Layers
===========

A Fill Layer is a special layer that Krita generates on-the-fly that can contain either a pattern or a solid color.

.. image:: /images/layers/Fill_Layer.png


By default, the dialog selects the flat color fill. This fills the layer with a singular color. Newly created colored fill layers will be assigned to the currently active foreground color, unless they were made by drag-and-dropping a :ref:`palette swatch <palette_docker>` onto the :ref:`layer stack <layer_docker>`.

However, there are many more options, with more complex features:
        
        
.. toctree::
   :maxdepth: 1
   :glob:
   
   fill_layer_generators/*

Painting on a fill layer
------------------------

A fill-layer is a single-channel layer, meaning it only has transparency. Therefore, you can erase and paint on fill-layers to make them semi-opaque, or for when you want to have a particular color only. Being single channel, fill-layers are also a little bit less memory-consuming than regular 4-channel paint layers.
