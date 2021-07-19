.. meta::
   :description:
        The Split Layer functionality in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Splitting, Color Islands

.. _split_layer:

Split Layer
-----------
Splits a layer according to color. This is useful in combination with the :ref:`colorize_mask` and the :kbd:`R +` |mouseleft| shortcut to select layers at the cursor.

At the top, of the dialog there is a dropdown, here you can choose between...

Split Into Layers
    The image's colors is split into paint layers. Fantastic for artwork that works more with flats, such as the cel-shaded look.
Split Into Local Selection Masks
    .. versionadded:: 4.2.9
    
    The image's colors are outlined as a selection, and a :ref:`selection_masks` is made. This is useful for artwork that has a more painterly look, with the selection masks making it easy to select several areas at once. Because selection masks are not paint layers, several of the options below are unavailable.
    
The other options are:

Put all new layers in a group layer
    Put all the result layers into a new group.
Put every layer in its own, separate group layer
    Put each layer into its own group.
Alpha-lock every new layer
    Enable the alpha-lock for each layer so it is easier to color.
Hide the original layer
    Turns off the visibility on the original layer so you won't get confused.
Sort layers by amount of non-transparent pixels
    This ensures that the layers with large color swathes will end up at the top.
Disregard opacity
    Whether to take into account transparency of a color.
Fuzziness
    How precise the algorithm should be. The larger the fuzziness, the less precise the algorithm will be. This is necessary for splitting layers with anti-aliasing, because otherwise you would end up with a separate layer for each tiny pixel.
Palette to use for naming the layers
    Select the palette to use for naming. Krita will compare the main color of a layer to each color in the palette to get the most appropriate name for it.
