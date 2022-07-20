.. meta::
   :description:
        Overview of the digital color mixer docker.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Color, Color Mixing, Digital Color Mixer, Color Selector
.. _digital_color_mixer_docker:

===================
Digital Color Mixer
===================

.. image:: /images/dockers/Krita_Digital_Color_Mixer_Docker.png

This docker allows you to do simple mathematical color mixing.

It works as follows:

You have on the left side the current color.

Next to that there are six columns. Each of these columns consists of three rows:
The lowest row is the color that you are mixing the current color with. Ticking this button allows you to set a different color using a palette and the mini-color wheel. The slider above this mixing color represent the proportions of the mixing color and the current color. The higher the slider, the less of the mixing color will be used in mixing. Finally, the result color. Clicking this will change your current color to the result color.

At the bottom there's another slider, which will allow you to create a specific gradient to mix between, regardless of the current foreground color.

.. versionadded:: 5.1

   To reset everything to default, press the :guilabel:`Reset` button that is overlaid on the color swatch.
