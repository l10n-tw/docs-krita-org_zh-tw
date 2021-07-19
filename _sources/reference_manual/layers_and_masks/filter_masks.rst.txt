.. meta::
   :description:
        How to use filter masks in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Layers, Masks, Filters
.. _filter_masks:

============
Filter Masks
============

Filter masks show an area of their layer with a filter (such as blur, levels, brightness / contrast etc.). For example, if you select an area of a paint layer and add a Filter Mask, you will be asked to choose a filter. If you choose the blur filter, you will see the area you selected blurred.

.. image:: /images/Krita_ghostlady_2.png
   :width: 800
   :align: center

With filter masks, we can for example make this ghost-lady more ethereal by putting a clone layer underneath, and setting a lens-blur filter on it.

.. image:: /images/Krita_ghostlady_3.png
   :width: 800
   :align: center

Set the blending mode of the clone layer to :guilabel:`Color Dodge` and she becomes really spooky!

Unlike applying a filter to a section of a paint layer directly, filter masks do not permanently alter the original image. This means you can tweak the filter (or the area it applies to) at any time. Changes can always be altered or removed.

Unlike filter layers, filter masks apply only to the area you have selected (the mask).

You can edit the settings for a filter mask at any time by double clicking on it in the Layers docker. You can also change the selection that the filter mask affects by selecting the filter mask in the Layers docker and then using the paint tools in the main window. Painting white includes the area, painting black excludes it, and all other colors are turned into a shade of gray which applies proportionally.
