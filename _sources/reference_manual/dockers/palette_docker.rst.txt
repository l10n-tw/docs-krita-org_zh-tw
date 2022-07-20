.. meta::
   :description property=og\:description:
        Overview of the palette docker.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
             - Raghavendra Kamath <raghavendr.raghu@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Palettes, Color, Swatches
.. _palette_docker:

==============
Palette Docker
==============

The palette docker displays various color swatches for quick use. It also supports editing palettes and organizing colors into groups, as well as arbitrary positioning of swatches.

.. versionadded:: 4.2

    The palette docker was overhauled in 4.2, allowing for grid ordering, storing palette in the document and more.

.. image:: /images/dockers/Palette-docker.png

You can choose from various default palettes or you can add your own colors to the palette.

To choose from the default palettes click on the icon in the bottom left corner of the docker, it will show a list of pre-loaded color palettes.
You can click on one and to load it into the docker, or click on import resources to load your own color palette from a file. Creating a new palette can be done by pressing the :guilabel:`+`. Fill out the :guilabel:`name` input, pressing :guilabel:`Save` and Krita will select your new palette for you.

Since 4.2 Krita's color palettes are not just a list of colors to store, but also a grid to organize them on. That's why you will get a grid with 'transparency checkers', indicating that there is no entry. To add an entry, just click a swatch and a new entry will be added with a default name and the current foreground color.

* Selecting colors is done by |mouseleft| on a swatch.
* Pressing the delete icon will remove the selected swatch or group. When removing a group, Krita will always ask whether you'd like to keep the swatches. If so, the group will be merged with the default group.
* Double |mouseleft| a swatch will call up the edit window where you can change the color, the name, the id and whether it's a spot color. On a group this will allow you to set the group name.
* |mouseleft| drag will allow you to drag and drop swatches and groups to order them.
* |mouseright| on a swatch will give you a context menu with modify and delete options.
* Pressing the :guilabel:`+` icon will allow you to add a new swatch.
* The drop down contains all the entries, id numbers and names. When a color is a spot color the thumbnail is circular. You can use the dropdown to search on color name or id.
* By drag-and-dropping colors from the palette onto the :ref:`layer stack <layer_docker>`, you can quickly create a :ref:`fill layer <fill_layers>`.
* By drag-and-dropping colors from the palette onto the canvas you can fill the current layer with that color. The filling options used are taken from the :ref:`fill tool<fill_tool>` but if :kbd:`Alt` is pressed when the color is dropped then all the layer (or the portion inside the current selection) will be filled.

  .. versionadded::5.0


Pressing the Folder icon will allow you to modify the palette. Here you can add more columns, modify the default group's rows, or add more groups and modify their rows.

Palette Name
    Modify the palette name. This is the proper name for the palette as shown in the palette chooser dropdown.
File name
    This is the file name of the palette, which should be file system friendly. (Avoid quotation marks, for example).
Column Count
    The amount of columns in this palette. This counts for all entries. If you accidentally make it smaller than the amount of entries that take up columns, you can still make it bigger until the next restart of Krita.
Where is the palette stored:
    Whether to store said palette in the document or resource folder.
    
    Resource Folder
        The default, the palette will be stored in the resource folder.
    Document
        The palette will be removed from the resource folder and stored in the document upon save. It will be loaded into the resources upon loading the document.
    
    .. deprecated:: 5.0

       This has been disabled for now.

Add group
    Add a new group. On clicking you will be asked for a name and a set of rows.
Group Settings
    Here you can configure the groups. The dropdown has a selection of groups. The default group is at top.

    Row Count
        The amount of rows in the group. If you want to add more colors to a group and there's no empty areas to click on anymore, increase the row count.
    Rename Group
        Rename the group.
    Delete Group
        Delete the group. It will ask whether you want to keep the colors. If so, it will merge the group's contents with the default group.
        

The edit and new color dialogs ask for the following:

Color
    The color of the swatch.
Name
    The Name of the color in a human readable format.
ID
    The ID is a number that can be used to index colors. Where Name can be something like "Pastel Peach", ID will probably be something like "RY75". Both names and ids can be used to search the color in the color entry dropdown at the bottom of the palette.
Spot color
    Currently not used for anything within Krita itself, but spot colors are a toggle to keep track of colors that represent a real world paint that a printer can match. Keeping track of such colors is useful in a printing workflow, and it can also be used with python to recognize spot colors.

Krita's native palette format is since 4.0 :ref:`file_kpl`. It also supports importing...

* Gimp Palettes (.gpl)
* Microsoft RIFF palette (.riff)
* Photoshop Binary Palettes (.act)
* PaintShop Pro palettes (.psp)
* Photoshop Swatches (.aco)
* Scribus XML (.xml)
* Swatchbooker (.sbz)
* Adobe Swatch Exchange (.ase)
* Adobe Color Books (.acb)
