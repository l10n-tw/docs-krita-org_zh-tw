.. meta::
    :description:
        Introduction unittests in Krita.

.. metadata-placeholder

    :authors: - Dmitry Kazakov <dimula73@gmail.com>
              - Michael Abrahams <miabraha@gmail.com>
              - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>

    :license: GNU free documentation license 1.3 or later.

.. _unittests_in_krita:

==================
Unittests in Krita
==================

.. contents::

What is a unit test is and why is it needed?
--------------------------------------------

Wiki:
    A unit test is a piece of code that automatically checks if your class or subsystem works correctly. The goal of unit testing is to isolate each part of the program and show that the individual parts are correct. A unit test provides a strict, written contract that the piece of code must satisfy. As a result, it affords several benefits [1]_.

Comment:
    In other words unit testing allows the developer to verify if his initial design decisions has been implemented correctly and all the corner-cases are handled correctly.

In Krita Project we use unit tests for several purposes. Not all of them work equally good, but all together they help developing a lot.

Debugging of new code
~~~~~~~~~~~~~~~~~~~~~

Wiki:
    Unit testing finds problems early in the development cycle. This includes both bugs in the programmer's implementation and flaws or missing parts of the specification for the unit. The process of writing a thorough set of tests forces the author to think through inputs, outputs, and error conditions, and thus more crisply define the unit's desired behavior. The cost of finding a bug before coding begins or when the code is first written is considerably lower than the cost of detecting, identifying, and correcting the bug later; bugs may also cause problems for the end-users of the software [1]_.

Comment:
    Krita is a big project and has numerous subsystems that communicate with each other in complicated ways. It makes debugging and testing new code in the application itself difficult. What is more, just compiling and running the entire application to check a one-line change in a small class is very time-consuming. So when writing a new subsystem we usually split it into smaller parts (classes) and test each of them individually. Testing a single class in isolation helps to catch all the corner-cases in the class public interface, e.g. "what happens if we pass 0 here instead of a valid pointer?" or "what if the index we just gave to this method is invalid?"

Changing/refactoring existing code
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Wiki:
    Unit testing allows the programmer to refactor code or upgrade system libraries at a later date, and make sure the module still works correctly (e.g., in regression testing). The procedure is to write test cases for all functions and methods so that whenever a change causes a fault, it can be quickly identified. Unit tests detect changes which may break a design contract [1]_.

Comment:
    Imagine someone decides to refactor the code you wrote a year ago. How would he know whether his changes didn't break anything in the internal class structure? Even if he/she asks you, how would you know if the changes to a year-old class, whose details are already forgotten, are valid?

Automated regression testing
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Most of our unit tests are run nightly on the CI. You can see the results and coverage reports at https://build.kde.org/job/Extragear/job/krita/.

However, some of the unit tests are not stable enough to be run automatically and therefore are disabled. (They do straightforward
QImage comparisons, so the test results can depend no only on version of the libraries installed,
but also on build options and even type of CPU the tests are run on.) While the overall coverage is decent, this issue limits the ability of the unit test suite to catch regressions in several parts of the codebase. (More information on that in the respective Phabricator task: https://phabricator.kde.org/T11904.)

How to build and run tests?
---------------------------

Building the tests
~~~~~~~~~~~~~~~~~~

To enable unit tests, build Krita with an additional cmake flag: ``-DBUILD_TESTING=ON``.

.. code:: bash

  # example build command
  you@yourcomputer:~/kritadev/build>cmake ../krita \
    -DCMAKE_INSTALL_PREFIX=$HOME/kritadev/install \
    -DCMAKE_BUILD_TYPE=Debug \
    -DKRITA_DEVS=ON \
    -DBUILD_TESTING=ON


.. seealso::
  * If you need help with building from source, see :ref:`building_krita`
  * For more information about cmake options, please refer to :ref:`cmake_settings_for_developers`

Once built, the tests are run from the **build** directory. There you can either run the whole suite at once or you can run a single test (or even a single test with a single data row for data-driven tests).

Run all the tests
~~~~~~~~~~~~~~~~~

.. code:: bash

  # change to the build directory
  you@yourcomputer:~/> cd kritadev/build
  # run the whole suite
  you@yourcomputer:~/kritadev/build> make test


Run a single test
~~~~~~~~~~~~~~~~~

Every test class is built into a separate executable file. This executable file resides in the build directory tree. The relative path is the same as the path in source directory.

To run all tests in a single test class, run the executable:


.. code:: bash

  # running all tests in a test class
  you@yourcomputer:~/kritadev/build>./libs/ui/tests/KisSpinBoxSplineUnitConverterTest

You can also run a single test method from the class or invoke the test method with a single test data row, if you have a data-driven test. Add the test method name (and optionally the test data row name) as an argument to the test class executable:

.. code:: bash

  # the syntax for running single tests:
  # you@yourcomputer:~/kritadev/build>./test-class-executable "test method name":"data row name"

  # run a single method in a test class
  you@yourcomputer:~/kritadev/build>./libs/ui/tests/KisSpinBoxSplineUnitConverterTest testCurveCalculationTwoWay

  # run a single method in a test class with the selected test data row
  you@yourcomputer:~/kritadev/build>./libs/ui/tests/KisSpinBoxSplineUnitConverterTest testCurveCalculationTwoWay:"0.5 in (0, 10) = 5"

Environment variables for running tests
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


Prior to running the tests, you can set several environment variables to change the behavior of the tests.

* Suppress safe assert dialogs:

  .. code:: bash

    you@yourcomputer:~/kritadev/build> export KRITA_NO_ASSERT_MSG=1

* Set source directory for QImage-based test data

  .. code:: bash

    you@yourcomputer:~/kritadev/build> export KRITA_UNITTESTS_DATA_DIR=<directory>


* Create reference images for QImage-based tests

  .. code:: bash

    you@yourcomputer:~/kritadev/build> export KRITA_WRITE_UNITTESTS=1



When to write a unit test?
--------------------------

Ideally a unit test should be written for any new class that implements some logic and provides any kind of public interface. It is especially true if this public interface is going to be used more that one client-class.

What should unit test include?
------------------------------

* corner cases. E.g. what happens if we request merging of two layers, one of which has Inherit Alpha option enabled? What properties and composition mode the final layer should have? Answers to these questions should be given and tested in the unit test.

* non-obvious design decisions. E.g. if a paint device has a non-transparent default pixel, then its ```exactBounds()``` returns the rect, not smaller that the size of the image, even though technically the device might be empty.

How to write a unittest?
------------------------

Suppose you want to write a unittest for kritaimage library. You need to perform just a few steps:


#. Add files for the test class into ``./image/tests/`` directory:

    ``kis_some_class_test.h``

    .. code:: cpp

        #ifndef __KIS_SOME_CLASS_TEST_H
        #define __KIS_SOME_CLASS_TEST_H

        #include <QtTest/QtTest>

        class KisSomeClassTest : public QObject
        {
            Q_OBJECT
        private Q_SLOTS:
            void test();
        };

        #endif /* __KIS_SOME_CLASS_TEST_H */</syntaxhighlight>

    ``kis_some_class_test.cpp``

    .. code:: cpp

        #include "kis_some_class_test.h"

        #include <QTest>

        void KisSomeClassTest::test()
        {
        }

        QTEST_MAIN(KisSomeClassTest, GUI)</syntaxhighlight>

#. Modify ./image/tests/CMakeLists.txt to include your new test class:

    .. code:: cmake

      # ...
      ########### next target ###############
      set(kis_some_class_test_SRCS kis_some_class_test.cpp )
      ecm_add_tests(${kis_some_class_test_SRCS}
      NAME_PREFIX "libs-somelib-"
      LINK_LIBRARIES kritaimage Qt5::Test)
      # ...

#. Write your test. You can use any macro commands provided by Qt (QVERIFY, QCOMPARE or QBENCHMARK).

    .. code:: cpp

        void KisSomeClassTest::test()
        {
            QString cat("cat");
            QString dog("dog");

            QVERIFY(cat != dog);
            QCOMPARE(cat, "cat");
        }

#. Run your test by running an executable in ./image/test/ folder

Krita-specific testing utils
----------------------------

Fetching reference images
~~~~~~~~~~~~~~~~~~~~~~~~~

All the testing files/images are usually stored in the test's data folder  (e.g. ./krita/image/tests/data/). But there are some files which are used throughout all the unit tests. These files are stored in the global folder ./krita/sdk/tests/data/. If you want to access any file, just use ``TestUtil::fetchDataFileLazy``. It first searches the file in the local test's folder and if nothing is found checks the global folder.

Example:

.. code:: cpp

    QImage refImage(TestUtil::fetchDataFileLazy("lena.png"));
    QVERIFY(!refImage.isNull());

Compare test result against a reference QImage
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

There are two helper functions to compare a given QImage against an image saved in the data folder.

.. code:: cpp

    bool TestUtil::checkQImage(const QImage &image, const QString &testName,
                               const QString &prefix, const QString &name,
                               int fuzzy = 0, int fuzzyAlpha = -1, int maxNumFailingPixels = 0);
    bool TestUtil::checkQImageExternal(const QImage &image, const QString &testName,
                                       const QString &prefix, const QString &name,
                                       int fuzzy = 0, int fuzzyAlpha = -1, int maxNumFailingPixels = 0);

The functions search for a PNG file with path

.. code::

    ./tests/data/<testName>/<prefix>/<prefix>_<name>.png
    # or without a subfolder
    ./tests/data/<testName>/<prefix>_<name>.png

The supplied QImage is compared against the saved PNG, and the result is returned to the caller. If the images do not coincide, two images are dumped into the current directory: one with actual result and another with what is expected.

The second version of the function is different. It searches the image in "an external repository". The point is that PNG images occupy quite a lot of space and bloat the repository size. So we decided to put all the images that are big enough (>10KiB) into an external SVN repository. To configure an external test files repository on your computer, please do the following:


#. Checkout the data repository:

    .. code:: bash

        # create the tests data folder and enter it
        mkdir ~/testsdata
        cd ~/testsdata

        # checkout the extra repository
        svn checkout svn+ssh://svn@svn.kde.org/home/kde/trunk/tests/kritatests

#. Add environment variable pointing to your repository to your ~/.bashrc

    ``export KRITA_UNITTESTS_DATA_DIR= ~/testsdata/kritatests/unittests``

#. Use ``TestUtil::checkQImageExternal`` in your unittest and it will fetch data from the external source. If an external repository is not found then the test is considered "passed".

QImageBasedTest for complex actions
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Sometimes you need to test some complex actions like cropping or transforming the whole image. The main problem of such action is that it should work correctly with any kind of layer or mask, e.g. KisCloneLayer, KisGroupLayer or even KisSelectionMask. To facilitate such complex testing conditions, Krita provides a special class ``QImageBasedTest``. It helps you to create a really complex image and check the contents of its layers. You can find the best example of its usage in ``KisProcessingsTest``. Basically, to use this class, one should derive its own testing class from it, and call a set of callbacks, which do all the work. Let's consider the code from KisProcessingsTest:

.. code:: cpp

    // override QImageBasedTest class
    class BaseProcessingTest : public TestUtil::QImageBasedTest
    {
    public:
        BaseProcessingTest()
            : QImageBasedTest("processings")
        {
        }

        // The method is called by test cases. If the test fails, a set of PNG images
        // is saved into working directory
        void test(const QString &testname, KisProcessingVisitorSP visitor) {

            // create an image and regenerate its projection
            KisSurrogateUndoStore *undoStore = new KisSurrogateUndoStore();
            KisImageSP image = createImage(undoStore);
            image->initialRefreshGraph();

            // check if the image is correct before testing anything
            QVERIFY(checkLayersInitial(image));

            // do the action we are trying to test
            KisProcessingApplicator applicator(image, image->root(),
                                            KisProcessingApplicator::RECURSIVE);

            applicator.applyVisitor(visitor);
            applicator.end();
            image->waitForDone();

            // check the result, and dump images if something went wrong
            QVERIFY(checkLayers(image, testname));

            // Check if undo(!) works correctly
            undoStore->undo();
            image->waitForDone();

            if (!checkLayersInitial(image)) {
                qWarning() << "NOTE: undo is not completely identical "
                        << "to the original image. Falling back to "
                        <<"projection comparison";
                QVERIFY(checkLayersInitialRootOnly(image));
            }
        }
    };

MaskParent object
~~~~~~~~~~~~~~~~~

``TestUtil::MaskParent`` is a simple class that, in its constructor, creates an RGB8 image with a single paint layer, which you can use for further testing. The image and the layer can be accessed as simple member variables.

Example:

.. code:: cpp

    void KisMaskTest::testCreation()
    {
        // create an image and a simple layer
        TestUtil::MaskParent p;

        // create a mask and attach its selection to the created layer
        TestMaskSP mask = new TestMask;
        mask->initSelection(p.layer);

        QCOMPARE(mask->extent(), QRect(0,0,512,512));
        QCOMPARE(mask->exactBounds(), QRect(0,0,512,512));
    }


.. [1] https://en.wikipedia.org/wiki/Unit_testing
