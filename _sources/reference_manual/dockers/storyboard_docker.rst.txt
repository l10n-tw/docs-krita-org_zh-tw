.. meta::
   :description:
        Overview of the storyboard docker.

.. metadata-placeholder

   :authors: - Saurabh Kumar <saurabhk660@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: ! Storyboard, Storyboarding
.. _storyboard_docker:

=================
Storyboard Docker
=================

.. image:: /images/dockers/Storyboard_thumbnailonly_view.png

A storyboard is a series of drawings and directions that outlines a film as a set of 
scenes. These scenes may be accompanied with text that can provide additional context 
such as dialog, action descriptions, or pertinent details needed for production. 
Storyboarding is used extensively during the planning phase of a film to achieve a 
better understanding of the overall production and its needs. Storyboards are 
also useful for teams to discuss the scene-by-scene flow of a film or make any 
necessary changes before entering the production phase.

Krita's Storyboard Docker allows the user to develop a story by creating and managing scenes. This includes the 
addition, removal, or adjustment of a scene. Users can also insert additional scenes between other scenes 
when necessary, or reorder scenes via drag-and-drop. The storyboard's visual content exists within Krita's 
internal animation system, which gives users the ability to preview the sequence using the Animation Timeline's
transport controls. The storyboard docker also supports exporting the contents of a storyboard 
to a document. The current supported formats for export are `SVG` and `PDF`.

Toolbar Buttons
-----------------

.. image:: /images/dockers/Storyboard_uper_buttons.png

.. _storyboard_export_menu:

Export
    A drop down menu with export options available for the current storyboard.
    This can be used to export the storyboard to a desired format. You can specify
    the layout of the exported file using the export dialog options. This might be useful 
    when discussing ideas and planning the animation with teammates or if you want to show 
    your animation ideas to a potential client. Krita currently supports exporting
    storyboards to `.pdf` or `.svg` formats. For additional details see :ref:`exporting_storyboard`

.. _storyboard_comment_menu:

Comment
    A drop down menu which consists of a list of comments for storyboard items which includes a 
    `Delete Comment` button and an `Add Comment` button. You can add comment sections to all entries, 
    remove comment sections, or change their visibility from the drop down menu. The order
    of comments can be changed using drag-and-drop. Actions within this menu will apply to
    every entry within the storyboard docker.

    .. image:: /images/dockers/Storyboard_comment.png

Lock
    This option is used to freeze the docker in its current state. When this option is enabled thumbnails, comments, 
    duration and frame number do not change. Reordering of scenes using drag and drop is also be disabled. This can be used
    to preserve the state of the storyboard docker even when modifying the contents of the image.

.. _storyboard_arrange_menu:

Arrange
    A drop-down menu which provides options for changing `View` and `Mode` settings. These settings change the 
    arrangement of scenes withhin the docker. For additional details, see :ref:`storyboard_views_and_modes`

    .. image:: /images/dockers/Storyboard_arrange.png

Storyboard Scene
----------------

A storyboard scene represents an individual scene in a larger production. There can be multiple keyframes within 
the duration of a single scene, with the thumbnail representing the first keyframe of a given scene. Each 
scene has a header with editable fields -- such as scene names and durations. Storyboard scenes can be inserted before or 
after any other scene. The order of scenes can be changed at any time using drag-and-drop. Changing the order of 
scenes will be reflected appropriately in the timeline, where keyframes will be reordered to accommodate the new 
desired scene order.

Frame Number
    This shows the starting frame number of the scene. This field cannot be edited.
Name
    The scene name. Double- |mouseleft| to make it editable, and press the :kbd:`Enter` key to finish editing.

Duration in Seconds
    A spin-box. This will set the duration of the scene in seconds.
Duration in Frames
    A spin-box. This will set the duration of the scene in frames. Frames represent the division of seconds, which is dependent on the users' desired `Frame Rate` setting.
Thumbnail
    A thumbnail representing the contents of a scene. Unlike the comments, it cannot be edited inside the docker directly. Instead, changes must be made within the canvas after selection.
Add Item
    A button on the lower left corner of the thumbnail that adds a new scene after the duration of the current scene. The new scene will start with a duration of 1 frame, which is the smallest possible length of a scene.
Delete Item
    A button on the lower right corner of the thumbnail that deletes the current scene. The keyframe contents of the deleted scene will be transferred to the scene just before. This is used to prevent accidental data loss. 
Comment Name
    Name of the comment field. This field is uneditable directly but can be edited from the :ref:`Comment menu <storyboard_comment_menu>`.
Comment Field
    The comment content. Double- |mouseleft| to make it editable, and press the :kbd:`Enter` key to finish editing.


.. _storyboard_views_and_modes:

Storyboard View and Modes
-------------------------

The View and Mode options for the Storyboard Docker are available via the :ref:`Arrange menu <storyboard_arrange_menu>`.
These options allow the user to change the visual arrangement or elements of the scenes.

View
    Options that filter which parts of the scene to show within the Storyboard Docker.

    * Thumbnail Only : Show only the thumbnail portion of a scene.

        .. image:: /images/dockers/Storyboard_thumbnailonly_view.png

    * Comments Only : Show only the comments section of a scene.

        .. image:: /images/dockers/Storyboard_commentonly_view.png

    * All : Show all elements of a scene.

        .. image:: /images/dockers/Storyboard_grid_mode.png

Mode
    Allows the user to change the visual arrangement of scenes within the Storyboard Docker.

    * Row : Scenes are arranged in a row-wise fashion. The scene's comments are on the right side of the thumbnail.

        .. image:: /images/dockers/Storyboard_row_mode.png

    * Column : Scenes are arranged in column-wise fashion. The scene's comments are below the thumbnail.

        .. image:: /images/dockers/Storyboard_column_mode.png

    * Grid : Scenes are arranged in a grid. In this mode, if you change the size of the docker, the grid is rearranged to accommodate more scenes in the docker.

        .. image:: /images/dockers/Storyboard_grid_mode.png

.. _using_storyboard_docker:

Using Storyboard docker
-----------------------

Adding Scenes
    There are two ways to add scenes :

    * |mouseright| and choose either :guilabel:`Add Scene After` or :guilabel:`Add Scene Before`

    * Press the `Add Button` at the lower left corner of thumbnail of the scene, this is the same as :guilabel:`Add Scene After`.

Deleting Scenes
    There are two ways to delete scenes :

    * |mouseright| and :guilabel:`Remove Scene`.

    * Delete button at the lower right corner of thumbnail of scene, this is the same as :guilabel:`Remove Scene`.

    .. note::
        Deleting scene in storyboard does not delete the keyframes at the scene's frame. Instead the duration of the deleted scene gets added to the previous scene. This is prevent accidental data loss upon removing a scene.

Reordering Scenes
    Scenes can be reordered using drag and drop. All the keyframes within the duration of that scene will move upon reordering.

Managing Comment Fields
    The storyboard docker allows for the management of multiple optional comment fields. While some projects might require only one comment field for dialog per scene, some might require additional fields that describe character actions or camera directions. The :ref:`Comment menu <storyboard_comment_menu>` allows the user to configure these comment fields.
    
    * To make a new comment field, go to :ref:`Comment menu <storyboard_comment_menu>` and click on the plus button at the bottom-left. A new comment field will be added to the menu. Change its name and press :kbd:`Enter`. Every scene will now have the new comment field available to edit.
    * To delete a comment field, select it and press the Delete button at the bottom-right corner of the :ref:`Comment menu <storyboard_comment_menu>`.
    * To toggle visibility of a comment field click on the eye icon.
    * To rearrange the order of comment fields use drag and drop in the :ref:`Comment menu <storyboard_comment_menu>`.

Adding Comments
    To add a comment to a comment field in a scene, double click on the comment's area to make it editable. When finished, click outside of the area to save it.

Changing duration
    Use the spin-box's up and down button to change duration by one. Double click to make the field editable by typing.

Working with multiple layers
    When working with multiple layers, if you want to change only one of the scene thumbnails when drawing on canvas, you should insert keyframes at that scene's time in the current layer. 
    An easy way to do this is to turn the :guilabel:`Auto Frame` mode on in the :ref:`animation docker <animation_docker>`. That way any changes that you make with the scene selected will insert a keyframe at the scene's time in the current layer and thus would change the thumbnail for that scene.

.. _exporting_storyboard:

Exporting Storyboard
--------------------

The storyboard created using the docker can be exported to PDF or SVG documents. The :ref:`Export Menu <storyboard_export_menu>` offers options to export the storyboard.
It has options to export as either a PDF or SVG document. Choosing any of these will take you to the Export Dialog where you can pick the layout, that is, how scenes of the storyboard are arranged in the exported document.
You can either set the layout using custom options provided or using an SVG file. The Export dialog also provides options for which the scenes to export.

You can choose the range using the frame number of storyboard scene. The first two options in the dialog let you select the first and last frame to export. All scenes that have frame number in that range (inclusive of both the first and last) would be exported.
Here you can also select the font size of any text on the document, such as scenes' name, duration or the comments.

Specifying layout using custom options
    The following options are provided to specify layout :

    * Rows per page 
    * Columns per page 
    * Page Size 
    * Page Orientation 

    .. image:: /images/dockers/storyboard_custom_options.png

Specifying Layout using SVG file
    For specifying layout using an SVG file you have to upload an SVG file. The file should have one or more non-overlapping rectangles.

    .. image:: /images/dockers/storyboard_SVG_layout.png

File name for Export document
    * PDF : Choose the filename of the export document.
    * SVG : Choose the directory where you want to save the exported files and a base name. The exported files will be named baseName followed by a numerical suffix. e.g. base0, base1 etc.

    .. image:: /images/dockers/storyboard_export_file.png

