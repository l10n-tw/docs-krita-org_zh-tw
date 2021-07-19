.. meta::
   :description:
        Krita's rectangular selection tool reference.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
             - Alberto Eleuterio Flores Guerrero <barbanegra+bugs@posteo.mx>
   :license: GNU free documentation license 1.3 or later.

.. index:: Tools, Selection, Rectangle, Rectangular Selection
.. _rectangle_selection_tool:

==========================
Rectangular Selection Tool
==========================

|toolselectrect|

This tool, represented by a rectangle with a dashed border, allows you to make :ref:`selections_basics` in a rectangular shape.  To create a rectangular selection simply |mouseleft| and drag on the area of the canvas that you wish to select.

.. important::

    Most of the behavior of the Rectangular Selection Tool is common to all other selection tools, please make sure to read :ref:`selections_basics` to learn more about this tool.

Hotkeys and Stickykeys
----------------------

* :kbd:`Ctrl + R` selects this tool.
* :kbd:`R` sets the selection to 'replace' in the tool options, this is the default mode.
* :kbd:`A` sets the selection to 'add' in the tool options.
* :kbd:`S` sets the selection to 'subtract' in the tool options.
* |mouseleft| + :kbd:`Shift` constrains the selection to a perfect square. (Make sure to press |mouseleft| before :kbd:`Shift`)
* |mouseleft| + :kbd:`Ctrl` makes the selection resize from the center. (Make sure to press |mouseleft| before :kbd:`Ctrl`)
* |mouseleft| + :kbd:`Alt` allows you to move the selection. (Make sure to press |mouseleft| before :kbd:`Alt`)
* :kbd:`Shift` + |mouseleft| sets the subsequent selection to 'add'. You can release the :kbd:`Shift` key while dragging, but it will still be set to 'add'. Same for the others.
* :kbd:`Alt` + |mouseleft| sets the subsequent selection to 'subtract'.
* :kbd:`Ctrl` + |mouseleft| sets the subsequent selection to 'replace'.
* :kbd:`Shift + Alt +` |mouseleft| sets the subsequent selection to 'intersect'.

.. versionadded:: 4.2

   * Hovering your cursor over the dashed line of the selection, or marching ants as it is commonly called, turns the cursor into the move tool icon, which you |mouseleft| and drag to move the selection.
   * |mouseright| will open up a selection quick menu with amongst others the ability to edit the selection.

.. image:: /images/tools/selections-right-click-menu.png
   :width: 200
   :alt: Menu of rectangular selection
   
.. versionadded:: 5.0
   
   * |mouseleft| + :kbd:`Ctrl + Alt` allows you to rotate the rectangle around the marked corner. (Make sure to press |mouseleft| before :kbd:`Ctrl + Alt`)
   * |mouseleft| + :kbd:`Ctrl + Alt + Shift` allows you to rotate a constrained perfect square around the marked corner. (Make sure to press |mouseleft| before :kbd:`Ctrl + Alt + Shift`)


.. hint::

    To subtract a perfect square, you can follow two different methods:

    1. Press :kbd:`S` to subtract then |mouseleft| to select and press :kbd:`Shift` while dragging to constrain to a perfect square.

    2. Press :kbd:`Alt +` |mouseleft|, then release the :kbd:`Alt` key while dragging and press :kbd:`Shift` to constrain.

.. tip::

    You can switch the behavior of the :kbd:`Alt` key to use :kbd:`Ctrl` instead by toggling the switch in the :ref:`general_settings`

Tool Options
------------
.. image:: /images/tools/selections-rectangular-selection-options.png
   :width: 300
   :alt: Rectangular selection options

Mode
    This option is explained in the :ref:`pixel_vector_selection` section.
Action
    This option is explained in the :ref:`pixel_vector_selection` section.
Anti-aliasing
    This toggles whether or not to give selections feathered edges. Some people prefer hard-jagged edges for their selections.

.. note::

   Anti-aliasing is only available on Pixel Selection Mode.


Width
    Shows you the current width while you are creating the selection. You can manually type the value and use the 'Lock Width' for your next selection to have the selected value.
Lock Width
    Forces the next selection to have the current width.
Height
    Shows you the current height while you are creating the selection. You can manually type the value and use the 'Lock Height' for your next selection to have the selected value.
Lock Height
    Forces the next selection to have the current height.
Ratio
    Shows the ratio between height and width of the selection. Similar to Height, and Width, you can manually type the value and use the 'Lock Ratio' for your next selection to have the selected value.
Lock Ratio
    Forces the next selection to have the current ratio.


.. hint::

    If you want your selection to be of specific size:

    1. Type the width and height.
    2. Press the Lock Width and Lock Height buttons.
    3. |mouseleft| where you want your selection to be.


.. versionadded:: 4.1.3

    Round X
        The horizontal radius of the rectangle corners.
    Round Y
        The vertical radius of the rectangle corners.
    Chain Link
        When linked the aspect ratio between the roundness of X and Y coordinates will be locked. To disconnect the chain just click in the links and it will separate in two parts.
