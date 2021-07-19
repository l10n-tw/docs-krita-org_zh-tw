.. meta::
   :description:
        The reference images tool.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Tools, Reference
.. _reference_images_tool:

=====================
Reference Images Tool
=====================

|toolreference|

.. versionadded:: 4.1

The reference images tool is a replacement for the reference images docker. You can use it to load images from your disk as reference, which can then be moved around freely on the canvas and placed wherever.

Tool Options
------------

Add Reference Image
    Load a single image to display on the canvas.
Paste as Reference Image
    Load an image from the system clipboard and add it as a reference image.
Load Set
    Load a set of reference images.
Save Set
    Save a set of reference images.
Delete all reference images
    Delete all the reference images.
Keep aspect ratio
    When toggled this will force the image to not get distorted.
Opacity
    Lower the opacity.
Saturation
    Desaturate the image. This is useful if you only want to focus on the light/shadow instead of getting distracted by the colors.
Storage mode
    How is the reference image stored.

    Embed to \*.kra
        Store this reference image into the KRA file. This is recommended for small vital files you'd easily lose track of otherwise.
    Link to external file.
        Only link to the reference image, krita will open it from the disk everytime it loads this file. This is recommended for big files, or files that change a lot. This option is only available when reference images are loaded from a local path.

You can move around reference images by selecting them with |mouseleft|, and dragging them. You can rotate reference images by holding the cursor close to the outside of the corners till the rotate cursor appears, while tilting is done by holding the cursor close to the outside of the middle nodes. Resizing can be done by dragging the nodes. You can delete a single reference image by clicking it and pressing :kbd:`Del`. You can select multiple reference images with :kbd:`Shift` and perform all of these actions.

To hide all reference images temporarily use :menuselection:`View --> Show Reference Images`.
