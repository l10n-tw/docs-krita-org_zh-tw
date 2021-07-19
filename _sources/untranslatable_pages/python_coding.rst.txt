.. meta::
    :description:
        Guide to working with Python developer tools

.. metadata-placeholder

    :authors: - Rebecca Breu <rebecca@rbreu.de>
    :license: GNU free documentation license 1.3 or later.

.. _python_coding:

======================
Python Developer Tools
======================

For working with Krita's Python code, there are a couple of tools for running unit tests and code checks.

.. contents::


Setup
-----

To set up a Python environment for running code checks, unit tests etc, it is recommended to use a Python virtual environment for installing the needed Python packages. For this, install *virtualenwrapper* from your package manager or follow the `installation instructions <https://virtualenvwrapper.readthedocs.io/en/latest/install.html/>`_. It is also possible to install the needed Python packages directly into your system.

To create a virtual environment for Python 3 with *virtualenwrapper*, run:

.. code::

    mkvirtualenv krita -p /usr/bin/python3

This will create a virtual environment called *krita* and activate it. You will see that your command line now starts with `(krita)` to indicate the active virtual environment.

Now change into your Krita git repository install the needed dependencies into the environment:

.. code::

    pip install --upgrade -r dev-tools/python/dev-requirements.txt

You can rerun this command to update the packages should the version numbers in the requirement file get updated.

To get out of the virtual environment, type:

.. code::

   deactivate

And to get back into the virtual environment, type:

.. code::

   workon krita


Code Checks
-----------

The code checker follows Python's official style guide, `PEP8 <https://www.python.org/dev/peps/pep-0008/>`_.

To run codechecks on all Python files, type:

.. code::

    flake8 .

Or limit to a specific directory or file:

.. code::

    flake8 plugins/python/plugin_importer/


Unit Tests
----------

To run all Python unit tests, type:

.. code::

   pytest .

Or limit to a specific directory, file, or test:

.. code::

   pytest plugins/python/plugin_importer/tests/test_plugin_importer.py::PluginImporterTestCase::test_zipfile_doesnt_exist

See `Pytest's Getting Started <https://docs.pytest.org/en/latest/getting-started.html>`_ documentation for more information about *pytest* in general.

Unit tests for Python plugins should reside in a `tests` folder inside the plugin's folder. See the `plugin_importer` plugin for example unit tests. Note that in order to be able to import Krita's Python plugins outside of Krita in the unit test setup, there is a mock `krita` module that will return mock objects for any attribute names so that importing `krita` and registering plugins etc. become no-ops. Thus, it's only possible to test code units that are independent of Krita-related functions. Another caveat is that the mock krita module doesn't work with wildcard imports (`from krita import *`), but those should be avoided anyway.
