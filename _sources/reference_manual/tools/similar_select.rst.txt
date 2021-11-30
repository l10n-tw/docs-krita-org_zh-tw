.. meta::
   :description property=og\:description:
        Krita's similar color selection tool reference.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
             - Alberto Eleuterio Flores Guerrero <barbanegra+bugs@posteo.mx>
   :license: GNU free documentation license 1.3 or later.

.. index:: Tools, Selection, Similar Selection
.. _similar_selection_tool:

============================
Similar Color Selection Tool
============================

|toolselectsimilar|

This tool, represented by a dropper over an area with a dashed border, allows you to make :ref:`selections_basics` by selecting a point of color. It will select any areas of a similar color to the one you selected. You can adjust the "fuzziness" of the tool in the tool options dock. A lower number will select colors closer to the color that you chose in the first place.

.. important::

    Most of the behavior of the Similar Color Selection Tool is common to all other selection tools, please make sure to read :ref:`selections_basics` to learn more about this tool.


Hotkeys and Sticky keys
-----------------------

* :kbd:`Shift +` |mouseleft| sets the subsequent selection to 'add'. You can release the :kbd:`Shift` key while dragging, but it will still be set to 'add'. Same for the others.
* :kbd:`Alt +` |mouseleft| sets the subsequent selection to 'subtract'.
* :kbd:`Ctrl +` |mouseleft| sets the subsequent selection to 'replace'.
* :kbd:`Shift + Alt +` |mouseleft| sets the subsequent selection to 'intersect'.

.. versionadded:: 4.2

   * Hovering your cursor over the dashed line of the selection, or marching ants as it is commonly called, turns the cursor into the move tool icon, which you |mouseleft| and drag to move the selection.

   * |mouseright| will open up a selection quick menu with amongst others the ability to edit the selection.

.. image:: /images/tools/selections-right-click-menu.png
   :width: 200
   :alt: Menu of similar color selection

.. tip::

    You can switch the behavior of the :kbd:`Alt` key to use :kbd:`Ctrl` instead by toggling the switch in Tool Settings in the :ref:`general_settings`

.. tip::

    This tool is not bound to any Hotkey, if you want to define one, go to :menuselection:`Settings --> Configure Krita --> Keyboard Shortcuts` and search for 'Similar Color Selection Tool', there you can select the shortcut you want. Check :ref:`shortcut_settings` for more info.


Tool Options
------------

.. image:: /images/tools/selections-similar-color-selection-options.png
   :width: 300
   :alt: Similar Color selection options

Action
    This option is explained in the :ref:`pixel_vector_selection` section.
Anti-aliasing
    This toggles whether or not to give selections feathered edges. Some people prefer hard-jagged edges for their selections.

.. deprecated:: 5.0

   This has been removed as it only caused confusion.

Sample
    .. versionadded:: 5.0
    
    Select which layers to use as a reference for the contiguous select tool. The options are:
    
    Current Layer
        Only use the currently selected layer.
    All layers
        Use all visible layers.
    Color Labeled Layers
        Use only the layers specified with a certain color label. This is useful for complex images, where you might have multiple lineart layers. Label them with the appropriate color label and use these labels to mark which layers to use as a reference.

Labels Used
    .. versionadded:: 5.0

    Used with the 'Color Labeled Layers' option above.

Fuzziness
    This controls the range of the color hue used to create the selection. A lower number will select colors closer to the color that you chose in the first place. And a higher number will expand the hue range and select colors even if they are not so similar to the original color.
