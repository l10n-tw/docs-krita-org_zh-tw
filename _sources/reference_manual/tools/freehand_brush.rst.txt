.. meta::
   :description:
        Krita's freehand brush tool reference, containing how to use the stabilizer in krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Halla Rempt <boud@valdyas.org>
             - Nmaghrufusman
   :license: GNU free documentation license 1.3 or later.

.. index:: !Freehand Brush, Freehand
.. _freehand_brush_tool:

===================
Freehand Brush Tool
===================

|toolfreehandbrush|

The default tool you have selected on Krita start-up, and likely the tool that you will use the most.

The freehand brush tool allows you to paint on paint layers without constraints like the straight line tool. It makes optimal use of your tablet's input settings to control the brush-appearance.
To switch the brush, make use of the brush-preset docker.

Hotkeys and Sticky keys
-----------------------

The freehand brush tool's hotkey is :kbd:`B`.

* The alternate invocation is the ''color sampler'' (standardly invoked by the :kbd:`Ctrl` key). Press the :kbd:`Ctrl` key to switch the tool to "color sampler", use left or right click to sample fore and background color respectively. Release the :kbd:`Ctrl` key to return to the freehand brush tool.
* The Primary setting is "size" (standardly invoked by the :kbd:`Shift` key). Press the :kbd:`Shift` key and drag outward to increase brush size. Drag inward to decrease it.
* You can also press the :kbd:`V` key as a stickykey for the straight-line tool.

The hotkey can be edited in :menuselection:`Settings --> Configure Krita... --> Shortcuts`.
The sticky-keys can be edited in :menuselection:`Settings --> Configure Krita... --> Canvas Input Settings`.

Tool Options
------------

.. index:: Basic Smooth, No Smoothing, Weighted Smoothing, Stabilizer
.. _stroke_smoothing:

Smoothing
~~~~~~~~~

Smoothing, also known as stabilising in some programs, allows the program to correct the stroke. Useful for people with shaky hands, or particularly difficult long lines.

The following options can be selected:

No Smoothing.
    The input from the tablet translates directly to the screen. This is the fastest option, and good for fine details.
Basic Smoothing.
    This option will smooth the input of older tablets like the Wacom Graphire 3. If you experience slightly jagged lines without any smoothing on, this option will apply a very little bit of smoothing to get rid of those lines.
Weighted smoothing:
    This option allows you to use the following parameters to make the smoothing stronger or weaker:

    Distance
        The distance the brush needs to move before the first dab is drawn. (Literally the amount of events received by the tablet before the first dab is drawn.)
    Stroke Ending
        This controls how much the line will attempt to reach the last known position of the cursor after the left-mouse button/or stylus is lifted. Will currently always result in a straight line, so use with caution.
    Smooth Pressure
        This will apply the smoothing on the pressure input as well, resulting in more averaged size for example.
    Scalable Distance
        This makes it so that the numbers involved will be scaled along the zoom level.

Stabilizer
    This option averages all inputs from the tablet. It is different from weighted smoothing in that it allows for always completing the line. It will draw a circle around your cursor and the line will be a bit behind your cursor while painting.

    Distance
        This is the strength of the smoothing.
    Delay
        This toggles and determines the size of the dead zone around the cursor. This can be used to create sharp corners with more control.
    Finish Line
        This ensures that the line will be finished.
    Stabilize sensors
        Similar to :guilabel:`Smooth Pressure`, this allows the input (pressure, speed, tilt) to be smoother.
    Scalable Distance
        This makes it so that the numbers involved will be scaled along the zoom level.

.. index:: Painting Assistants

Assistants
~~~~~~~~~~

Ticking this will allow snapping to :ref:`assistant_tool`, and the hotkey to toggle it is :kbd:`Ctrl + Shift + L`. See :ref:`painting_with_assistants` for more information.

The slider will determine the amount of snapping, with 1000 being perfect snapping, and 0 being no snapping at all. For situations where there is more than one assistant on the canvas, the defaultly ticked :guilabel:`Snap Single` means that Krita will only snap to a single assistant at a time, preventing noise. Unticking it allows you to chain assistants together and snap along them.
