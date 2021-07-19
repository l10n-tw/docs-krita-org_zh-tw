.. meta::
   :description:
        The Dyna Brush Engine manual page.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. _dyna_brush_engine:

=================
Dyna Brush Engine
=================

.. image:: /images/icons/dynabrush.svg

Dyna brush uses dynamic setting like mass and drag to draw strokes. The results are fun and random spinning strokes. To experiment more with this brush you can play with values in 'dynamic settings' section of the brush editor under Dyna Brush.

.. deprecated:: 4.0
    
    This brush engine has been removed in 4.0. This engine mostly had smoothing results that the dyna brush tool has in the toolbox. The stabilizer settings can also give you further smoothing options from the tool options.

Options
-------

* :ref:`option_size_dyna`
* :ref:`blending_modes`
* :ref:`option_opacity_n_flow`
* :ref:`option_airbrush`

.. _option_size_dyna:

Brush Size (Dyna)
-----------------

Dynamics Settings
~~~~~~~~~~~~~~~~~

Initial Width
    Initial size of the dab.
Mass
    How much energy there is in the satellite like movement.
Drag
    How close the dabs follow the position of the brush-cursor.
Width Range
    How much the dab expands with speed.

Shape
~~~~~

Diameter
    Size of the shape.
Angle
    Angle of the shape. Requires Fixed Angle active to work.
Circle
    Make a circular dab appear.
Two
    Draws an extra circle between other circles.
Line
    Connecting lines are drawn next to each other. The number boxes on the right allows you to set the spacing between the lines and how many are drawn.
Polygon
    Draws a black polygon as dab.
Wire
    Draws the wireframe of the polygon.
Paint Connection
    Draws the connection line.
