.. meta::
    :description:
        Guide to participate in GSoC for Krita.

.. metadata-placeholder

    :authors: - Kuntal Majumder <hellozee@disroot.org>
    :license: GNU free documentation license 1.3 or later.
    
.. _participating_in_gsoc:

=================================
Google Summer of Code
=================================
Every summer Google puts on a program that helps university developers get involved with the open source community. This is known as Google Summer of Code (GSoC). 
Krita has always participated in GSoC through the KDE community. For more information you can take a look at the `gsoc website <https://summerofcode.withgoogle.com/>`_.

+++++++++++++++++++++++++++++++++
How to participate as a student?
+++++++++++++++++++++++++++++++++
Submitting a resumé or CV isn’t how this program works. For you to be picked, you need to be involved with the Krita 
community early and show you have some capacity to do programming. The summer program involves focusing on one project. 
You will have a mentor assigned to help learn the ropes. `Here <https://community.kde.org/GSoC/2021/Ideas#Krita>`_ are some potential project ideas for 2021, for other years you can find them on this `page <https://community.kde.org/GSoC>`_ (navigate to the specific year and find Krita). If there is another project 
that you want to see, you can also propose your own. Use these `guidelines <https://community.kde.org/GSoC#Student_proposal_guidelines>`_ to help formulate ideas.
We've mentored around half a dozen students every year since GSoC started. Many students enjoyed their work and continue to be involved; perhaps your mentor will be a past GSoC student.

++++++++++++++++++++++++++++++++++++++++++++++
What is expected from you before participating
++++++++++++++++++++++++++++++++++++++++++++++
* A basic understanding of `git`, which would include pulling and pushing code, create branches and rebase commits.
* A fair understanding of `c++` and its ecosystem. (Ecosystem here means tools like `cmake`, `make`, `gcc`, `gdb` and `valgrind`).
* Knowing how to work with Qt is not mandatory but would be helpful.
* You should be able to navigate the codebase, using an IDE like Qt Creator is preferred.

+++++++++++++++++++++++++++++++++++++
Before starting to work on a Proposal
+++++++++++++++++++++++++++++++++++++
* Build Krita from source.
* Try fixing a bug or implement a wish. If you are unable to find something to work on, don't hesitate to ask us. Someone would surely help you.
* If you are picking something from the list ask whether someone has already picked that idea or not.
* If you are proposing an idea of your own, please do discuss about that with us. We need to see whether the project is viable or not before starting out.
* Whatever you are onto, please communicate before proceeding.

+++++++++++++++++++++++++++++++++
How to create a proper proposal?
+++++++++++++++++++++++++++++++++
* Divide your proposal into separate sections as directed by the KDE `student proposal guidelines <https://community.kde.org/GSoC#Student_proposal_guidelines>`_.
* The most important parts are the Goals, Implementation and the Timeline, pay attention to them.
* Goals are the requirements of the project, the features introduced and the bug fixed from the perspective of an user.
* Implementation, as the name says should tell us how are you going to implement the requirements. Put the classes or methods you are going to use, mockups of the UIs here.
* TimeLine would indicate how much time would you devote behind each feature you would be working on. Beware this would later become the yardstick for evaluations.

Tips:

* Start as early as possible, that way you could get most feedback.
* Don't have more than you can chew, it is far better to put what you think is achievable inside 3 months.
* Allocate a bit buffer time, things could go wrong, better to be prepared.
* Don't forget to write documentation, the features should be well documented in the manual.
* Wherever you see, you could add tests, please do add that, most of the times it is better to write the tests first.

++++++++++++++++++++++++++++++++++++
How do I ensure that I get selected?
++++++++++++++++++++++++++++++++++++

* Communicate, GSoC is half communication.
* Show that you can code independently by fixing bugs or implementing wishes.
* Know whom to ask for help and when to ask, neither everyone knows everything nor everyone is available all the time.
* Even if you do all of them we can't exactly ensure that you will be selected, it all depends on how many slots Google allocates for KDE.

+++++++++++++++++++++++++++++++++++++++++++++
Done with the proposal, what should I do now?
+++++++++++++++++++++++++++++++++++++++++++++
* Try fixing some more bugs or implement a wishlist item.
* If anything is missing from the manual, do make a Merge Request to it.
* Help other students with their proposal, GSoC is not a competetion.

++++++++++++++++++++++++
I am selected what now?
++++++++++++++++++++++++
* Create a Phabricator Task with the requirements and implementation details of your project.
* If you don't have a developer account already, request for one.
* Add your blog to KDE Planet.
* Create a new branch which would refer to the Phabricator Task with a name like, TXXX-<task_name>.
* Create a status report page at `https://community.kde.org/GSoC/<year>/StatusReports` where you would be listing all the commits and blog posts. This would be sent to Google as the work product.
* Start hacking.

+++++++++++++++++++++++
Where to ask for help?
+++++++++++++++++++++++
* The best place would be our IRC channel which would be #krita on Libera.Chat.
* The second best place would be our mailing `list <https://mail.kde.org/mailman/listinfo/kimageshop>`_.
* Keep in mind that the team is spread over 5 continents and most of the time, weekends are awkwardly quiet.
* Any kind of private communication is discouraged, whatever you need to ask, ask in the public channels, unless required.
