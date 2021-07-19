.. meta::
   :description:
        Overview of the animation docker.
        
.. deprecated:: 5.0

   As of Krita 5.0, the features of the Animation Docker have been moved to the :ref:`timeline_docker`.


.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Animation, Animation Playback, Play/Pause, Framerate, FPS, Speed
.. _animation_docker:

================
Animation Docker
================

.. image:: /images/dockers/Animation_docker.png

To have a playback of the animation, you need to use the animation docker.

The first big box represents the current Frame. The frames are counted with programmer's counting so they start at 0.

Then there are two boxes for you to change the playback range here. So, if you want to do a 10 frame animation, set the end to 10, and then Krita will cycle through the frames 0 to 10.

The bar in the middle is filled with playback options, and each of these can also be hot-keyed. The difference between a keyframe and a normal frame in this case is that a normal frame is empty, while a keyframe is filled.

Then, there's buttons for adding, copying and removing frames. More interesting is the next row:

Onion Skin
    Opens the :ref:`onion_skin_docker` if it wasn't open before.
Auto Frame Mode
    Will make a frame out of any empty frame you are working on. Currently automatically copies the previous frame.
Drop frames
    This'll drop frames if your computer isn't fast enough to show all frames at once. This process is automatic, but the icon will become red if it's forced to do this.

You can also set the speedup of the playback, which is different from the framerate.
