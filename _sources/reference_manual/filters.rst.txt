.. _filters:

=======
Filters
=======

Filters are little scripts or operations you can run on your drawing. You can visualize them as real-world camera filters that can make a photo darker or blurrier. Or perhaps like a coffee filter, where only water and coffee gets through, and the ground coffee stays behind.

Filters are unique to digital painting in terms of complexity, and their part of the painting pipeline. Some artists only use filters to adjust their colors a little. Others, using Filter Layers and Filter Masks use them to dynamically update a part of an image to be filtered. This way, they can keep the original underneath without changing the original image. This is a part of a technique called 'non-destructive' editing.

Filters can be accessed via the :guilabel:`Filters` menu. Krita has two types of filters: Internal and G'MIC filters.

Internal filters are often multithreaded, and can thus be used with the :ref:`filter_brush_engine` or the :ref:`filter_layers` and :ref:`filter_masks`.

.. toctree::
   :maxdepth: 1
   :glob:
   
   filters/*
