.. meta::
   :description property=og\:description:
        The Krita Raster Archive file format.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: *.kra, KRA, Krita Archive, KRZ, *.krz
.. _file_kra:

======
\*.kra
======

``.kra`` is Krita's internal file-format, which means that it is the file format that saves all of the features Krita can handle. It's construction is vaguely based on the open document standard, which means that you can rename your ``.kra`` file to a ``.zip`` file and open it up to look at the insides. In Krita's settings dialog you can enable compression; with compression enabled the files will be smaller, but saving will take longer.

Other applications mostly cannot open ``.kra``  files, and you cannot upload ``.kra`` as images on websites like twitter or deviantArt.

A ``.kra`` file contains a file names ``mergedimage.png`` which is contains the rendered image as you see it on your canvas. Some applications, like Scribus, can use the ``mergedimage.png`` file to open ``.kra`` files. This file is always in the RGBA color model, or grayscale for files that are originally grayscale.

The ``.krz`` file format is a ``.kra`` file without ``mergedimage.png`` and with compression always enabled. You can use this format if you want to save disk space and do not care about interchange with those applications that load the ``mergedimage.png`` file.
