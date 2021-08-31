.. meta::
   :description:
        Performance settings in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Preferences, Settings, Performance, Multithreading, RAM, Memory Usage, Lag
.. _performance_settings:

====================
Performance Settings
====================

:program:`Krita`, as a painting program, juggles a lot of data around, like the brushes you use, the colors you picked, but primarily, each pixel in your image. Due to this, how :program:`Krita` organizes where it stores all the data can really speed up :program:`Krita` while painting, just like having an organized artist's workplace can really speed up the painting process in real life.

These preferences allow you to configure :program:`Krita's` organisation, but all do require you to restart :program:`Krita`, so it can do this organisation properly.

RAM
---

RAM, or Random Access Memory, is the memory your computer is immediately using. The difference between RAM and the hard drive memory can be compared to the difference between having files on your desk and having files safely stored away in an archiving room: The files on your desk as much easier to access than the ones in your archive, and it takes time to pull new files from the archive. This is the same for your computer and RAM. Files need to be loaded into RAM before the computer can really use them, and storing and removing them from RAM takes time.

These settings allow you to choose how much of your virtual desk you dedicate to :program:`Krita`. :program:`Krita` will then reserve them on start-up. This does mean that if you change any of the given options, you need to restart :program:`Krita` so it can make this reservation.

Memory Limit
    This is the maximum space :program:`Krita` will reserve on your RAM on startup. It's both available in percentages and Bytes, so you can specify precisely. :program:`Krita` will not take up more space than this, making it safe for you to run an internet browser or music on the background.
Internal Pool
    A feature for advanced computer users. This allows :program:`Krita` to organize the area it takes up on the virtual working desk before putting its data on there. Like how a painter has a standard spot for their canvas, :program:`Krita` also benefits from giving certain data it uses its place (a memory pool), so that it can find them easily, and it doesn't get lost among the other data (memory fragmentation). It will then also not have to spend time finding a spot for this data.
   
    Increasing this, of course, means there's more space for this type of data, but like how filling up your working desk with only one big canvas will make it difficult to find room for your paints and brushes, having a large internal pool will result in :program:`Krita` not knowing where to put the other non-specific data.

    On the opposite end, not giving your canvas a spot at all, will result in you spending more time looking for a place where you will put the new layer or that reference you just took out of the storage. This happens for :program:`Krita` as well, making it slower.

    This is recommended to be a size of one layer of your image, e.g. if you usually paint on the image of 3000x3000x8bit-ARGB, the pool should be something like 36 MiB.

    As :program:`Krita` does this on start-up, you will need to restart :program:`Krita` to have this change affect anything.

    .. deprecated:: 4.4
       This setting was not needed from user side and is deprecated starting from 4.4.
 
Swap Undo After
    :program:`Krita` also needs to keep all the Undo states on the virtual desk (RAM). Swapping means that parts of the files on the virtual desk get sent to the virtual archive room. This allows :program:`Krita` to dedicate more RAM space to new actions, by sending old Undo states to the archive room once it hits this limit. This will make undoing a little slower, but this can be desirable for the performance of :program:`Krita` overall.
    This too needs :program:`Krita` to be restarted.

Swapping
--------

File Size Limit
    This determines the limit of the total space :program:`Krita` can take up in the virtual archive room. If :program:`Krita` hits the limit of both the memory limit above, and this Swap File limit, it can't do anything anymore (and will freeze).
Swap File Location
    This determines where the Swap File will be stored on your hard-drive. Location can make a difference, for example, Solid State Drives (SSD) are faster than Hard Disk Drives (HDD). Some people even like to use USB-sticks for the swap file location.

Advanced
--------

Multithreading
~~~~~~~~~~~~~~

Since 4.0, Krita supports multithreading for the animation cache and handling the drawing of brush tips when using the pixel brush.

CPU Limit
    The number of cores you want to allow Krita to use when multithreading.
Frame Rendering Clones Limit
    When rendering animations to frames, Krita multithreads by keeping a few copies of the image, with a maximum determined by the number of cores your processor has. If you have a heavy animation file and lots of cores, the copies can be quite heavy on your machine, so in that case try lowering this value.

Other
~~~~~
Limit frames per second while painting.
    This makes the canvas update less often, which means Krita can spend more time calculating other things. Some people find fewer updates unnerving to watch however, hence this is configurable.
Debug logging of OpenGL framerate
    Will show the canvas framerate on the canvas when active.
Debug logging for brush rendering speed.
    Will show numbers indicating how fast the last brush stroke was on canvas.
Disable vector optimizations (for AMD CPUs)
    Vector optimizations are a special way of asking the CPU to do maths, these have names such as SIMD and AVX. These optimizations can make Krita a lot faster when painting, except when you have an AMD CPU under Windows. There seems to be something strange going on there, so just deactivate them then.
Progress reporting
    This allows you to toggle the progress reporter, which is a little feedback progress bar that shows up in the status bar when you let Krita do heavy operations, such as heavy filters or big strokes. The red icon next to the bar will allow you to cancel your operation. This is on by default, but as progress reporting itself can take up some time, you can switch it off here.
Performance logging
    This enables performance logging, which is then saved to the ``Log`` folder in your ``working directory``. Your working directory is where the autosave is saved at as well.

    So for unnamed files, this is the ``$HOME`` folder in Linux, and the ``%TEMP%`` folder in Windows.

Animation Cache
---------------

.. versionadded:: 4.1

The animation cache is the space taken up by animation frames in the memory of the computer. A cache in this sense is a cache of precalculated images.

Playing back a video at 25 FPS means that the computer has to precalculate 25 images per second of video. Now, video playing software is able to do this because it really focuses on this one single task. However, Krita as a painting program also allows you to edit the pictures. Because Krita needs to be able to do this, and a dedicated video player doesn't, Krita cannot do the same kind of optimizations as a dedicated video player can.

Still, an animator does need to be able to see what kind of animation they are making. To do this properly, we need to decide how Krita will regenerate the cache after the animator makes a change. There's fortunately a lot of different options how we can do this. However, the best solution really depends on what kind of computer you have and what kind of animation you are making. Therefore in this tab you can customize the way how and when the cache is generated.

Cache Storage Backend
~~~~~~~~~~~~~~~~~~~~~

In-memory
    Animation frame cache will be stored in RAM, completely without any limitations. This is also the way it was handled before 4.1. This is only recommended for computers with a huge amount of RAM and animations that must show full-canvas full resolution 6k at 25 fps. If you do not have a huge amount (say, 64GiB) of RAM, do *not* use this option (and scale down your projects).

    .. warning::

        Please make sure your computer has enough RAM *above* the amount you requested in the :guilabel:`General` tab. Otherwise you might face system freezes.

        * For 1 second of FullHD @ 25 FPS you will need 200 extra MiB of Memory.
        * For 1 second of 4K UltraHD@ 25 FPS, you will need 800 extra MiB of Memory.

On-disk
    Animation frames are stored in the hard disk in the same folder as the swap file. The cache is stored in a compressed way. A little amount of extra RAM is needed.

    Since data transfer speed of the hard drive is slow, you might want to limit the :guilabel:`Cached Frame Size` to be able to play your video at 25 fps. A limit of 2500 px is usually a good choice.

Cache Generation Options
~~~~~~~~~~~~~~~~~~~~~~~~

Limit Cached Frame Size
    Render scaled down version of the frame if the image is bigger than the provided limit. Make sure you enable this option when using On-Disk storage backend, because On-Disk storage is a little slow. Without the limit, there's a good chance that it will not be able to render at full speed. Lower the size to play back faster at the cost of lower resolution.
Use Region Of Interest
    We technically only need to use the section of the image that is in view. Region of interest represents that section. When the image is above the configurable limit, render only the currently visible part of it.
Enable Background Cache Generation
    This allows you to set whether the animation is cached for playback in the background (that is, when you're not using the computer). Then, when animation is cached when pressing play, this caching will take less long. However, turning off this automatic caching can save power by having your computer work less.

.. _instant_preview_settings:    

Instant Preview
---------------

Use in-stack preview in Transform Tool
    Whether to use a floating preview for the :ref:`transform_tool`, or whether to have it rendered in place.
Force instant preview in Transform Tool
    Turns on :ref:`instant_preview` for the :ref:`transform_tool` even when it's off in :menuselection:`View --> Instant preview`.
Force instant preview in Move Tool
    Turns on :ref:`instant_preview` for the :ref:`move_tool` even when it's off in :menuselection:`View --> Instant preview`.
Force instant preview in Filters
    Turns on :ref:`instant_preview` for the :ref:`filters` even when it's off in :menuselection:`View --> Instant preview`.
