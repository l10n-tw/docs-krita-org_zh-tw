.. meta::
   :description:
        Krita's bezier curve selection tool reference.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Tools, Vector, Path, Bezier Curve, Pen, Selection
.. _path_selection_tool:
.. _bezier_curve_selection_tool:

===================
Path Selection Tool
===================

|toolselectpath|

This tool, represented by an ellipse with a dashed border and a curve control, allows you to make a :ref:`selections_basics` of an area by drawing a path around it. Click where you want each point of the path to be. Click and drag to curve the line between points. Finally click on the first point you created to close your path.

Hotkeys and Sticky keys
-----------------------

* :kbd:`Shift +` |mouseleft| sets the subsequent selection to 'add'. You can release the :kbd:`Shift` key while dragging, but it will still be set to 'add'. Same for the others.
* :kbd:`Alt +` |mouseleft| sets the subsequent selection to 'subtract'.
* :kbd:`Ctrl +` |mouseleft| sets the subsequent selection to 'replace'.
* :kbd:`Shift + Alt +` |mouseleft| sets the subsequent selection to 'intersect'.

.. versionadded:: 4.2


   * Hovering over a selection allows you to move it.
   * When not actively making a selection, |mouseright| will open up a selection quick menu with amongst others the ability to edit the selection. If you already began making a selection, |mouseright| will undo the last added point.


.. note::

    You can switch the behavior of the :kbd:`Alt` key to use the :kbd:`Ctrl` key instead by toggling the switch in the :ref:`general_settings`.

Tool Options
------------

.. versionadded:: 4.1.3

   Autosmooth Curve
        Toggling this will have nodes initialize with smooth curves instead of angles. Untoggle this if you want to create sharp angles for a node. This will not affect curve sharpness from dragging after clicking.

Anti-aliasing
    This toggles whether or not to give selections feathered edges. Some people prefer hard-jagged edges for their selections.

.. versionadded:: 4.2

   Autosmooth Curve
        Toggling this will have nodes initialize with smooth curves instead of angles. Untoggle this if you want to create sharp angles for a node. This will not affect curve sharpness from dragging after clicking.

Angle Snapping Delta
    The angle to snap to.
Activate Angle Snap
    Angle snap will make it easier to have the next line be at a specific angle of the current. The angle is determined by the :guilabel:`Angle Snapping Delta`. 
