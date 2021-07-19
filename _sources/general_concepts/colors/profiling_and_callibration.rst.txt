.. meta::
   :description:
        Color Models in Krita

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - RNicole
             - Timothée Giet
             - Troy Sobotka
   :license: GNU free documentation license 1.3 or later.

.. index:: Color, Profiling, Calibration
.. _profiling_and_calibration:

==========================
Profiling and Calibration
==========================

So to make it simple, a color profile is just a file defining a set of colors inside a pure XYZ color cube.
This "color set" can be used to define different things:

* the colors inside an image

* the colors a device can output

Choosing the right workspace profile to use depends on how much colors you need and on the bit depth you plan to use.
Imagine a line with the whole color spectrum from pure black (0,0,0) to pure blue (0,0,1) in a pure XYZ color cube.
If you divide it choosing steps at a regular interval, you get what is called a linear profile, with a gamma=1 curve represented as a straight line from 0 to 1.
With 8bit/channel bit depth, we have only 256 values to store this whole line. 
If we use a linear profile as described above to define those color values, we will miss some important visible color change steps and have a big number of values looking the same (leading to posterization effect).

This is why was created the sRGB profile to fit more different colors in this limited amount of values, in a perceptually regular grading, by applying a custom gamma curve (see picture here: https://en.wikipedia.org/wiki/SRGB) to emulate the standard response curve of old CRT screens.
So sRGB profile is optimized to fit all colors that most common screen can reproduce in those 256 values per R/G/B channels.
Some other profiles like Adobe RGB are optimized to fit more printable colors in this limited range, primarily extending cyan-green hues. Working with such profile can be useful to improve print results, but is dangerous if not used with a properly profiled and/or calibrated good display.
Most common CMYK workspace profile can usually fit all their colors within 8bit/channel depth, but they are all so different and specific that it's usually better to work with a regular RGB workspace first and then convert the output to the appropriate CMYK profile.

Starting with 16bit/channel, we already have 65536 values instead of 256, so we can use workspace profiles with higher gamut range like Wide-gamut RGB or Pro-photo RGB, or even unlimited gamut like scRGB.

But sRGB being a generic profile (even more as it comes from old CRT specifications...), there are big chances that your monitor have actually a different color response curve, and so color profile.
So when you are using sRGB workspace and have a proper screen profile loaded (see next point), Krita knows that the colors the file contains are within the sRGB color space, and converts those sRGB values to corresponding color values from your monitor profile to display the canvas.

Note that when you export your file and view it in another software, this software has to do two things:

* read the embed profile to know the "good" color values from the file (which most software do nowadays; when they don't they usually default to sRGB, so in the case described here we're safe )
* and then convert it to the profile associated to the monitor (which very few software actually does, and just output to sRGB.. so this can explain some viewing differences most of the time).

Krita uses profiles extensively, and comes bundled with many.

The most important one is the one of your own screen. It doesn't come bundled, and you have to make it with a color profiling device.
In case you don't have access to such a device, you can't make use of Krita's color management as intended. However, Krita does allow the luxury of picking any of the other bundled profiles as working spaces.

Profiling devices
-----------------

Profiling devices, called Colorimeters, are tiny little cameras of a kind that you connect to your computer via an usb, and then you run a profiling software (often delivered alongside of the device).

.. note::

    If you don't have software packaged with your colorimeter, or are unhappy with the results, we recommend `ArgyllCMS <https://www.argyllcms.com/>`_.

The little camera then measures what the brightest red, green, blue, white and black are like on your screen using a predefined white as base. It also measures how gray the color gray is.

It then puts all this information into an ICC profile, which can be used by the computer to correct your colors.

It's recommended not to change the "calibration" (contrast, brightness, you know the menu) of your screen after profiling. Doing so makes the profile useless, as the qualities of the screen change significantly while calibrating.

To make your screen display more accurate colors, you can do one or two things:
profile your screen or calibrate and profile it.

Just profiling your screen means measuring the colors of your monitor with its native settings and put those values in a color profile, which can be used by color-managed application to adapt source colors to the screen for optimal result.
Calibrating and profiling means the same except that first you try to calibrate the screen colors to match a certain standard setting like sRGB or other more specific profiles. 
Calibrating is done first with hardware controls (lightness, contrast, gamma curves), and then with software that creates a vcgt (video card gamma table) to load in the GPU.

So when or why should you do just one or both?
 
Profiling only:

With a good monitor
    You can get most of the sRGB colors and lot of extra colors not inside sRGB. So this can be good to have more visible colors.
With a bad monitor
    You will get just a subset of actual sRGB, and miss lot of details, or even have hue shifts. Trying to calibrate it before profiling can help to get closer to full-sRGB colors.

Calibration+profiling:

Bad monitors
    As explained just before.
Multi-monitor setup
    When using several monitors, and specially in mirror mode where both monitor have the same content, you can't have this content color-managed for both screen profiles. In such case, calibrating both screens to match sRGB profile (or another standard for high-end monitors if they both support it) can be a good solution.
Soft-proofing
    When you need to match an exact rendering context for soft-proofing, calibrating can help getting closer to the expected result. Though switching through several monitor calibration and profiles should be done extremely carefully.
