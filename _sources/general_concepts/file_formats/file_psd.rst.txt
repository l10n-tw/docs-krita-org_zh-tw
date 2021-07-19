.. meta::
   :description:
        The Photoshop file format as exported by Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: *.psd, PSD, Photoshop Document
.. _file_psd:

======
\*.psd
======

``.psd`` is Photoshop's internal file format. For some reason, people like to use it as an interchange format, even though it is not designed for this.

``.psd``, unlike actual interchange formats like :ref:`file_pdf`, :ref:`file_tif`, :ref:`file_exr`, :ref:`file_ora` and :ref:`file_svg` doesn't have an official spec online. Which means that it needs to be reverse engineered. Furthermore, as an internal file format, it doesn't have much of a philosophy to its structure, as it's only purpose is to save what Photoshop is busy with, or rather, what all the past versions of Photoshop have been busy with. This means that the inside of a PSD looks somewhat like Photoshop's virtual brains, and PSD is in general a very disliked file-format.

Due to ``.psd`` being used as an interchange format, this leads to confusion amongst people using these programs, as to why not all programs support opening these. Sometimes, you might even see users saying that a certain program is terrible because it doesn't support opening PSDs properly. But as PSD is an internal file-format without online specs, it is impossible to have any program outside it support it 100%.

Krita supports loading and saving raster layers, blending modes, layerstyles, layer groups, and transparency masks from PSD. It will likely never support vector and text layers, as these are just too difficult to program properly.

We recommend using any other file format instead of PSD if possible, with a strong preference towards :ref:`file_ora` or :ref:`file_tif`.

As a working file format, PSDs can be expected to become very heavy and most websites won't accept them.
