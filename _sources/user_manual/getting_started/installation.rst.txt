.. meta::
   :description:
        Detailed steps on how to install Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Raghavendra Kamath <raghu@raghukamath.com>
             - Scott Petrovic
             - Halla Rempt <boud@valdyas.org>
             - Dmitry Kazakov <dimula73@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Installation
.. _installation:

Installation
============

Windows
-------
Windows users can download Krita from the website, the Windows Store, or Steam.
The versions on the Store and Steam cost money, but are `functionally identical
<https://krita.org/en/item/krita-available-from-the-windows-store/>`_ to the
(free) website version. Unlike the website version, however, both paid versions
get automatic updates when new versions of Krita comes out. After deduction of
the Store fee, the purchase cost supports Krita development.

Website:
    The latest version is always on our `website <https://krita.org/download/>`_.

    The page will try to automatically recommend the correct architecture (64- or 32-bit), but you can select "All Download Versions" to get more choices. To determine your computer architecture manually, go to :menuselection:`Settings --> About`. Your architecture will be listed as the :guilabel:`System Type` in the :guilabel:`Device Specifications` section.

    Krita by default downloads an **installer EXE**, but you can also download a **portable ZIP file** version instead. Unlike the installer version, this portable version does not show previews in Windows Explorer automatically. To get these previews with the portable version, also install Krita's **Windows Shell Extension** (available on the download page).

    These files are also available from the `KDE download directory <https://download.kde.org/stable/krita/>`_.
Windows Store:
    For a small fee, you can download Krita `from the Windows Store <https://www.microsoft.com/store/productId/9N6X57ZGRW96>`_. This version requires Windows 10.
Steam:
    For a small fee, you can also download Krita `from Steam <https://store.steampowered.com/app/280680/Krita/>`_.


To download a portable version of Krita go to the `KDE <https://download.kde.org/stable/krita/>`_ download directory
and get the ZIP file instead of the setup.exe installer.

.. note::
   Krita requires Windows 8.1 or newer. The Store version requires Windows 10.

Linux
-----

Many Linux distributions package the latest version of Krita. Sometimes
you will have to enable an extra repository. Krita runs fine under most
desktop environments such as KDE, Gnome, LXDE, Xfce etc. -- even though it
is a KDE application and needs the KDE libraries. You might also want to
install the KDE system settings module and tweak the GUI theme and fonts used,
depending on your distributions.

Nautilus/Nemo file extensions
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Since April 2016, KDE's Dolphin file manager shows KRA and ORA thumbnails by
default, but Nautilus and its derivatives need an extension. `We
recommend Moritz Molch's extensions for XCF, KRA, ORA and PSD
thumbnails <https://moritzmolch.com/1749>`__.

AppImages
~~~~~~~~~

For Krita 3.0 and later, first try out the AppImage from the website.
**90% of the time this is by far the easiest way to get the
latest Krita.** Just download the AppImage, and then use the file
properties or the bash command chmod to make the AppImage executable.
Double click it, and enjoy Krita. (Or run it in the terminal with
./appimagename.appimage)

- Open the terminal into the folder you have the AppImage.
- Make it executable:

::

 chmod a+x krita-3.0-x86_64.appimage

- Run Krita!

::

 ./krita-3.0-x86_64.appimage

AppImages are ISOs with all the necessary libraries bundled inside, that means no
fiddling with repositories and dependencies, at the cost of a slight bit
more disk space taken up (And this size would only be bigger if you were
using Plasma to begin with).

Ubuntu and Kubuntu
~~~~~~~~~~~~~~~~~~

It does not matter which version of Ubuntu you use, Krita will run just
fine. However, by default, only a very old version of Krita is
available. You should either use the AppImage, flatpak or the snap available
from Ubuntu's app store. We also maintain a ppa for getting the latest builds of Krita,
you can read more about the ppa and install instructions `here <https://launchpad.net/~kritalime/+archive/ubuntu/ppa>`_.

OpenSUSE
~~~~~~~~

The latest stable builds are available from KDE:Extra repo:

-  https://download.opensuse.org/repositories/KDE:/Extra/

.. note::
   Krita is also in the official repos, you can install it from Yast.

Fedora
~~~~~~

Krita is in the official repos, you can install it by using packagekit (Add/Remove Software) or by writing the following command in terminal.

``dnf install krita``

You can also use the software center such as gnome software center or Discover to install Krita.

Debian
~~~~~~

The latest version of Krita available in Debian is 3.1.1.
To install Krita type the following line in terminal:

``apt install krita``


Arch
~~~~

Arch Linux provides krita package in the Extra repository. You can
install Krita by using the following command:

``pacman -S krita``

You can also find Krita pkgbuild in arch user repositories, but it is not guaranteed to contain the latest git version.

Flatpak
~~~~~~~
We also have Flatpak for nightlies and stable builds, these builds are not maintained by the core developers themselves. You can either get the builds from the `KDE community website <https://binary-factory.kde.org>`_ or from the `Flathub Maintainers <https://flathub.org/apps/details/org.kde.krita>`_. The KDE community website only offers nightly builds of flatpak.

To install flatpak build from the software center just open the flatpakrepo files with Discover or the software center provided by your distribution:

    `Flathub Repo <https://flathub.org/repo/flathub.flatpakrepo>`_

    `KDE Flatpak Repo <https://distribute.kde.org/kdeapps.flatpakrepo>`_

After adding one of the above repos you can then search for Krita and the software center will show you the flatpak version for installation.

If you prefer doing it from terminal you can use the following commands to install Krita's flatpak build

    For KDE Flatpak Repo:

    ``flatpak --user remote-add --if-not-exists kdeapps --from https://distribute.kde.org/kdeapps.flatpakrepo``

    ``flatpak --user install kdeapps org.kde.krita-nightly``

    For installing it from Flathub Repo:

    ``flatpak --user remote-add --if-not-exists flathub https://flathub.org/repo/flathub.flatpakrepo``

    ``flatpak --user install kdeapps org.kde.krita``

Snaps
~~~~~
There are snap packages provided by the Ubuntu snap developers, these are generally not up to date. The Krita Developers do not provide or build the snap packages themselves.
To install Krita as a snap package, first install snapd application. Snapd is installed by default on Ubuntu distributions.

If you are on Ubuntu distribution then Krita's snap package may show up in the software center, or you can run the following command in terminal

    ``sudo snap install krita``


.. note::
   The Flatpak and Snap builds are not tested by the core developers of Krita, so you may encounter some bugs while running Krita installed from them.

macOS
-----

You can download the latest binary from our
`website <https://krita.org/download/krita-desktop/>`__.
The binaries work only with macOS version 10.12 and newer.

Source
------

While it is certainly more difficult to compile Krita from source than
it is to install from prebuilt packages, there are certain advantages
that might make the effort worth it:

-  You can follow the development of Krita on the foot. If you compile
   Krita regularly from the development repository, you will be able to
   play with all the new features that the developers are working on.
-  You can compile it optimized for your processor. Most pre-built packages
   are built for the lowest-common denominator.
-  You will be getting all the bug fixes as soon as possible as well.
-  You can help the developers by giving us your feedback on features as
   they are being developed, and you can test bug fixes for us. This is
   hugely important, which is why our regular testers get their name in
   the about box just like developers.

Of course, there are also some disadvantages: when building from the current
development source repository you also get all the unfinished features.
It might mean less stability for a while, or things shown in the user
interface that don't work. But in practice, there is seldom really bad
instability, and if it is, it's easy for you to go back to a revision
that does work.

So... If you want to start compiling from source, begin with the latest
build instructions from the guide :ref:`here <building_krita>`.

If you encounter any problems, or if you are new to compiling software,
don't hesitate to contact the Krita developers. There are three main
communication channels:

-  irc: web.libera.chat, channel #krita
-  `mailing list <https://mail.kde.org/mailman/listinfo/kimageshop>`__
-  `Krita Artists <https://krita-artists.org>`__
