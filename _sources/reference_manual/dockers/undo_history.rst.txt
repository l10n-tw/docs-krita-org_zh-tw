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

.. image:: /images/dockers/Krita_Undo_History_Docker.png

This docker allows you to quickly shift between undo states, and even go back in time far more quickly than rapidly reusing the :kbd:`Ctrl + Z` shortcut.

.. index:: Cumulate Undo

Cumulative Undo
---------------

Click on the settings icon at the bottom of the Undo History docker. It will show you a dialog box to enable cumulative undo. You can change these parameters:

Start merging time
    The amount of seconds required to consider a group of strokes to be worth one undo step.
Group time
    According to this parameter -- groups are made. Every stroke is put into the same group until two consecutive strokes have a time gap of more than T seconds. Then a new group is started. 
Split strokes.
    A user may want to keep the ability of Undoing/Redoing his/her last N strokes. Once N is crossed -- the earlier strokes are merged into the group's first stroke.
