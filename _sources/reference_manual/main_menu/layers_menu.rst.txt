.. meta::
   :description property=og\:description:
        The layers menu in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
             - Raghavendra Kamath <raghu@raghukamath.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Layers, Cut Layer, Copy Layer, Paste Layer, Convert, Import, Export, Transform, Metadata, Histogram, Flatten, Layer Style
.. _layers_menu:

===========
Layers Menu
===========

These are the topmenu options are related to Layer Management, check out :ref:`that page <layers_and_masks>` first, if you haven't.

Cut Layer
    Cuts the whole selected layer/layers rather than just the pixels.
Copy Layer
    Copy the whole selected layer/layers rather than just the pixels.
Paste Layer
    Pastes all the layers saved in the clipboard.
New
    Organizes the following actions:

    Paint Layer
        Add a new paint layer.
    New layer from visible
        Add a new layer with the visible pixels.
    Duplicate Layer or Mask
        Duplicates the layer.
    Cut Selection to New Layer
        Single action for cut+paste.
    Copy Selection to New Layer
        Single action for copy+paste.

Import/Export
    Organizes the following actions:

    Save Layer or Mask
        Saves the Layer or Mask as a separate image.
    Save Vector Layer as SVG
        Save the currently selected vector layer as an SVG.
    Save Group Layers
        Saves the top-level group layers as single-layer images.
    Import Layer
        Import an image as a layer into the current file.
    Import as...
        Import an image as a specific layer type. The following layer types are supported:

            * Paint layer
            * Transparency Mask
            * Filter Mask
            * Selection Mask

Convert
    Organizes the following actions:

    Convert a layer to...

        Convert to Paint Layer
            Convert a mask or vector layer to a paint layer.
        Transparency Mask
            Convert a layer to a transparency mask. The image will be converted to grayscale first, and these grayscale values are used to drive the transparency.
        Filter Mask
            Convert a layer to a filter mask. The image will be converted to grayscale first, and these grayscale values are used to drive the filter effect area.
        Selection Mask
            Convert a layer to a selection mask. The image will be converted to grayscale first, and these grayscale values are used to drive the selected area.
        File Layer
            Convert the selected layer in to a file layer. This will open a dialog box, which will ask the user for a location to save the layer as file layer and reference it in place of the original layer. This feature cannot be used if the selected layer is either a clone layer or a file layer.
        Convert Group to Animated Layer
            This takes the images in the group layer and makes them into frames of an animated layer.
        Convert Layer Color Space
            This only converts the color space of the layer, not the image.

Select:
    Organizes the following actions:

    All layers
        Select all layers.
    Visible Layers
        Select all visible layers.
    Invisible Layers
        Select all invisible layers, useful for cleaning up a sketch.
    Locked Layers
        Select all locked layers.
    Unlocked Layers
        Select all unlocked layers.

Group
    Organizes the following actions:

    Quick Group
        Adds all selected layers to a group.
    Quick Clipping Group
        Adds all selected layers to a group and adds a alpha-inherited layer above it.
    Quick Ungroup
        Ungroups the activated layer.

Transform
    Organizes the following actions:

    Mirror Layer Horizontally
        Mirror the layer horizontally using the image center.
    Mirror Layer Vertically
        Mirror the layer vertically using the image center.
    Rotate
        Rotate the layer around the image center.
    Scale Layer
        Scale the layer by the given amounts using the given interpolation filter.
    Shear Layer
        Shear the layer pixels by the given X and Y angles.
    Offset Layer
        Offset the layer pixels by a given amount.

Split
    Organizes the following actions:

    Split Alpha
        Split the image transparency into a mask. This is useful when you wish to edit the transparency separately.
    Split Layer
        :ref:`Split the layer <split_layer>` into given color fields.
    Clones Array
        A complex bit of functionality to generate clone-layers for quick sprite making. See :ref:`clones_array` for more details.

Edit Metadata...
    Each layer can have its own metadata.
Histogram
    Shows a histogram.

    .. deprecated:: 4.2

       Removed. Use the :ref:`histogram_docker` instead.

Merge with Layer Below
    Merge a layer down.
Flatten Layer
    Flatten a Group Layer or flatten the masks into any other layer.
Rasterize Layer
    For making vectors into raster layers.
Flatten Image
    Flatten all layers into one. Shortcut :kbd:`Ctrl + Shift + E`
Layer Style...
    Set the :ref:`layer_style`.
