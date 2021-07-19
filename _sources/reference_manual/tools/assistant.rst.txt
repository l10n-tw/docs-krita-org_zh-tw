.. meta::
   :description property=og\:description:
        Krita's assistant tool reference.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
             - Nmaghrufusman
   :license: GNU free documentation license 1.3 or later.

.. index:: Painting Assistants, Tools
.. _assistant_tool:

==============
Assistant Tool
==============

|toolassistant|

Create, edit, and remove drawing assistants on the canvas. There are a number of different assistants that can be used from this tool. The tool options allow you to add new assistants, and to save/load assistants. To add a new assistant, select a type from the tool options and begin clicking on the canvas. Each assistant is created a bit differently. There are also additional controls on existing assistants that allow you to move and delete them.

The set of assistants on the current canvas can be saved to a "\*.paintingassistant" file using the :guilabel:`Save` button in the tool options. These assistants can then be loaded onto a different canvas using the Open button. This functionality is also useful for creating copies of the same drawing assistant(s) on the current canvas.

Check :ref:`painting_with_assistants` for more information.

Tool Options
------------

.. versionadded:: 4.0

Global Color:
   Global color allows you to set the color and opacity of all assistants at once.

.. versionadded:: 4.1

Custom Color:
   Custom color allows you to set a color and opacity per assistant, allowing for different colors on an assistant. To use this functionality, first 'select' an assistant by tapping its move widget. Then go to the tool options docker to see the :guilabel:`Custom Color` check box. Check that, and then use the opacity and color buttons to pick either for this particular assistant.

.. versionadded:: 5.0

Limit assistant to area

    .. figure:: /images/assistants/Assistants_2_pointperspective_03.png
   
       In the above image, two extra vanishing points have been added to a 2 point assistant, limiting the area in which the grid is drawn and the brush will snap.
    
    This option adds two extra handles to every assistant, for drawing a rectangle which will limit the assistant. This is very useful for comic pages, which may need multiple assistants per page, and will otherwise become very crowded.
