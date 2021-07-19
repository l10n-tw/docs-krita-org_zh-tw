.. meta::
   :description:
        How to install a custom Python plugin.

.. metadata-placeholder

   :authors: 
                - Agata Cacko <cacko.azh@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Python, plugin, resource
.. _install_custom_python_plugins:

=======================
Managing Python plugins
=======================


How to install a Python plugin
------------------------------

.. caution::

    Custom Python plugins are made by users of Krita and the Krita team does not guarantee that they work, that they are useful or that they are *safe*. Note that a Python plugin can do everything that Krita can do, which means for example access to your files. Krita team isn't responsible for any damage you might suffer from the plugin and you install it on your own risk.


Using Python plugin importer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. note::

    This method doesn't always import action files (responsible for shortcuts) correctly.


You need to ensure that you have the plugin in a :file:`*.zip` file. Inside the zip file there should be a file :file:`pluginname.desktop` and a folder :file:`pluginname` (instead of `pluginname` there should be an actual unique name of the plugin).

Go to :menuselection:`Tools --> Scripts --> Import Python Plugin...`, find the :file:`*.zip` file and press :guilabel:`OK`. Restart Krita.

Go to :menuselection:`Configure Krita --> Python Plugins Manager`, find the plugin and enable it. Restart Krita.

Now the plugin should be available.

Manually
~~~~~~~~

If the plugin is inside a :file:`*.zip` archive, you need to extract it first.

Go to :menuselection:`Settings --> Manage Resources --> Open Resource Folder`. Put file :file:`pluginname.desktop` and folder :file:`pluginname`  (instead of `pluginname` there should be an actual unique name of the plugin) inside the :file:`pykrita` folder. Put file :file:`pluginname.action` into the :file:`actions` folder. Restart Krita.

Now the plugin should be available.


How to get to the plugin?
-------------------------

Plugins in Krita are either dockers or extensions. 

If it's an extension, it will be available in the menu :menuselection:`Tools --> Scripts`.

If it's a docker, you can find it in :menuselection:`Settings --> Dockers`.

If the plugin has any shortcuts and you imported the action file properly, you can change the shortcuts in :menuselection:`Configure Krita --> Keyboard Shortcuts`.



How to enable and disable a plugin?
-----------------------------------
You can enable and disable all plugins (no matter if they're pre-installed or custom) in :menuselection:`Configure Krita --> Python Plugins Manager`.




