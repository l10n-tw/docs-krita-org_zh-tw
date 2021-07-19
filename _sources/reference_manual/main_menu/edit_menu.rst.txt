.. meta::
   :description property=og\:description:
        The edit menu in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Edit, Undo, Redo, Cut, Copy, Paste
.. _edit_menu:

=========
Edit Menu
=========

.. glossary::

    Undo
        Undoes the last action. Shortcut: :kbd:`Ctrl + Z`

    Redo
        Redoes the last undone action. Shortcut: :kbd:`Ctrl + Shift+ Z`

    Cut
        Cuts the selection or layer. Shortcut: :kbd:`Ctrl + X`

    Copy
        Copies the selection or layer. Shortcut: :kbd:`Ctrl + C`

    Cut (Sharp)
        This prevents semi-transparent areas from appearing on your cut pixels, making them either fully opaque or fully transparent.

    Copy (Sharp)
        Same as :term:`Cut (Sharp)` but then copying instead.

    Copy Merged
        Copies the selection over all layers. Shortcut: :kbd:`Ctrl + Shift + C`

    Paste
        Pastes the copied buffer into the image as a new layer. Shortcut: :kbd:`Ctrl + V`

    Paste at Cursor
        Same as :term:`Paste`, but aligns the image to the cursor. Shortcut: :kbd:`Ctrl + Alt + V`

    Paste into Active Layer
        Pastes the copied buffer into the current layer as a new selection.
        
        .. versionadded:: 5.0

    Paste into New Image
        Pastes the copied buffer into a new image. Shortcut: :kbd:`Ctrl + Shift + N`

    Paste as Reference Image
        Pastes the selection as a new :ref:`Reference Image <reference_images_tool>`.
    
    Paste Shape Style
        Used with :ref:`shape_selection_tool`, this allows you to copy the style (the fill, outline and markers) of one vector shape to another.
        
        .. versionadded:: 4.4.2
    
    Clear
        Empty the currently selected area or layer. Shortcut: :kbd:`Del`

    Fill with Foreground Color
        Fills the layer or selection with the foreground color without taking into account blending modes or opacity. Shortcut: :kbd:`Shift + Backspace`

    Fill with Background Color
        Fills the layer or selection with the background color without taking into account blending modes or opacity. Shortcut: :kbd:`Backspace`

    Fill with Pattern
        Fills the layer or selection with the active pattern without taking into account blending modes or opacity.
    
    Fill with Foreground Color (Opacity) 
        Fills the layer or selection with the foreground color, taking blending modes and opacity into account. Shortcut: :kbd:`Ctrl + Shift + Backspace`
    
    Fill with Background Color (Opacity)
        Fills the layer or selection with the background color, taking blending modes and opacity into account. Shortcut: :kbd:`Ctrl + Backspace`

    Fill with Pattern (Opacity)
        Fills the layer or selection with the active pattern, taking blending modes and opacity into account.
    
    Stroke Selected Shapes
        Strokes the selected vector shape with the selected brush, will create a new layer.

    Stroke Selection
        Strokes the active selection using the menu.
