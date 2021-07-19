.. meta::
   :description:
        How to use SeExpr as a Fill Layer in Krita.

.. metadata-placeholder

   :authors: - L. E. Segovia <amy@amyspark.me>
   :license: GNU free documentation license 1.3 or later.

.. index:: SeExpr
.. _seexpr_fill_layer:

SeExpr
------

.. versionadded:: 4.4

.. image:: /images/layers/SeExpr-David-Revoy.jpg

Fills the layer with a pattern specified through Disney Animation's
`SeExpr expression language <https://wdas.github.io/SeExpr>`_.

.. seealso::
    - :ref:`seexpr_tut_intro`
    - :ref:`seexpr`
    - :ref:`resource_seexpr_scripts`
    - `"Procedural texture generator (example and wishes)" on Krita Artists <https://krita-artists.org/t/procedural-texture-generator-example-and-wishes/7638>`_
    - `Inigo Quilez's articles <https://iquilezles.org/www/index.htm>`_
    - `The Book of Shaders <https://thebookofshaders.com/>`_

SeExpr is an embeddable, arithmetic expression language that enables you to
write shader-like scripts. Through this language, Krita can add dynamically 
generated textures like lava (example above), force fields, wood, marble, 
etc. to your layers.

As with Patterns, you can create your own and use those as well.
For some examples, please check out the thread `"Procedural texture generator (example and wishes)" on Krita Artists <https://krita-artists.org/t/procedural-texture-generator-example-and-wishes/7638>`_.
You can download them as a bundle through `Amyspark's blog <https://www.amyspark.me/blog/posts/2020/07/03/third-alpha-release.html>`_.

Script
    Select the desired preset out of any existing bundled presets.
    This tab is identical to the Pattern preset selector.

    .. image:: /images/seexpr/SeExpr_script.png

Options
    This tab allows you to edit the selected preset, and apply its script 
    to the layer.

    .. image:: /images/seexpr/SeExpr_editor.png

    There are three sections. The first bar allows you to edit and save the selected preset:

    .. image:: /images/seexpr/SeExpr_editor_preset_mgmt.png

    If your script is syntactically correct, the middle box lets you
    adjust its variables through widgets.

    .. image:: /images/seexpr/SeExpr_editor_widgets.png

    The lower box contains the script text, and shows the detected syntax 
    errors, if any.

    .. image:: /images/seexpr/SeExpr_editor_script_error.png

    You can adjust how much space the latter two boxes have through their
    splitter.
