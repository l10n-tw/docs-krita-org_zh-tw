.. meta::
   :description property=og\:description:
        Creating and managing patterns in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Resources, Patterns
.. _resource_patterns:

========
Patterns
========

.. image:: /images/patterns/Krita_Patterns.png 
   :align: center

Patterns are small raster files that tile. They can be used as following:

* As fill for a vector shape.
* As fill-tool color.
* As height-map for a brush using the 'texture' functionality.
* As fill for a generated layer.

Adding new patterns
-------------------

You can add new patterns via the pattern docker, or the pattern-quick-access menu in the toolbar.
At the bottom of the docker, beneath the resource-filter input field, there are the :guilabel:`Import resource` and :guilabel:`Delete resource` buttons. Select the former to add png or JPG files to the pattern list.

Similarly, removing patterns can be done by pressing the :guilabel:`Delete resource` button. Krita will not delete the actual file then, but rather :ref:`deactivate <deactivating_resources>` it, and thus not load it.

Temporary patterns and generating patterns from the canvas
----------------------------------------------------------

You can use the pattern drop-down to generate patterns from the canvas but also to make temporary ones.

First, draw a pattern and open the pattern drop-down.

.. image:: /images/patterns/Generating_custom_patterns1.png
   :align: center

Then go into :guilabel:`custom` and first press :guilabel:`Update` to show the pattern in the docker. Check if it's right. Here, you can also choose whether you use this layer only, or the whole image. Since 3.0.2, Krita will take into account the active selection as well when getting the information of the two.

.. image:: /images/patterns/Generating_custom_patterns2.png
   :align: center

Then, click either :guilabel:`Use as Pattern` to use it as a temporary pattern, or :guilabel:`Add to predefined patterns` to save it into your pattern resources!

You can then start using it in Krita by for example making a canvas and doing :guilabel:`Edit --> Fill with Pattern`.

.. image:: /images/patterns/Generating_custom_patterns3.png
   :align: center

:ref:`pattern_docker`
---------------------

You can tag patterns here, and filter them with the resource filter.
