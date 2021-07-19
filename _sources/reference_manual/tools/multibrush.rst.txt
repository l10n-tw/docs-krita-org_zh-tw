.. meta::
   :description:
        Krita's multibrush tool reference.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Nmaghrufusman
   :license: GNU free documentation license 1.3 or later.

.. index:: Tools, Multibrush, Mandala, Symmetry, Rotational Symmetry
.. _multibrush_tool:

===============
Multibrush Tool
===============

|toolmultibrush|

The Multibrush tool allows you to draw using multiple instances of a freehand brush stroke at once, it can be accessed from the Toolbox docker or with the default shortcut :kbd:`Q`. Using the Multibrush is similar to toggling the :ref:`mirror_tools`, but the Multibrush is more sophisticated, for example it can mirror freehand brush strokes along a rotated axis.

The settings for the tool will be found in the tool options dock.

The multibrush tool has a few modes and the settings for each can be found in the tool options dock. Symmetry and mirror reflect over an axis which can be set in the tool options dock. The default axis is the center of the canvas.

.. image:: /images/tools/Krita-multibrush.png
   :align: center

The available modes are:

Symmetry
    Symmetry will reflect your brush around the axis at even intervals. The slider determines the number of instances which will be drawn on the canvas.
Mirror
    Mirror will reflect the brush across the X axis, the Y axis, or both.
Translate
    Translate will paint the set number of instances around the cursor at the radius distance.
Snowflake
    This works as a mirrored symmetry, but is a bit slower than symmetry+toolbar mirror mode.
Copy Translate
    This allows you to set the position of the copies relative to your own cursor. To set the position of the copies, first toggle :guilabel:`Add`, and then |mouseleft| the canvas to place copies relative to the multibrush origin. Finally, press :guilabel:`Add` again, and start drawing to see the copy translate in action.

The assistant and smoothing options work the same as in the :ref:`freehand_brush_tool`, though only on the real brush and not its copies.
