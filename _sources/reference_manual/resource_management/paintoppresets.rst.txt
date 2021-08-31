.. meta::
   :description property=og\:description:
        The Brush Presets resource in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Resources, Brush Presets, Brushes, Paintop Presets
.. _resource_brushes:

============
Brush Preset
============

Brush Presets, known within Krita as ``paintoppresets``, store the preview thumbnail, brush-engine, the parameters, the brush tip, and, if possible, the texture. They are saved as ``.kpp`` files, except for :ref:`MyPaint brushes <mypaint_brush_engine>`, which are saved as ``.myb`` files.

For information regarding the brush system, see :ref:`Brushes <loading_saving_brushes>`.

The Docker
----------

The docker for Paint-op presets is the :ref:`brush_preset_docker`. Here you can tag, add, remove and search brush presets.

Editing the preview thumbnail
-----------------------------

You can edit the preview thumbnail in the brush-scratchpad, but you can also open the ``\*.kpp`` file in Krita to get a 200x200 file to edit to your wishes. For :ref:`MyPaint brushes <mypaint_brush_engine>`, there is a separate PNG file which is the same name as the ``.myb`` file, except with ``_prev`` attached.

Structure
---------

:ref:`MyPaint brushes <mypaint_brush_engine>` are stored as JSON files with an accompanying preview image, while ``.kpp`` files are PNGs which contain an annotation with the XML data for the brush engine. You can view this data when having the ``.kpp`` file open, via :menuselection:`image --> properties --> annotations`, or by using the :program:`ImageMagick` command ``identify -verbose {FILENAME}`` on the ``.kpp``.
