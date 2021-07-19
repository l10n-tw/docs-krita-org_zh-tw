.. meta::
    :description:
        Guide for optimizing Krita.

.. metadata-placeholder

    :authors: - Michael Abrahams <miabraha@gmail.com>
              - Halla Rempt <boud@valdyas.org>
              - Timotimo
              - Lukáš Tvrdý <lukast.dev@gmail.com>
              - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
    :license: GNU free documentation license 1.3 or later.

===================================
Optimizing tips and tools for Krita
===================================

Hot Spots
---------

* thumbnails are recalculated a lot
* the histogram docker calculates even when hidden
* brush outline seems slow
* the calculation of the mask for the autobrush is very slow and doesn't cache anything
* caching a whole row or column of tiles in the h/v line iterators should speed up things a lot
* tile engine 1 has the BKL; tile engine 2 cannot swap yet and isn't optimized yet
* projection recomposition doesn't take the visible area into account
* pigment preloads all profiles (startup hit)
* gradients are calculated on load, instead of being associated with a PNG preview image that is cheap to load

Tools
-----

Valgrind
~~~~~~~~

Tips
''''

You can tell callgrind to focus only on the part of the code you want to optimize. This results in cleaner data.  For example, you may want to only monitor the performance when drawing a stroke. Unless the thing you're trying to optimize is the program startup, you can tell valgrind to run with the logging, or instrumentation, turned off at start:

``valgrind  --tool=callgrind --instr-atstart=no krita``

Instrumentation can then be activated and deactivated with callgrind_control. To begin performance monitoring:

``callgrind_control -i on``

And then to end it:

``callgrind_control -i off``

I usually write a few aliases in my .bashrc  (or .zshrc): 

.. code::

    alias callgrind="valgrind --tool=callgrind --instr-atstart=no"
    alias callgrind-on="callgrind_control --instr=on"
    alias callgrind-off="callgrind_control --instr=off"

Sysprof
~~~~~~~


mutrace
~~~~~~~

`mutrace <http://0pointer.de/blog/projects/mutrace.html>`_ is a tool that count how much time is spend waiting for a mutex to unlock.

Easy optimization
-----------------

As soon as you see slow code, try to have a look at the code to see if we 
aren't creating a lot of unnecesserary objects, 90% of the time slow code is 
caused by this (the remain 10% are often caused by a lot of access to the 
tilesmanager, like with random accessor)

For instance:

Avoid:

    .. code:: cpp
    
        for(whatever)
        {
            QColor c;
            ...
        }

Do:
    
    .. code:: cpp

        QColor c;
        for(whatever)
        {

        }

It might seems insignificant, but really it's not, on a loop of a milion of 
iterations, this is expensive as hell.

An other example:

Avoid:

    .. code:: cpp
    
        for(y = 0 to height)
        {
            KisHLineIterator it = dev->createHLineIterator(0, y, width);
            for(whatever)
            {
                ...
            }
        }

Do:

    .. code:: cpp
        
        KisHLineIterator it = dev->createHLineIterator(0, 0, width);
        for(y = 0 to height)
        {
            for(whatever)
            {
                ...
            }
            it.nextRow(); // or nextCol() if you are using a VLine iterator
        }

Vector instructions
-------------------

Krita takes heavy advantage of the `Vc <https://github.com/VcDevel/Vc>`_ library to speed up its brush strokes with CPU vector instructions.  If you are planning to work with that library, it is worth reading through its documentation.  

There are more general introductions to what vector instructions are for, and how they work here.

 * `Reference about MMX on Intel's website <http://developer.intel.com/design/archives/processors/mmx/>`_.
 * `Fundamentals of Media Processor Designs <http://www.cise.ufl.edu/~peir/cda6159/media12.pdf>`_: introduction to the use of MMX/SSE instructions.
 * `Software Optimization Guide for AMD64 <http://www.amd.com/us-en/assets/content_type/white_papers_and_tech_docs/25112.PDF>`_.
 * `STL like programming but using MMX/SSE{1,2,3} when available <http://www.pixelglow.com/macstl/>`_.

Profile guided optimization
---------------------------

Profile guided optimization is something else though. It is a special way of compiling and linking, that the compiler and linker use profiling information to know how best to optimize the code. So code that is used a lot is compiled with -O3 (the most optimizations), while code that is not used a lot gets -Os (to take less space), and so forth. This is a very useful technique that was not available on Linux until last year, and the news today is that Firefox now builds properly with it and there is a nice noticeable speed improvement for Linux users.

source:
    https://linux.slashdot.org/comments.pl?sid=2117150&cid=35987784
wikipedia:
    https://en.wikipedia.org/wiki/Profile-guided_optimization

.. code:: cpp
    
    g++ -O3 -march=native -pg -fprofile-generate ...
    // run my program's benchmark
    g++ -O3 -march=native -fprofile-use ...

Links
-----


* `Design for Performance <https://es.scribd.com/document/53483851/Design-for-Performance>`_: great read about performance optimization (aimed at game developers, but many tricks apply for Krita).
* `TCMalloc <http://goog-perftools.sourceforge.net/doc/tcmalloc.html>`_: a malloc replacement which make faster allocation of objects by caching some reserved part of the memory.
* `Optmizing CPP <http://www.agner.org/optimize/optimizing_cpp.pdf>`_: extensive manual on writing optimized code.
