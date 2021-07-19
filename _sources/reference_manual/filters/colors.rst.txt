.. meta::
   :description:
        Overview of the color filters.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Raghavendra Kamath <raghavendr.raghu@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Filters
.. _color_filters:

=====
Color
=====

Similar to the Adjust filters, the color filters are image wide color operations.

.. index:: ! Color to Alpha
.. _filter_color_to_alpha:

Color to Alpha
--------------

This filter allows you to make one single color transparent (alpha). By default when you run this filter white is selected, you can choose a color that you want to make transparent from the color selector.

.. image:: /images/filters/Color-to-alpha.png

The Threshold indicates how much other colors will be considered mixture of the removed color and non-removed colors.
For example, with threshold set to 255, and the removed color set to white, a 50% gray will be considered a mixture of black+white, and thus transformed in a 50% transparent black.

.. image:: /images/filters/Krita-color-to-alpha.png
   :align: center

This filter is really useful in separating line art from the white background.

.. _filter_color_transfer:

Color Transfer
--------------

This filter converts the colors of the image to colors from the reference image.
This is a quick way to change a color combination of an artwork to an already saved image or a reference image.

.. image:: /images/filters/Color-transfer.png

.. _filter_maximize_channel:

Maximize Channel
----------------

This filter checks for all the channels of a each single color and set all but the highest value to 0.

.. _filter_minimize_channel:

Minimize Channel
----------------

This is reverse to Maximize channel, it checks all the channels of a each single color and sets all but the lowest to 0.
