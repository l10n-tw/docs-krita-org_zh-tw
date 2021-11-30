.. meta::
   :description:
        Krita's polygonal selection tool reference.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
             - Alberto Eleuterio Flores Guerrero <barbanegra+bugs@posteo.mx>
   :license: GNU free documentation license 1.3 or later.

.. index:: Tools, Polygon, Selection, Polygonal Selection
.. _polygonal_selection_tool:

========================
Polygonal Selection Tool
========================

|toolselectpolygon|

This tool, represented by a polygon with a dashed border, allows you to make :ref:`selections_basics` in a polygonal shape. To make a polygonal selection |mouseleft| and place points or nodes of the polygon. To finalize your selection area you can do either |mouseleft| on the first created point, or double |mouseleft| click to end the polygon.

.. important::

    Most of the behavior of the Polygonal Selection Tool is common to all other selection tools, please make sure to read :ref:`selections_basics` to learn more about this tool.



Hotkeys and Sticky keys
-----------------------

* :kbd:`Shift +` |mouseleft| temporarily sets the subsequent selection to 'add' mode. Release the :kbd:`Shift` key will return to the current permanent mode. Same for the others.
* :kbd:`Alt +` |mouseleft| temporarily sets the subsequent selection to 'subtract' mode.
* :kbd:`Ctrl +` |mouseleft| temporarily sets the subsequent selection to 'replace' mode.
* :kbd:`Shift + Alt +` |mouseleft| temporarily sets the subsequent selection to 'intersect' mode.

.. versionadded:: 4.2

   * Hovering your cursor over the dashed line of the selection, or marching ants as it is commonly called, turns the cursor into the move tool icon, which you |mouseleft| and drag to move the selection.
   * |mouseright| will open up a selection quick menu with amongst others the ability to edit the selection.

.. image:: /images/tools/selections-right-click-menu.png
   :width: 200
   :alt: Menu of polygonal selection

.. tip::

    You can switch the behavior of the :kbd:`Alt` key to use :kbd:`Ctrl` key instead by toggling the switch in Tool Settings in the :ref:`general_settings`.

.. tip::

    This tool is not bound to any Hotkey, if you want to define one, go to :menuselection:`Settings --> Configure Krita --> Keyboard Shortcuts` and search for 'Polygonal Selection Tool', there you can select the shortcut you want. Check :ref:`shortcut_settings` for more info.


Tool Options
------------

.. image:: /images/tools/selections-polygonal-selection-options.png
   :width: 300
   :alt: Polygonal selection options

Mode
    This option is explained in the :ref:`pixel_vector_selection` section.
Action
    This option is explained in the :ref:`pixel_vector_selection` section.
Anti-aliasing
    This toggles whether or not to give selections feathered edges. Some people prefer hard-jagged edges for their selections.

.. note::

   Anti-aliasing is only available on Pixel Selection Mode.
