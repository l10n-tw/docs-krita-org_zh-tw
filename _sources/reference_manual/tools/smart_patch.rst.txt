.. meta::
   :description:
        Krita's smart patch tool reference.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Raghavendra Kamath
   :license: GNU free documentation license 1.3 or later.

.. index:: Tools, Smart Patch, Automatic Healing
.. _smart_patch_tool:

================
Smart Patch Tool
================

|toolsmartpatch|

The smart patch tool allows you to seamlessly remove elements from the image. It does this by letting you draw the area which has the element you wish to remove, and then it will attempt to use patterns already existing in the image to fill the blank.

You can see it as a smarter version of the clone brush.

.. image:: /images/tools/Smart-patch.gif

The smart patch tool has the following tool options:

Accuracy
--------

Accuracy indicates how many samples, and thus how often the algorithm is run. A low accuracy will do few samples, but will also run the algorithm fewer times, making it faster. Higher accuracy will do many samples, making the algorithm run more often and give more precise results, but because it has to do more work, it is slower.

Patch size
----------

Patch size determines how big the size of the pattern to choose is. This will be best explained with some testing, but if the surrounding image has mostly small elements, like branches, a small patch size will give better results, while a big patch size will be better for images with big elements, so they get reused as a whole.
