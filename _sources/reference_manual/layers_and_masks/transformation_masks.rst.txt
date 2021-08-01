.. meta::
   :description:
        How to use transformation masks in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Layers, Masks, Transform
.. _transformation_masks:
.. _transform_mask:

===============
Transform Masks
===============

Rather than working with a brush to affect the mask, transform masks allow you to transform (move, rotate, shear, scale and perspective) a layer without applying the transform directly to the paint layer and making it permanent.

In the same way that Filter and Transparency Masks can be attached to a Paint layer and are non-destructive, so too can the Transform Mask.

.. versionadded:: 5.0

    Transform masks can also be used in conjunction with the :ref:`animation_curves_docker` to :dfn:`Tween` an animation.

Adding a Transform Mask
-----------------------

* First add a transform mask to an existing layer.
* Select the :ref:`transform_tool`.
* Select any of the transform modes in the Tools Options dock and, with the transform mask selected, apply them on the layer. 
* Hit apply.
* Toggle the transform visibility to see the difference between the original and the transform applied.

.. note::

    Affine transforms, like Move, Rotate, Shear, Scale and Perspective get updated instantly once the original is updated. Other transforms like Warp, Cage and Liquify take up much more processing power, and to not to waste that, Krita only updates those every three seconds.

To edit a transform, select the transform mask, and try to use the transform tool on the layer. The transform mode will be the same as the stored transform, regardless of what transform you had selected. If you switch transform modes, the transformation will be undone.
