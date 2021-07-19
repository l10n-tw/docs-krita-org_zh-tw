.. meta::
   :description:
        How to keep brush settings locked in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Locked Brush Settings
.. _locked_brush_settings:

=====================
Locked Brush Settings
=====================


Normally, a changing to a different brush preset will change all brush settings. Locked presets are a way for you to prevent Krita from changing all settings. So, if you want to have the texture be that same over all brushes, you lock the texture parameter. That way, all brush-preset you select will now share the same texture!

Locking a brush parameter
-------------------------

.. image:: /images/brushes/Krita_2_9_brushengine_locking_01.png

To lock an option, |mouseright| the little lock icon next to the parameter name, and set it to :guilabel:`Lock`. It will now be highlighted to show it's locked:

.. image:: /images/brushes/Krita_2_9_brushengine_locking_02.png

And on the canvas, it will show that the texture-option is locked.

.. image:: /images/brushes/Krita_2_9_brushengine_locking_04.png

Unlocking a brush parameter
---------------------------

To *unlock*, |mouseright| the icon again.

.. image:: /images/brushes/Krita_2_9_brushengine_locking_03.png

There will be two options:

Unlock (Drop Locked)
    This will get rid of the settings of the locked parameter and take that of the active brush preset. So if your brush had no texture on, using this option will revert it to having no texture.
Unlock (Keep Locked)
    This will keep the settings of the parameter even though it's unlocked.
