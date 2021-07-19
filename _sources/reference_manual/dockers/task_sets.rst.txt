.. meta::
   :description property=og\:description:
        Overview of the task sets docker.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
             - Raghavendra Kamath <raghavendr.raghu@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: !Task Sets, Actions, Macro
.. _task_sets_docker:

================
Task Sets Docker
================

Task sets are for sharing a set of steps, like a tutorial. You make them with the task-set docker.

.. image:: /images/dockers/Task-set.png

Task sets can record any kind of command also available via the shortcut manager. It is not a macro recorder, right now, Krita does not have that kind of functionality.

The tasksets docker has a record button, and you can use this to record a certain workflow. All :dfn:`Actions` can be recorded. These include every action available in the :ref:`main_menu`, but also all actions available via :kbd:`Ctrl + Enter` Then use this to let items appear in the taskset list. Afterwards, turn off :guilabel:`record`. You can then click any action in the list to make them happen. Press the :guilabel:`Save` icon to name and save the taskset.

Task sets are a :ref:`resource <resource_management>`. As such, they can be saved, tagged, reordered. They are stored as ``*.kts`` files, which are XML files::

    <Taskset name="example" version="1">
        <action>add_new_paint_layer</action>
        <action>add_new_clone_layer</action>
        <action>add_new_file_layer</action>
    </Taskset>

