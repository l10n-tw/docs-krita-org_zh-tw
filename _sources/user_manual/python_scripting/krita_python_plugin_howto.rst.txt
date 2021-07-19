.. meta::
   :description:
        Guide on all the specifics of creating Krita python plugins.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - BrendanD
             - Scott Petrovic
             - Halla Rempt <boud@valdyas.org>
             - TPaulssen
   :license: GNU free documentation license 1.3 or later.

.. index:: Python, Python Scripting, Scripting, Plugin
.. _krita_python_plugin_howto:

=================================
How to make a Krita Python plugin
=================================

You might have some neat scripts you have written in the Scripter Python runner, but maybe you want to do more with it and run it automatically for instance. Wrapping your script in a plugin can give you much more flexibility and power than running scripts from the Scripter editor.

Okay, so even if you know python really well, there are some little details to getting Krita to recognize a python plugin. So this page will give an overview how to create the various types of python script unique to Krita.

These mini-tutorials are written for people with a basic understanding of python, and in such a way to encourage experimentation instead of plainly copy and pasting code, so read the text carefully.

Getting Krita to recognize your plugin
--------------------------------------

A script in Krita has two components - the script directory (holding your script's Python files) and a ".desktop" file that Krita uses to load and register your script. For Krita to load your script both of these must put be in the pykrita subdirectory of your Krita resources folder (on Linux  ~/.local/share/krita/pykrita). To find your resources folder start Krita and click the :menuselection:`Settings --> Manage Resources...` menu item. This will open a dialog box. Click the :guilabel:`Open Resources Folder` button. This should open a file manager on your system at your Krita resources folder. See the `API <https://api.kde.org/extragear-api/graphics-apidocs/krita/libs/libkis/html/index.html>`_ docs under "Auto starting scripts".  If there is no pykrita subfolder in the Krita resources directory use your file manager to create one.

Scripts are identified by a file that ends in a .desktop extension that contain information about the script itself.

Therefore, for each proper plugin you will need to create a folder, and a desktop file.

The desktop file should look as follows::

    [Desktop Entry]
    Type=Service
    ServiceTypes=Krita/PythonPlugin
    X-KDE-Library=myplugin
    X-Python-2-Compatible=false
    X-Krita-Manual=myPluginManual.html
    Name=My Own Plugin
    Comment=Our very own plugin.

Type
 This should always be service.
ServiceTypes
 This should always be Krita/PythonPlugin for python plugins.
X-KDE-Library
 This should be the name of the plugin folder you just created.
X-Python-2-Compatible
 Whether it is python 2 compatible. If Krita was built with python 2 instead of 3 (``-DENABLE_PYTHON_2=ON`` in the cmake configuration), then this plugin will not show up in the list.
X-Krita-Manual
 An Optional Value that will point to the manual item. This is shown in the Python Plugin manager. If it's `an HTML file it'll be shown as rich text <https://doc.qt.io/qt-5/richtext-html-subset.html>`_, if not, it'll be shown as plain text.
Name
 The name that will show up in the Python Plugin Manager.
Comment
 The description that will show up in the Python Plugin Manager.

Krita python plugins need to be python modules, so make sure there's an __init__.py script, containing something like...

.. code:: python

    from .myplugin import *


Where .myplugin is the name of the main file of your plugin. If you restart Krita, it now should show this in the Python Plugin Manager in the settings, but it will be grayed out, because there's no myplugin.py. If you hover over disabled plugins, you can see the error with them.

.. note:: You need to explicitly enable your plugin. Go to the Settings menu, open the :guilabel:`Configure Krita` dialog and go to the Python Plugin Manager page and enable your plugin.

Summary
^^^^^^^

In summary, if you want to create a script called *myplugin*:

- in your Krita *resources/pykrita* directory create
    - a folder called *myplugin*
    - a file called *myplugin.desktop*
- in the *myplugin* folder create
    - a file called *__init__.py*
    - a file called *myplugin.py*
- in the *__init__.py* file put this code:

.. code:: python

    from .myplugin import *

- in the desktop file put this code::

    [Desktop Entry]
    Type=Service
    ServiceTypes=Krita/PythonPlugin
    X-KDE-Library=myplugin
    X-Python-2-Compatible=false
    Name=My Own Plugin
    Comment=Our very own plugin.

- write your script in the ''myplugin/myplugin.py'' file.

Creating an extension
---------------------

`Extensions <https://api.kde.org/extragear-api/graphics-apidocs/krita/libs/libkis/html/classExtension.html>`_ are relatively simple python scripts that run on Krita start. They are made by extending the Extension class, and the most barebones extension looks like this:

.. code:: python

    from krita import *

    class MyExtension(Extension):

        def __init__(self, parent):
            # This is initialising the parent, always important when subclassing.
            super().__init__(parent)

        def setup(self):
            pass

        def createActions(self, window):
            pass

    # And add the extension to Krita's list of extensions:
    Krita.instance().addExtension(MyExtension(Krita.instance())) 

This code of course doesn't do anything. Typically, in createActions we add actions to Krita, so we can access our script from the :guilabel:`Tools` menu.

First, let's create an `action <https://api.kde.org/extragear-api/graphics-apidocs/krita/libs/libkis/html/classAction.html>`_. We can do that easily with `Window.createAction() <https://api.kde.org/extragear-api/graphics-apidocs/krita/libs/libkis/html/classWindow.html#a72ec58e53844076c1461966c34a9115c>`_. Krita will call createActions for every Window that is created and pass the right window object that we have to use.

So...

.. code:: python

    def createActions(self, window):
        action = window.createAction("myAction", "My Script", "tools/scripts")


"myAction"
 This should be replaced with a unique id that Krita will use to find the action.
"My Script"
 This is what will be visible in the tools menu.

If you now restart Krita, you will have an action called "My Script". It still doesn't do anything, because we haven't connected it to a script.

So, let's make a simple export document script. Add the following to the extension class, make sure it is above where you add the extension to Krita:

.. code:: python

    def exportDocument(self):
        # Get the document:
        doc =  Krita.instance().activeDocument()
        # Saving a non-existent document causes crashes, so lets check for that first.
        if doc is not None:
            # This calls up the save dialog. The save dialog returns a tuple.
            fileName = QFileDialog.getSaveFileName()[0]
            # And export the document to the fileName location.
            # InfoObject is a dictionary with specific export options, but when we make an empty one Krita will use the export defaults.
            doc.exportImage(fileName, InfoObject())


And add the import for QFileDialog above with the imports:

.. code:: python

    from krita import *
    from PyQt5.QtWidgets import QFileDialog

Then, to connect the action to the new export document:

.. code:: python

    def createActions(self, window):
        action = window.createAction("myAction", "My Script")
        action.triggered.connect(self.exportDocument)


This is an example of a `signal/slot connection <https://doc.qt.io/qt-5/signalsandslots.html>`_, which Qt applications like Krita use a lot. We'll go over how to make our own signals and slots a bit later.

Restart Krita and your new action ought to now export the document.

Creating configurable keyboard shortcuts
----------------------------------------

Now, your new action doesn't show up in :menuselection:`Settings --> Configure Krita --> Keyboard Shortcuts`.

Krita, for various reasons, only adds actions to the shortcuts menu when they are present in an .action file. The action file to get our action to be added to shortcuts should look like this:

.. code:: xml

    <?xml version="1.0" encoding="UTF-8"?>
    <ActionCollection version="2" name="Scripts">
        <Actions category="Scripts">
            <text>My Scripts</text>

            <Action name="myAction">
            <icon></icon>
            <text>My Script</text>
            <whatsThis></whatsThis>
            <toolTip></toolTip>
            <iconText></iconText>
            <activationFlags>10000</activationFlags>
            <activationConditions>0</activationConditions>
            <shortcut>ctrl+alt+shift+p</shortcut>
            <isCheckable>false</isCheckable>
            <statusTip></statusTip>
            </Action>
        </Actions>
    </ActionCollection>


<text>My Scripts</text>
 This will create a sub-category under scripts called "My Scripts" to add your shortcuts to.
name
 This should be the unique id you made for your action when creating it in the setup of the extension.
icon
 the name of a possible icon. These will only show up on KDE plasma, because Gnome and Windows users complained they look ugly.
text
 The text that it will show in the shortcut editor.
whatsThis
 The text it will show when a Qt application specifically calls for 'what is this', which is a help action.
toolTip
 The tool tip, this will show up on hover-over.
iconText
 The text it will show when displayed in a toolbar. So for example, "Resize Image to New Size" could be shortened to "Resize Image" to save space, so we'd put that in here.
activationFlags
 This determines when an action is disabled or not.
activationConditions
 This determines activation conditions (e.g. activate only when selection is editable). See `the code <https://invent.kde.org/graphics/krita/-/blob/master/libs/ui/kis_action.h#L41>`_ for examples.
shortcut
 Default shortcut.
isCheckable
 Whether it is a checkbox or not.
statusTip
 The status tip that is displayed on a status bar.

Save this file as "myplugin.action" where myplugin is the name of your plugin. The action file should be saved, not in the pykrita resources folder, but rather in a resources folder named "actions". (So, share/pykrita is where the python plugins and desktop files go, and share/actions is where the action files go) Restart Krita. The shortcut should now show up in the shortcut action list.

Creating a docker
-----------------

Creating a custom `docker <https://api.kde.org/extragear-api/graphics-apidocs/krita/libs/libkis/html/classDockWidget.html>`_ is much like creating an extension. Dockers are in some ways a little easier, but they also require more use of widgets. This is the barebones docker code:

.. code:: python

    from PyQt5.QtWidgets import *
    from krita import *

    class MyDocker(DockWidget):

        def __init__(self):
            super().__init__()
            self.setWindowTitle("My Docker")

        def canvasChanged(self, canvas):
            pass

    Krita.instance().addDockWidgetFactory(DockWidgetFactory("myDocker", DockWidgetFactoryBase.DockRight, MyDocker))

The window title is how it will appear in the docker list in Krita. canvasChanged always needs to be present, but you don't have to do anything with it, so hence just 'pass'.

For the addDockWidgetFactory...

"myDocker"
 Replace this with an unique ID for your docker that Krita uses to keep track of it.
DockWidgetFactoryBase.DockRight
 The location. These can be DockTornOff, DockTop, DockBottom, DockRight, DockLeft, or DockMinimized
MyDocker
 Replace this with the class name of the docker you want to add.

So, if we add our export document function we created in the extension section to this docker code, how do we allow the user to activate it? First, we'll need to do some Qt GUI coding: Let's add a button!

By default, Krita uses PyQt, but its documentation is pretty bad, mostly because the regular Qt documentation is really good, and you'll often find that the PyQt documentation of a class, say, `QWidget <https://www.riverbankcomputing.com/static/Docs/PyQt5/api/qtwidgets/qwidget.html>`_ is like a weird copy of the regular `Qt documentation <https://doc.qt.io/qt-5/qwidget.html>`_ for that class.

Anyway, what we need to do first is that we need to create a QWidget, it's not very complicated, under setWindowTitle, add:

.. code:: python

    mainWidget = QWidget(self)
    self.setWidget(mainWidget)

Then, we create a button:

.. code:: python

    buttonExportDocument = QPushButton("Export Document", mainWidget)

Now, to connect the button to our function, we'll need to look at the signals in the documentation. `QPushButton <https://doc.qt.io/qt-5/qpushbutton.html>`_ has no unique signals of its own, but it does say it inherits 4 signals from `QAbstractButton <https://doc.qt.io/qt-5/qabstractbutton.html#signals>`_, which means that we can use those too. In our case, we want clicked.

.. code:: python

    buttonExportDocument.clicked.connect(self.exportDocument)

If we now restart Krita, we'll have a new docker and in that docker there's a button. Clicking on the button will call up the export function.

However, the button looks aligned a bit oddly. That's because our mainWidget has no layout. Let's quickly do that:

.. code:: python

    mainWidget.setLayout(QVBoxLayout())
    mainWidget.layout().addWidget(buttonExportDocument)

Qt has several `layouts <https://doc.qt.io/qt-5/qlayout.html>`_, but the `QHBoxLayout and the QVBoxLayout <https://doc.qt.io/qt-5/qboxlayout.html>`_ are the easiest to use, they just arrange widgets horizontally or vertically.

Restart Krita and the button should now be laid out nicely.

PyQt Signals and Slots
----------------------

We've already been using PyQt signals and slots already, but there are times where you want to create your own signals and slots.
`As PyQt's documentation is pretty difficult to understand <https://www.riverbankcomputing.com/static/Docs/PyQt5/signals_slots.html>`_, and the way how signals and slots are created is very different from C++ Qt, we're explaining it here:

All python functions you make in PyQt can be understood as slots, meaning that they can be connected to signals like Action.triggered or QPushButton.clicked. However, QCheckBox has a signal for toggled, which sends a boolean. How do we get our function to accept that boolean?

First, make sure you have the right import for making custom slots:

``from PyQt5.QtCore import pyqtSlot``

(If there's ``from PyQt5.QtCore import *`` already in the list of imports, then you won't have to do this, of course.)

Then, you need to add a PyQt slot definition before your function:

.. code:: python

    @pyqtSlot(bool)
    def myFunction(self, enabled):
        enabledString = "disabled"
        if (enabled == True):
            enabledString = "enabled"
        print("The checkbox is"+enabledString)


Then, when you have created your checkbox, you can do something like myCheckbox.toggled.connect(self.myFunction).

Similarly, to make your own PyQt signals, you do the following:

.. code:: python

    # signal name is added to the member variables of the class
    signal_name = pyqtSignal(bool, name='signalName')

    def emitMySignal(self):
        # And this is how you trigger the signal to be emitted.
        self.signal_name.emit(True)


And use the right import:

``from PyQt5.QtCore import pyqtSignal``

To emit or create slots for objects that aren't standard python objects, you only have to put their names between quotation marks.

A note on unit tests
--------------------

If you want to write unit tests for your plugin, have a look at the `mock krita module <https://github.com/rbreu/krita-python-mock>`_.


Conclusion
----------

Okay, so that covers all the Krita specific details for creating python plugins. It doesn't handle how to parse the pixel data, or best practices with documents, but if you have a little bit of experience with python you should be able to start creating your own plugins.

As always, read the code carefully and read the API docs for python, Krita and Qt carefully to see what is possible, and you'll get pretty far.
