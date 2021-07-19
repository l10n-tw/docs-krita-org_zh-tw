.. meta::
   :description:
        Overview of the log viewer docker.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Log Viewer, Debug
.. _log_viewer_docker:
.. _log_viewer:

==========
Log Viewer
==========

The log viewer docker allows you to see debug output without access to a terminal. This is useful when trying to get a tablet log or to figure out if Krita is spitting out errors while a certain thing is happening.

The log docker is used by pressing the :guilabel:`enable logging` button at the bottom.

.. warning::

   When enabling logging, this output will not show up in the terminal. If you are missing debug output in the terminal, check that you didn't have the log docker enabled.

The docker is composed of a log area which shows the debug output, and four buttons at the bottom.

Log Output Area
---------------

The log output is formatted as follows:

White
    This is just a regular debug message.
Yellow
    This is a info output.
Orange
    This is a warning output.
Red
    This is a critical error. When this is bolded, it is a fatal error.

Options
-------

There's four buttons at the bottom:

Enable Logging
    Enable the docker to start logging. This caries over between sessions.
Clear the Log
    This empties the log output area.
Save the Log
    Save the log to a text file.
Configure Logging
    Configure which kind of debug is added. By default only warnings and simple debug statements are logged. You can enable the special debug messages for each area here.
    
    - General
    - Resource Management
    - Image Core
    - Registries
    - Tools
    - Tile Engine
    - Filters
    - Plugin Management
    - User Interface
    - File Loading and Saving
    - Mathematics and Calculations
    - Image Rendering
    - Scripting
    - Input Handling
    - Actions
    - Tablet Handing
    - GPU Canvas
    - Metadata
    - Color Management
