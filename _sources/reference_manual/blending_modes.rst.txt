.. meta::
   :description lang=en:
        Overview of Krita's blending modes.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Blending Modes!
.. _blending_modes:


==============
Blending Modes
============== 

Blending modes are a little difficult to explain. Basically, when one layer is above the other, the computer uses a bit of programming to decide how the combination of both layers will look.

Blending modes can not just apply to Layers, but also to individual strokes.

Favorites
---------

These are the blending modes that have been ticked as favorites, defaulting these are:

* :ref:`bm_addition`
* :ref:`bm_color_burn`
* :ref:`bm_color`
* :ref:`bm_color_dodge`
* :ref:`bm_darken`
* :ref:`bm_erase`
* :ref:`bm_lighten`
* :ref:`bm_luminosity`
* :ref:`bm_multiply`
* :ref:`bm_normal`
* :ref:`bm_overlay`
* :ref:`bm_saturation`

Hotkeys associated with Blending modes
--------------------------------------

Defaultly the following hotkeys are associated with blending modes used for painting. Note: these shortcuts do not change the blending mode of the current layer.

You first need to use modifiers :kbd:`Alt + Shift`, then use the following hotkey to have the associated blending mode:


* :kbd:`A` :ref:`bm_linear_burn`
* :kbd:`B` :ref:`bm_color_burn` 
* :kbd:`C` :ref:`bm_color`
* :kbd:`D` :ref:`bm_color_dodge`
* :kbd:`E` :ref:`bm_difference`
* :kbd:`F` :ref:`bm_soft_light`
* :kbd:`G` :ref:`bm_lighten`
* :kbd:`H` :ref:`bm_hard_light`
* :kbd:`I` :ref:`bm_dissolve`
* :kbd:`J` :ref:`bm_linear_light`
* :kbd:`K` :ref:`bm_darken`
* :kbd:`L` :ref:`bm_hard_mix`
* :kbd:`M` :ref:`bm_multiply`
* :kbd:`N` :ref:`bm_normal`
* :kbd:`O` :ref:`bm_overlay`
* :kbd:`P` :ref:`bm_hard_overlay`
* :kbd:`Q` :ref:`bm_behind`
* :kbd:`S` :ref:`bm_screen`
* :kbd:`T` :ref:`bm_saturation`
* :kbd:`U` :ref:`bm_hue`
* :kbd:`V` :ref:`bm_vivid_light`
* :kbd:`W` :ref:`bm_exclusion`
* :kbd:`X` :ref:`bm_linear_dodge`
* :kbd:`Y` :ref:`bm_luminosity`
* :kbd:`Z` :ref:`bm_pin_light`
* Next Blending Mode :kbd:`+`
* Previous Blending Mode :kbd:`-`

Available Blending Modes
------------------------

.. toctree::
   :maxdepth: 2
   :glob:
   
   blending_modes/*
   
.. seealso::

    Basic blending modes:
        https://en.wikipedia.org/wiki/Blend_modes
    Grain Extract/Grain Merge:
        https://docs.gimp.org/en/gimp-concepts-layer-modes.html
