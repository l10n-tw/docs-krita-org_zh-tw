.. meta::
   :description:
        Overview of the LUT management docker.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Look Up Table, ! LUT Management, OCIO
.. _lut_docker:

==============
LUT Management
==============

.. image:: /images/dockers/LUT_Management_Docker.png

The Look Up Table (LUT) Management docker controls the high dynamic range (HDR) painting functionality.

Use OpenColorIO
    Use Open Color IO instead of Krita's internal color management. Open Color IO is a color management library. It is sometimes referred to as OCIO. This is required as Krita uses OCIO for its HDR functionality.
Color Engine
    Choose the engine.
Configuration
    Use an OCIO configuration file from your computer.

    .. note ::

        Some system locals don't allow you to read the configuration files. This is due to a bug in OCIO. If you are using Linux you can fix this. If you start Krita from the terminal with the ``LC_ALL=C krita`` flag set, you should be able to read the configuration files.

Input Color Space
    What the color space of the image is. Usually sRGB or Linear.
Display Device
    The type of device you are using to view the colors. Typically sRGB for computer screens.
View
    --
Components
    Allows you to study a single channel of your image with LUT.
Exposure
    Set the general exposure. On 0.0 at default.
    There's the :kbd:`Y` key to change this on the fly on canvas.
Gamma
    Allows you to set the gamma. This is 1.0 by default. You can set this to change on the fly in canvas shortcuts.
Lock color
    Locks the color to make sure it doesn't shift when changing exposure. May not be desired.
Set white and black points
    This allows you to set the maximum and minimum brightness of the image, which'll adjust the exposure and gamma automatically to this.
