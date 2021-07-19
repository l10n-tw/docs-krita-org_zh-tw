.. meta::
   :description:
        How to use clone layers.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
             - Bugsbane
             - Halla Rempt
             - Alan
             - Raghavendra Kamath
   :license: GNU free documentation license 1.3 or later.

.. index:: Layers, Linked Clone, Clone Layer
.. _clone_layers:

============
Clone Layers
============

A clone layer is a layer that keeps an up-to-date copy of another layer. You cannot draw or paint on it directly, but it can be used to create effects by applying different types of layers and masks (e.g. filter layers or masks).

Example uses of Clone Layers
----------------------------

For example, if you were painting a picture of some magic person and wanted to create a glow around them that was updated as you updated your character, you could:

#. Have a Paint Layer where you draw your character
#. Use the Clone Layer feature to create a clone of the layer that you drew your character on
#. Apply an HSV filter mask to the clone layer to make the shapes on it white (or blue, or green etc.)
#. Apply a blur filter mask to the clone layer so it looks like a "glow".

As you keep painting and adding details, erasing on the first layer, Krita will automatically update the clone layer, making your "glow" apply to every change you make.

Changing the source of Clone Layers
-----------------------------------

You can change the source of one or more Clone Layers in the Layers Docker. To do so, select one or more Clone Layers in the docker (hold :kbd:`Ctrl` or :kbd:`Shift` and left-click the layers). Then, right-click on any selected layer. In the context menu, there is an action named :guilabel:`Set Copy From`. Click it. A dialog will pop up and there is a drop-down menu with all possible layers to be set as the source of all selected Clone Layers. If the current source of them consists of multiple layers, the default activated selection in the drop-down menu will be blank. Otherwise, it would be the common source of selected Clone Layers.

Possible target layers are determined through the following criteria:

#. Any Clone Layer that is selected is invalid.
#. A parent or clone of any invalid layer is invalid.
#. All other layers are valid.

If you select one layer in the drop-down menu, a preview of the canvas will be shown. Click :guilabel:`OK` to apply the changes. Click :guilabel:`Cancel` to discard the changes. If you make changes to the image outside the dialog, the changes will be applied and the dialog will be automatically closed.

