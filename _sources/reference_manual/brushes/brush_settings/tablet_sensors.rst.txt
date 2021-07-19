.. meta::
   :description:
        Tablet sensors in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Tablets
.. _sensors:

=======
Sensors
=======

Pressure
    Uses the pressure in and out values of your stylus.
PressureIn
    Uses only pressure in values of your stylus. Previous pressure level in same stroke is overwritten *only* by applying more pressure. Lessening the pressure doesn't affect PressureIn.
X-tilt
    How much the brush is affected by stylus angle, if supported.
Y-tilt
    How much the brush is affected by stylus angle, if supported.
Tilt-direction
    How much the brush is affected by stylus direction. The pen point pointing towards the user is 0°, and can vary from -180° to +180°.
Tilt-elevation
    How much the brush is affected by stylus perpendicularity. 0° is the stylus horizontal, 90° is the stylus vertical.
Speed
    How much the brush is affected by the speed at which you draw.
Drawing Angle
    How much the brush is affected by which direction you are drawing in. :guilabel:`Lock` will lock the angle to the one you started the stroke with. :guilabel:`Fan corners` will try to smoothly round the corners, with the angle being the angles threshold it'll round. :guilabel:`Angle offset` will add an extra offset to the current angle.
Rotation
    How much a brush is affected by how the stylus is rotated, if supported by the tablet.
Distance
    How much the brush is affected over length in pixels.
Time
    How much a brush is affected over drawing time in seconds.
Fuzzy (Dab)
    Basically the random option.
Fuzzy Stroke
    A randomness value that is per stroke. Useful for getting color and size variation in on speed-paint brushes.
Fade
    How much the brush is affected over length, proportional to the brush size.
Perspective
    How much the brush is affected by the perspective assistant.
Tangential Pressure
    How much the brush is affected by the wheel on airbrush-simulating styli.
