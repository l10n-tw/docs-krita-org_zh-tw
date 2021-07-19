.. meta::
   :description:
        A simple guide to the first basic steps of using Krita: creating and saving an image.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Raghavendra Kamath <raghu@raghukamath.com>
             - Scott Petrovic
             - DMarquant
             - Vancemoss
             - Bugsbane
             - Hamlet 1977
             - Lifeling
             - Yurchor
   :license: GNU free documentation license 1.3 or later.

.. index:: Save, Load, New
.. _create_new_document:

Create New Document
===================

A new document can be created as follows.

#. Click on :guilabel:`File` from the application menu at the top.
#. Then click on :guilabel:`New`. Or you can do this by pressing the :kbd:`Ctrl + N` shortcut.
#. Now you will get a New Document dialog box as shown below:

.. image:: /images/Krita_newfile.png

There are various sections in this dialog box which aid in creation of new document,
either using custom document properties or by using contents from clipboard and templates.
Following are the sections in this dialog box:

Custom Document
~~~~~~~~~~~~~~~

From this section you can create a document according to your requirements: you
can specify the dimensions, color model, bit depth, resolution, etc.

In the top-most field of the :guilabel:`Dimensions` tab, from the Predefined
drop-down you can select predefined pixel sizes and PPI (pixels per inch). You
can also set custom dimensions and the orientation of the document from the
input fields below the :guilabel:`Predefined:` drop-down. This can also be saved
as a new predefined preset for your future use by giving a name in the
:guilabel:`Save Image Size as:` input box and clicking on the :guilabel:`Save`
button. Below we find the Color section of the new document dialog box, where
you can select the color model and the bit-depth. Check :ref:`general_concept_color`
for more detailed information regarding color.

On the :guilabel:`Content` tab, you can define a name for your new document.
This name will appear in the metadata of the file, and Krita will use it for
the auto-save functionality as well. If you leave it empty, the document will
be referred to as 'Unnamed' by default. You can select the background color and
the amount of layers you want in the new document. Krita remembers the amount
of layers you picked last time, so be careful.

Finally, there's a description box, useful to note down what you are going to do.

Create From Clipboard
~~~~~~~~~~~~~~~~~~~~~

This section allows you to create a document from an image that is in your
clipboard, like a screenshot. It will have all the fields set to match the
clipboard image.


.. _create_new_document_from_template:

Templates:
~~~~~~~~~~

These are separate categories where we deliver special defaults. Templates are
just ``.kra`` files which are saved in a special location, so they can be pulled up
by Krita quickly. You can make your own template file from any ``.kra`` file, by
using :menuselection:`File --> Create Template from Image...` in the top menu.
This will add your current document as a new template, including all its
properties along with the layers and layer contents.

Once you have created a new document according to your preference, you should
now have a white canvas in front of you (or whichever background color you
chose in the dialog).
