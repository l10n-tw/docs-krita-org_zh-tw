.. meta::
   :description:
        Krita's Magnetic Selection tool reference.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Kuntal Majumder <hellozee@disroot.org>
   :license: GNU free documentation license 1.3 or later.

.. index:: Tools, Magnet, Selection, Magnetic Selection
.. _magnetic_selection_tool:

=======================
Magnetic Selection Tool
=======================

|toolselectmagnetic|

This tool, represented by a magnet over a selection border, allows you to make freeform :ref:`selections_basics`, but unlike the :ref:`polygonal_selection_tool` or the :ref:`freehand_selection_tool`, it will try to magnetically snap to sharp contrasts in your image, simplifying the creation of selection drastically.

There are two ways to make a magnetic selection:

.. figure:: /images/tools/magnetic_selection_mode_1.gif
   :width: 320
   :align: center
   
   Animation showing the first mode of creating a magnetic selection.

The first is to use |mouseleft| and place points or nodes of the magnetic selection. To finalize your selection area you can do either |mouseleft| on the first created point to complete the loop and click on it again to create a selection, or press :kbd:`Enter` to end the magnetic selection or click on the :guilabel:`Complete` button present in Tool Options.

.. figure:: /images/tools/magnetic_selection_mode_2.gif
   :width: 320
   :align: center
   
   Animation showing the second (interactive) mode of creating a magnetic selection.

The second, interactive mode, is to |mouseleft| :kbd:`+ drag` over a portion of an image.

.. figure:: /images/tools/magnetic_selection_mode_mixed.gif
   :width: 320
   :align: center
   
   The first and second mode can be mixed.

You can edit previous points by |mouseleft| dragging them. You can remove points by dragging it out of the canvas area. After a path is closed. Points can be undone with :kbd:`Shift + Z`. A halfway done magnetic selection can be canceled with :kbd:`Esc` or clicking on the :guilabel:`Discard` button in the Tool Options.

.. important::

    Most of the behavior of the Magnetic Selection Tool is common to all other selection tools, please make sure to read :ref:`selections_basics` to learn more about this tool.



Hotkeys and Sticky keys
-----------------------

* :kbd:`Shift +` |mouseleft| sets the subsequent selection to 'add'. You can release the :kbd:`Shift` key while dragging, but it will still be set to 'add'. Same for the others.
* :kbd:`Alt +` |mouseleft| sets the subsequent selection to 'subtract'.
* :kbd:`Ctrl +` |mouseleft| sets the subsequent selection to 'replace'.
* :kbd:`Shift + Alt +` |mouseleft| sets the subsequent selection to 'intersect'.

.. versionadded:: 4.2

   * Hovering your cursor over the dashed line of the selection, or marching ants as it is commonly called, turns the cursor into the move tool icon, which you |mouseleft| and drag to move the selection.
   * |mouseright| will open up a selection quick menu with amongst others the ability to edit the selection.

.. image:: /images/tools/selections-right-click-menu.png
   :width: 200
   :alt: Menu of magnetic selection

.. tip::

    You can switch the behavior of the :kbd:`Alt` key to use :kbd:`Ctrl` instead by toggling the switch in Tool Settings in the :ref:`general_settings`.

.. tip::

    This tool is not bound to any Hotkey, if you want to define one, go to :menuselection:`Settings --> Configure Krita --> Keyboard Shortcuts` and search for 'Magnetic Selection Tool', there you can select the shortcut you want. Check :ref:`shortcut_settings` for more info.


Tool Options
------------

Mode
    This option is explained in the :ref:`pixel_vector_selection` section.
Action
    This option is explained in the :ref:`pixel_vector_selection` section.
Anti-aliasing
    This toggles whether or not to give selections feathered edges. Some people prefer hard-jagged edges for their selections.
Filter Radius:
    Determine the radius of the edge detection kernel. This determines how aggressively the tool will interpret contrasts. Low values mean only the sharpest of contrast will be a seen as an edge. High values will pick up on subtle contrasts. The range of which is from 2.5 to 100.
Threshold:
    From 0 to 255, how sharp your edge is, 0 is least while 255 is the most. Used in the interactive mode only.
Search Radius:
    The area in which the tool will search for a sharp contrast within an image. More pixels means less precision is needed when placing the points, but this will require Krita to do more work, and thus slows down the tool.
Anchor Gap:
    When using |mouseleft| :kbd:`+ drag` to place points automatically, this value determines the average gap between 2 anchors. Low values give high precision by placing many nodes, but this is also harder to edit afterwards. The pixels are in screen dimensions and not image dimensions, meaning it is affected by zoom.
    
    .. figure:: /images/tools/magnetic_selection_anchor_gap.png
       :width: 640
       :align: center
       
       To the **left**: 20 px anchor gap, to the **right**: 40px anchor gap.


.. note::

   Anti-aliasing is only available on Pixel Selection Mode.
