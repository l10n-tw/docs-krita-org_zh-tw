.. meta::
   :description:
        How the Instant Preview technology in Krita works.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Instant Preview, Performance, Lag
.. _instant_preview:

===============
Instant Preview
===============

Instant Preview (previously known under the code name Level Of Detail/LOD strokes) is Krita's special speed-up mechanism that was funded by the 2015 Kickstarter. Krita slows down with really large images due to the large amount of data it's crunching in painting these images. Instant Preview works by taking a smaller version of the canvas, and drawing the feedback on there while Krita calculates the real stroke in the background. This means that if you have a 4k screen and are working on a 4k image at 100% zoom, you won't feel any speed up.

Activating Instant Preview
--------------------------

.. warning::
    
    Instant Preview requires OpenGL 3.0 support at minimum. So if you don't have :guilabel:`high-quality` scaling available in :menuselection:`Settings --> Configure Krita... --> Display --> Display scaling filter`, then you won't be able to use Instant Preview either.
    
.. figure:: /images/brushes/Lod_position.png
   :align: right
    
   The Global Instant Preview toggle is under the view menu.
    
Instant Preview is activated in two places: The view menu (:kbd:`Shift + L` shortcut), and the settings of the given paintop by default. This is because Instant Preview has different limitations with different paint operations.

For example, the overlay mode in the color smudge brush will disable the ability to have Instant Preview on the brush, so does using 'fade' sensor for size.

Similarly, the auto-spacing, fuzzy sensor in size, use of density in brush-tip and the use of texture paintops will make it more difficult to determine a stroke, and thus will give a feeling of 'popping' when the stroke is finished.

When you check the brush settings, the Instant Preview checkbox will have a \* behind it. Hovering over it will give you a list of options that are affecting the Instant Preview mode.

.. versionadded:: 4.0
    
    |mouseleft| this pop-up will give a slider, which can be used to determine the threshold size at which instant preview activates. By default this 100px. This is useful for brushes that are optimised to work on small sizes.

.. figure:: /images/brushes/Lod_position2.png
   :figwidth: 500
   :align: center
   
   The Instant Preview checkbox at the bottom of the brush settings editor will give you feedback when there's settings active that can't be previewed right. Hover over it to get more detail. In this case, the issue is that auto-spacing is on.

Tools that benefit from Instant Preview
---------------------------------------

The following tools benefit from Instant Preview:

* The Freehand brush tool.
* The geometric tools.
* The Move Tool.
* The Filters.
* Animation.
