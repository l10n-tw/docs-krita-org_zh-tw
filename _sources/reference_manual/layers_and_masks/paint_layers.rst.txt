.. meta::
   :description:
        How to use paint layers in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
             - Raghavendra Kamath
             - Bugsbane
             - Halla Rempt
             - Alan
   :license: GNU free documentation license 1.3 or later.

.. index:: Layers, Paint Layer, Raster, Bitmap
.. _paint_layers:

============
Paint Layers
============

Paint layers are the most commonly used type of layers used in digital paint or image manipulation software like Krita. If you've ever used layers in :program:`Photoshop` or the :program:`Gimp`, you'll be used to how they work. In short, a paint layer, also called a pixel, bitmap or raster layer, is a bitmap image (an image made up of many points of color).

Paint layers let you apply many advanced effects such as smearing, smudging and distorting. This makes them the most flexible type of layer. However,  paint layers don't scale well when enlarged (they pixelate), and any effects that have been applied can't be edited.

To deal with these two drawbacks, digital artists will typically work at higher Pixel Per Inch (PPI) counts.  It is not unusual to see PPI settings of 400 to 600 PPI for a canvas with a good amount of detail.  To combat the issue of applied effects that cannot be edited it is best to take advantage of the non-destructive layer capabilities of filter, transparency and transform masks.

As long as you have enough resolution / size on your canvas though, and as long as you aren't going to need to go back and tweak an effect you created previously, then a paint layer is usually the type of layer you will want. If you click on the :guilabel:`New layer` icon in the layers docker you'll get a paint layer. Of course you can always choose the :guilabel:`New layer` drop-down to get another type.

The hotkey for adding a new paint layer is the :kbd:`Ins` key.
