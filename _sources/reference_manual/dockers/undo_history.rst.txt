.. meta::
   :description:
        Overview of the undo history docker.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Raghavendra Kamath <raghu@raghukamath.com>
             - Scott Petrovic
   :license: GNU free documentation license 1.3 or later.

.. index:: Undo, Redo, History
.. _undo_history:

============
Undo History
============

.. index:: Undo History Docker

Undo History Docker
-------------------

.. image:: /images/dockers/Krita_Undo_History_Docker.png

This docker allows you to quickly shift between undo states, and even go back in time far more quickly than rapidly reusing the :kbd:`Ctrl + Z` shortcut.

.. index:: Cumulate Undo

Cumulative Undo
---------------

Cumulative Undo is a feature of Krita that allows merging similar undo states basing on their time separation. It makes the undo history cleaner. 

.. raw:: html

    <video controls>
        <source src="../../_static/Cumulative_Undo_Example.mp4" type="video/mp4">
        Your browser doesn't support video
    </video>

Cumulative Undo settings are located under :guilabel:`General` -> :guilabel:`Miscellaneous` page of Krita settings dialog

.. image:: /images/dockers/Cumulative_Undo_General_Settings.png

In the advanced section of the settings you can configure the following properties:

.. image:: /images/dockers/Cumulative_Undo_Advanced_Settings.png

Wait before merging strokes
    The minimal age (in seconds) of the strokes to become subject to merging. This option allows you to keep undo for last N seconds intact.
Exclude last strokes from merge
    The minimal number of strokes that undo history should have before merging will start. This option allows you to keep N last strokes intact.
Max interval group strokes
    The maximum break the user takes between doing two strokes that can be considered to belong the same group. The lower the value, the more irrelevant strokes will be merged.
Max group duration
    The maximum duration of a single group. When a group becomes too long, Krita just starts a new one.

Apart from these options, Krita will make sure that strokes of different colors, brush presets or blending modes are not merged together.
