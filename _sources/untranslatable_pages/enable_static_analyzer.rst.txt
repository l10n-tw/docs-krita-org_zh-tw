.. meta::
    :description:
        Enable Static Analyzer for Krita's source code

.. metadata-placeholder

    :authors: - Dmitry Kazakov <dimula73@gmail.com>
    :license: GNU free documentation license 1.3 or later.

.. _enable_static_analyzer:

==========================
Enable static analyzer
==========================

.. contents::


1) Install the latest version of clang-tidy

    .. admonition:: For older versions of Ubuntu

        If you are using older version of Ubuntu (e.g. via `Krita Docker build environment <https://invent.kde.org/dkazakov/krita-docker-env>`_) make sure that you added the backports repository:

        .. code:: bash
        
            sudo add-apt-repository ppa:savoury1/llvm-defaults-11
            sudo apt-get update

    .. code:: bash
        
        sudo apt install clang-11 clang-format-11 clang-tidy-11 clang-tools-11


2) Go to to the Analyser settings in QtCreator (Options->Analyser)

3) In the field for Clang-Tidy executable select the script from Krita source tree `sdk/clang-tidy-arguments-wrapper.sh`. This script removes GCC-specific compile options not supported by clang. Without the wrapper script the analyser tool will fail.

4) Open "Diagnostic Configuration" dialog. Duplicate the default configuration, switch to "Clang-Tidy Checks" tab and choose "Use .clang-tidy config file"

5) In the "Project Settings" pane make sure that your new Diagnostic Configuration is activated.

6) Start analysing by clicking on Analyze->Clang Tidy and Clazy...
