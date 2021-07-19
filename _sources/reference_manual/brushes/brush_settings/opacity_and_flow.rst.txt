.. meta::
   :description:
        Opacity and flow in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Raghavendra Kamath <raghavendr.raghu@gmail.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Opacity, Flow, Transparency
.. _option_opacity_n_flow:

================
Opacity and Flow
================

Opacity and flow are parameters for the transparency of a brush.

.. image:: /images/brushes/Krita_Pixel_Brush_Settings_Flow.png

They are interlinked with the painting mode setting.

.. image:: /images/brushes/Krita_2_9_brushengine_opacity-flow_02.png

Opacity
    The transparency of a stroke.
Flow
    The transparency of separate dabs. Finally separated from Opacity in 2.9.

.. image:: /images/brushes/Krita_4_2_brushengine_opacity-flow_01.svg


.. versionchanged:: 4.2
    In Krita 4.1 and below, the flow and opacity when combined with brush sensors would add up to one another, being only limited by the maximum opacity. This was unexpected compared to all other painting applications, so in 4.2 this finally got corrected to the flow and opacity multiplying, resulting in much more subtle strokes. This change can be switched back in the :ref:`tool_options_settings`, but we will be deprecating the old way in future versions.
    
    The old behavior can be simulated in the new system by...
    
    1. Deactivating the sensors on opacity.
    2. Set the maximum value on flow to 0.5.
    3. Adjusting the pressure curve to be concave.
    
    .. image:: /images/brushes/flow_opacity_adapt_flow_preset.gif



Painting mode
-------------

Build-up
    Will treat opacity as if it were the same as flow.
Wash
    Will treat opacity as stroke transparency instead of dab-transparency.

.. image:: /images/brushes/Krita_2_9_brushengine_opacity-flow_03.png

Where the other images of this page had all three strokes set to painting mode: wash, this one is set to build-up.



 
