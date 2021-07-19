.. meta::
    :description:
        Krita SVG extensions

.. metadata-placeholder

    :authors: - Dmitry Kazakov <dimula73@gmail.com>
    :license: GNU free documentation license 1.3 or later.

.. _svg_extensions:

Krita SVG Extensions
====================

Krita has a few extensions over SVG format to ensure correct saving and
loading of Krita custom elements.

Attribute: ``krita:marker-fill-method``
---------------------------------------

Possible values:

-  ``default`` – markers are filled according to SVG standard rules,
   that is each marker has its own fill, which is filled in the marker’s
   local coordinates.

-  ``auto`` – markers are considered to be a part of the path. The
   outline of the path is combined with the outline of the markers and
   filled with a single pass of the object’s fill strategy.

Default value: ``default``

[DEPRECATED] Attribute: ``krita:arc=‘arc’`` and ``krita:arcType=‘chord’``
--------------------------------------------------------------------------------

That is a temporary namespace that was used before introduction of
sodipodi:arc-type=‘chord’ option. Krita never saves files with this
option and the support of it will be removed soon.
