.. meta::
   :description:
        Basic page describing drawing tablets, how to set them up for Krita and how to troubleshoot common tablet issues.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Radianart
             - Scott Petrovic
             - Micheal Abrahams
   :license: GNU free documentation license 1.3 or later.

.. index:: Tablets
.. _drawing_tablets:

===============
Drawing Tablets
===============

This page is about drawing tablets, what they are, how they work, and
where things can go wrong.

What are Tablets?
-----------------

Drawing with a mouse can be unintuitive and difficult compared to pencil
and paper. Even worse, extended mouse use can result in carpal tunnel
syndrome. That’s why most people who draw digitally use a specialized
piece of hardware known as a drawing tablet.

.. image:: /images/Krita_tablet_types.png

A drawing tablet is a piece of hardware that you can plug into your
machine, much like a keyboard or mouse. It usually looks like a plastic
pad, with a stylus. Another popular format is a computer monitor with
stylus used to draw directly on the screen. These are better to use than
a mouse because it’s more natural to draw with a stylus and generally
better for your wrists.

With a properly installed tablet stylus, Krita can use information like
pressure sensitivity, allowing you to make strokes that get bigger or
smaller depending on the pressure you put on them, to create richer and
more interesting strokes.

.. note::
    Sometimes, people confuse finger-touch styluses with a proper tablet. You can tell the difference because a drawing tablet stylus usually has a pointy nib, while a stylus made for finger-touch has a big rubbery round nib, like a finger. These tablets may not give good results and a pressure-sensitive tablet is recommended.
    
    .. image:: /images/Krita_tablet_stylus.png

Supported Tablets
-----------------

Supported tablets are owned by Krita developers themselves, so they can reliably diagnose and fix bugs. :ref:`We maintain a list of those here <list_supported_tablets>`.

If you're looking for information about iPad or Android tablets, :ref:`look here <krita_android>`.

Drivers and Pressure Sensitivity
--------------------------------

So you have bought a tablet, a real drawing tablet. And you want to get it
to work with Krita! So you plug in the USB cable, start up Krita and...
It doesn’t work! Or well, you can make strokes, but that pressure
sensitivity you heard so much about doesn’t seem to work.

This is because you need to install a program called a ‘driver’. Usually
you can find the driver on a CD that was delivered alongside your
tablet, or on the website of the manufacturer. Go install it, and while
you wait, we’ll go into the details of what it is!

Running on your computer is a basic system doing all the tricky bits of
running a computer for you. This is the operating system, or OS. Most
people use an operating system called Windows, but people on an Apple
device have an operating system called macOS, and some people, including
many of the developers use a system called Linux.

The base principle of all of these systems is the same though. You would
like to run programs like Krita, called software, on your computer, and
you want Krita to be able to communicate with the hardware, like your
drawing tablet. But to have those two communicate can be really
difficult - so the operating system, works as a glue between the two.

Whenever you start Krita, Krita will first make connections with the
operating system, so it can ask it for a lot of these things: It would
like to display things, and use the memory, and so on. Most importantly,
it would like to get information from the tablet!

.. image:: /images/Krita_tablet_drivermissing.png

But it can’t! Turns out your operating system doesn’t know much about
tablets. That’s what drivers are for. Installing a driver gives the
operating system enough information, so the OS can provide Krita with the
right information about the tablet. The hardware manufacturer's job is
to write a proper driver for each operating system.

.. warning::
    Because drivers modify the operating system a little, you will always need to restart your computer when installing or uninstalling a driver, so don’t forget to do this! Conversely, because Krita isn’t a driver, you don’t need to even uninstall it to reset the configuration, just rename or delete the configuration file.

Where it can go wrong: Windows
------------------------------

Krita automatically connects to your tablet if the drivers are
installed. When things go wrong, usually the problem isn't with Krita.

Surface Pro tablets need two drivers
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Certain tablets using n-trig, like the Surface Pro, have two types of
drivers. One is native, n-trig and the other one is called Wintab.
Since 3.3, Krita can use Windows Ink style drivers, just go to 
:menuselection:`Settings --> Configure Krita... --> Tablet Settings` and
toggle the :guilabel:`Windows 8+ Pointer Input (Windows Ink)` there. You
don't need to install the Wintab drivers anymore for n-trig based pens.

Windows 10 updates
~~~~~~~~~~~~~~~~~~

Sometimes a Windows 10 update can mess up tablet drivers. In that case,
reinstalling the drivers should work.

Wacom Tablets
-------------

There are three known problems with Wacom tablets and Windows. 

The first is that if you have customized the driver settings, then sometimes,
often after a driver update, but that is not necessary, the driver breaks.
Resetting the driver to the default settings and then loading your settings
from a backup will solve this problem.

The second is that for some reason it might be necessary to change the display
priority order. You might have to make your Cintiq screen your primary screen,
or, on the other hand, make it the secondary screen. Double check in the Wacom
settings utility that the tablet in the Cintiq is associated with the Cintiq
screen.

The third is that if you have a display tablet like a Cintiq and a Wacom ExpressKeys remote, and you have disabled Windows Ink in the calibration page of the stylus settings dialog, so you have the full set of Wintab features, the Cintiq needs to be the first item in Wacom's desktop application list. Otherwise, you will have an offset between stylus and mouse that will get worse the more displays there are to the left of the Cintiq display.


Broken Drivers
~~~~~~~~~~~~~~

Tablet drivers need to be made by the manufacturer. Sometimes, with
really cheap tablets, the hardware is fine, but the driver is badly
written, which means that the driver just doesn’t work well. We cannot
do anything about this, sadly. You will have to send a complaint to the
manufacturer for this, or buy a better tablet with better quality
drivers.

Conflicting Drivers
~~~~~~~~~~~~~~~~~~~

On Windows, you can only have a single Wintab-style driver installed at
a time. So be sure to uninstall the previous driver before installing
the one that comes with the tablet you want to use. Other operating
systems are a bit better about this, but even Linux, where the drivers
are often preinstalled, can't run two tablets with different drivers at
once.

Interfering software
~~~~~~~~~~~~~~~~~~~~

Sometimes, there's software that tries to make a security layer between
Krita and the operating system. Sandboxie is an example of this.
However, Krita cannot always connect to certain parts of the operating
system while sandboxed, so it will often break in programs like
Sandboxie. Similarly, certain mouse software, like Razer utilities can
also affect whether Krita can talk to the operating system, converting
tablet information to mouse information. This type of software should be
configured to leave Krita alone, or be uninstalled.

The following software has been reported to interfere with tablet events
to Krita:

#. Sandboxie
#. Razer mouse utilities
#. AMD Catalyst:sup:`TM` “game mode” (this broke the right click for someone)

Flicks (Wait circle showing up and then calling the popup palette)
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

If you have a situation where trying to draw keeps bringing up the
pop-up palette on Windows, then the problem might be flicks. These are a
type of gesture, a bit of Windows functionality that allows you to make
a motion to serve as a keyboard shortcut. Windows automatically turns
these on when you install tablet drivers, because the people who made
this part of Windows forgot that people also draw with computers. So you
will need to turn it off in the Windows flicks configuration.

Wacom Double Click Sensitivity (Straight starts of lines)
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

If you experience an issue where the start of the stroke is straight,
and have a Wacom tablet, it could be caused by the Wacom driver
double-click detection.

To fix this, go to the Wacom settings utility and lower the double click
sensitivity.

Supported Tablets
-----------------

Supported tablets are the ones of which Krita developers have a version
themselves, so they can reliably fix bugs with them. :ref:`We maintain a list of those here <list_supported_tablets>`.
