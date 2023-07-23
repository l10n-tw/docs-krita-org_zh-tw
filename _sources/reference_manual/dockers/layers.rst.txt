.. meta::
   :description property=og\:description:
        Overview of the layers docker.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
             - Raghavendra Kamath <raghavendr.raghu@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: ! Layers, Passthrough Mode, Alpha Inheritance, Blending Mode, Label, Onion Skin, Layer Style, Alpha Lock
.. _layer_docker:

======
Layers
======

.. image:: /images/dockers/Krita_Layers_Docker.png

The Layers docker is for one of the core concepts of Krita: :ref:`Layer Management <layers_and_masks>`. You can add, delete, rename, duplicate and do many other things to layers here.

At the top there are four controls. Two of them are layer properties, the blending mode and the opacity. But there are also two smaller buttons. One is the filter option. This allows you to filter all existing layers by either color label, or since Krita 5.0 by layer name.



The second button allows you to adjust some extra display options of the layer docker.

The first slider controls the thumbnail size of the layers and how much layers indent when they are grouped. Some people prefer large thumbnails with a lot of indentation, others want the visuals to take up the least amount of space.

.. versionadded:: 5.2

Then there's the blending info options. The dropdown has four options:

None
    No extra informationm is shown.
Simple
    This will only display the opacity or the blending mode when they're not 100% and 'Normal'.
Balanced
    This will display both the opacity and the blending mode for layers where either the opacity is below 100%, or the blending mode is not 'normal'.
Detailed
    This will always show the opacity and blending options for all layers.

The opacity slider below the dropdown allows you to control the opacity of the extra blending info label.

Then there's :guilabel:`Checkbox for Selecting Layers`, which enables the extra checkboxes between the visibility icon and the label. This is useful for situations where you may not have access to a Ctrl or Shift key to select multiple layers, such as on a tablet.

The Layer Stack
---------------

You can select the active layer here. Using the :kbd:`Shift` and :kbd:`Ctrl` keys you can select multiple layers and drag-and-drop them. You can also change the visibility, edit state, alpha inheritance and rename layers. You can open and close groups, and you can drag and drop layers, either to reorder them, or to put them in groups.

.. glossary::

    Name
        The Layer name, just do double- |mouseleft| to make it editable, and press the :kbd:`Enter` key to finish editing.

    Color Label
        This is a color that you can set on the layer. |mouseright| the layer to get a context menu to assign a color to it. You can then later filter on these colors.
    
    Blending Mode
        This will set the :ref:`blending_modes` of the layer.
    
    Opacity
        This will set the opacity of the whole layer.
    
    Visibility
        An eye-icon. Clicking this can hide a whole layer.
    
    Edit State (Or layer Locking)
        A lock Icon. Clicking this will prevent the layer from being edited, useful when handling large amounts of layers.
    
    Alpha Lock
        This will prevent the alpha of the layer being edited. In more plain terms: This will prevent the transparency of a layer being changed. Useful in coloring images.
    
    Pass-through mode
        Only available on Group Layers, this allows you to have the blending modes of the layers within affect the layers outside the group. Doesn't work with masks currently, therefore these have a strike-through on group layers set to pass-through.
    
    Alpha Inheritance
        This will use the alpha of all the peers of this layer as a transparency mask. For a full explanation see :ref:`layers_and_masks`.
    
    Open or Close Layers
        (An Arrow Icon) This will allow you to access sub-layers of a layer. Seen with masks and groups.
    
    Onion Skin
        This is only available on :ref:`animated layers <animation>`, and toggles the onion skin feature.
    
    Layer Style
        This is only available on layers which have a :ref:`layer_style` assigned. The button allows you to switch between on/off quickly.

    Thumbnail Image
        This shows a miniature image with the layer contents. If you :kbd:`Ctrl +` |mouseleft| on it then you can make a selection from the contents of that layer (see `Hot keys and Sticky Keys`_ section below).

To edit these properties on multiple layers at once, press the properties option when you have multiple layers selected or press the :kbd:`F3` key.
There, to change the names of all layers, the checkbox before :guilabel:`Name` should be ticked after which you can type in a name. Krita will automatically add a number behind the layer names. You can change other layer properties like visibility, opacity, lock states, etc. too.

.. versionadded:: 5.0

   By drag-and-dropping colors from the :ref:`palette <palette_docker>` onto the layer stack, you can quickly create a :ref:`fill layer <fill_layers>`.

.. image:: /images/layers/Krita-multi-layer-edit.png

Lower buttons
-------------

These are buttons for doing layer operations.

Add
    Will by default add a new Paint Layer, but using the little arrow, you can call a sub-menu with the other layer types.
Duplicate
    Will Duplicate the active layer(s). Can be quickly invoked with the :kbd:`Ctrl +` |mouseleft| :kbd:`+ drag` shortcut.
Move layer up.
    Will move the active layer up. Will switch them out and in groups when coming across them.
Move layer down.
    Will move the active layer down. Will switch them out and in groups when coming across them.
Layer properties.
    Will open the layer properties window. The button to the side will open up the |mouseright| context menu for the currently selected layer. This is useful when you don't have access to a |mouseright| button.
Delete
    Will delete the active layer(s). For safety reasons, you can only delete visible layers.

Hot keys and Sticky Keys
------------------------

* :kbd:`Shift` key for selecting multiple contiguous layers.
* :kbd:`Ctrl` key for select or deselect layer without affecting other layers selection.
* :kbd:`Ctrl +` |mouseleft| :kbd:`+ drag` shortcut makes a duplicate of the selected layers, for you to drag and drop.
* :kbd:`Ctrl + E` shortcut for merging a layer down. This also merges selected layers, layer styles and will keep selection masks intact. Using the :kbd:`Ctrl + E` shortcut on a single layer with a mask will merge down the mask into the layer.
* :kbd:`Ctrl + Shift + E` shortcut merges all layers.
* :kbd:`R +` |mouseleft| shortcut allows you to select the top layer with content below the cursor as the active layer. In addition to this, you can set shortcuts for 4 other modes:
    - "Select All Layers (Replace Selection)" allows you to select all layers with content below the cursor as the currently selected layers.
    - "Select All Layers (Add to Selection)" allows you to select all layers that have content below the cursor and add them to the selected layers.
    - "Select from Menu (Replace Selection)" allows you to select a layer from a pop-up menu or all layers in the menu as the active layer or active layers.
    - "Select from Menu (Add to Selection)" allows you to select all layers in the menu as the new active layer or active layers. The latter two modes are similar to using :kbd:`Ctrl +` |mouseright| to select a layer in Photoshop.
* :kbd:`Ins` key for adding a new layer. 
* :kbd:`Shift + Ins` key for adding a new vector layer.
* :kbd:`Ctrl + G` shortcut will create a group layer. If multiple layers are selected, they are put into the group layer.
* :kbd:`Ctrl + Shift + G` shortcut will quickly set-up a clipping group, with the selected layers added into the group, and a new layer added on top with alpha-inheritance turned on, ready for painting!
* :kbd:`Ctrl + Alt + G` shortcut will ungroup layers inside a group.
* :kbd:`Alt +` |mouseleft| shortcut for isolated view of a layer. This will maintain between layers till the same action is repeated again.
* :kbd:`Page Up` and :kbd:`Page Down` keys for switching between layers.
* :kbd:`Ctrl + Page Up` and :kbd:`Ctrl + Page Down` shortcuts will move the selected layers up and down.
* :kbd:`Ctrl +` |mouseleft| over a layer's thumbnail to replace the current selection with a new one created from the contents of that layer.
* :kbd:`Ctrl + Shift +` |mouseleft| over a layer's thumbnail to add a new selection created from the contents of that layer to the current selection.
* :kbd:`Ctrl + Alt +` |mouseleft| over a layer's thumbnail to subtract a new selection created from the contents of that layer from the current selection.
* :kbd:`Ctrl + Shift + Alt +` |mouseleft| over a layer's thumbnail to intersect the current selection with a new selection created from the contents of that layer.


