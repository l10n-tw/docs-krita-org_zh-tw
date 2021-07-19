.. meta::
   :description:
        Split Alpha: how to work with color and alpha channels of the layer separately.

.. metadata-placeholder

   :authors: - Dmitry Kazakov <dimula73@gmail.com>
             - Raghavendra Kamath <raghu@raghukamath.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Layers, Transparency, Alpha channel, Game
.. _split_alpha:

===========
Split Alpha
===========

Sometimes especially in the field of game development, artists need to work with the alpha channel of the texture separately. To assist such workflow, Krita has a special functionality called :menuselection:`Split Alpha`. It allows splitting alpha channel of a paint layer into a separate :ref:`transparency_masks`. The artist can work on the transparency mask in an isolated environment and merge it back when he has finished working.

How to work with alpha channel of the layer
-------------------------------------------

#. |mouseright| the paint layer in the layers docker.
#. Choose :menuselection:`Split Alpha --> Alpha into Mask`.
#. Use your preferred paint tool to paint on the Transparency Mask. Black paints transparency (see-through), white paints opacity (visible). Gray values paint semi-transparency.
#. If you would like to isolate alpha channel, enter Isolated Mode by |mouseright| + :menuselection:`Isolate Layer` (or the :kbd:`Alt +` |mouseleft| shortcut).
#. When finished editing the Transparency Mask, |mouseright| on it and select :menuselection:`Split Alpha --> Write as Alpha`.

How to save a PNG texture and keep color values in fully transparent areas
--------------------------------------------------------------------------

Normally, when saving an image to a file, all fully transparent areas of the image are filled with black color. It happens because when composing the layers of the image, Krita drop color data of fully transparent pixels for efficiency reason. To avoid this of color data loss you can either avoid compositing of the image i.e. limit image to only one layer without any masks or effects, or use the following method:

#. |mouseright| the layer in the layers docker.
#. Choose :menuselection:`Split Alpha --> Alpha into Mask`.
#. |mouseright| on the created mask and select :menuselection:`Split Alpha --> Save Merged...`.
