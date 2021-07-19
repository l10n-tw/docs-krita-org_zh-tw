bg.. meta::
    :description:
        Guide to using features from C++11, C++14 and beyond in Krita's codebase.

.. metadata-placeholder

    :authors: - Michael Abrahams <miabraha@gmail.com>
              - Halla Rempt <boud@valdyas.org>
              - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
    :license: GNU free documentation license 1.3 or later.

.. _modern_cpp_in_krita:

==================================================
Modern C++ usage guidelines for the Krita codebase
==================================================

.. contents::

General links about using Modern C++ in Qt
------------------------------------------

There have been a few links discussing mixing C++11 with Qt, and starting with Qt 5.6 C++11 support will be default. *Note:* there is a lot of hype about C++11, and although many of its new features are quite welcome, often the trade-offs from these changes get neglected. 

* `ICS.com <https://www.ics.com/blog/qt-and-c11>`_
* `qt.io <https://blog.qt.io/blog/2011/05/26/cpp0x-in-qt/>`_
* `woboq.com: c++11 in Qt5 <https://woboq.com/blog/cpp11-in-qt5.html>`_.
* `woboq.com: c++14 in Qt5 <https://woboq.com/blog/cpp14-in-qt.html>`_.
* `FOSDEM 2013 presentation slides <https://archive.fosdem.org/2013/schedule/event/introcplusplus11/attachments/slides/203/export/events/attachments/introcplusplus11/slides/203/fosdem2013_cpp11.pdf>`_.


Here are some more general purpose guides to C++11 features.

* `C++11 FAQ Bjarne Stroustrup's <http://www.stroustrup.com/C++11FAQ.html>`_ - the grand daddy.
* `Older, more thorough introductions to several topics <https://www.informit.com/authors/bio/e19aded6-574c-4c46-8511-101f9f0ed8f8>`_.


Qt's API design principles do not always overlap with the C++ Standards Committee design principles. (Range-based for demonstrates the design clash pretty clearly.)

* https://wiki.qt.io/API_Design_Principles

Particular Features
-------------------

Under "drawbacks," every item should list: "Programmers will face another feature they must learn about."

Type Inference (auto)
~~~~~~~~~~~~~~~~~~~~~

Motivation:
    If a function ``f`` has a return type Type, it is redundant to write a local variable ``Type x = f(y).``  Using auto declarations is a simplification in two ways scenarios.  First, it allows the programmer to write code without worrying about doing the manual type deduction, for example:

    .. code:: cpp

        for( KoXmlReader::const_iterator x = iter.begin(),... ) { }

    versus:

    .. code:: cpp

        for (auto x = iter.begin(), ...) { }

    This is particularly useful with nested template types and C++11 lambdas, and other complex types which have an obvious role, but a lengthy type definition. 

    A second important benefit of auto is that it allows the programmer to more easily refactor.  Suppose we have a function ``gimmeSomeStrings()`` which returns a ``QList<QString>``, and we access it somewhere else like this

    .. code:: cpp

        auto someStrings = gimmeSomeStrings();

    If we later decide that we want to store a hash of strings and that ``gimmeSomeStrings`` should return a ``QMap<int, QString>``, we probably won't need to make any changes inside the client snippet if we are doing tasks like iterating.

Drawbacks:
    the use of auto is be obfuscating.  For example, ``auto x = 2`` is not obviously an integer, and ``auto x = {"a", "b", "c"}`` returns ``std::initializer_list``, and sometimes it is not clear what some function returns by the name of the function.

Recommendation:
    Do not use auto, except, maybe, in loops, where there can be no confusion about the type of what is looped. But even there, hesitate.

Range-based for loop
~~~~~~~~~~~~~~~~~~~~

Motivation:
    This is something a long time coming in C++.  It is a standardized replacement for Qt's foreach() construct, which works not only with Qt objects but all iterable C++ types.  

    .. code:: cpp

        for (T x : list ) { ... }

    It will work with standard tooling and static analysis, and can be faster by defaulting to in-place access.  For this reason range-based iterators should always be used for STL containers, if those are ever needed in Krita.

Drawbacks:
    By default, Qt's foreach rewites the code to make a shallow copy and then use const accessors, while c++11 does the opposite, avoiding copying when possible.  When using const accessors, this is faster, but if you try to make changes to the data, this will `slow your loop down instead <https://www.dvratil.cz/2015/06/qt-containers-and-c11-range-based-loops/>`_.  

Recommendation:
	Sometimes, the range-based for is faster.  Sometimes the Qt iterator is faster.  Personally I like the range-based for in principle, since it works better with static analysis, it has a faster best-case speed, and it is always possible to write it in a way that replicates the ``foreach()`` behavior, though the reverse is not true.  

    On the other hand, there is a bad, dangerous  worst case performance hit when a detach/copy is triggered, and this is not easy to catch with standard syntax. In the blog post linked above, the discussion explains that is possible to get around this limitation by defining a macro ``const_()``, which will gives a new syntax to request the compiler use constant iterators: 
    
    .. code:: cpp

        for (T x : _const(list) ) { ... }

    Qt's recommendation on the other hand is to use foreach() for Qt iterators, and range-based for on STL containers, because you always know what you're getting, and you always keep your syntax easy to read.  In my opinion is the most meaningful new feature without any sort of clear answer, and quite interesting to think about.

General Initializer Lists
~~~~~~~~~~~~~~~~~~~~~~~~~

Motivation:
    Initializer lists are intended to work in many different places to simplify the syntax for complicated initialization.  For example, a list of strings could be initialized ``const QStringList x = {"abc", "def", "xyz"  };`` and if you later changed the type to ``QVector<QString>``, or even ``std::list<std::string>``, you wouldn't have to make any change to the right hand side.

    A second place initializer lists are used is in creating standard initial values for class members.  This takes the place of writing a lengthy constructor list like:

    .. code:: cpp

        Type::Type() 
         : MemberString1("a")
         , Subclass1(0)
         , Subclass2(1)
         , ...

    In addition to being more concise, it saves you from repeating yourself, if you have several constructors which all start with the same defaults.

    Mixed uniform initialization is a separate new feature of initializer lists when constructing classes.  It is possible to specify some defaults when you declare member variables, but then override them with delegating constructors. `This MSDN page is a good reference <https://msdn.microsoft.com/en-us/library/dn387583.aspx>`_.

Drawbacks:
    None I can think of. This is super simple, completely obvious to read and write, and shortens code by removing long unnecessary lists of defaults.

Recommendation:
    Yes!

Lambdas, and new-style signals/slots
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Motivation:
	Lambda expressions are a big new addition for C++11. Many programmers claim they start to feel like an essential part of the language very quickly. One of the biggest uses for lambdas is in the standard algorithm library <algorithm>, which is described below.  In Qt5, this, along with std::function and std::bind, allow for One of the most useful C++11 integrations, a new signal/slot syntax which replaces the moc macros SIGNAL() and SLOT() with standard C++.

    Old style:

    .. code:: cpp
        
        connect(sender, SIGNAL (valueChanged(QString,QString)),  receiver, SLOT (updateValue(QString)) );

    New style:

    .. code:: cpp

        connect(sender, &Sender::valueChanged, receiver, &Receiver::updateValue );

    New style signals and slots provide a great benefit from the tooling perspective: now, all types for functions and function arguments can be checked statically, and you don't have to catch typos by monitoring debug messages saying "no such slot." 

    Another possibility is to use lambdas directly inside connect(), instead of defining a class member function which is only used once. The greatest benefit is that the function can be defined right where it is used; it also aids readability to get rid of a list of tiny helper functions from the header.

    * `"Qt5: C++11 lambdas are your friend" <https://artandlogic.com/2013/09/qt-5-and-c11-lambdas-are-your-friend/>`_
    * `C++ language reference <https://en.cppreference.com/w/cpp/language/lambda>`_
    * `Qt.io New Signal/Slot Syntax <https://wiki.qt.io/New_Signal_Slot_Syntax>`_ Also gives detailed pros/cons.


Drawbacks:
    The new-style syntax makes it somewhat harder to use default arguments, which requires the use of lambdas.  It is also perhaps a little less pretty.

    Lambdas in general are have become one of the most clunky pieces of C++11 notation. Since they allow a great deal of options for example, capturing by reference with ``[&]`` and capturing by value with ``[=]``, they are a significant new addition to the C++ learning curve. Using small local functions with uninformative names like ``auto F = [&] ( x ) { whatever }`` is confusing for everyone.

    Although it is possible to use lambdas are tricky inside signals and slots, there are gotchas. Lambdas will not disconnect automatically, although there is a special syntax to make that happen.

Recommendation:
    Lambdas will feel strange to many C++ programmers. At a minimum, any time you use them you should add a comment explaining what you're doing.  (Krita codebase could use more comments anyway.)  New style signals and slots should be used with caution, especially while the 2.9 branch is being maintained. 

    Overall, the Qt wiki gives a good overview, and I agree with its suggestions, which is to permit a small amount of mixing of the different syntax.  Their recommendation is to use new-style signals and slots when possible, which is the vast majority of the time, to fall back on the old macros when one needs to use a default argument, and to use lambdas very rarely, only in cases when one needs to create a signal that is not bound to a particular object.  The latter sort of case is not something that C++ newcomers would want to be touching anyway.

constexpr
~~~~~~~~~

Motivation:
    Performing calculations at compile time can speed things up at runtime.  `KDAB: speed up your Qt 5 programs using C++11 <https://www.kdab.com/wp-content/uploads/stories/slides/DD12/mutz-dd-speed-up-your-qt-5-programs-using-c++11.pdf>`_

Drawbacks:
    Not easy to use these features.

Recommendation:
    This could be useful in specific places, like KoCompositeOpRegistry.  Overall it is not something most programmers will run into.

<algorithm>
~~~~~~~~~~~

Motivation:
    A handwritten loop that looks for occurences of the number 20 and replaces it with 99 is routine, and will take several lines to write, including defining local variables. Instead, something like

    .. code:: cpp

        std::replace (myvector.cbegin(), myvector.cend(), 20, 99);

    is more concise, safer  is even self-documenting, since the name of the function itself explains what it is doing. <u>If you make sure to use Qt's const iterators</u>, there should never see a performance penalty compared to a hand-written loop, there can sometimes even see a gain. `A list of standard algorithms can be found here. <http://www.cplusplus.com/reference/algorithm/>`_ Historically Qt provided its own algorithm library, but now encourages programmers to use the STL versions instead, and Qt's own algorithm library will mostly become deprecated. https://doc.qt.io/qt-5/qtalgorithms.html  Unlike range-based for, where it is difficult to specify a const iterator instead of a standard iterator, with ``<algorithm>`` we are easily able to specify the const iterator.

Drawbacks:
    Some of the standard algorithms are not completely obvious from observing the name.  For example, I could not personally list what are the five arguments of ``std::replace_copy`` off the top of my head, and you shouldn't expect anyone to. When values inside the container need to be modified, non-const iterators may be slower than a Qt foreach() loop. 

Recommendation:
    Encourage the use of <algorithm> when it improves code clarity.  Speed not a big problem most of the time, don't make changes which are hard to understand just for a tiny hypothetical speed boost.  However, moving to <algorithm> and away from Qt foreach() inside hot paths could prove useful in the future.

enum class
~~~~~~~~~~

Motivation:
    These are a type-safe version of enums, and allows the programmer to associate several different types of data with an enum, such as a character.  This gives stricter type safety, for example, when it might be possible to accidentally convert a variable into a numeric type.  For example: 

    .. code:: cpp

        enum class Color : char {Red = 'R', Green = 'G', Blue = 'B'};

    Other benefits of enum classes are that they can be forward-declared, and that the data can be any sort of constexpr.  For example, if one had a constexpr function ``color_symbol()`` that returned the symbol given some color data, the enum class members could be defined like:

    .. code:: cpp
    
        enum class Color: char {Red = color_symbol({255, 0, 0}) ...}; 

    The standard C++ reference does a nice job explaining these features. https://en.cppreference.com/w/cpp/language/enum

Drawbacks:
    Virtually none.  Very small changes to the code, more type safety, removes the need for some tables of values.  The only problem is sometimes this requires fixing code that was unsafe to begin with.

Recommendation:
    Use freely.

Local type definitions (i.e. using)
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Motivation:
    An easier and localized way to use typedefs. Can be at the namespace, class, or function level.  Allows you to rewrite a typedef so that the new name occurs on the left hand side of the equals sign, which is easier to read.  They allow you to place typedefs closer to where they're used. They are particularly nice inside templates. 

Drawbacks:
    Very few.  These are quite intuitive

Recommendation:
    Go for it.

nullptr
~~~~~~~

Motivation:
    The use of nullptr as a default pointer initializer is a very small change in C++11, and mostly an aesthetic one. Technically, there are only a few things it prevents : it cannot be converted to a numeric type like ``int x = nullptr;``, and it cannot be used as a class type in a template, so the following is a compiler error: 

    .. code:: cpp

        meta_type<class A, class B>; 
        meta_type<C, nullptr> x;  

    The most important to nullptr is simply that you are tagging your code - ''hey: there is a null pointer lurking around here, be careful!''

Drawbacks:
    It takes longer to type nullptr than it takes to type 0, and it's not so visually pleasing.  Converting the existing code base would be very laborious and mess up git history. Tiny benefits.

Recommendation:
    We do not use nullptr in Krita. Not in new code, and we don't refactor old code to use it. Also not Q_NULLPTR.

Deleted, default, override, final
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Motivation:
    These are keywords used for designing inheritance patterns. They are useful for preventing accidental copy construction.

Drawbacks:
    Since Krita does not export libraries, most of the time we won't need to worry about these.  They are limited to solving some pretty specialized problems.

Recommendation:
    No reason to hold back from these features if they seem useful. They are well named and fairly self-explanatory, especially for developers with a Java or C# background.  If you apply them correctly, you can prevent other coders from making mistakes when they use your classes.  For others, these definitions can be ignored until they cause a compile error, which tell you that you're doing something the wrong way.

unique_ptr/QScopedPointer
~~~~~~~~~~~~~~~~~~~~~~~~~

Motivation:
	`Here is a glowing review of unique_ptr <https://www.drdobbs.com/cpp/c11-uniqueptr/240002708>`_. This is really about a philosophy of C++ memory management, not just a particular smart pointer type.  The idea is that whenever you create an object on the heap, you should *always* house it inside a smart pointer.  The reason this philosophy is considered new to C++11 is that unique_ptr is the first time they 'got it right' designing a very nice smart pointer class. Most importantly, the class uses negligible overhead. In particular: ``sizeof(unique_ptr<T*>) = size_t``, it can be passed as a function argument without copying, and dereferencing is inline.  

QScopedPointer is essentially the same thing as unique_ptr, and perhaps it is more idiomatic to use QScopedPointer instead. 

.. Note::

    It is a useful idiom to store a d-ptr using `QScopedPointer<Private>`, but if you do this you must also declare a destructor in the header file, even if it has an empty implementation in the source file.

    `"Rule of Zero": more about the C++ design philosophy behind unique_ptr. <https://rmf.io/cxx11/rule-of-zero/>`_

Drawbacks:
    The philosophy mentioned above can be summarized like this: we should state up front what we are going to prohibit programmers from doing.  Like the const keyword, unique_ptr puts restrictions on what can be done with the pointer, the main one being, it cannot be copied. Like enforcing const correctness, this can be annoying to get right throughout a codebase.

    One particular limitation is that Qt container classes.  For example ``QVector<std::unique_ptr>`` is invalid, because QVector requires its members can be copied. This makes converting to unique_ptr a bit slow, since ``QVector<T *>`` will have to be converted to ``std_array<unique_ptr<T*>>``. If the owner was being copied before, it will become uncopiable.  This can be a good thing, but it can also be extra work.

    `Moving a unique_ptr requires additional semantics. <http://www.cplusplus.com/reference/memory/unique_ptr/operator=/>`_

Recommendation:
    Smart pointers are already prevalent in the codebase with the KisSP family, but more use of them should be encouraged.   d_ptrs should be wrapped in a QScopedPointer. The rule is: first Krita's shared pointers, then Qt's, do not use the std smart pointers.

Performance-related (rvalues)
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Using move constructors and rvalues are very subtle and advanced features, but widely celebrated as successes of C++11.  The point of these features is to save on costs of copying memory when passing function arguments. The idea is that if one is OK allowing a function to steal, alter or destroy its argument, then that function can be called slightly faster if the argument is not copied at all, but instead simply performing an ownership transfer.  C++ programmers should already be aware that writing performant code where data gets shuffled around sometimes requires opening a can of ampersands.  These features will naturally stay confined to the corners of the codebase behind the scenes where they belong, and should be introduced when they are useful.

* `Tutorial for rvalue references <http://thbecker.net/articles/rvalue_references/section_01.html>`_
* `KDAB: speed up your Qt 5 programs using C++11 <https://www.kdab.com/wp-content/uploads/stories/slides/DD12/mutz-dd-speed-up-your-qt-5-programs-using-c++11.pdf>`_
* `Slide 37 describes lvalue/rvalue types in exact detail <http://wiki.hsr.ch/PeterSommerlad/files/MeetingCPP2013_SimpleC++.pdf>`_  Also explains the terms "xvalue" and "prvalue" sometimes seen as well.

Move Constructors
'''''''''''''''''

Recommendation:
    Use whenever it aids performance.

Reference Qualifiers (rvalue references)
''''''''''''''''''''''''''''''''''''''''

Recommendation:
    Use whenever it aids performance.

C++11 features mostly for template programming
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Krita makes very light use of templates.  These features are useful, coming across them in the code base will add complexity for new learners, and have not been necessary so far.

* decltype : this is the most likely of these features to be useful, for example, in KisInputManager.
* static_assert
* variadic templates

Other C++11 features that will not be useful
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

* Threading support (Relies on C++ threading model; use Qt threading instead)
* shared_ptr and weak_ptr (Relies on C++ threading model; use KisSharedPointer instead)
* New literal types (already have QString/ki18n)
* Extended Unions (already have QVariant)
