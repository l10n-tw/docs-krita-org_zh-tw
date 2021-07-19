.. meta::
   :description:
        Overview of the channels docker.

.. metadata-placeholder

   :authors: - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Color, Color Channels
.. _channels_docker:

========
Channels
========

.. image:: /images/dockers/Krita_Channels_Docker.png

The channel docker allows you to turn on and off the channels associated with the color space that you are using. Each channel has an enabled and disabled checkbox. You cannot edit individual layer channels from this docker. 

Editing Channels
----------------

If you want to edit individual channels by their grayscale component, you will need to manually separate a layer. This can be done with a series of commands with the layer docker.

#. Select the layer you want to break apart.
#. Go to :menuselection:`Image --> Separate Image`.
#. Select the following options and click :guilabel:`OK`:

    #. Source: Current Layer.
    #. Alpha Options: Create separate separation from alpha channel.
    #. Output to Grayscale, not color: unchecked.

#. Hide your original layer.
#. Select All of the new channel layers and put them in a group layer (:menuselection:`Layer --> Quick Group`).
#. Select the Red layer and change the blending mode to "Copy Red" (these are in the Misc. category).
#. Select the Green layer and change the blending mode  to "Copy Green".
#. Select the Blue layer and change the blending mode to "Copy Blue" .
#. Make sure the Alpha layer is at the bottom of the group.
#. Enable Inherit Alpha for the Red, Green, and Blue layers. 

Here is a `video to see this process <https://www.youtube.com/watch?v=lWuwegJ-mIQ&feature=youtu.be>`_ in Krita 3.0.

When working with editing channels, it can be easier to use the Isolate Layer feature to only see the channel. Right-click on the layer to find Isolate Layer.

