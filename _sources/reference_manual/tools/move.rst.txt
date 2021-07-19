.. meta::
   :description:
        Krita's move tool reference.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Tools, Move, Transform
.. _move_tool:

=========
Move Tool
=========

|toolmove|

With this tool, you can move the current layer or selection by dragging the mouse.

Move current layer
    Anything that is on the selected layer will be moved.
Move layer with content
    Any content contained on the layer that is resting under the four-headed Move cursor will be moved.
Move the whole group
    All content on all layers will move.  Depending on the number of layers this might result in slow and, sometimes, jerky movements. Use this option sparingly or only when necessary.
Shortcut move distance (3.0+)
    This allows you to set how much, and in which units, the :kbd:`Left Arrow`, :kbd:`Up Arrow`, :kbd:`Right Arrow` and :kbd:`Down Arrow` cursor key actions will move the layer.
Large Move Scale (3.0+)
    Allows you to multiply the movement of the Shortcut Move Distance when pressing the :kbd:`Shift` key before pressing a direction key.
Show coordinates
    When toggled will show the coordinates of the top-left pixel of the moved layer in a floating window.
Constrained movement
    If you click, then press the :kbd:`Shift` key, then move the layer, movement is constrained to the horizontal and vertical directions. If you press the :kbd:`Shift` key, then click, then move, all layers will be moved, with the movement constrained to the horizontal and vertical directions.

    .. image:: /images/tools/Movetool_coordinates.png

Position
    Gives the top-left coordinate of the layer, can also be manually edited.
