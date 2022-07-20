.. meta::
   :description:
        Krita's Freehand Selection tool reference.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
             - Radianart
             - Raghavendra Kamath <raghu@raghukamath.com>
             - Alberto Eleuterio Flores Guerrero <barbanegra+bugs@posteo.mx>
   :license: GNU free documentation license 1.3 or later.

.. index:: Tools, Selection, Freehand, Outline Select
.. _freehand_selection_tool:

=======================
Freehand Selection Tool
=======================

|toolselectfreehand|

Make :ref:`selections_basics` by freely drawing the selection outline around the canvas. Click and drag to draw a border around the section you wish to select.

.. important::

    This tool was previously called as the Outline Selection tool. Starting from Krita 4.4.2 release it has been renamed to Freehand Selection Tool.
    Most of the behavior of the Freehand Selection Tool is common to all other selection tools, please make sure to read :ref:`selections_basics` to learn more about this tool.


Hotkeys and Sticky keys
-----------------------

* :kbd:`Shift +` |mouseleft| sets the subsequent selection to 'add'. You can release the :kbd:`Shift` key while dragging, but it will still be set to 'add'. Same for the others.
* :kbd:`Alt +` |mouseleft| sets the subsequent selection to 'subtract'.
* :kbd:`Ctrl +` |mouseleft| sets the subsequent selection to 'replace'.
* :kbd:`Shift + Alt +` |mouseleft| sets the subsequent selection to 'intersect'.

.. deprecated:: 5.1

    * Holding the :kbd:`Ctrl` key while drawing the selection temporarily makes this tool behave like the Polygon Selection tool and you can then draw straight line selections by just clicking on the canvas. This has been removed in 5.1

.. versionadded:: 4.2

   * Hovering your cursor over the dashed line of the selection, or marching ants as it is commonly called turns the cursor into the move tool icon, which you |mouseleft| and drag to move the selection.
   * |mouseright| will open up a selection quick menu with amongst others the ability to edit the selection.

.. image:: /images/tools/selections-right-click-menu.png
   :width: 200
   :alt: Menu of Freehand Selection

.. tip::

    You can switch the behavior of the :kbd:`Alt` key to use :kbd:`Ctrl` instead by toggling the switch in Tool Settings in the :ref:`general_settings`

.. tip::

    This tool is not bound to any Hotkey, if you want to define one, go to :menuselection:`Settings --> Configure Krita --> Keyboard Shortcuts` and search for 'Freehand Selection Tool', there you can select the shortcut you want. Check :ref:`shortcut_settings` for more info.


Tool Options
------------
.. image:: /images/tools/selections-freehand-selection-options.png
   :width: 300
   :alt: Freehand Selection options

Mode
    This option is explained in the :ref:`pixel_vector_selection` section.
Action
    This option is explained in the :ref:`pixel_vector_selection` section.
Anti-aliasing
    This toggles whether or not to give selections feathered edges. Some people prefer hard-jagged edges for their selections.

.. note::

   Anti-aliasing is only available on Pixel Selection Mode.
