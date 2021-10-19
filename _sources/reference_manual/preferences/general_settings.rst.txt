.. meta::
   :description property=og\:description:
        General Preferences in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
             - Greig
   :license: GNU free documentation license 1.3 or later.

.. index:: Preferences, Settings, Cursor, Autosave, Tabbed Documents, Subwindow Documents, Pop up palette, File Dialog, Maximum Brush Size, Kinetic Scrolling, Sessions
.. _general_settings:

================
General Settings
================

You can access the General Category of the preferences by first going to :menuselection:`Settings --> Configure Krita...` menu item.

    .. image:: /images/preferences/Krita_Preferences_General.png

Cursor Settings
---------------

Customize the drawing cursor here:

Cursor Shape
~~~~~~~~~~~~

Select a cursor shape to use while the brush tools are used. This cursor will always be visible on the canvas. It is usually set to a type exactly where your pen nib is at. The available cursor types are shown below.

Tool Icon
    Shows the currently selected tool icon, even for the freehand brush. 

    .. image:: /images/preferences/Settings_cursor_tool_icon.png

Arrow
    Shows a generic cursor.

    .. image:: /images/preferences/Settings_cursor_arrow.png

Crosshair
    Shows a precision reticule.

    .. image:: /images/preferences/Settings_cursor_crosshair.png

Small circle
    Shows a small white dot with a black outline.

    .. image:: /images/preferences/Settings_cursor_small_circle.png

No Cursor
    Show no cursor, useful for tablet-monitors.

    .. image:: /images/preferences/Settings_cursor_no_cursor.png

Triangle Right-Handed.
    Gives a small white triangle with a black border.

    .. image:: /images/preferences/Settings_cursor_triangle_righthanded.png

Triangle Left-Handed.
    Same as above but mirrored.

    .. image:: /images/preferences/Settings_cursor_triangle_lefthanded.png

Black Pixel
    Gives a single black pixel.

    .. image:: /images/preferences/Settings_cursor_black_pixel.png

White Pixel
    Gives a single white pixel.

    .. image:: /images/preferences/Settings_cursor_white_pixel.png


Outline Shape
~~~~~~~~~~~~~

Select an outline shape to use while the brush tools are used. This cursor shape will optionally show in the middle of a painting stroke as well. The available outline shape types are shown below. (pictures will come soon)

No Outline
    Turns the outline off.
Circle Outline
    Gives a circular outline approximating the brush size.
Preview Outline
    Gives an outline based on the actual shape of the brush.
Tilt Outline
    Gives a circular outline with a tilt-indicator.



While Painting...
~~~~~~~~~~~~~~~~~

Show Outline
    This option when selected will show the brush outline while a stroke is being made. If unchecked the brush outline will not appear during stroke making, it will show up only after the brush stroke is finished. This option works only when Brush Outline is selected as the Cursor Shape.

    .. versionchanged:: 4.1

        Used to be called "Show Outline When Painting".

Use effective outline size
    .. versionadded:: 4.1 This makes sure that the outline size will always be the maximum possible brush diameter, and not the current one as affected by sensors such as pressure. This makes the cursor a little less noisy to use.

Cursor Color:
    The default cursor color. This is mixed with the canvas image so that it will usually have a contrasting color, but sometimes this mixing does not work. This is usually due driver problems. When that happens, you can configure a more pleasant color here.


.. _window_settings:

Window Settings
---------------

Multiple Document Mode
    This can be either tabbed like :program:`GIMP` or :program:`Paint Tool SAI`, or sub windows, like :program:`Photoshop`.
Background image
    Allows you to set a picture background for sub window mode.
Window Background
    Set the color of the sub window canvas area.
Use Custom Interface Font
    .. versionadded:: 4.4.2 This allows you to tweak the interface font and the size. Requires a restart.
    
    
    
Don't show contents when moving sub-windows
    This gives an outline when moving windows to work around ugly glitches with certain graphics-cards.
Show on-canvas popup messages
    Whether you want to see the on-canvas pop-up messages that tell you whether you are in tabbed mode, rotating the canvas, or mirroring it.
Enable Hi-DPI support
    Attempt to use the Hi-DPI support. It is an option because we are still experiencing bugs on Windows.
(Hi-DPI) Enable fractional scale factor
    .. versionadded:: 5.0 Allow the Hi-DPI support to use fractional (not multiples of 100%) display scaling. If you use a fractional display scaling, this option can make the interface of Krita match the interface size of the rest of your system, but it may cause some visual artifacts.

Allow only one instance of Krita
    An instance is a single entry in your system's task manager. Turning this option makes sure that Krita will check if there's an instance of Krita open already when you instruct it to open new documents, and then have your documents opened in that single instance. There's some obscure uses to allowing multiple instances, but if you can't think of any, just keep this option on.
    
    .. deprecated:: 5.0
    
        Since Krita 5.0 this has been deprecated, as it now uses a SQLite database for handling the resources, and this cannot be managed by multiple instances.

.. _tool_options_settings:

Tools Settings
--------------

Tool Options Location
~~~~~~~~~~~~~~~~~~~~~

In docker (default)
    Gives you the tool options in a docker.
In toolbar
    Gives you the tool options in the toolbar, next to the brush settings. You can open it with the :kbd:`\\` key.

Brush Flow Mode
    In Krita 4.2 the behavior of flow in combination with opacity was changed. This allows you to turn it back to the 4.1 behavior. This will however be removed in future versions.

Switch Control/Alt Selection Modifiers
    This switches the function of the :kbd:`Ctrl` and :kbd:`Alt` keys when modifying selections. Useful for those used to Gimp instead of Photoshop, or Lefties without a right :kbd:`Alt` key on their keyboard.

Enable Touch painting
    This allows finger painting with capacitive screens. Some devices have both capacitive touch and a stylus, and then this can interfere. In that case, just toggle this.

    .. versionchanged:: 5.0
    
        When this is disabled, panning the canvas can be done with by dragging a single finger over the canvas, while when enabled, panning will only be done by dragging three fingers.

Activate transform tool after pasting
    .. versionadded:: 4.2 A convenience feature. When enabling this, the transform tool will activate after pasting for quick moving or rotating.

Enable Touch Rotation
    Without this, gestures on the canvas only allow zoom and pan, with this turned on, the two-finger gesture also allows to rotate.

Kinetic Scrolling (Needs Restart)
    This enables kinetic scrolling for scrollable areas.

    .. figure:: /images/preferences/Krita_4_0_kinetic_scrolling.gif
       :align: center

       Kinetic scrolling on the brush chooser drop-down with activation mode set to :guilabel:`On Click Drag`, with this disabled all of these clicks would lead to a brush being selected regardless of drag motion.

    Activation
        How it is activated.

        On Middle-Click Drag
            Will activate when using the middle mouse button.
        On Touch Drag
            Will activate if it can recognize a touch event. May not always work.
        On Click Drag
            Will activate when it can recognize a click event, will always work.

    Sensitivity
        How quickly the feature activates, this effective determines the length of the drag.
    Hide Scrollbar
        Whether to show scrollbars when doing this.

.. _file_handling_settings:

File Handling
-------------

.. versionadded:: 4.2

Enable Autosaving
    Determines whether Krita should periodically autosave.
Autosave Every
    Here the user can specify how often Krita should autosave the file, you can tick the checkbox to turn it off. For Windows these files are saved in the ``%TEMP%`` directory. If you are on Linux it is stored in :file:`/home/'username'`.
Unnamed autosave files are hidden by default
    This determines whether the filename of autosaves has a period prepended to the name. On Linux and macOS this is a technique to ensure the file is hidden by default.
Create Backup File
    When selected Krita will, upon save, rename the original file as a backup file and save the current image to the original name. The result is that you will have saved the image, and there will be a copy of the image that is saved separately as a backup. This is useful in case of crashes during saves.
Backup File Location
    The default location these backups should be stored.
    
    Same Folder as Original File
        Store the file in the same folder as the original file was stored.
    User Folder
        This is the main folder of your computer. On Linux and macOS this is the 'Home' folder, on Windows, the :file:`c:\Users\YOUR_USER_NAME` folder (where ``YOUR_USER_NAME`` is your windows username).
    Temporary File Folder
        This stored the file in the temp folder. Temp folders are special folders of which the contents are emptied when you shut down your computer. If you don't particularly care about your backup files and want them to be 'cleaned' automatically, this is the best place. If you want your backup files to be kept indefinitely, this is a wrong choice.
    
Backup File Suffix
    The suffix that will be placed after the full filename. ``filename.kra`` will then be saved as ``filename.kra~``, ensuring the files won't show up in Krita's open file dialog.
Number of Backup Files Kept
    Number of backup files Krita keeps, by default this is only one, but this can be up to 99. Krita will then number the backup files.
Compress ``\*.kra`` files more (slows loading/saving)
    This increases the ZIP compression on the saved Krita files, which makes them lighter on disk, but this takes longer to load.
Use Zip64
    KRA files are ZIP files. Zip64 allows you to make really large image files (which is useful for animation), however, not all ZIP file programs can read Zip64, including older versions of Krita.
Trim Files before Saving
    Normally, Krita will always keep pixels outside the visible canvas area and save that. With this option turned on, Krita will first :ref:`crop <crop_tool>` all the layers to the canvas-area and then save it.


.. _misc_settings:

Miscellaneous
-------------

When Krita starts
    This is the option for handling :ref:`user sessions <working_sessions>`. It has the following options:

    Open Default Window
        This opens the regular empty window with the last used workspace.
    Load Previous Session
        Load the last opened session. If you have :guilabel:`Save session when Krita closes` toggled, this becomes the last files you had open and the like.
    Show Session Manager
        Show the session manager directly, so you can pick a session.

    .. versionadded:: 4.1
Save session when Krita closes
    Save the current open windows, documents and the like into the current session when closing Krita, so you can resume where you left off.

    .. versionadded:: 4.1
Upon importing Images as Layers, convert to the image color space.
    This makes sure that layers are the same color space as the image, necessary for saving to PSD.
Undo Stack Size
    This is the number of undo commands Krita remembers. You can set the value to 0 for unlimited undo commands.
Enable Logging For Bug Reports
    This controls whether Krita keeps a log of the important actions, which can then be attached to a bug report. You can view the log itself via :menuselection:`Help --> Show Krita Log for Bug Reports`, and the log itself is stored in the shared application settings.
    
    .. note::
    
        Krita does not automatically transfer data anywhere. The log needs to be uploaded by users themselves if necessary.
Hide splash screen on startup.
    This'll hide the splash screen automatically once Krita is fully loaded.

    .. deprecated:: 4.1

        Deprecated because Krita now has a welcome widget when no canvas is open.

Enable Native File Dialog
    This allows you to use the system file dialog. Turned off by default, because we cannot seem to get native file dialogues 100% bug free.
Maximum brush size
    This allows you to set the maximum brush size to a size of up to 10,000 pixels. Do be careful with using this, as a 10,000 pixel size can very quickly be a full gigabyte of data being manipulated, per dab. In other words, this might be slow.
Recalculate animation cache in background.
    Krita will recalculate the cache when you're not doing anything.

    .. versionchanged:: 4.1

        This is now in the :ref:`performance_settings` under :guilabel:`Animation Cache`.
Automatically Pin New layers To Timeline.
    Used with the :ref:`timeline_docker`, this will pin all animation layers to the timeline automatically. Depending on your workflow, this can be quite intense, so hence the option to turn it off.
    
    .. versionadded:: 5.0

Adapt playback range to key frames.
    This option decides whether adding key frames outside the current playback range automatically extends the playback range or not.
    
    .. versionadded:: 5.0

Font DPI Workaround
    We had a bug in Krita 4.x where the DPI of the display affected the DPI of the text.

    Now when loading a file created in Krita 4.4 we convert its font sizes using the DPI of the display and bake this new value into the file. The user can override this behavior by selecting another DPI in here. Setting this value to 72 DPI will effectively disable any scaling.
    
    .. versionadded:: 5.0

.. _resource_settings:

Resources
---------

For determining the location of the resource folder and the cache.

.. versionadded:: 5.0

Cache Location
    Sets where the SQLite Database that manages all the resources is located.
Resource Folder
    Sets where the Resource Folder itself is located.
