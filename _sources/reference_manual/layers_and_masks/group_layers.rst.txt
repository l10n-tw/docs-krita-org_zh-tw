.. meta::
   :description:
        How to use group layers in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
             - Bugsbane
   :license: GNU free documentation license 1.3 or later.

.. index:: Layers, Groups, Passthrough Mode
.. _group_layers:

============
Group Layers
============

While working on complex artwork you'll often find the need to group some layers or portions and elements of the artwork as one unit. Group layers come in handy for this: They allow you to segregate some layers so you can hide these quickly, or so you can recursively transform the content of the group, or so you can apply a mask to all the layers inside this group as if they are one (e.g. by dragging an existing mask to a group layer), etc.. You can quickly create a group layer by selecting the layers that should be grouped together and then pressing the :kbd:`Ctrl + G` shortcut.

A thing to note is that the layers inside a group layer are considered separately from the outside when the group layer gets composited: All layers inside are combined first, and then this intermediate result is used on the outside for compositing the rest of the image. In Photoshop on the contrary, groups have something called pass-through mode which makes the layers behave as if they are not in a group and get composited along with other layers of the stack. Recent versions of Krita offer a pass-through mode as well, which can be enabled in order to get similar behavior.
