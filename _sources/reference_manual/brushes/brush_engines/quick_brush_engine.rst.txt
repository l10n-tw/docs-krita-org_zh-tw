.. meta::
   :description:
        The Quick Brush Engine manual page.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Brush Engine, Quick Brush Engine
.. _quick_brush_engine:

==================
Quick Brush Engine
==================

.. image:: /images/icons/quickbrush.svg 


A Brush Engine inspired by the common artist's workflow where a simple big brush, like a marker, is used to fill large areas quickly, the Quick Brush engine is an extremely simple, but quick brush, which can give the best performance of all Brush Engines.

It can only change size, blending mode and spacing, and this allows for making big optimisations that aren't possible with other brush engines.


* :ref:`blending_modes`
* :ref:`option_spacing`
* :ref:`option_size`

Brush
-----

The only parameter specific to this brush.

Diameter
    The size. This brush engine can only make round dabs, but it can make them really fast despite size.
Spacing
    The spacing between the dabs. This brush engine is particular in that it's faster with a lower spacing, unlike all other brush engines.

.. seealso::
    `Phabricator Task <https://phabricator.kde.org/T3492>`_
