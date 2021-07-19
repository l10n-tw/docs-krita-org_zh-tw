.. meta::
    :description:
        Quality Assurance.

.. metadata-placeholder

    :authors: - Anna Medonosová <anna.medonosova@gmail.com>
    :license: GNU free documentation license 1.3 or later.

.. _quality_assurance:

=================================
Introduction to Quality Assurance
=================================

We are users and developers systematically working on increasing quality of Krita and the process of it’s development. We help sustain the self-auditing culture of Krita’s community.

We

* Methodically assess functionality, usability and security.
* Hunt for bugs and cater for bugs already captured.
* Aid in quality management. Create tools to make developer’s life easier.

How To Help?
------------

The quality assurance field is really broad and diverse and we are always looking for people of all skills and talents. Below you will find a list of opportunities to help, so you can dive right into it. Also, don’t forget to visit us on the IRC, we will be happy to meet you.

Bug Triaging
~~~~~~~~~~~~

There is a great amount of incoming bug reports, more than the core team can handle. We are looking for volunteers who would go through the bug tracker and handle the reported bugs. This includes:

* Determining if a bug is really a bug or a new feature request
* Confirming bugs by reproducing
* Guiding reporters to provide all the information needed to fix the bug
* (Optional) Providing logs, backtraces, core dumps

Get Started
^^^^^^^^^^^

* :ref:`bugs_reporting` provides general information about bug reports and guidance for their creation
* Krita-specific guide to :ref:`triaging_bugs`


.. seealso::
  * Guide to :ref:`developing_features`
  * Hints for user support also apply here: :ref:`intro_user_support`
  * Docs for gathering logs, backtraces, etc.

    * https://docs.krita.org/en/KritaFAQ.html?highlight=mingw#how-can-i-produce-a-backtrace-on-windows
    * https://docs.krita.org/en/reference_manual/dockers/log_viewer.html


Beta Testing
~~~~~~~~~~~~

To validate an upcoming stable version will work as expected, there is the beta version. You can help by dowloading the beta, trying it out and sharing your feedback. Every beta comes with a survey, which will ask for some basic information about your setup (all anonymized, of course) and guide you through testing latest features and bug fixes. You can find link to the survey on Krita's welcome page.

To know when there is a new beta, watch out for the news on the welcome page, or in the News section on Krita website.

For more information about the process refer to the :ref:`testing_strategy`.

Test Engineering
~~~~~~~~~~~~~~~~

The test suite is the safety net enabling the community to fearlessly move forward. We have a comprehensive testing strategy to help us find bugs early in the process and deliver the best user experience possible. But without people, the strategy is just a bunch of words. There are many ways you can help, for both technical and less technical people.

* If you like to experiment and try new things, consider exploratory testing. No coding skill required.
* Hone your analytical skills by designing end-to-end tests.
* Try your hand at unit testing. Design and implement the low level tests for both backend and UI code.

.. * Use your coding experience to implement the automatic test suite.


Check out :ref:`testing_strategy` for more information.


Enhancement Projects
~~~~~~~~~~~~~~~~~~~~

There is plenty of projects from small to big, some include writing and organizing, some require coding. We currently register following projects: https://phabricator.kde.org/T11218. Does something catch your eye?


Do you have something else in mind?
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

This list is not definite. We are always open to new ideas and approaches. Please, join us on the IRC (:ref:`the_krita_community`) to discuss the possibilities.
