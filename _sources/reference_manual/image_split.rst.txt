.. meta::
   :description:
        The Image Split functionality in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Splitting

.. _image_split:

Image Split
-----------

Found under :menuselection:`Image --> Image Split`, the Image Split function allows you to evenly split a document up into several sections. This is useful for splitting up spritesheets for example.

.. image:: /images/krita_4_3_image_split_dialog.png

Horizontal Lines
    The amount of horizontal lines to split at. 4 lines will mean that the image is split into 5 horizontal stripes.
Vertical Lines
    The amount of vertical lines to split at. 4 lines will mean that the image is split into 5 vertical stripes. 
    
.. versionadded:: 4.3

    Use Guides
        Instead of splitting the image up into even parts, you can choose to use the :ref:`image guides <grids_and_guides_docker>` to function as horizontal or vertical lines. This provides a little bit more control on how the image is split.

Sort Direction

    .. versionadded:: 4.2

    Whether to number the files using the following directions:

        Horizontal
            Left to right, top to bottom.
        Vertical
            Top to bottom, left to right.

Prefix
    The prefix at which the files should be saved at. By default this is the current document name.
File Type
    Which file format to save to.
Autosave on split
    This will result in all slices being saved automatically using the above prefix. Otherwise Krita will ask the name for each slice.
