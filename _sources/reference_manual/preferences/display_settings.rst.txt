.. meta::
   :description property=og\:description:
        Display settings in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
             - Alvin Wong
   :license: GNU free documentation license 1.3 or later.

.. index:: Preferences, Settings, Canvas Border, Transparency Checkers, OpenGL, Canvas Graphics Acceleration, Display
.. _display_settings:

================
Display Settings
================

.. image:: /images/preferences/Krita_Preferences_Display.png

Here various settings for the rendering of Krita can be edited.

OpenGL
------

**For Krita 3.3 or later: Reworded as "*Canvas Graphics Acceleration*"**

OpenGL is a bit of code especially for graphics cards. Graphics cards a dedicate piece of hardware for helping your computer out with graphics calculations, which Krita uses a lot. All modern computer have graphics cards.

**For Krita 3.3 or later:** On Windows, Krita also supports using Direct3D instead with the help of the ANGLE library. ANGLE works by converting the OpenGL functions that Krita makes use of to the equivalent in Direct3D. It may (or may not) be slower than native OpenGL, but it has better compatibility with typical Windows graphics drivers.

Enable OpenGL **(For Krita 3.3 or later: Reworded as *Canvas Graphics Acceleration*)**
    Selecting this checkbox will enable the OpenGL / ANGLE canvas drawing mode. With a decent graphics card this should give faster feedback on brushes and tools. Also the canvas operations like Rotate, Zoom and Pan should be considerably faster. 
For Krita 3.3 or later:
    Renderer
        *On Windows:* You can switch between native OpenGL or ANGLE Direct3D 11 rendering. The usual recommendation is to leave it as "Auto", which Krita will decide the best to use based on some internal compatibility checking. Changes to this option require a restart of Krita to take effect.
Use Texture Buffer
    This setting utilizes the graphics card's buffering capabilities to speed things up a bit. Although for now, this feature may be broken on some AMD/Radeon cards and may work fine on some Intel graphics cards.
Scaling Mode
    The user can choose which scaling mode to use while zooming the canvas. The choice here only affects the way the image is displayed during canvas operations and has no effect on how Krita scales an image when a transformation is applied.
    
    Nearest Neighbour
        This is the fastest and crudest filtering method. While fast, this results in a large number of artifacts - 'blockiness' during magnification, and aliasing and shimmering during minification.
    Bilinear Filtering
        This is the next step up. This removes the 'blockiness' seen during magnification and gives a smooth looking result. For most purposes this should be a good trade-off between speed and quality.
    Trilinear Filtering
        This should give a little better result than Bilinear Filtering.
    High Quality Filtering
        Only available when your graphics card supports OpenGL 3.0. As the name suggests, this setting provides the best looking image during canvas operations.

.. _hdr_display_settings:

HDR
---

.. versionadded:: 4.2

    These settings are only available when using Windows.
    
Since 4.2 Krita can not just edit floating point images, but also render them on screen in a way that an HDR capable setup can show them as HDR images.

The HDR settings will show you the display format that Krita can handle, and the current output format. You will want to set the preferred output format to the one closest to what your display can handle to make full use of it.

Display Format
    The format your display is in by default. If this isn't higher than 8bit, there's a good chance your monitor is not an HDR monitor as far as Krita can tell. This can be a hardware issue, but also a graphics driver issue. Check if other HDR applications, or the system HDR settings are configured correctly.
Current Output format
    What Krita is rendering the canvas to currently.
Preferred Output Format
    Which surface type you prefer. This should be ideally the closest to the display format, but perhaps due to driver issues you might want to try other formats. This requires a restart.

Transparency Checkerboard 
-------------------------

Krita supports layer transparency. Of course, the nasty thing is that transparency can't be seen. So to indicate transparency at the lowest layer, we use a checker pattern. This part allows you to configure it.

Size
    This sets the size of the checkers which show up in transparent parts of an image. 
Color
    The user can set the colors for the checkers over here. 
Move Checkers When Scrolling 
    When selected the checkers will move along with opaque elements of an image during canvas Panning, Zooming, etc.  Otherwise the checkers remain stationary and only the opaque parts of an image will move. 

Canvas Border
-------------

Color
    The user can select the color for the canvas i.e. the space beyond a document's boundaries. 
Hide Scrollbars
    Selecting this will hide the scrollbars in all view modes. 

Pixel Grid
----------

.. versionadded:: 4.0

This allows configuring an automatic pixel-by-pixel grid, which is very useful for doing pixel art.

Color
    The color of the grid.
Start Showing at
    This determines the zoom level at which the pixel grid starts showing, as showing it when the image is zoomed out a lot will make the grid overwhelm the image, and is thus counter productive.

Miscellaneous
-------------

Color Channels in Color
    This configures whether the image display should be colored when only a single channel is selected in the channels docker.
Enable Curve Anti-Aliasing
    This allows anti-aliasing on previewing curves, like the ones for the circle tool, or the path tool.
Enable Selection Outline Anti-Aliasing
    This allows automatic anti-aliasing on selection. It makes the selection feel less jaggy and more precise.
Hide window scrollbars.
    Hides the scrollbars on the canvas.
Hide Layer thumbnail popup
    This disables the thumbnail that you get when hovering over a layer.
