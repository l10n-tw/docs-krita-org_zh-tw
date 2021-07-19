.. meta::
   :description:
        Practical uses of perspective projection.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

This is a continuation of the :ref:`perspective projection tutorial <projection_perspective>`, be sure to check it out if you get confused! 

.. index:: Projection, Perspective
.. _projection_practical:

Practical
=========

So, if computers can already automate a ton, and it is fairly complicated, is there still a use for a traditional 2d artist to learn this?

Yes, actually. The benefit that 2d art still has over 3d is that it's plain faster for single images, especially with complicated subjects like faces and bodies.

Perspective projection can help a lot getting down those annoying poses, like people lying down. It also helps when combining 2d and 3d, as when you know where the camera is in the 3d render, you can use that in a projection to get the character projected.

.. image:: /images/category_projection/projection_animation_04.gif 
   :align: center

The side view of a person lying down is often easy to draw, but the top view or the view from the feet isn’t. Hence why we use the side view to do perspective projection on.

.. image:: /images/category_projection/projection_image_38.png 
   :align: center

Another example with an equally epic task: sitting.

.. image:: /images/category_projection/projection_animation_05.gif 
   :align: center

Now, with this one we have a second vanishing point above the front-view. It should be about the same distance above the front-view as it is above the head of the rotated side-view. The projection plane should also be the same distance from the vanishing point, but that doesn’t mean it has to be behind. This is something I avoided in the earlier examples, because it makes the working field really messy, but if you look up perspective projection you’ll see multiple examples of this method.

Also of note is that you actually should be having the view plane/projection plane perfectly perpendicular to the angle of the focal point, otherwise you get odd distortion, this doesn’t happen here, which means this sitting person is a bit more stretched vertically than necessary.

.. image:: /images/category_projection/projection_image_39.png 
   :align: center

One more, for the road…

.. image:: /images/category_projection/projection_animation_06.gif 
   :align: center

Here you can see that the misalignment of the vanishing point to the projection plane causes skewing which was then fixed by Krita’s transform tools, technically it’s of course correct, but what is correct doesn’t always look good. (I also mess up the position of the shoulder for a good while if you look closely.)

.. image:: /images/category_projection/projection_image_40.png 
   :align: center

Conclusion and afterthoughts
============================

I probably didn’t make as nice result images as I could have, especially if you compare it to the 3d images. However, you can still see that the main landmarks are there. The real use of this technique lies in poses though, and it allows you to iterate on a pose quite quickly once you get the hang of it.

Generally, it’s worth exploring, if only because it improves your spatial sense.

.. seealso::

    * https://en.wikipedia.org/wiki/Axonometric_projection
    * https://blenderartists.org/t/creating-an-isometric-camera/440743
    * http://flarerpg.org/tutorials/isometric_tiles/
    * https://en.wikipedia.org/wiki/Isometric_graphics_in_video_games_and_pixel_art
    * https://en.wikipedia.org/wiki/Lens_%28optics%29
