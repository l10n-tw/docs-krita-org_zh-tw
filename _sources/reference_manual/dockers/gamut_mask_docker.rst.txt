.. meta::
   :description property=og\:description:
        Overview of the gamut mask docker.

.. metadata-placeholder

   :authors: - Anna Medonosova <anna.medonosova@gmail.com>
             - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>

   :license: GNU free documentation license 1.3 or later.

.. index:: Color, Color Selector, ! Gamut Mask Docker, ! Gamut Mask
.. _gamut_mask_docker:

==================
Gamut Masks Docker
==================

.. image:: /images/dockers/Krita_Gamut_Mask_Docker.png

.. versionadded:: 4.2

    Docker for gamut masks selection and management.

Usage
-----

|mouseleft| an icon (1) to apply a mask to color selectors.

Gamut Masks can be imported and exported in :ref:`resource_manager`.


Management Toolbar
~~~~~~~~~~~~~~~~~~

Create new mask (2)
    Opens the mask editor with an empty template.
Edit mask (3)
    Opens the currently selected mask in the editor.
Duplicate mask (4)
    Creates a copy of the currently selected mask and opens the copy in the editor.
Delete mask (5)
    Deletes the currently selected mask.

Gamut Masks are a type of :ref:`resource <resource_management>`. As such, they can be saved, tagged, reordered and added to bundles. They are stored inside ``*.kgm`` files, which are ZIP files consisting of a mimetype (:mimetype:`application/x-krita-gamutmask`), a preview.png and an SVG file describing the mask.

Editing
-------

If you choose to create a new mask, edit, or duplicate selected mask, the mask template document will be opened as a new view (1).

There you can create new shapes and modify the mask with standard vector tools (:ref:`vector_graphics`).

Fill in the fields at (2).

Title (Mandatory)
    The name of the gamut mask.
Description
    A description.

:guilabel:`Preview` the mask in the artistic color selector (4), :guilabel:`save` the mask (5), or :guilabel:`cancel` editing (3).

.. warning::

  * The shapes need to be added to the layer named ``maskShapesLayer`` (which is selected by default).
  * The shapes need have solid background to show correctly in the editor.
  * A template with no shapes cannot be saved.

.. note::

 The mask is intended to be composed of basic vector shapes. Although interesting results might arise from using advanced vector drawing techniques, not all features are guaranteed to work properly (e.g. grouping, vector text, etc.).

.. image:: /images/dockers/Krita_Gamut_Mask_Docker_2.png

External Info
-------------

- `Color Wheel Masking, Part 1 by James Gurney <https://gurneyjourney.blogspot.com/2008/01/color-wheel-masking-part-1.html>`_.
- `The Shapes of Color Schemes by James Gurney <https://gurneyjourney.blogspot.com/2008/02/shapes-of-color-schemes.html>`_.
- `Gamut Masking Demonstration by James Gourney (YouTube) <https://youtu.be/qfE4E5goEIc>`_.
