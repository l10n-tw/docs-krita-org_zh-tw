.. meta::
   :description:
        How to use filter layers in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
             - Alan
             - Bugsbane
             - Halla Rempt
   :license: GNU free documentation license 1.3 or later.

.. index:: Layers, Filters
.. _filter_layers:

============
Filter Layer
============


Filter layers show whatever layers are underneath them, but with a filter such as Layer Styles, Blur, Levels, Brightness / Contrast. For example, if you add a **Filter Layer**, and choose the Blur filter, you will see every layer under your filter layer blurred.

Unlike applying a filter directly on to a section of a Paint Layer, Filter Layers do not actually alter the original image in the Paint Layers below them. Once again, non-destructive editing! You can tweak the filter at any time, and the changes can always be altered or removed.

Unlike Filter Masks though, Filter Layers apply to the entire canvas for the layers beneath. If you wish to apply a filter layer to only *some* layers, then you can utilize the Group Layer feature and add those layers into a group with the filter layer on top of the stack.

You can edit the settings for a filter layer, by double clicking on it in the Layers docker.

.. note::
    Only Krita native filters (the ones in the :guilabel:`Filters` menu) can be used with Filter Layers. Filter Layers are not supported using the externally integrated G'Mic filters.
