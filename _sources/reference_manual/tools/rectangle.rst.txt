.. meta::
   :description:
        Krita's rectangle tool reference.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Alberto Eleuterio Flores Guerrero <barbanegra+bugs@posteo.mx>
             - Santhosh Anguluri
   :license: GNU free documentation license 1.3 or later.

.. index:: Tools, Rectangle
.. _rectangle_tool:

==============
Rectangle Tool
==============

|toolrectangle|

This tool can be used to paint rectangles, or create rectangle shapes on a vector layer. Click and hold |mouseleft| to indicate one corner of the rectangle, drag to the opposite corner, and release the button.

Hotkeys and Sticky-keys
-----------------------

There's no default hotkey for switching to rectangle.

If you hold the :kbd:`Shift` key while drawing, a square will be drawn instead of a rectangle. Holding the :kbd:`Ctrl` key will change the way the rectangle is constructed. Normally, the first mouse click indicates one corner and the second click the opposite. With the :kbd:`Ctrl` key, the initial mouse position indicates the center of the rectangle, and the final mouse position indicates a corner. You can press the :kbd:`Alt` key while still keeping |mouseleft| down to move the rectangle to a different location.

You can change between the corner/corner and center/corner drawing methods as often
as you want by pressing or releasing the :kbd:`Ctrl` key, provided that you keep |mouseleft| pressed. With the :kbd:`Ctrl` key pressed, mouse movements will affect all four corners of the rectangle (relative to the center), without the :kbd:`Ctrl` key, one of the corners is unaffected.

.. versionadded:: 5.0

If you hold :kbd:`Ctrl` and :kbd:`Alt` keys while drawing, the rectangle will be rotated around the marked corner. If used with holding :kbd:`Shift` key, a square will be rotated around the marked corner.

Tool Options
------------

Fill
~~~~

Not filled
    The rectangle will be transparent from the inside.
Foreground color
    The rectangle will use the foreground color as fill.
Background color
    The rectangle will use the background color as fill.
Pattern
    The rectangle will use the active pattern as fill.

Outline
~~~~~~~

No Outline
    The Rectangle will render without outline.
Brush
    The Rectangle will use the current selected brush to outline.
Brush (Background Color)
    The Rectangle will use the current selected brush with the current background color to outline.

.. note::
    On vector layers, the rectangle will not render with a brush outline, but rather a vector outline.

Pattern Transform
~~~~~~~~~~~~~~~~~

.. versionadded:: 4.4

This enables upon using pattern as the fill, and has options for changing the pattern transformation a little.

Rotation
    This allows you to rotate the pattern used in the fill.
Scale
    This allows you to scale the pattern used in the fill.

Size
~~~~

Width
    Gives the current width. Use the lock to force the next rectangle made to this width.
Height
    Gives the current height. Use the lock to force the next rectangle made to this height.
Ratio
    .. versionadded:: 4.2

    Gives the current ratio. Use the lock to force the next rectangle made to this ratio.

Round X
    The horizontal radius of the rectangle corners.
Round Y
    The vertical radius of the rectangle corners.
