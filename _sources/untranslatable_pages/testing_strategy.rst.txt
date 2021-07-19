.. meta::
    :description:
        Testing strategy.

.. metadata-placeholder

    :authors: - Anna Medonosová <anna.medonosova@gmail.com>
    :license: GNU free documentation license 1.3 or later.

.. _testing_strategy:

================
Testing Strategy
================

Overview
--------

We’re always working on the next version of Krita. We fix bugs and implement new features. Every change to any software comes with a risk of introducing other issues. That's where testing comes in. The tester’s job is to uncover defects as early as possible in the development process: a bug caught early enough means easier fixing, better user experience and less load on user support.

The Functional Test Suite
-------------------------

When testing functionality we employ multiple strategies that translate into several layers of the test suite:

  * Unit tests are our safeguard against breakage during development.
  * End to end tests check that the basic high level workflows function properly.
  * Exploratory testing experiments. Unexpected combinations, uncharted workflows.

..   * Acceptance tests help developing new features and make sure those features still work after changes.

.. We automate majority of the testing. Human time is precious. Use it where it is most beneficial. Computers are bad at intuition and drawing conclusions, but they are good at brute force checking.

Test Suite Layers
~~~~~~~~~~~~~~~~~

Unit Tests
^^^^^^^^^^

Unit tests are the base of our test suite. They are designed to ensure that every individual unit of source code (both backend and UI components) functions as expected. They are fully automated and fast to execute. They are run by developers during development. Also part of nightly testing suite.

In-depth unit testing doc: https://docs.krita.org/en/untranslatable_pages/unit_tests_in_krita.html

.. Acceptance and regression tests
   ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
.. Acceptance tests ensure that features work correctly for the user.

.. When new feature is developed, it’s user requirements are formalized into executable scenarios. These scenarios serve two purposes. First is to clearly communicate expected outputs of the feature under construction and give the developers a way to check compliance during their work. Second, these scenarios can be later used for regression testing - making sure that what worked before was not broken by another change.

.. Acceptance tests usually involve the UI of the application, however it is not a requirement. Design the tests for any layer that makes sense and ensures correct function for the user.

.. More information on https://docs.krita.org/en/untranslatable_pages/new_features.html and acceptance test writing [TODO].

End-to-end UI Tests
^^^^^^^^^^^^^^^^^^^

Formalized high level tests performed on the running application; carried out either by a computer or by a human.

End to end tests cover both the GUI and the command line interface.


Exploratory Testing
^^^^^^^^^^^^^^^^^^^

While the other layers of the test suite are composed of carefully curated scripted tests, balancing between coverage and efficiency, exploratory testing approaches testing quite differently. It’s purpose is to allow humans to apply their unique tools: learning, creativity, intuition. There are no suites, scenarios, defined steps. Just you and Krita. Explore and experiment. Try basic workflows. Try unexpected combinations. Try to break things. Then report bugs.

.. Get started docs [TODO].

When Do We Test
~~~~~~~~~~~~~~~

Continuous testing as part of continuous integration
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
Automatic test suite is run nightly against the last nightly build.


Beta Testing
^^^^^^^^^^^^

Beta testing is a type of user acceptance testing, where a subgroup of target users validates the upcoming release.

As a part of the release process, we collect features and bugs (mainly high impact bugs and those that benefit from testing in multiple different conditions) to test in a Phabricator task connected to the release. From that collection we create a survey on survey.kde.org and publicly release the beta version. Link to the survey is available on the welcome page of the beta release.


.. TODO: testing in the release cycle

.. TODO: UI tests during alpha and beta stages of a major release
..  * Draft for test scenarios: https://phabricator.kde.org/T8106
