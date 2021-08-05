.. meta::
   :description property=og\:description:
        Introduction to using Krita's python plugin API.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Alvin Wong
             - Scott Petrovic
             - Micheal Abrahams
   :license: GNU free documentation license 1.3 or later.

.. index:: Python, Python Scripting, Scripting, Plugin, Debug
.. _introduction_to_python_scripting:

================================
Introduction to Python Scripting
================================

.. versionadded:: 4.0

When we offered python scripting as one of Kickstarter Stretchgoals we could implement next to vectors and text, it won the backer vote by a landslide. Some people even only picked python and nothing else. So what exactly is python scripting?

What is Python Scripting?
-------------------------

Python is a scripting language, that can be used to automate tasks. What python scripting in Krita means is that we added an API to krita, which is a bit of programming that allows python to access to parts of Krita. With this we can make dockers, perform menial tasks on a lot of different files and even write our own exporters. People who work with computer graphics, like VFX and video game artists use python a lot to make things like sprite sheets, automate parts of export and more.

It is outside the scope of this manual to teach you python itself. However, as python is an extremely popular programming language and great for beginners, there's tons of learning material around that can be quickly found with a simple 'learn python' internet search.

This manual will instead focus on how to use python to automate and extend Krita. For that we'll first start with the basics: How to run Python commands in the scripter.


How to Enable the Scripter Plugin
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

The scripter plugin is not necessary to use python, but it is very useful for testing and playing around with python. It is a python console, written in python, which can be used to write small scripts and execute them on the fly.

To open the scripter, navigate to :menuselection:`Tools --> Scripts --> Scripter`. If you don't see it listed, go to :menuselection:`Settings --> Configure Krita... --> Python Plugin Manager` and toggle "Scripter" in the list to enable it. If you don't see the scripter plugin, make sure you are using an up-to-date version of Krita.

The scripter will pop up with a text editor window on top and an output window below. Input the following in the text area:

.. code:: python

    print("hello world")


Press the big play button or press the :kbd:`Ctrl + R` shortcut to run the script. Then, below, in the output area the following should show up::

    ==== Warning: Script not saved! ====
    hello world

Now we have a console that can run functions like print() from the Python environment - but how do we use it to manage Krita? 

Running basic Krita commands
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

To allow Python to communicate with Krita, we will use the Krita module. At the top of every script, we will write ``from krita import *``.

This allows us to talk to Krita through ``Krita.instance()``. Let's try to double our coding abilities with Python.

.. code:: python

    from krita import *

    Krita.instance().action('python_scripter').trigger()

You should see a second scripter window open. Pretty neat! Here is a slightly more advanced example.

.. code:: python

    from krita import *

    d = Krita.instance().createDocument(512, 512, "Python test document", "RGBA", "U8", "", 120.0)
    Krita.instance().activeWindow().addView(d)

This will open up a new document. Clearly Python gives you quite a lot of control to automate Krita. Over time we expect the community to write all kinds of scripts that you can use simply by pasting them in the scripter.

But what if you want to write new commands for yourself? The best place to start is very simple: search for examples written by other people! You can save a lot of time if someone else has written code that you can base your work on. It's also worth looking through the python plugins, which are located in /share/krita/pykrita. There's also a step by step guide for :ref:`krita_python_plugin_howto` here in the manual.

But it's likely that you need more information. For that, we will need see what's hidden behind the asterisk when you ``import * from Krita``. To learn what Krita functions that are available and how to use them, you will want to go for Krita API reference documentation.

Krita's API
~~~~~~~~~~~

- `LibKis API Overview <https://api.kde.org/extragear-api/graphics-apidocs/krita/libs/libkis/html/index.html>`_
- `Krita class documentation <https://api.kde.org/extragear-api/graphics-apidocs/krita/libs/libkis/html/classKrita.html>`_

Those pages may look like a lot of jargon at first. This is because Krita's API documentation comes from the underlying C++ language that Krita is written in. The magic happens because of a Python tool called SIP, which makes it possible for python speak in C++ and talk to Krita. The end result is that when we ``import krita`` and call functions, we're actually using the C++ methods listed in that documentation. 

Let's see how this stuff works in more detail. Let's take a look at the second link, the `Krita class reference <https://api.kde.org/extragear-api/graphics-apidocs/krita/libs/libkis/html/classKrita.html#aa55507903d088013ced2df8c74f28a63>`_. There we can see all the functions available to the Krita instance. If you type ``dir(Krita.instance())`` in Python, it should match this page very closely - you can view the documentation of the functions ``createDocument()``, ``activeWindow()``, and ``action()`` which we used above. 

One of the more confusing things is seeing all the C++ classes that Krita uses, including the Qt classes that start with Q. But here is the beauty of SIP: it tries to make the translation from these classes into Python as simple and straightforward as possible. For example, you can see that the function ``filters()`` returns a ``QStringList``. However, SIP converts those ``QStringLists`` into regular python list of strings!

.. code:: python

    from krita import *

    print(Krita.instance().filters())

Outputs as: ::

    ['asc-cdl', 'autocontrast', 'blur', 'burn', 'colorbalance', 'colortoalpha', 'colortransfer',
    'desaturate', 'dodge', 'edge detection', 'emboss', 'emboss all directions', 'emboss horizontal and vertical',
    'emboss horizontal only', 'emboss laplascian', 'emboss vertical only', 'gaussian blur', 'gaussiannoisereducer',
    'gradientmap', 'halftone', 'height to normal', 'hsvadjustment', 'indexcolors', 'invert', 'lens blur', 'levels',
    'maximize', 'mean removal', 'minimize', 'motion blur', 'noise', 'normalize', 'oilpaint', 'perchannel', 'phongbumpmap',
    'pixelize', 'posterize', 'raindrops', 'randompick', 'roundcorners', 'sharpen', 'smalltiles', 'threshold', 'unsharp',
    'wave', 'waveletnoisereducer']


However, sometimes the conversion doesn't go quite as smoothly.

.. code:: python

    from krita import *

    print(Krita.instance().documents())

gives something like this::


    [<PyKrita.krita.Document object at 0x7f7294630b88>,
    <PyKrita.krita.Document object at 0x7f72946309d8>,
    <PyKrita.krita.Document object at 0x7f7294630c18>]

It is a list of something, sure, but how to use it? If we go back to the Krita apidocs page and look at the function, documents() we'll see there's actually a clickable link on the 'Document' class. `If you follow that link <https://api.kde.org/extragear-api/graphics-apidocs/krita/libs/libkis/html/classDocument.html>`_, you'll see that the document has a function called name() which returns the name of the document, and functions width() and height() which return the dimensions. So if we wanted to generate an info report about the documents in Krita, we could write a script like this:

.. code:: python

    from krita import *

    for doc in Krita.instance().documents():
        print(doc.name())
        print(" "+str(doc.width())+"x"+str(doc.height()))

We get an output like::

    ==== Warning: Script not saved! ====
    Unnamed
     2480x3508
    sketch21
     3508x2480
    Blue morning
     1600x900

Hopefully this will give you an idea of how to navigate the API docs now.

Krita's API has many more classes, you can get to them by going to the top-left class list, or just clicking their names to get to their API docs. The functions ``print()`` or ``dir()`` are your friends here as well. This line will print out a list of all the actions in Krita -- you could swap in one of these commands instead of 'python_scripter' in the example above.

.. code:: python

    [print([a.objectName(), a.text()]) for a in Krita.instance().actions()]

The Python module ``inspect`` was designed for this sort of task. Here's a useful function to print info about a class to the console. 

.. code:: python

    import inspect
    def getInfo(target):
        [print(item) for item in inspect.getmembers(target) if not item[0].startswith('_')]

    getInfo(Krita.instance())



Finally, in addition to the LibKis documentation, the Qt documentation, since Krita uses PyQt to expose nearly all of the Qt API to Python. You can build entire windows with buttons and forms this way, using the very same tools that Krita is using! You can read the `Qt documentation <https://doc.qt.io/>`_ and the `PyQt documentation <https://www.riverbankcomputing.com/static/Docs/PyQt5/>`_ for more info about this, and also definitely study the included plugins as well to see how they work.


Technical Details
-----------------


.. Which version of python do we use, how to trouble shoot, etc.

Python Scripting on Windows
~~~~~~~~~~~~~~~~~~~~~~~~~~~

To get Python scripting working on Windows 7/8/8.1, you will need to install the `Universal C Runtime from Microsoft's website <https://www.microsoft.com/en-us/download/details.aspx?id=48234>`_. (Windows 10 already comes with it.)

Python 2 and 3
~~~~~~~~~~~~~~

By default, Krita is compiled for python 3.

However, it is possible to compile it with python 2. To do so, you will need to add the following to the :program:`cmake` configuration line::

    -DENABLE_PYTHON_2=ON
