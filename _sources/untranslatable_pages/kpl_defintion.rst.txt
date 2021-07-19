.. meta::
   :description property=og\:description:
        A Technical description of the Krita Palette format.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: *.kpl, KPL, Krita Palette
.. _kpl_format_definition:

The Krita Palette format KPL
============================

There's been a number of color swatch definitions over the years. To ensure we can store color managed color, as well as store other metadata we use, Krita has it's own color palette format, KPL.

This document is a technical description of the format.

Basic Structure
---------------

KPL files are zip files containing the following files:

mimetype
   A text file containing the mimetype, to differentiate it from a regular zip. ``application/x-krita-palette``
colorset.xml
   The main color definition file.
profiles.xml
   This is a manifest of the icc profiles that are inside the zip file. We wanted to have no ambiguity in regards to which icc files were bundled.
A number of icc files.
   These are the necessary icc profiles for interpreting the values in colorset.xml

profiles.xml
------------
A manifest of the icc profiles that are inside the zip file. We wanted to have no ambiguity in regards to which icc files were bundled.

.. code:: xml

    <Profiles>
       <Profile name="sRGB-elle-V2-g10.icc" filename="sRGB-elle-V2-g10.icc" colorModelId="RGBA" colorDepthId="F32"/>
    </Profiles>


Krita doesn't store every profile it uses. XYZ and LAB are colorspaces that only have one real space definition, and therefore it doesn't make sense to embed these files.

colorset.xml
------------
This is the main palette definition. It can handle comments, groups and more.

The top level element is a ``Colorset`` element, it's children can either be ``ColorSetEntry`` elements, or ``Group`` elements. ``ColorSetEntry`` s that are direct children of ``Colorset`` are the ungrouped colors, and are, inside Krita, referred to as the "default" group.

.. code:: xml

    <Colorset name="Scene Linear Swatches" comment="This is a palette for easy access to some swatches ready for scene-linear painting." columns="9" rows="1" readonly="false" version="1.0">


name
   The human friendly name of the color palette.
comment
   The description for the palette.
columns
   The amount of columns in the palette in total. This is the same for all groups.
rows
   The rows of the default group, see group for more info.
readonly
   Whether the file can be edited.
version
   The version of the file.

Group
-----

``Group`` elements can only have ``ColorSetEntry`` s as children. ``Group`` s are shown in the UI as a grid where the cells can be empty or contain a ``ColorSetEntry``.

.. code:: xml

    <Group name="Hot Colors" rows="5">
    </Group>

name
   The name of the group.
rows
   The total amount of rows this group takes up, this, together with the column value in the toplevel ``Colorset`` element, determines the grid size.  

ColorSetEntry
-------------

.. code:: xml

    <ColorSetEntry name="Noon daylight at 0 EV" id="SI-D65-0EV" bitdepth="F32" spot="false">
      <XYZ space="XYZ identity built-in" x="0.17107713223" y="0.18000000715" z="0.17107713223"  />
      <Position row="0" column="0"/>
    </ColorSetEntry>


name
   The name of the color. Unlike the create swatches, we don't support translated color names.
id
   The id value. This is for complex colorsets where there is a human friendly name, and a name that uniquely identifies the color in the swatch database. In the above example, which encodes the D65 standard illuminant at 0 stops, ``SI-D65-0EV`` is a clear unambiguous id, but "Noon daylight at 0 EV" is a much more human friendly way to refer to it. Often, the ID is used for referencing spot colors inside files.
bitdepth
   The bitdepth at which the color should be loaded. This is largely for our own convenience. Values are `U8` (Unassigned 8bit integer), `U16` (Unassigned 16bit integer), `F16` (16 bit Floating Point), and `F32` (32 bit Floating Point). Lab and CMYK don't support `F16`, and for CMYK `F32` is not recommended because it doesn't deserialize the same way as the integer colorspaces.
spot
   Whether or not the color is a spot color. This is currently not used elsewhere in Krita, but the intend is to use it for encoding spot colors as only the id.
   
``ColorSetEntry`` s have two children:

The ``Position`` element is the position of the swatch inside the parent group grid. Krita doesn't store empty swatches.

The other child element is a Create Swatch defintion. Krita supports `Gray`, `sRGB`, `RGB`, `XYZ`, `CMYK`, `Lab` and in theory `YCrCb`. Note that Krita supports unbounded colors as long as the bitdepth is F32.

Color swatch definition from the Create Wiki:
---------------------------------------------

The following is the Color Swatch definition from the `old create wiki <https://web.archive.org/web/20110826002520/http://create.freedesktop.org/wiki/Swatches_-_colour_file_format/Draft>`_ . Krita largely uses this definition. Because the Create wiki is down, it's contents are reproduced here. It is for reference only.

.. code:: xml

    <colors xmlns:xlink="http://www.w3.org/1999/xlink">
        <color name="blue">
            <label lang="en">Blue</label>
            <label lang="es">Azul</label>
            <label lang="en_US_SoCal">glassy</label>
            <CMYK space="2ndFloorCMYK" c="0.8703" m="0.6172" y="0" k="0"/>
            <Lab space="mine" L="34.67" a="54.1289" b="-103.3359"/>
            <HSV space="prof01" h="240" s="1" v="1"/>
            <HLS space="prof02" h="240" l="0.5" s="1"/>
            <Luv space="prof03" L="34.6701" u="-15.0121" v="-124.7986"/>
            <XYZ space="prof04" x="0.1566" y="0.0833" z="0.7196"/>
            <Yxy space="prof05" Y="0.0833" x="0.1632" y="0.0869"/>
            <Gray space="prof06" g="0.2515"/>
            <sRGB r="0" g="0" b="1.0"/>
            <RGB space="lcd" r="0.1608" g="-0.1518" b="1.0753"/>
        </color>

        <color name="red">
            <label lang="en">Red</label>
            <CMYK space="2ndFloorCMYK" c="0.0011" m="0.7992" y="0.9405" k="0.0038"/>
            <sRGB r="1.0" g="0" b="0"/>
        </color>

        <colorspace name="2ndFloorCMYK" xlink:href="2nd_floor.icm"/>
        <colorspace name="mine" xlink:href="sample.icm"/>
        <colorspace name="lcd" xlink:href="generic_lcd.icm"/>
    </colors>




Relax-NG for the swatches
~~~~~~~~~~~~~~~~~~~~~~~~~

.. code:: rnc

    namespace xlink = "http://www.w3.org/1999/xlink"
    grammar {
    start = element colors {
    color+, colorSpace*
    }
    color = element color {
    attribute name { text },
    label *,
    (RGB ? & sRGB ? & CMYK ? & Lab ? & HSV ? & HLS ? & Luv ? & XYZ ? & Yxy ? & Gray ? & YCbCr ?)
    }
    label = element label {
    attribute lang { text } ?,
    text
    }
    spaceAttribute = attribute space { text }
    RGBAttributes =
    attribute r { xsd:float },
    attribute g { xsd:float },
    attribute b { xsd:float }
    RGB = element RGB {
    spaceAttribute,
    RGBAttributes
    }
    sRGB = element sRGB {
    RGBAttributes
    }
    CMYK = element CMYK {
    spaceAttribute,
    attribute c { xsd:float },
    attribute m { xsd:float },
    attribute y { xsd:float },
    attribute k { xsd:float }
    }
    Lab = element Lab {
    spaceAttribute,
    attribute L { xsd:float },
    attribute a { xsd:float },
    attribute b { xsd:float }
    }
    HSV = element HSV {
    spaceAttribute,
    attribute h { xsd:float },
    attribute s { xsd:float },
    attribute v { xsd:float }
    }
    HLS = element HLS {
    spaceAttribute,
    attribute h { xsd:float },
    attribute l { xsd:float },
    attribute s { xsd:float }
    }
    Luv = element Luv {
    spaceAttribute,
    attribute L { xsd:float },
    attribute u { xsd:float },
    attribute v { xsd:float }
    }
    XYZ = element XYZ {
    spaceAttribute,
    attribute x { xsd:float },
    attribute y { xsd:float },
    attribute z { xsd:float }
    }
    Yxy = element Yxy {
    spaceAttribute,
    attribute Y { xsd:float },
    attribute x { xsd:float },
    attribute y { xsd:float }
    }
    YCbCr = element YCbCr {
    spaceAttribute,
    attribute Y { xsd:float },
    attribute Cb { xsd:float },
    attribute Cr { xsd:float }
    }
    Gray = element Gray {
    spaceAttribute,
    attribute g { xsd:float }
    }
    colorSpace = element colorspace {
    attribute name { text },
    attribute xlink:href { xsd:anyURI }
    }
    }


Using for validating
--------------------
To use the above RelaxNG compact schema to validate a swatch you can use:

.. code:: shell

   trang -I rnc -O rng colors.rnc colors.rng
   xmllint --relaxng colors.rng colors.xml


Color Grouping Proposal
-----------------------

Krita doesn't use this.

.. code:: xml

    <group>
        <label lang='en'>One group</label>
        <color name='red'>
            <label lang='en'>Red</label>
            <sRGB r="1.0" g="0" b="0"/>
        </color>
        <group>
            <label lang='en'>Nested group</label>
            ...
        </group>
        </group>
    <group>
