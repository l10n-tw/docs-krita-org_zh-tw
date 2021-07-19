.. meta::
    :description:
        Guide to creating and reviewing Krita patches in gitlab.

.. metadata-placeholder

    :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
    :license: GNU free documentation license 1.3 or later.

.. _patch_review_guide:

============================
Advanced Merge Request Guide
============================

Since April 2019, we're using Gitlab to review merge requests and patches to the code. Check :ref:`forking_gitlab` on how to start with making a merge request.

When to make a merge request
----------------------------

There's three times you need to make merge requests.

#. When you do not have commit access.
#. When the change you are making is huge, like with feature development, large refactors, complex bugfixes. For these we do not fork, but instead make a branch in the main repository in the following format: ``name/number-shortdescription``. Check :ref:`developing_features` for more information.
#. When you are not sure about whether what you did is correct. It is common within the Krita community that even developers with commit access will have a weaning period in which they still make merge requests for each change as they're getting comfortable with the codebase. It is not mandatory to do so at this point, but requests are the best way for us to help one another with writing good code.

.. commented out till done

    Updating patches
    ----------------
    

.. This is commented out till it's done.

    Merging in patches
    ------------------

    When to do a squash, when to rebase, when to use the merge gui, default config for Krita repository, etc.
    
    How to update your fork(if using) from master after being done with the merge.


Checklist for review
--------------------

Here's a quick checklist that is gone over when reviewing patches. While some requests require specialist knowledge, these items are so universal that anyone who knows how to check them can do so and comment on them. Feel free to do this yourself on `open requests <https://invent.kde.org/graphics/krita.git/merge_requests?scope=all&utf8=%E2%9C%93&state=opened>`_, we welcome it!

Also check out the `manual for reviewing merge requests in Gitlab <https://invent.kde.org/help/user/project/merge_requests/index.md>`_.

Does the code build
    Most important check. Apply the patch locally and build it. If it doesn't build, the patch will not be accepted at all.
Does it not crash?
    Basically, build the patch, run Krita, and check if the functions associated doesn't crash. If it does, make a backtrace and post it in the review.
Does it leak memory?
    .. HOW TO CHECK
Does the patch break tests?
    .. HOW TO CHECK
CPP features used.
    Is the usage of CPP in accordance with HACKING and the :ref:`modern_cpp_in_krita` guidelines? So for example, is auto not used outside of the single case we accept it?
Is the code in conformance with KDE/Krita style?
    Check the HACKING file for directions.
Are the commit messages sensible?
    There's several guides for this, but in general, try to make sure that the commit messages actually explain what you did.

    * https://github.com/RomuloOliveira/commit-messages-guide
Does the patch make sense.
    This is in the category of specialist knowledge, but you can apply some common sense here. If a patch for a filter also adjusts the resource management, you can ask yourself why this would be necessary. Furthermore, does the patch actually fix the thing it says it is fixing? These are not easy checks to make, but important things to consider when looking at the patch.

Requests that need changes to them need to be labeled with ``needs-changes``. Requests that are accepted should be labeled ``accepted``. This is to ensure we can figure out which requests are in need of review. Requests that need to be reviewed need to lack both labels.
