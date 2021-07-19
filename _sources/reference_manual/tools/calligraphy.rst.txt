.. meta::
   :description lang=en:
        Krita's calligraphy tool reference.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Tools, Vector, Path, Variable Width Stroke, Calligraphy
.. _calligraphy_tool:

================
Calligraphy Tool
================

|toolcalligraphy|

The Calligraphy tool allows for variable width lines, with input managed by the tablet.
Press down with the stylus/left mouse button on the canvas to make a line, lifting the stylus/mouse button ends the stroke.

Tool Options
------------

**Fill**

Doesn't actually do anything.

**Calligraphy**

The drop-down menu holds your saved presets, the :guilabel:`Save` button next to it allows you to save presets.

Follow Selected Path
    If a stroke has been selected with the default tool, the calligraphy tool will follow this path.
Use Tablet Pressure
    Uses tablet pressure to control the stroke width.
Thinning
    This allows you to set how much thinner a line becomes when speeding up the stroke. Using a negative value makes it thicker.
Width
    Base width for the stroke.
Use Tablet Angle
    Allows you to use the tablet angle to control the stroke, only works for tablets supporting it.
Angle
    The angle of the dab.
Fixation
    The ratio of the dab. 1 is thin, 0 is round.
Caps
    Whether or not an stroke will end with a rounding or flat.
Mass
    How much weight the stroke has. With drag set to 0, high mass increases the 'orbit'.
Drag
    How much the stroke follows the cursor, when set to 0 the stroke will orbit around the cursor path.

.. note::

    The calligraphy tool can be edited by the edit-line tool, but currently you can't add or remove nodes without converting it to a normal path.
