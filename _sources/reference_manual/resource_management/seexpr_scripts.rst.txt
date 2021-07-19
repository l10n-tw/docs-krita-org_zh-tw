.. meta::
   :description property=og\:description:
        Creating and managing SeExpr script presets in Krita.

.. metadata-placeholder

   :authors: - L. E. Segovia <amy@amyspark.me>
   :license: GNU free documentation license 1.3 or later.

.. index:: Resources, SeExpr
.. _resource_seexpr_scripts:

SeExpr Scripts
==============

.. image:: /images/seexpr/SeExpr_editor.png
   :align: center

SeExpr scripts allow you to render dynamically generated textures.
They are saved as .se files.
They can be used as fill for generated layers.

.. seealso::
    - :ref:`seexpr_tut_intro`
    - :ref:`seexpr`
    - :ref:`seexpr_fill_layer`
    - `"Procedural texture generator (example and wishes)" on Krita Artists <https://krita-artists.org/t/procedural-texture-generator-example-and-wishes/7638>`_
    - `Inigo Quilez's articles <https://iquilezles.org/www/index.htm>`_
    - `The Book of Shaders <https://thebookofshaders.com/>`_

Adding new scripts
------------------

Like with :ref:`resource_patterns`, there is a similar UI with which you
can manage SeExpr presets.
This panel is available by opening the Fill Layer dialog, and selecting
:guilabel:`SeExpr`:

.. image:: /images/seexpr/SeExpr_script.png
    :align: center

At the bottom of the tab, beneath the resource-filter input field, there are the :guilabel:`Import resource` and :guilabel:`Delete resource` buttons. Select the former to add presets to the list.

Similarly, removing presets can be done by pressing the :guilabel:`Delete resource` button. Krita will not delete the actual file then, but rather :ref:`deactivate <deactivating_resources>` it, and thus not load it.

Temporary scripts
-----------------

Layers keep a copy of the textual script that was used to generate them.
You can access it by going to the Options tab and copying the text.
You can then paste it into a new SeExpr Fill Layer.
