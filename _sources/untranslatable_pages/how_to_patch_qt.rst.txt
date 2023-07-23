.. meta::
    :description:
        How to patch Qt

.. metadata-placeholder

    :authors: - Dmitry Kazakov <dimula73@gmail.com>
    :license: GNU free documentation license 1.3 or later.

.. _how_to_patch_qt:

==========================
How to patch Qt
==========================

.. contents::

The Qt repository is split into submudules, so pushing a fix for it is not very trivial. Let's assume you 
have Krita deps built using Krita's build scripts and you want to modify Qt and push a fix into the registry.

1. Make a commit in QtBase submodule

    When using submodules, the submodule folder is in "detached" state without any branch assigned, 
    so we need to reset the branch head after we make a commit:


    .. code:: bash

        cd qtbase
        git commit -a -m "your commit message"

        # reset the branch head (make sure you don't have any local 
        # changes in 'krita/5.15' branch!)

        git update-ref refs/heads/krita/5.15 HEAD
        git checkout krita/5.15
        git pull --rebase
        
        cd ..

2) Make a commit in the root repository and push

    .. code:: bash

        git checkout krita/5.15
        git pull --rebase
        git commit -a -m "commit message for the root repo"
        git push --recurse-submodules=on-demand

3) Update the sha1-link in Krita's repository

    1) Open ``3rdparty/ext_qt/CMakeLists.txt``
    2) Modify ``QT_GIT_TAG`` with the newly pushed sha1
    3) Push!

