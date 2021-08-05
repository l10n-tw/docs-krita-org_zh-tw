.. meta::
   :description property=og\:description:
        How selections work in Krita.

.. metadata-placeholder

   :authors: - Scott Petrovic
             - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Hulmanen
             - Raghavendra Kamath <raghu@raghukamath.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Selection
.. _selections_basics:

==========
Selections
==========

Selections allow you to pick a specific area of your artwork to change. This is useful when you want to move a section of the painting, transform it, or paint on it without affecting the other sections. There are many selection tools available that select in different ways. Once an area is selected, most tools will stay inside that area. On that area you can draw or use gradients to quickly get colored and/or shaded shapes with hard edges. The selections in Krita are not limited to the canvas boundary, so you can also select portions of the painting that are beyond the canvas boundary.

Creating Selections
-------------------

The most common selection tools all exist at the bottom of the toolbox. Each tool selects things slightly differently. The links for each tool go into a more detailed description of how to use it.

.. csv-table::

    :ref:`rectangle_selection_tool` , |toolselectrect|, Select the shape of a square.
    :ref:`ellipse_selection_tool` , |toolselectellipse|, Select the shape of a circle.                                                                                                                                                  
    :ref:`polygonal_selection_tool` , |toolselectpolygon|, Click where you want each point of the Polygon to be. Double click to end your polygon and finalize your selection area. Use the :kbd:`Shift + Z` shortcut to undo last point.
    :ref:`freehand_selection_tool` , |toolselectfreehand|, freehand/Lasso tool is used for a rough selection by drawing the selection outline freehand on the canvas.                                                                                                       
    :ref:`similar_selection_tool` , |toolselectsimilar|, Similar Color Selection Tool.                                                                                                                                                  
    :ref:`contiguous_selection_tool` , |toolselectcontiguous|, "Contiguous or “Magic Wand” selects a field of color. Adjust the :guilabel:`Fuzziness` to allow more changes in the field of color, by default limited to the current layer."
    :ref:`path_selection_tool` , |toolselectpath|, "Path select an area based on a vector path, click to get sharp corners or drag to get flowing lines and close the path with the :kbd:`Enter` key or connecting back to the first point."
    :ref:`magnetic_selection_tool` , |toolselectmagnetic|, "Magnetic selection makes a free hand selection where the selection snaps to sharp contrasts in the image." 

.. note::

    You can also use the transform tools on your selection, a great way to try different proportions on parts of your image.

Editing Selections
------------------

The tool options for each selection tool gives you the ability to modify
your selection.

+-------------+---------------+------------+---------------------------------------------------+
| Action      | Modifier      | Shortcut   | Description                                       |
+-------------+---------------+------------+---------------------------------------------------+
| Replace     | Ctrl          | R          | Replace the current selection.                    |
+-------------+---------------+------------+---------------------------------------------------+
| Intersect   | Shift + Alt   | --         | Get the overlapping section of both selections.   |
+-------------+---------------+------------+---------------------------------------------------+
| Add         | Shift         | A          | Add the new selection to the current selection.   |
+-------------+---------------+------------+---------------------------------------------------+
| Subtract    | Alt           | S          | Subtract the selection from the current selection.|
+-------------+---------------+------------+---------------------------------------------------+
| Symmetric   | --            | --         | Make a selection where both the new and current   |
| Difference  |               |            | do not overlap.                                   |
+-------------+---------------+------------+---------------------------------------------------+

You can change this in :ref:`tool_options_settings`.

If you hover over a selection with a selection tool and no selection is activated, you can move it. To quickly go into transform mode, |mouseright| and select :guilabel:`Edit Selection`.

Removing Selections
-------------------

If you want to delete the entire selection, the easiest way is to deselect everything. :menuselection:`Select --> Deselect`. Shortcut :kbd:`Ctrl + Shift + A`.
When you have one of the selection tool active, and the mode of selection is in intersect, replace or symmetric difference then you can also deselect by just |mouseleft| anywhere on the canvas.

Display Modes
-------------

In the bottom left-hand corner of the status bar there is a button to toggle how the selection is displayed. The two display modes are the following: (Marching) Ants and Mask. The red color with Mask can be changed in the preferences. You can edit the color under :menuselection:`Settings --> Configure Krita... --> Display --> Selection Overlay`. If there is no selection,
this button will not do anything.

.. image:: /images/selection/Ants-displayMode.jpg

Ants display mode (default) is best if you want to see the areas that are not selected.

.. image:: /images/selection/Mask-displayMode.jpg

Mask display mode is good if you are interested in seeing the various transparency levels for your selection. For example, when you have a selection with very soft edges due using feathering.

.. versionchanged:: 4.2

    Mask mode is activated as well when a selection mask is the active layer so you can see the different selection levels.

Global Selection Mask (Painting a Selection)
--------------------------------------------

The global Selection Mask is your selection that appears on the layers docker. By default, this is hidden, so you will need to make it visible via :menuselection:`Select --> Show Global Selection Mask`.

.. image:: /images/selection/Global-selection-mask.jpg

Once the global Selection Mask is shown, you will need to create a selection. The benefit of using this is that you can paint your
selection using any of the normal painting tools, including the transform and move. The information is saved as grayscale.

You can enter the global selection mask mode quickly from the selection tools by doing |mouseright| and select :guilabel:`Edit Selection`.

Selection from layer transparency
---------------------------------


You can create a selection based on a layer's transparency by right-clicking on the layer in the layer docker and selecting :guilabel:`Select Opaque` from the context menu.

.. versionadded:: 4.2

    You can also do this for adding, subtracting and intersecting by going to :menuselection:`Select --> Select Opaque`, where you can find specific actions for each.

    If you want to quickly select parts of layers, you can hold the :kbd:`Ctrl +` |mouseleft| shortcut on the layer *thumbnail*. To add a selection do :kbd:`Ctrl + Shift +` |mouseleft|, to remove :kbd:`Ctrl + Alt +` |mouseleft| and to intersect :kbd:`Ctrl + Shift + Alt +` |mouseleft|. This works with any mask that has pixel or vector data (so everything but transform masks).


.. _pixel_vector_selection:

Pixel and Vector Selection Types
--------------------------------

Vector selections allow you to modify your selection with vector anchor tools. Pixel selections allow you to modify selections with pixel information. They both have their benefits and disadvantages. You can convert one type of selection to another.

.. image:: /images/selection/Vector-pixel-selections.jpg

When creating a selection, you can select what type of selection you want from the Mode in the selection tool options: Pixel or Vector. By default this will be Vector.

Vector selections can be modified as any other :ref:`vector shape <vector_graphics>` with the :ref:`shape_selection_tool`, if you try to paint on a vector selection mask it will be converted into a pixel selection. You can also convert vector shapes to selection. In turn, vector selections can be made from vector shapes, and vector shapes can be converted to vector selections using the options in the :guilabel:`Selection` menu. Krita will add a new vector layer for this shape.

One of the most common reasons to use vector selections is that they give you the ability to move and transform a selection without the kind of resize artifacts you get with a pixel selection. You can also use the :ref:`shape_edit_tool` to change the anchor points in the selection, allowing you to precisely adjust bezier curves or add corners to rectangular selections.

If you started with a pixel selection, you can still convert it to a
vector selection to get these benefits. Go to :menuselection:`Select --> Convert to Vector Selection`.

.. note::
    If you have multiple levels of transparency when you convert a selection to vector, you will lose the semi-transparent values.

Common Shortcuts while Using Selections
---------------------------------------

- Copy -- :kbd:`Ctrl + C` or :kbd:`Ctrl + Ins`
- Paste -- :kbd:`Ctrl + V` or :kbd:`Shift + Ins`
- Cut -- :kbd:`Ctrl + X`, :kbd:`Shift + Del`
- Copy From All Layers -- :kbd:`Ctrl + Shift + C`
- Copy Selection to New Layer -- :kbd:`Ctrl + Alt + J`
- Cut Selection to New Layer -- :kbd:`Ctrl + Shift + J`
- Display or hide selection with :kbd:`Ctrl + H`
- Select Opaque -- :kbd:`Ctrl +` |mouseleft| on layer thumbnail.
- Select Opaque (Add) -- :kbd:`Ctrl + Shift +` |mouseleft| on layer thumbnail.
- Select Opaque (Subtract) -- :kbd:`Ctrl + Alt +` |mouseleft| on layer thumbnail.
- Select Opaque (Intersect) -- :kbd:`Ctrl + Shift + Alt +` |mouseleft| on layer thumbnail.
