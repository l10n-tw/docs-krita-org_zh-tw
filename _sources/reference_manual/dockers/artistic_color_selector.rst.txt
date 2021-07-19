.. meta::
   :description:
        Overview of the artistic color selector docker.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
             - Anna Medonosova <anna.medonosova@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Color, Color Selector, ! Artistic Color Selector
.. _artistic_color_selector_docker:

==============================
Artistic Color Selector Docker
==============================

A color selector inspired by traditional color wheel and workflows.

Usage
-----

.. figure:: /images/dockers/Krita_Artistic_Color_Selector_Docker.png

  Artistic color selector with a gamut mask.

Select hue and saturation on the wheel (5) and value on the value scale (4). |mouseleft| changes foreground color (6). |mouseright| changes background color (7).

The blip shows the position of current foreground color on the wheel (black&white circle) and on the value scale (black&white line). Last selected swatches are outlined.

Parameters of the wheel can be set in :ref:`artistic_color_selector_docker_wheel_preferences` menu (2). Selector settings are found under :ref:`artistic_color_selector_docker_selector_settings` menu (3).

Gamut Masking
~~~~~~~~~~~~~

You can select and manage your gamut masks in the :ref:`gamut_mask_docker`.

In the gamut masking toolbar (1) you can toggle the selected mask off and on (left button). You can also rotate the mask with the rotation slider (right).


.. _artistic_color_selector_docker_wheel_preferences:

Color wheel preferences
-----------------------

.. _artistic_color_selector_docker_fig_wheel_preferences:
.. figure:: /images/dockers/Krita_Artistic_Color_Selector_Docker_3.png

   Color wheel preferences.

Sliders 1, 2, and 3
    Adjust the number of steps of the value scale, number of hue sectors and saturation rings on the wheel, respectively.

Continuous Mode
    The value scale and hue sectors can also be set to continuous mode (with the infinity icon on the right of the slider). If toggled on, the respective area shows a continuous gradient instead of the discrete swatches.

Invert saturation (4)
    Changes the order of saturation rings within the the hue sectors. By default, the wheel has gray in the center and most saturated colors on the perimeter. :guilabel:`Invert saturation` puts gray on the perimeter and most saturated colors in the center.

Reset to default (5)
    Loads default values for the sliders 1, 2, and 3. These default values are configured in selector settings.


.. _artistic_color_selector_docker_selector_settings:

Selector settings
-----------------

.. figure:: /images/dockers/Krita_Artistic_Color_Selector_Docker_2.png

  Selector settings menu.

Selector Appearance (1)
    Show background color indicator
      Toggles the bottom-right triangle with current background color.
    Show numbered value scale
      If checked, the value scale includes a comparative gray scale with lightness percentage.

Color Space (2)
    Set the color model used by the selector. For detailed information on color models, see :ref:`color_models`.

    Luma Coefficients (3)
      If the selector's color space is HSY, you can set custom Luma coefficients and the amount of gamma correction applied to the value scale (set to 1.0 for linear scale; see :ref:`linear_and_gamma`).

Gamut Masking Behavior (4)
    The selector can be set either to :guilabel:`Enforce gamut mask`, so that colors outside the mask cannot be selected, or to :guilabel:`Just show the shapes`, where the mask is visible but color selection is not limited.

Default Selector Steps Settings
    Values the color wheel and value scale will be reset to default when the :guilabel:`Reset to default` button in :ref:`artistic_color_selector_docker_wheel_preferences` is pressed.

External Info
-------------
- `HSI and HSY for Krita’s advanced colour selector by Wolthera van Hövell tot Westerflier <https://wolthera.info/?p=726>`_.
- `The Color Wheel, Part 7 by James Gurney <https://gurneyjourney.blogspot.com/2010/02/color-wheel-part-7.html>`_.
