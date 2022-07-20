.. meta::
   :description lang=en:
        Krita's contiguous selection tool reference.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Selection, ! Contiguous Selection, Magic Wand, Tools
.. _contiguous_selection_tool:

=========================
Contiguous Selection Tool
=========================

|toolselectcontiguous|

This tool, represented by a magic wand, allows you to make :ref:`selections_basics` by selecting a point of color. It will select any contiguous areas of a similar color to the one you selected. You can adjust the "fuzziness" of the tool in the tool options dock. A lower number will select colors closer to the color that you chose in the first place.

Hotkeys and Sticky keys
-----------------------

* :kbd:`Shift +` |mouseleft| sets the subsequent selection to 'add'. You can release the :kbd:`Shift` key while dragging, but it will still be set to 'add'. Same for the others.
* :kbd:`Alt +` |mouseleft| sets the subsequent selection to 'subtract'.
* :kbd:`Ctrl +` |mouseleft| sets the subsequent selection to 'replace'.
* :kbd:`Shift + Alt +` |mouseleft| sets the subsequent selection to 'intersect'.

.. versionadded:: 4.2

   * Hovering over a selection allows you to move it.
   * |mouseright| will open up a selection quick menu with amongst others the ability to edit the selection.

.. note::

    You can switch the behavior of the :kbd:`Alt` key to use the :kbd:`Ctrl` key instead by toggling the switch in the :ref:`general_settings`.

Tool Options
------------

Selection Extent
    Threshold
        This controls whether or not the contiguous selection sees another color as a border.

    .. versionadded:: 5.1

        Spread
            Set how far the fully opaque portion of the selection should extend. See :ref:`fill_tool` for extra explanation.
Adjustments
    Anti-alias
        This will smooth the jagged edges present in the selection. It differs from feathering in that this will smooth in the direction of the edge instead of all directions, and only if the edge is jagged (high contrast).
    Grow Selection
        This value extends (positive values) or contracts (negative values) the selection.
    Feathering Radius
        This value will add a soft border to the selection.
Reference
    .. versionadded:: 4.3
    
    Select which layers to use as a reference for the contiguous select tool. The options are:
    
    Current Layer
        Only use the currently selected layer.
    All layers
        Use all visible layers.
    Color Labeled Layers
        Use only the layers specified with a certain color label. This is useful for complex images, where you might have multiple lineart layers. Label them with the appropriate color label and use these labels to mark which layers to use as a reference.

        Labels Used
            Select the color labels of the layers that should be used as reference.
