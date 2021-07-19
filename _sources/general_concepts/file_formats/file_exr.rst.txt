.. meta::
   :description:
        The EXR file format as exported by Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: *.exr, EXR, HDR Fileformat, OpenEXR
.. _file_exr:

======
\*.exr
======

``.exr`` is the prime file format for saving and loading :ref:`floating point bit depths <bit_depth>`, and due to the library made to load and save these images being fully open source, the main interchange format as well.

Floating point bit-depths are used by the computer graphics industry to record scene referred values, which can be made via a camera or a computer renderer. Scene referred values means that the file can have values whiter than white, which in turn means that such a file can record lighting conditions, such as sunsets very accurately. These EXR files can then be used inside a renderer to create realistic lighting.

Krita can load and save EXR for the purpose of paint-over (yes, Krita can paint with scene referred values) and interchange with applications like Blender, Mari, Nuke and Natron.

