.. meta::
   :description:
        Krita's fill tool reference.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
             - Deif Lou <ginoba@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Tools, Fill, Bucket
.. _fill_tool:

=========
Fill Tool
=========

|toolfill|

Krita has one of the most powerful and capable Fill functions available. The options found in the Tool Options docker and outlined below will give you a great deal of flexibility working with layers and selections.

To get started, clicking anywhere on screen with the fill-tool will allow that area to be filed with the foreground color.

Tool Options
------------

What to Fill
    Current Selection
        Activating this will result in the shape filling the whole of the active selection.
    Contiguous Region
        This option is the default and allows filling a region of contiguous pixels obtained from the image at the point where the user clicks.

Fill with
    Foreground Color
        Selecting this option will fill the obtained region with the foreground color.

    .. versionadded:: 5.1

        Background Color
            Selecting this option will fill the obtained region with the background color.

    Pattern
        Selecting this option will fill the obtained region with the current pattern.

        Scale
            .. versionadded:: 4.4

            This allows you to scale the pattern used in the fill.
        Rotation
            .. versionadded:: 4.4
            
            This allows you to rotate the pattern used in the fill.
        
Region Extent
    Threshold
        Determines when the fill-tool sees another color as a border. In other words, how far the region should extend from the selected pixel in terms of color similarity.

    .. versionadded:: 5.1

        Spread
            Set how far the fully opaque portion of the region should extend. 0% will make opaque only the pixels that are exactly equal to the selected pixel. 100% will make opaque all the pixels in the region up to its boundary.
            
            .. figure:: /images/tools/opacity_spread.png
            
               Left: Original image. The black dot indicates where the fill operation starts. Top-right: a row of images that show the result of filling with a threshold value of 30 and a spread value of 0, 30, 60 and 100 percent from left to right. Bottom-right: a row of images that show the result of filling with a threshold value of 65 and a spread value of 0, 30, 60 and 100 percent from left to right.


    .. versionadded:: 4.4

        Use selection as boundary
            When checked, this will count the borders of the selection as an extra boundary on top of the pixel difference.
            
            .. figure:: /images/tools/fill_selection_boundary.png
            
               Left: Original selection with a line. Middle: Filled with 'use selection as boundary' off. Right: Filled with 'use selection as boundary' on.

Adjustments
    .. versionadded:: 5.1

        Anti-alias
            This will smooth the jagged edges present in the region. It differs from feathering in that this will smooth in the direction of the edge instead of all directions, and only if the edge is jagged (high contrast).

    Grow Selection
        This value extends (positive values) or contracts (negative values) the region.
    Feathering Radius
        This value will add a soft border to the region.

Reference
    .. versionadded:: 4.3
    
    Select which layers to use as a reference for the fill tool. The options are:
    
    Current Layer
        Only use the currently selected layer.
    All layers
        Use all visible layers.
    Color Labeled Layers
        Use only the layers specified with a certain color label. This is useful for complex images, where you might have multiple lineart layers. Label them with the appropriate color label and use these labels to mark which layers to use as a reference.

        Labels Used
            Select the color labels of the layers that should be used as reference.

.. versionadded:: 5.1

    Multiple Fill
        Select what should happen when one clicks and drags the pointer on the canvas.

        Fill Regions of Any Color
            With this option selected, the tool will fill any region along the path described by the pointer while dragging, regardless of its color.
        Fill Regions of Similar Colors
            With this option selected, the tool will fill the regions along path described by the pointer while dragging that have the same color as the first region filled.
