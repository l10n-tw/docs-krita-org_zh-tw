.. meta::
   :description:
        How to use selection masks in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
             - Lundin
             - Bugsbane
             - Alan
             - Halla
   :license: GNU free documentation license 1.3 or later.

.. index:: Layers, Masks, Selections
.. _selection_masks:

===============
Selection Masks
===============

Local Selection masks let you remember and recall edit a selection on a layer. They work in a similar way to extra channels in other image editing programs. One difference is :program:`Krita's` ability to assign them to specific layers and activate a selection with a single click on the layer. Just click the round icon with the dotted outline on the local selection layer in the Layers docker.

To create a Local Selection Mask, you must first create a selection, then |mouseright| on the desired layer and select :menuselection:`Local Selection`.

When isolating a selection mask with the :kbd:`Alt +` |mouseleft| shortcut, you can perform transformation, deformation and paint operations on the selection layer, modifying the selection.

A single layer can contain multiple Local Selection Masks. Repeating. A single layer can contain multiple Local Selection Masks (LSM). This is important because it means that you can, for instance, have several different outline parts of an image and save each as its own LSM and then recall it with a single click. Without using LSM you would have to create layer upon layer for each mask. Not only would this be inefficient for you but also for Krita and the program would slow down trying to keep up with it all. LSM's are one of the most important features in Krita! 

The example below shows three LSM items all attached (under) Layer1. Any of these can be activated and used at any time.

.. image:: /images/selection/local-selection-mask.png

Global Selection
----------------

You can modify the global selection the same way you can with a local-selection.
To do so, you first need to activate the global selection as a layer node. To do so, go into :menuselection:`Select --> Show Global Selection Mask`. The global selection, if you have anything selected, will now appear on the top of the layer stack as a selection mask.
