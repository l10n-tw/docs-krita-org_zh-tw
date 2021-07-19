.. meta::
   :description property=og\:description:
        A brief explanation about animated brushes and how to use them.

.. metadata-placeholder
   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Hulmanen
   :license: GNU free documentation license 1.3 or later.

.. _brush_tip_animated_brush:
.. _animated_brush_tips:

================
Animated Brushes
================

Animated brushes are officially called ‘image hoses’, and they're quite fun. They are basically :ref:`brush tips <predefined_brush_tip>` with multiple image files.

The typical way to make them is to first draw the ‘frames’ on a small canvas, per layer:

.. image:: /images/brush-tips/Krita-animtedbrush.png
    :alt: Krita Animated brush tip layer setup.
    :width: 800

You can use the :kbd:`Alt +` |mouseleft| shortcut on the layer thumbnails to isolate layers without hiding them.

.. image:: /images/brush-tips/Krita-animtedbrush1.png
    :alt: Animated brush tips isolated layers.

When done you should have a mess like this.

Go into the brush settings (:kbd:`F5` key), and go to predefined brush-tips, and click :guilabel:`stamp`. You will get this window.

.. image:: /images/brush-tips/Krita-animtedbrush2.png
    :alt: Predefined brush tips dialog.

And then use style **animated** and selection mode set to **random**.

Krita uses :ref:`Gimp’s image hose format <file_gih>` which allows for random selection of the images, angle based selection, pressure based selection, and incremental selection.

When you create a brushtip, Krita will automatically switch to it for the current brush, but you will always be able to find it in the predefined brushes tab.

.. image:: /images/brush-tips/Krita-animtedbrush4.png
    :alt: Result of an animated brush.

And now you can use it to paint trees! (for example)

You can also use animated brush tips to emulate :ref:`bristle brush tips <heightmap_bristle_brush_tips>` that go from very fine bristles to a fully opaque stamp based on pressure, like a dry paintbrush might do. Or make incremental patterns like the ones you see on porcelain.

.. image:: /images/brush-tips/Krita-animtedbrush_incremental_example.png
    :alt: Incremental brush tip example.
