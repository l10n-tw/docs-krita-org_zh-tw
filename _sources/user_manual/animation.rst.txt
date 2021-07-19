.. meta::
   :description property=og\:description:
        Detailed guide on the animation workflow in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Raghavendra Kamath <raghavendr.raghu@gmail.com>
             - Scott Petrovic
             - Lundin
   :license: GNU free documentation license 1.3 or later.

.. index:: Animation

.. |duplicateframe| image:: /images/icons/addduplicateframe.svg
.. |addlayer| image:: /images/icons/addduplicateframe.svg
.. |pintimeline| image:: /images/icons/reference_images_tool.svg
.. |onionskin| image:: /images/icons/onion_skin_options.svg
.. |onionoff| image:: /images/icons/onionOff.svg
.. |onionon| image:: /images/icons/onionOn.svg

.. _animation:

====================
Animation with Krita
====================

Thanks to the 2015 Kickstarter, :program:`Krita` has animation. In specific, :program:`Krita` has frame-by-frame raster animation.

To access the animation features, the easiest way is to change your workspace to Animation. This will make the animation dockers and workflow appear.

Workflow
---------

In traditional animation workflow, what you do is that you make :term:`Keyframes <Keyframe>`, which contain the important poses, and then draw frames in between (:dfn:`tweening` in highly sophisticated animator's jargon).

For this workflow, there are three important dockers:

#. The :ref:`timeline_docker`. View and control all of the frames in your animation. The timeline docker also contains functions to manage your layers. The layers that are created in the timeline docker also appear on the normal Layer docker.
#. The :ref:`onion_skin_docker`. This docker controls the look of the onion skin, which in turn is useful for seeing the previous frame.
#. The :ref:`animation_curves_docker`. This docker allows you to do minor tweening for animation curves.
#. The :ref:`storyboard_docker`. This docker helps you create and keep track of storyboards.

Furthermore, especially when you want to do a big animation, that is, any animation longer than 3 seconds, you will need to think about how you are going to approach this. Krita is specialized in frame by frame animation, and because of this Krita keeps all the frames in memory. This means that animation files will eat up all of your computer's working memory (RAM). If you don't know what working memory is, you probably have too little to do a long sequence in Krita. Therefore, you need to take a page from professional animation and do some planning!

Typically, most animation projects start with a script or at the very least an outline of actions that will happen. You can do this in any kind of text editor you like. The next step is to create a :ref:`storyboard <storyboard_docker>`. They are sketches of the basic composition of each scene, with some extra notes on what is going to move, like camera movement, character movement, notes on audio, notes on color. These seem closer to a comic than an animation, but the key difference between the two is that in comics the composition is made to help the reader move their eyes over the page, while in animation the viewer's eyes will stay in relatively the same spot, so consecutive storyboard frames will have their most important elements in relatively the same place. If that seems a little abstract, don't worry. You can make a story board by using the animation functions, but the key here is that you use as little frames as possible. Export the story board using the render animation option.

Then, the next step is to make an :dfn:`Animatic`. An animatic is basically the storyboard, but then animated. You are best off doing this in a video editor like `KDENLive <http://kdenlive.org/>`_, `Openshot <https://www.openshot.org/>`_, `Olive <https://olivevideoeditor.org/index.php>`_, or even Windows Movie Maker. If you want to put everything together into one big animation you will need to learn how to use such a program to begin with, as Krita doesn't have extensive video and audio montage functions.

Doing the animatic will allow you to see how the animation can be subdivided into small clips. If you are just starting out, you are best off limiting yourself to 12 frames per second. Then, a 10-second clip would be 120 frames. Try to figure out if you can subdivide your animation idea into clips of 10 seconds or shorter. You can import the story board frames associated with a specific clip by going to :menuselection:`File --> Import Animation Frames`. From there, slowly start building up your animation. During the sketching phase it may also help to work on a low resolution, like 800×450 pixels. High resolution only starts mattering when you are doing line art, after all. And it will be hard to get to that point if you don't even have a rough outline.

Always keep an eye on the memory consumption. You can see the memory consumption in the status bar, by clicking the resolution label. This label should also have a little progress bar that shows how much memory Krita is using at this moment. Don't let the memory bar get full: it will lead to Krita slowing down, and sometimes it might even mean Krita won't be able to export the animation on your specific machine. You can reduce memory consumption by:

#. Merging together layers. Yes, you cannot afford to have a layer for every single change. Often, the fewer layers, the better.
#. In some cases by going to :menuselection:`Image --> Crop Layers to Image Size`, this will crop all layers to remove sections that are outside the canvas.
#. Sometimes, certain layers don't need to be full color, especially if they're just black and white. You can then go to :menuselection:`Layers --> Convert --> Convert Layer Color Space` and convert the layer to a grayscale one. This will half the amount of RAM this specific layer will take up.
#. Working smaller. Even if you imagined yourself animating in the 4K resolution, you might need to accept your computer just cannot handle this. Try going a step lower, on animations, even a 20% reduction can make a huge difference in memory consumption, while not being a huge difference in resolution.

Also watch out that other programs on your computer aren't hogging all the RAM. Web browsers and chat programs tend to be the biggest culprits here, especially if you are streaming music or videos. If you are hurting for memory, see if you can get these functions to work on a separate device like a phone instead.

Another thing you will want to do is make a ton of backups. Every time you hit an important section with an animation, like you finished the line art, or you did a pretty tricky section, you will want to use :menuselection:`File --> Incremental Backup` to make a separate copy of the current file to continue working in. This way, if the animation file gets corrupt, which could happen due to a power outage, or a cat jumping on the keyboard, you will still have a snapshot of the last important section. Other backup techniques, like copying the files to a cloud service, or to a backup hard drive are also very recommended.

.. tip::

   And while we're at it, whenever you've hit a milestone, don't forget to take a break as well! Doing big projects like animations take a lot of effort and concentration, so taking breaks is important to recharge yourself.

When you are done, you will want to use :guilabel:`Render Animation` again. Now either export a frame sequence or a small video file, and then compose all of the frame sequences and video files together in the video editor. Then you can render it to ``WebM``, and upload it to your favorite video hosting website.

This may all seem a little complicated, but if your computer doesn't have a lot of resources, you have got to be resourceful yourself!

Introduction to animation: How to make a walk cycle
---------------------------------------------------

The best way to get to understand all these different parts is to
actually use them. Walk cycles are considered the most basic form of a full animation, because of all the different parts involved with them. Therefore, going over how one makes a walk cycle should serve as a good introduction.

Setup
~~~~~

First, we make a new file. On the first tab, we type in a nice ratio like 1280×1024, set the dpi to 72 (we're making this for screens after all) and title the document 'walk cycle'.

In the second tab, we choose a nice background color, and set the background to canvas-color. This means that Krita will automatically fill in any transparent bits with the background color. You can change this in :menuselection:`Image --> Image Properties`. This is very useful for animation, as the layer you do animation on **must** be semi-transparent to get :dfn:`onion skinning` working.

.. note::
    Krita has a bunch of functionality for meta-data, starting at the :guilabel:`Create Document` screen. The title will be automatically used as a suggestion for saving and the description can be used by databases, or for you to leave comments behind. Not many people use it individually, but it can be useful for working in larger groups.

Then hit :guilabel:`Create`!

Then, to get all the necessary tools for animation, select the animation workspace in :menuselection:`&Window --> Wor&kspace --> Animation`

Which should result in this: 

.. figure:: /images/animation/Introduction_to_animation_01.png

   The animation workspace adds the :ref:`timeline_docker` at the bottom.

Animating
~~~~~~~~~

Make sure there's two transparent layers setup in the layer docker. You can add a new layer by pressing the :guilabel:`+` or by pressing :kbd:`ins`. Let's name the bottom one 'environment' and the top 'walkcycle' by double-clicking their names in the layer docker.

.. figure:: /images/animation/Introduction_to_animation_02.png
   :alt: Layout of the layer stack.

Use the :ref:`line_tool` to draw a single horizontal line. This is
the ground.

.. image:: /images/animation/Introduction_to_animation_03.png
   :alt: Our simple environment, consisting of a single horizon.

Then, select the 'walkcycle' layer and draw a head and torso (you can use any brush for this).

.. image:: /images/animation/Introduction_to_animation_04.png
   :alt: A head and torso.

Now, selecting a new frame will not make a new frame automatically.
Krita doesn't actually see the 'walkcycle' layer as an animated layer at
all!

We can make it an animated layer by adding a frame to the timeline. A frame in the timeline to get a context menu. Select :guilabel:`Create Duplicate Frame` (|duplicateframe|).

.. attention::

     If you select :guilabel:`Create Blank Frame`, the content of the layer will be dropped and a new blank frame will appear; since you want to preserve the image, you need to use :guilabel:`Create Duplicate Frame`.


.. image:: /images/animation/Introduction_to_animation_05.png
   :alt: Location of the onion skin icon.

You can see it has become an animated layer because of the onion skin icon (|onionon|) showing up in the timeline docker.

Use the :guilabel:`Create Duplicate Frame` button to copy the first frame onto the second. Then, use the :ref:`move_tool` (switch to it using the :kbd:`T` shortcut) with the :kbd:`Shift + ↑` shortcut to move the frame contents up.

We can see the difference by turning on the onion skinning (press the |onionoff|, so it becomes |onionon|):

.. figure:: /images/animation/Introduction_to_animation_06.png
   :alt: Onion skin is turned on.

.. figure:: /images/animation/Introduction_to_animation_07.png
   :alt: The current frame in black and the silhouette of the previous frame in red.

Now, you should see the previous frame as red.

.. warning::
    Krita sees white as a color, not as transparent, so make sure the animation layer you are working on is transparent in the bits where there's no drawing. You can fix the situation by use the :ref:`filter_color_to_alpha` filter, but prevention is best.

.. figure:: /images/animation/Introduction_to_animation_08.png
   :alt: Current frame is black and silhouette of the future frame is green.

Future frames are drawn in green, and both colors can be configured in the onion skin docker.

Now, we're going to draw the two extremes of the walk cycle. These are the pose where both legs are as far apart as possible, and the pose where one leg is full stretched and the other pulled in, ready to take the next step.

.. figure:: /images/animation/Introduction_to_animation_09.png

   The above image shows our two extremes: legs far apart, and one leg straight while the other is bent, as it's taking a step. This also shows the power of onion skins, as we can see both extremes at once.
   Notice also how the legs have been made semi-transparent. This isn't necessary with a stick figure, but useful in this case when we start copying.

Now, let's copy these two. You can do this by doing |mouseright| on the frame, and then selecting :guilabel:`Copy Keyframes`. Then select the new position in the time line, |mouseright| again, and :guilabel:`Paste Keyframes`.

Now then...

#. Copy frame 0 to frame 2.
#. Copy frame 1 to frame 3.
#. Erase the semi transparent lines to make it obvious which leg is in front of the other. In 0 and 1, we have the closer leg to the right, then bend, and in 2 and 3, we have the further leg to the right and then bend.

   .. figure:: /images/animation/Introduction_to_animation_10.png

#. In the animation settings, set the frame-rate to 4
   
   .. figure:: /images/animation/Introduction_to_animation_11.png

#. Select all frames in the timeline docker by dragging-selecting them.
   
   .. figure:: /images/animation/Introduction_to_animation_12.png

#. Press play in the header.
#. Enjoy your first animation!

.. image:: /images/animation/animation_walkcycle_2021_4_frames.gif

Expanding upon your rough walk cycle
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. image:: /images/animation/Introduction_to_animation_14.png

You can quickly make some space by the :kbd:`Alt + drag` shortcut on any frame. This'll move that frame and all others after it
in one go. More efficient for us, however, is to select all frames, |mouseright| them, and then select :menuselection:`Holdframes --> Insert Hold Frame`, which will insert an empty space or :dfn:`Hold Frame` in between each :dfn:`Keyframe`.

Make new frames in between each keyframe, and try to interpolate, or inbetween each frame you add.

.. note::

   A lot has been written about how to inbetween properly, and it's one of the areas where animators express their own style the clearest. As such, we won't cover inbetweening itself here. We recommend you do a search for inbetweening tutorials on the internet. We also recommend animation analyses to get an idea of how intricate this subject is.
   
   For this particular example, I prefer to start by finding the position of the heel in a frame, then draw the rest of the foot, then the knees, and then the rest of the legs.

.. image:: /images/animation/Introduction_to_animation_14.png
.. image:: /images/animation/Introduction_to_animation_13.png

You'll find that the more frames you add, the more difficult it becomes to keep track of the animation. There are two things you can do here. The first is to color label frames, you can do |mouseright| on the keyframes, and select any of the colors on the bottom.

.. figure:: /images/animation/Introduction_to_animation_13b.png

   In this example, the extremes are blue, the first inbetweens green and the less important inbetweens in yellow and orange.

Another thing you can do is to adjust the onion skins.

You can modify the onion skin by using the :ref:`onion_skin_docker`, where you can change how many frames are visible at once, by toggling them on the top row. The bottom row is for controlling transparency, while below there you can modify the colors and intensity of the coloring.

.. image:: /images/animation/Introduction_to_animation_15.png

.. figure:: /images/animation/Introduction_to_animation_14b.png

   Here we've turned off all onion skinned frames except the next and previous ones.

Animating with multiple layers
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Okay, our walk cycle is missing some hands, let's add them on a separate
layer. So we make a new layer, and name it hands and...

.. image:: /images/animation/Introduction_to_animation_16.png

Our walk cycle is gone from the timeline docker! This is a feature
actually. A full animation can have so many little parts that an
animator might want to remove the layers they're not working on from the timeline docker.

.. versionadded:: 4.3.0

     In :program:`Krita 4.3.0` and later, all new layers are pinned to the timeline by default.


To show a layer whether it's active or not, you can "pin" it to the 
timeline by clicking the |pintimeline| icon while having the layer you want pinned selected in the :ref:`layer docker <layer_docker>`. We recommend pinning any layers that you're currently animating on.

.. image:: /images/animation/Introduction_to_animation_17.png
.. image:: /images/animation/Introduction_to_animation_18.png

Exporting
~~~~~~~~~

When you are done, select :menuselection:`File --> Render Animation`. To render to a video file, you'll need a program called :program:`FFmpeg`. To learn more, please read :ref:`render_animation`.

Enjoy your walk cycle!

.. image:: /images/animation/Introduction_to_animation_walkcycle_02.gif

.. seealso::

   - :ref:`timeline_docker`
   - :ref:`onion_skin_docker`
   - :ref:`animation_curves_docker`
   - :ref:`storyboard_docker`
   - :ref:`import_animation`
   - :ref:`audio_animation`
   - :ref:`render_animation`
   - :ref:`japanese_animation_template`
