.. meta::
   :description:
        Overview of the grids and guides docker.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
             - Nathan Lovato
   :license: GNU free documentation license 1.3 or later.

.. index:: ! Grid, ! Guides, Isometric Grid, Orthogonal Grid
.. _grids_and_guides_docker:

=======================
Grids and Guides Docker
=======================

This docker controls the look and the visibility of both the Grid and the Guides decorations. It also features a checkbox to quickly toggle snapping on or off.

Grids
-----

Grids in Krita can currently only be orthogonal and diagonal. There is a single grid per canvas, and it is saved within the document. Thus it can be saved in a :ref:`templates`.

Show Grid
    Shows or hides the grid.
Snap to Grid
    Toggles grid snapping on or off. This can also be achieved with the :kbd:`Shift + S` shortcut.
Type
    The type of Grid.

    Rectangle
        An orthogonal grid.

        X and Y spacing
            Sets the width and height of the grid in pixels.
        Subdivision
            Groups cells together as larger squares and changes the look of the lines it contains. A subdivision of 2 will make cells appear twice as big, and the inner lines will become subdivisions.

    Isometric
        A diagonal grid. Isometric doesn't support snapping.

        Left and Right Angle
            The angle of the lines. Set both angles to 30° for true isometric.
        Cell spacing
            Determines how much both sets of lines are spaced.

Grid Offset
    Offsets the grid’s starting position from the top-left corner of the document, in pixels.
Main Style
    Controls the look of the grid’s main lines.
Div Style
    Controls the look of the grid’s “subdivision” lines.

.. image:: /images/dockers/Grid_sudvision.png

The grid's base size is 64 pixels. With a subdivision of 2, the main grid lines are 128 px away from one another, and the intermediate lines have a different look.

Guides
------

Guides are horizontal and vertical reference lines. You can use them to place and align layers accurately on the canvas.

.. image:: /images/dockers/guides.png

Creating Guides
~~~~~~~~~~~~~~~

To create a guide, you need both the rulers and the guides to be visible.

#. Rulers. (:menuselection:`View --> Show Rulers`)
#. Guides.  (:menuselection:`View --> Show Guides`)

To create a guide, move your cursor over a ruler and drag in the direction of the canvas. A line will appear. Dragging from the left ruler creates a vertical guide, and dragging from the top ruler creates a horizontal guide.

Editing Guides
~~~~~~~~~~~~~~

Place your cursor above a guide on the canvas. If the guides are not locked, your cursor will change to a double arrow. In that case, click and drag to move the guide.
To lock and unlock the guides, open the Grid and Guides Docker. Ensure that the Guides tab is selected. From here you can lock the guides, enable snapping, and change the line style.

.. note::

    Currently, it is not possible to create or to move guides to precise positions. The only way to achieve that for now is to zoom in on the canvas, or to use the grid and snapping to place the guide.

Removing Guides
~~~~~~~~~~~~~~~

Click on the guide you want to remove and drag it outside of the canvas area. When you release your mouse or stylus, the guide will be removed.
