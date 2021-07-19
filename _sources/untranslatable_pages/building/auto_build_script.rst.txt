.. meta::
    :description:
        Guide to building Krita using a half-automatic script on Windows.

.. metadata-placeholder

    :authors: - Tusooa Zhu <tusooa@vista.aero>
    :license: GNU free documentation license 1.3 or later.
    
.. _auto_build_script:

=========================================
Half-automatic building script on Windows
=========================================

This guide is aimed at those who want to develop on Windows but are not willing to build the dependencies themselves. It is, admittedly, a pain to prepare all these dependencies all by yourself. Therefore we will use the pre-built dependencies instead.

.. note::

   For simplicity, this guide assumes that you are on a 64-bit Windows system. If you are on a 32-bit system, you may need to adapt the packages to the corresponding 32-bit versions.

The script
----------

The building script lies at `https://github.com/tusooa/scripts/blob/servant/bin/krita-build.perl <https://github.com/tusooa/scripts/blob/servant/bin/krita-build.perl>`_. To run this script you will need a Perl interpreter. If you do not have one yet on your computer, one simple way is to install it through `MSys <https://www.msys2.org/>`_. Msys is not needed for the building process. If you are using the Msys installer, it is advised to install MinGW with it. If you do not want to install Msys, you can just install `MinGW <http://www.mingw.org/>`_.

In this article we assume that you have installed MSys.

Dependencies
------------

Most of the dependencies you will need to build Krita is available at `the KDE binary factory <https://binary-factory.kde.org/job/Krita_Nightly_Windows_Dependency_Build/>`_. You will get a zip archive from that link. After downloading, unpack the archive to a place you like.

Besides the dependencies you get from the binary factory, you will also need CMake, Python 3.8, and Boost (if your GCC version is not 7.3 -- it is highly probably the case if you have just downloaded installed MinGW).

To install CMake and Boost, open Msys shell and enter ``pacman -S mingw-w64-x86_64-cmake mingw-w64-x86_64-boost``.

The Python installer can be downloaded from `its official website <https://www.python.org/downloads/release/python-383/>`_. It is important to use Python 3.8 and not 3.5 or 3.7 or 3.9 or other versions.

Fetch the sources
-----------------

It is recommended to fetch the source code using Git. Under Msys, you may install Git through the command ``pacman -S git``.

You need to choose a directory to store Krita's source code, and switch to that directory. For example, if we choose ``C:/Home/Code`` as the storing directory, we do:

.. code:: console

   mkdir -pv C:/Home/Code && cd C:/Home/Code

Then clone the git repository:

.. code:: console

   git clone https://invent.kde.org/graphics/krita.git.git

Or:

.. code:: console

   git clone git://anongit.kde.org/krita.git

From now on you will have a ``krita`` directory under ``C:/Home/Code``. We shall then call ``C:/Home/Code/krita`` the *source code directory*.

It is suggested to create a separate build directory for CMake projects. For example, we chose ``C:/Home/Code/krita-build``, so we create and switch to it using:

.. code:: console

   mkdir -pv C:/Home/Code/krita-build && cd C:/Home/Code/krita-build

We call ``C:/Home/Code/krita-build`` the *build directory*.

Invoke the script
-----------------

Before you invoke the script, it is necessary to edit the configuration part and change the variables there to fit your needs. It is marked in the script by ``Config Part -- change as needed``. The following needs to be set up in this manner:

* depsDir -- The absolute path to ``deps-install`` directory you have extracted from ``krita-deps.zip``.
* mingwDir -- The path to MinGW installation. It is usually the ``mingw64`` directory under your Msys installation path.
* pythonDir -- The path to your Python 3.8.
* kritaInstallDir -- Where you want to install Krita.
* kritaSrcDir -- The source code directory we have set up before.
* kritaBuildDir -- The build directory we have set up before.
* jobs -- The maximum number of parallel jobs running through ``make``. It is suggested to use (number of processors) + 1 if you want the maximum compiling speed, or (number of processors) - 1 if you want to do other things when building Krita.
* tests -- Whether you want to build tests. On Windows many of them are broken, so you can disable tests by setting this variable to 0.

It is suggested to run the script outside the Msys environment. For example, you can use the Command Prompt. The Perl interpreter is located at ``<msysDir>/usr/bin/perl.exe``, where ``<msysDir>`` is the directory where Msys is installed.

Invoke the script under the command prompt using:

.. code:: console

   <msysDir>/usr/bin/perl.exe <absolute path of your krita-build.perl>

For simplicity, we shall now call the line above ``<krita-build>``.


Prepare the dependencies for building
-------------------------------------

After extracting, the dependencies cannot be used directly for the build because it contains hard-coded paths. You will need to run the following command once:

.. code:: console

   <krita-build> prepare

How this works will not be covered here for readability reasons. For more information on how this works, please refer to the comments in the script.

Run CMake on the source
------------------------

Switch to the build directory under the Command Prompt, then run cmake:

.. code:: console

   cd C:\Home\Code\krita-build
   <krita-build> cmake

Compile and install Krita
-------------------------

Use an IDE to assist in compilation
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

You may want to use an IDE for development purposes. KDevelop and QtCreator are suggested for developing Krita.

If you use KDevelop, just open the source directory through :guilabel:`Project -> Open/Import Project...` and then choose the build directory that we have set up before. Then, go to :guilabel:`Project -> Open Configuration... -> Make` and choose the ``mingw32-make.exe`` executable as :guilabel:`Make executable`. It is located in ``<mingwDir>/bin/mingw32-make.exe``. Then click :guilabel:`Build` on the toolbar.

Compile on the command line
~~~~~~~~~~~~~~~~~~~~~~~~~~~

Alternatively, you can manually invoke the script from the command line to build and install Krita.

.. code:: console

   <krita-build> install

Run Krita
---------

Before running, you need to link the dependencies to Krita's installation directory. You may need to start a Command Prompt as Administrator to do so:

.. code:: console

   <krita-build> link-deps

This is needed only once, after you have firstly installed Krita. Then you can invoke it using (this does not need Administrator):

.. code:: console

   <krita-build> run

Unless you delete the installation directory and perform a ``<krita-build> install`` again, you will not need to ``link-deps`` again.

