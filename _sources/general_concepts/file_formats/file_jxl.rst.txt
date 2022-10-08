
.. meta::
   :description:
        The JPEG XL file format in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Alvin Wong
   :license: GNU free documentation license 1.3 or later.

.. index:: *.jxl, JPEG XL, JPEG-XL, JPEGXL, JXL
.. _file_jxl:

======
\*.jxl
======

JPEG XL (``.jxl``) is a new royalty-free image file format. It supports :ref:`lossy compression mode <lossless_compression>` designed for photographs similar to the :ref:`JPEG <file_jpeg>` file format, and also :ref:`lossless compression mode <lossless_compression>` similar to formats like :ref:`PNG <file_png>`. In addition, it also supports saving animations with multiple frames like :ref:`GIF <file_gif>`.

When deciding between lossy and lossless compression modes, the same advice for :ref:`JPEG <file_jpeg>` and :ref:`PNG <file_png>` applies. For images with a lot of gradients, like full scale paintings, lossy compression may work very well to produce small files with very little visual quality loss. But for images with a lot of sharp contrasts, like text and comic book styles, lossless compression is usually the better choice.

For JPEG XL files using lossy compression, it is not advised to save over the same file multiple times. The lossy compression will cause the file to reduce in quality each time you save it. This is a fundamental problem with lossy compression methods. Instead you should use the lossless compression mode, or a working file format while you are working on the image.

It is possible to losslessly transcode JPEG images into JPEG XL. Transcoding preserves the already-lossy compression data from the original JPEG image without any quality loss caused by re-encoding, while making the file size smaller than the original. To do this, you need to use specialized tools, for example the :program:`cjxl` command line tool from `libjxl <https://github.com/libjxl/libjxl>`_, to perform the conversion. Beware that you *cannot* do this by opening the JPEG image in Krita and re-exporting it into JPEG XL. Krita always exports files from the raw pixel data, therefore this does *not* have the same effect as transcoding directly from JPEG to JPEG XL.

Exporting animations from Krita as JPEG XL is supported, though this flattens all layers in the image. To export JPEG XL animations, use :term:`Export...` from the :ref:`file_menu` and then saving or exporting to a ``.jxl`` file. Make sure to enable :guilabel:`Save as animated JPEG XL` in the export options. This is different from :ref:`render_animation` in that it does not use FFmpeg.

Export Options
--------------

General
~~~~~~~

JPEG XL's encoder is designed to be fairly hands-off. Where in the case of JPEG you'd have to select the appropriate quality, JPEG XL instead tries to find the best quality for your image. What you instead choose is whether the preferred compression is :ref:`lossy or lossless <lossless_compression>`, and how much effort the encoder should put into finding the best compression for your image, with more effort also meaning longer saving times.

Save as animated JPEG XL
    JPEG XL has the ability to store small animations like :ref:`file_gif`. Its animation capabilities are simple though, and specifically designed for stylized content that doesn't have a lot of colors, like cel-animation. This is because JPEG XL doesn't have intra-frame prediction, which is the best way to store video files with a lot of colors like 3D animation, film and painterly animation. We recommend you try using video rendering for painterly animation instead.
Encoding Options
    Lossless encoding.
        Whether to use :ref:`Lossless compression <lossless_compression>`. Like :ref:`file_webp`, JPEG XL has a different way of encoding the images in lossless and lossy mode, with the latter being closer to the way the original :ref:`file_jpeg` encodes. 
    Tradeoff
        The encoder can give a better result if it is given more time. This slider allows you to decide how much the encoder should prioritize quality over speed. The different modes can be seen as presets [1]_:
    
        1. Lightning -- A fast mode useful for lossless mode. Fastest possible values for lossy compression, for lossless uses gradient predictors and fast histograms, but no MA tree.
        2. Thunder -- Both Lightning and Thunder are similar for Lossy, for lossless, Thunder uses a fixed MA tree and gradient predictors.
        3. Falcon -- Instead of using lossless mode, disables all options.
        4. Cheetah -- Enables coefficient reordering, context clustering, and heuristics for selecting DCT sizes and quantization steps.
        5. Hare -- Enables Gaborish Filtering, Chroma from Luma and estimates quantization steps.
        6. Wombat -- Enables error diffusion quantization and DCT heuristics.
        7. Squirrel -- Enables dots, patches and spline detection as well as context clustering.
        8. Kitten -- Optimizes the adaptive quantization for a psychovisual metric.
        9. Tortoise -- Enables a more thorough adaptive quantization search.
    
        You can force-enable several of the options in the :guilabel:`Advanced` section even if they are disabled by the :guilabel:`Tradeoff` preset.
    Decoding Speed
        Decoding speed can be improved by allowing certain optimizations. However, this will lead to some quality loss. For example, if you think your images will be largely viewed on mobile phones it might be a good idea to experiment with this option. Conversely, if your image will only be viewed by desktop computers and quality is of utmost importance, this should be set to 0.

Advanced
~~~~~~~~

JPEG XL has two major ways of encoding data:

VarDCT
    This one is in the same family of compression techniques as used by the original JPEG, and thus best for 'Natural' images, such as photographs and images with a lot of gradients and textures.
Modular Mode
    This one has specific features for so-called 'synthetic' images, such as line art and images with a lot of wide patches. Modular mode is always used when selecting :guilabel:`Lossless Encoding`.

You could consider VarDCT to be like 'lossy' compression, while Modular Mode is like 'lossless' compression. Furthermore, JPEG XL splits up images into smaller chunks called 'Groups', these are 256x256 for VarDCT and you can choose one of several sizes for Modular Mode.

Color channel resampling.
    How to sample the color channels.
    This means that there will be less information stored, leading to a smaller file. However, because this only samples a few pixels, sharp contrasts are lost. The effect is similar to if you'd scale down the image by half (for 2x2), quarter (for 4x4) or to an eight (for 8x8) and then scaled it back up to the original size.
    
    This feature is particularly useful for images that are deliberately blurry and devoid of sharp contrast. It's recommended to set this to :guilabel:`No Downsampling` in any other case.
        
Alpha channel resampling
    Same as :guilabel:`Color channel resampling`, but then for the transparency of the image.
Photon noise
    This determines whether noise in the image should be abstracted and added later by the computer, giving a simulation of the noise that cameras sometimes capture.
Generate dots
    Dots are a form of noise larger than :guilabel:`Photon noise`. Such dots make images more pleasing to look at, however, they make compressing difficult. This option allows you to choose whether or not to abstract these dots away and have the computer add them later. If this and :guilabel:`Generate Patches` is on, and the encoder finds both patches and dots, the dots will be encoded as if they were patches.
    
    - Default -- Encoder will select this option depending on :guilabel:`Tradeoff`.
    - Enabled -- Always use this regardless :guilabel:`Tradeoff`.
    - Disabled -- Never use this regardless :guilabel:`Tradeoff`.

Generate patches
    This determines whether or not to try and reuse bits and pieces of an image. This can be useful with images that have a lot of repeating bits, like sprite art, images with text or images using a lot of patterns.
    
    - Default -- Encoder will select this option depending on :guilabel:`Tradeoff`.
    - Enabled -- Always use this regardless :guilabel:`Tradeoff`.
    - Disabled -- Never use this regardless :guilabel:`Tradeoff`.

Edge Preserving Filter
    The edge preserving filter tries to preserve edges without getting artifacts like 'rings'.
Gaborish filter
    Whether or not to apply a Gabor-like sharpening filter, which can help emphasize important contrasts that would otherwise be lost during encoding and decoding.
    
    - Default -- Encoder will select this option depending on :guilabel:`Tradeoff`.
    - Enabled -- Always use this regardless :guilabel:`Tradeoff`.
    - Disabled -- Never use this regardless :guilabel:`Tradeoff`.

Modular encoding
    Unlike *Modular Mode*, which is the lossless compression method, Modular encoding instead splits the image into smaller chunks, allowing for multi-threaded encoding, as well as per-chunk optimization. This option allows you to choose whether the encoder should do so with the lossy :guilabel:`VarDCT` method, the lossless :guilabel:`Modular Mode`, or by letting the encoder itself choose.
Keep color of invisible pixels
    Whether to keep the color values when a pixel is fully transparent or whether to abstract them away as if they were transparent black.

    - Default -- Encoder will select this option depending on :guilabel:`Tradeoff`.
    - Enabled -- Always use this regardless of :guilabel:`Tradeoff`.
    - Disabled -- Never use this regardless of :guilabel:`Tradeoff`.

Group order
    How the groups are stored in :guilabel:`Modular encoding`. This is important for partially downloaded images and images using :guilabel:`Progressive Encoding`.
    
    Default
        Depends on :guilabel:`Tradeoff`.
    Scanline order
        Top left of the image is also the first group.
    Center first
        The centermost group of the image is the first group.

Chroma-from-luma
    JPEG XL can use some algorithmic trickery to predict the color of a given section from the pixel brightness, meaning it only has to store the pixel brightness and not the color. Experimentation is recommended.

    - Default -- Encoder will select this option depending on :guilabel:`Tradeoff`.
    - Enabled -- Always use this regardless of :guilabel:`Tradeoff`.
    - Disabled -- Never use this regardless of :guilabel:`Tradeoff`.

VarDCT parameters
    The core of JPEG's compression is the so-called Discrete Cosine Transform (DCT). This allows it to simplify a complex gradient of colors to a mathematical function. One of the new features of JPEG XL is that these DCT don't have to be 8x8, nor do they have to be the same size over the whole image. This is called 'Variable DCT'. The compression that is applied on this mathematical function is also finetuned by the encoder, this is called `Adaptive Quantization`.
    
    Because the encoder is able to pick the best solution for the compression (Depending on what you selected for :guilabel:`Tradeoff`), the only thing you need to worry about is whether to enable progressive mode. Progressive mode for VarDCT takes the so-called `DC` values (which are per DCT block) to produce a coarse preview image that gets shown first and then it takes the `AC` values, which represent the fine details, and sends them out last. In effect this results in progressive images first showing a rough blurry image which, as the download completes, becomes *progressively* sharper. This is especially useful for images alongside text or images that get served over a slow internet connection.

    Spectral progression
        This enables progressive mode and uses advanced color maths to calculate the fine details of images. This takes more time but generally gives better results.
    
        - Default -- Encoder will select this option depending on :guilabel:`Tradeoff`.
        - Enabled -- Always use this regardless of :guilabel:`Tradeoff`. 
        - Disabled -- Never use this regardless of :guilabel:`Tradeoff`.
    
    Quantization
        This enables progressive mode and then uses quantization to compress the fine details. This leads to a smaller file size at the cost of giving the encoder more time to do so.
        
        - Default -- Encoder will select this option depending on :guilabel:`Tradeoff`.
        - Enabled -- Always use this regardless of :guilabel:`Tradeoff`. 
        - Disabled -- Never use this regardless of :guilabel:`Tradeoff`.
    
    Low resolution DC
        Where the previous two options covered the fine-grain parts of a progressive-encoded image, the `DC` is coarse-grain compression, specifically a coefficient for every DCT block that can be used to create the coarse preview image for progressive decoding. Because DCT can be variable-size in JPEG XL, you can opt to use a low-resolution image in addition. This should result in a better preview, though the file size will be a few bytes bigger.
        
        .. warning:
        
            This option can crash when Krita is compiled with LibJXL older than 0.7. This does not happen with official binaries, but people who compile Krita themselves should take care to have an up to date LibJXL if they want to use this feature.
        
        Default
            Let the encoder choose.
        Disable
            Do not use a lower-resolution image at all.
        64x64 low resolution pass
            Create an 64x64 image to use alongside the `DC` values to create the progressive preview.
        512x512 + 64x64 low resolution pass
            Create both a 512x512 image and a 64x64 image to use alongside the `DC` values to create the progressive preview.

Modular Parameters
    Extra options for :guilabel:`Modular Mode`. Modular mode uses something akin to a small programming language by way of predictors to describe image data succinct and precise.

    Progressive encoding
        Whether or not to enable progressive encoding/decoding. As explained in :guilabel:`VarDCT parameters`, this means that the image can be saved in such a way that upon downloading and showing it, a rough previews will get shown first.
        
        - Default -- Encoder will select this option depending on :guilabel:`Tradeoff`.
        - Enabled -- Always use this regardless of :guilabel:`Tradeoff`.
        - Disabled -- Never use this regardless of :guilabel:`Tradeoff`.
    Global channel palette range
        Colors will be stored as a palette depending on whether the total amount of different colors used is smaller than the percentage of all color channel values possible. For 8 bit, 100% would mean 255 values total, 50% would mean 128 values total, and 10% would mean a total of 25 values total.
    Local channel palette range
        Like :guilabel:`Global channel palette range`, but then decided per group.
    Use color palette for ... colors or less.
        Select the maximum amount of colors that need to be present in a group before the encoder will try to store them as a palette.
    Delta palette
        Whether to use a Delta-palette, also called a lossy-palette. This compresses the palette, but there's no official documentation yet on how exactly.
    
        - Default -- Encoder will select this option depending on :guilabel:`Tradeoff`.
        - Enabled -- Always use this regardless of :guilabel:`Tradeoff`.
        - Disabled -- Never use this regardless of :guilabel:`Tradeoff`.
    
    Group size
        Images can be split into smaller chunks, which can be encoded separately. You can choose how big these chunks are when using Modular Mode, for VarDCT they will default to 256x256.
    
        - 128x128
        - 256x256
        - 512x512
        - 1024x1024

    Predictor
        Which predictor to use in conjunction with the :guilabel:`MA tree`. Where VarDCT compresses the image by abstracting complex gradients into mathematical functions, Modular Mode compresses sections by determining if it can be described by its neighbouring pixels, like 'the same color as the pixel to the left'. This is a predictor, and you can select which predictor you'd prefer to be used. Recommended value is :guilabel:`Default`.
        
        - Default -- Let the encoder choose.
        - Zero -- Always returns the value 0.
        - Left -- Always returns the value at the left.
        - Top -- Always returns the value at the top.
        - Avg0 -- Returns the average of the values to the immediate left and top of the current location.
        - Select  -- Subtracts the left and top neighbour from the top-left, and returns the neighbour whose difference is lower.
        - Gradient -- Returns the value of the top-left neighbour minus the values of the top and left neighbours.
        - Weighted -- A complex predictor that weights the top, left and top-left pixels in certain ways to achieve the result.
        - Top Right -- Returns the value topright of the current location.
        - Top Left -- Returns the value topleft of the current location.
        - Left Left -- Returns the value topright of the current location.
        - Avg1 -- Returns the average of the values to the immediate left and top-left of the current location.
        - Avg2 -- Returns the average of the values to the immediate top-left and top of the current location.
        - Avg3 -- Returns the average of the values to the immediate left and top-right of the current location.
        - Toptop predictive average -- Weights the value of 6 neighbours: the top, left, topright, and their immediately adjacent neighbours in the same direction. 
        - Gradient + Weighted -- Mixes gradient and weighted.
        - Use all predictors
    
    Pixels for MA tree learning.
        Fraction of pixels used for the Meta-Adaptive Context tree. The MA tree is a way of analyzing the pixels surrounding the current pixel, and depending on the context choose a given predictor for this pixel. More pixels mean a better understood context and thus better compression, but these also take more resources while encoding.

Metadata
~~~~~~~~
Store document metadata.
    Whether to store any metadata at all. You can individually toggle :guilabel:`Exif`, :guilabel:`IPTC` and :guilabel:`XMP`.
Anonymizer
    Whether to remove author information.
Tool information
    Whether to add tool information.

.. seealso::

    - `JPEG XL official website <https://jpeg.org/jpegxl/>`_
    - `JPEG XL community website <https://jpegxl.info/>`_
    - `libjxl -- JPEG XL reference implementation <https://github.com/libjxl/libjxl>`_
    
    .. [1] `Copied from this libjxl readme <https://github.com/libjxl/libjxl/blob/315247f000cff01fbc7ee2dd8252ea8fb82d0769/doc/benchmarking.md>`_ as well as comments inside the libjxl source code.
