.. meta::
   :description:
        Overview of Krita's command line options.

.. metadata-placeholder

   :authors: - Scott Petrovic
             - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Command Line
.. _linux_cmd:

==================
Linux Command Line
==================



As a native Linux program, Krita allows you to do operations on images without opening the program when using the Terminal. This option was disabled on Windows and macOS, but with 3.3 it is enabled for them!

This is primarily used in bash or shell scripts, for example, to mass convert KRA files into PNGs.

Export
------

This allows you to quickly convert files via the terminal:

``krita importfilename --export --export-filename exportfilename``

.. program:: krita

importfilename
    Replace this with the filename of the file you want to manipulate.

.. option:: --export
   
   Export a file selects the export option.

.. option:: --export-filename <filename>
   
   Export filename says that the following word is the filename it should be exported to.

exportfilename
   Replace this with the name of the output file. Use a different extension to change the file format.

Example:

``krita file.png --export --export-filename final.jpg``

This line takes the file ``file.png`` and saves it as ``file.jpg``.

.. option:: --export-sequence
   
   .. versionadded:: 4.2
   
   Export animation to the given filename and exit.
   
   If a KRA file has no animation, then this command prints "This file has no animation." error and does nothing.
   
   ``krita --export-sequence --export-filename file.png test.kra``
   
   This line takes the animation in *test.kra*, and uses the value of --export-filename (*file.png*), to determine the sequence fileformat('png') and the frame prefix ('file').


PDF export
----------

PDF export looks a bit different, using the ``--export-pdf`` option.

``krita file.png --export-pdf --export-filename final.pdf``

This option exports the file ``file.png`` as a PDF file.

.. warning::
    
    This has been removed from 3.1 because the results were incorrect.

Open with Custom Screen DPI
---------------------------

Open Krita with specified Screen DPI.

.. program:: krita

.. option:: --dpi <dpiX,dpiY>
   
   Open Krita with specified Screen DPI.

   For example:

   ``krita --dpi <72,72>``

Open template
-------------

Open krita and automatically open the given template(s). This allows you to, for example, create a shortcut to Krita that opens a given template, so you can get to work immediately!

``krita --template templatename.desktop``

.. program:: krita

.. option:: --template templatename.desktop

   Selects the template option.

   All templates are saved with the .desktop extension. You can find templates in the .local/share/krita/template or in the install folder of Krita.

   ``krita --template BD-EuroTemplate.desktop``

   This opens the European BD comic template with Krita.

   ``krita --template BD-EuroTemplate.desktop BD-EuroTemplate.desktop``

   This opens the European BD template twice, in separate documents.

Start up
--------

.. versionadded:: 3.3

    .. program:: krita
    
    .. option:: --nosplash
    
       Starts krita without showing the splash screen.
    
    .. option:: --canvasonly
    
       Starts krita in canvasonly mode.
    
    .. option:: --fullscreen
    
       Starts krita in fullscreen mode.
    
    .. option:: --workspace Workspace
    
       Starts krita with the given workspace. So for example...
    
        ``krita --workspace Animation``
        
        Starts Krita in the Animation workspace.
    .. option:: --file-layer <filename>

       Starts krita with ``filename`` added as a file-layer. Note that you must either open an existing file or create a new file using the ``new-image`` argument.

       Example:

       ``krita file.kra --file-layer image.png``

       ``krita --new-image RGBA,U8,1000,1000 --file-layer image.jpg``

       If an instance of Krita is already running and Multiple :ref:`instances <window_settings>` are disabled, then this option can be used alone to add a file-layer to the running krita document.

       Example:  ``krita --file-layer image.png``
