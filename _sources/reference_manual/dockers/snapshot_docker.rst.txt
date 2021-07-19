.. meta::
   :description:
        Overview of the snapshot docker.

.. metadata-placeholder

   :authors: - Tusooa Zhu <tusooa@vista.aero>
   :license: GNU free documentation license 1.3 or later.

.. index:: Snapshot
.. _snapshot_docker:

===============
Snapshot Docker
===============

A docker that allows you to create snapshots (copies) of the current document, and to return to these states afterwards.

.. image:: /images/dockers/snapshot-docker.png

The main part of the docker is a list of all saved snapshots. At the bottom of the docker, there are three buttons: from left to right, they are :guilabel:`Create snapshot`, :guilabel:`Switch to selected snapshot`, and :guilabel:`Remove selected snapshot`. You can create a snapshot from the current state of the document by clicking :guilabel:`Create snapshot`. Click :guilabel:`Switch to selected snapshot` to switch to the selected snapshot. The undo stack will be discarded after switching. If you would like to save the current state, make another snapshot before switching. Click :guilabel:`Remove selected snapshot` to delete the selected snapshot. You can edit the names of snapshots by double-clicking them.

Please be aware that all snapshots will be gone if you close the document. If you want to keep them, you need to explicitly save or export them.

