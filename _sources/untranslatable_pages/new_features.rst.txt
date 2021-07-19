.. meta::
    :description:
        Guide to the development of new features.

.. metadata-placeholder

    :authors: - Halla Rempt <boud@valdyas.org>
              - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
    :license: GNU free documentation license 1.3 or later.

.. _developing_features:

===================
Developing Features
===================

There's several stages to making a feature request become reality. The first section of this page goes over a set of common issues with making feature requests and gives hints on how to make a simple feature request into a proper proposal. The rest documents how a feature goes from a proposal to an actual reality.

-------------------------
Step 1: Making a proposal
-------------------------

*“vOpenBlackCanvasMischiefPhotoPaintStormToolKaikai has a frobdinger tool! Krita will never amount to a row of beans unless Krita gets a frobdinger tool, too!”*

The cool thing about open source is that you can add features yourself, and even if you cannot code, you talk directly with the developers about the features you need in your workflow. Try that with closed-source proprietary software! But, often, the communication goes awry, leaving both users with bright ideas and developers with itchy coding fingers unsatisfied.

This post is all about how to work, first together with other artists, then with developers to create good feature requests, feature requests that are good enough that they can end up being implemented.

For us as developers it’s sometimes really difficult to read feature requests, and we have a really big to-do list (600+ items at the time of writing, excluding our own dreams and desires). So, having a well written feature proposal is very helpful for us and will lodge the idea better into our conscious. Conversely, a demand for a frobdinger tool because another application has it, so Krita must have it, too, is likely not to get far.

Writing proposals is a bit of an art form in itself, and pretty difficult to do right! Asking for a copy of a feature in another application is almost always wrong because it doesn’t tell us the most important thing:

What we primarily need like to know is HOW you intend to use the feature. This is the most important part. All Krita features are carefully considered in terms of the workflow they affect, and we will not start working on any feature unless we know why it is useful and how it is exactly used. Even better, once we know how it’s used, we as developers can start thinking about what else we can do to make the workflow even more fluid!

Good examples of this approach can be found in the pop-up palette using tags, the layer docker redesign of 3.0, the onion skin docker, the time-line dockers and the assistants.

Feature requests should start on the forum, so other artists can chime in. What we want is that a consensus about workflow, about use-cases emerges, something our UX people can then try to grok and create a design for. Once the design emerges, we’ll try an implementation, and that needs testing.

For your forum post about the feature you have in mind, check this list:

* It is worth investigating first if the feature in question has similar functionality in Krita that might need to be extended to solve the problem. We in fact kind of expect that you have used Krita for a while before making feature requests. Check the manual first!
* If your English is not very good or you have difficulty finding the right words, make pictures. If you need a drawing program, I heard Krita is pretty good.
* In fact, mock-ups are super useful! And why wouldn’t you make them? Krita is a drawing program made for artists, and a lot of us developers are artists ourselves. Furthermore, this gets past that nasty problem called ‘communication problems’.
* Focus on the workflow. You need to prepare a certain illustration, comic, matte painting, you would be (much) more productive if you could just do --- whatever. Tell us about your problem and be open to suggestions about alternatives. A feature request should be an exploration of possibilities, not a final demand!
* The longer your request, the more formatting is appreciated. Some of us are pretty good at reading long incomprehensible texts, but not all of us. Keep to the ABC of clarity, brevity, accuracy. If you format and organize your request we’ll read it much faster and will be able to spent more time on giving feedback on the exact content. This also helps other users to understand you and give detailed feedback! The final proposal can even be a multi-page PDF.
* We prefer it if you read and reply to other people’s requests than to start from scratch. For animation we’ve had the request for importing frames, instancing frames, adding audio support, from tons of different people, sometimes even in the same thread. We’d rather you reply to someone else’s post (you can even reply to old posts) than to list it amongst other newer requests, as it makes it very difficult to tell those other requests apart, and it turns us into bookkeepers when we could have been programming.

Keep in mind that the Krita development team is insanely overloaded. We’re not a big company, we’re a small group of mostly volunteers who are spending way too much of our spare time on Krita already. You want time from us: it’s your job to make life as easy as possible for us!

So we come to: **Things That Will Not Help.**

There’s certain things that people do to make their feature request sound important but are, in fact, really unhelpful and even somewhat rude:

“Application X has this, so Krita must have it, too”.
    See above. Extra malus points for using the words “industry standard”, double so if it refers to an Adobe file format.

    We honestly don’t care if application X has feature Y, especially as long as you do not specify how it’s used.

    Now, instead of thinking ‘what can we do to make the best solution for this problem’, it gets replaced with ‘oh god, now I have to find a copy of application X, and then test it for a whole night to figure out every single feature… I have no time for this’.

    We do realize that for many people it’s hard to think in terms of workflow instead of “I used to use this in ImagePainterDoublePlusPro with the humdinger tool, so I need a humdinger tool in krita” --- but it’s your responsibility when you are thinking about a feature request to go beyond that level and make a good case: we cannot play guessing games!

“Professionals in the industry use this”.
    Which professionals? What industry? We cater to digital illustrators, matte painters, comic book artists, texture artists, animators… These guys don’t share an industry. This one is peculiar because it is often applied to features that professionals never actually use. There might be hundreds of tutorials for a certain feature, and it still isn’t actually used in people’s daily work.

“People need this.”
    For the exact same reason as above. Why do they need it, and who are these ‘people’? And what is it, exactly, what they need?

“Krita will never be taken seriously if it doesn’t have a glingangiation filter.”
    Weeell, Krita is quite a serious thing, used by hundreds of thousands of people, so whenever this sentence shows up in a feature request, we feel it might be a bit of emotional blackmail: it tries to to get us upset enough to work on it. Think about how that must feel.

“This should be easy to implement.”
    Well, the code is open and we have excellent build guides, why doesn’t the feature request come with a patch then? The issue with this is very likely it is not actually all that easy. Telling us how to implement a feature based on a guess about Krita’s architecture, instead of telling us the problem the feature is meant to solve makes life really hard!

    A good example of this is the idea that because Krita has an OpenGL accelerated canvas, it is easy to have the filters be done on the GPU. It isn’t: The GPU accelerated canvas is currently pretty one-way, and filters would be a two-way process. Getting that two way process right is very difficult and also the difference between GPU filters being faster than regular filters or them being unusable. And that problem is only the tip of the iceberg.

Some other things to keep in mind:

* It is actually possible to get your needed features into Krita outside of the Kickstarter sprints by funding it directly via the Krita foundation, you can mail the official email linked on krita.org for that.
* It’s also actually possible to start hacking on Krita and make patches. You don’t need permission or anything!
* Sometimes developers have already had the feature in question on their radar for a very long time. Their thinking might already be quite advanced on the topic and then they might say things like ‘we first need to get this done’, or an incomprehensible technical paragraph. This is a developer being in deep thought while they write. You can just ask for clarification if the feedback contains too much technobabble…
* Did we mention we’re overloaded already? It can easily be a year or two, three before we can get down to a feature. But that’s sort of fine, because the process from idea to design should take months to a year as well!

To summarize: a good feature request:

* starts with the need to streamline a certain workflow, not with the need for a copy of a feature in another application
* has been discussed on the forums with other artists
* is illustrated with mock-ups and example
* gets discussed with UX people
* and is finally prepared as a proposal
* and then it’s time to find time to implement it!
* and then you need to test the result.

-----------------------------
Step 2: Triaging the proposal
-----------------------------

This is strictly a developer task. What is done is that we identify how much work a proposal would need to be implemented. Since 2016 we use these groups to categorize wishbugs so we can plan them into a current release or select them for a fundraiser.

To fulfill this step, we need to have a full list which consolidated the ideas and requirements. A good feature request from step one will have these lined out.


WISHGROUP: Pie-in-the-sky
    not going to happen, but it would be really cool.
WISHGROUP: Big Projects
    needs more definition, maybe two, three months of work.
WISHGROUP: Stretchgoal
    up to a couple of weeks or a month of work.
WISHGROUP: Larger Usability Fixes
    maybe a week or two weeks of work.
WISHGROUP: Small Usability Fixes
    half a day or a day of work.
WISHGROUP: Out of scope
    too far from our current core goals to implement.
WISHGROUP: Needs proposal and design
    needs discussion among artists to define scope first. A good proposal doesn't need this.

------------------------------
Step 3: Discussing in irc/phab
------------------------------

Again, strictly a developer task. While nothing stops an adventurous programmer from just going in and implementing something, it helps to go to the #krita irc on Libera.Chat and tell us you're working on it. Not because you need permission(Krita is open source after all), but we do want to be able to help you in your endeavours. Such help can include technical help, like where things are in the code, but also interface design help.

Some features, such as new frame types for animation, or multithreading on some part or the other also needs careful discussion so we know what is going to need changes.

Eventually, a phabricator task will be made to track the issue as well as including mockups. Branch progress is also discussed during the weekly meeting in the irc.

--------------------------------
Step 4: Work in a feature branch
--------------------------------

New feature branches are called 'name/number-shortdescription'. Examples: "rempt/T379-resource-management", "kazakov/hdr-support", "wolthera/edgedetectionfilter", "jounip/T8764-clone-frames".

Originally this was lastname only, but some users have an endlessly long last name while others prefer using their kde identity name. The main purpose is to identify who is responsible for the work in the branch.

Work in a feature branch continues till all major elements are done. A :ref:`review request <patch_review_guide>` is done over the whole branch. Sometimes, for UI purposes, people check out the branch to test it.

When the review is accepted, the branch is merged into master for further testing. When such a branch is merged, a mail needs to be sent to kimageshop@kde.org to notify everyone about this, you can do this automatically by adding 'CCMAIL:kimageshop@kde.org' to your merge commit.

As Krita's nightlies are based on master that means a binary will be compiled for the master branch with the new feature in at most 24 hours.

---------------------------------------
Step 5: Documentation and demonstration
---------------------------------------

When a feature hits the master branch, an entry will be written for the draft branch of this very manual. In particular a reference manual entry will be written to ensure some documentation, some bigger features that interact with one another might also receive a tutorial.

The people who programmed or designed the feature are encouraged to help with this documentation process(as they know it best), but it is not mandatory. What is appreciated is that the issue or task is assigned to the manual team.

Similarly, demonstration videos or images are welcome, as they will be used for the release notes. The release notes for the next big version are `available here <https://krita.org/en/krita-4-2-release-notes/>`_, come help us with making the page look good!

Finally, upon release a stable branch is created for the master branch (often named Krita/versionnumber), and a release is made with the new feature.
