.. meta::
   :description:
        Overview of maths operations that can be used in Krita spinboxes and number inputs.

.. metadata-placeholder

   :authors: - Scott Petrovic
             - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Jospin
   :license: GNU free documentation license 1.3 or later.

.. index:: Maths
.. _maths_input:

===========
Maths Input
=========== 

Also known as Numerical Input boxes. You can make Krita do simple maths for you in the places where we have number input. Just select the number in a spinbox, or right-click a slider to activate number input. It doesn't do unit conversion yet, but this is planned.

Possible Functions
------------------

Addition (Operator: + )
    Just adds the numbers.
    Usage: ``50+100``
    Output: ``150``
Subtraction (Operator: - )
    Just subtracts the last number from the first.
    Usage: ``50-100``
    Output: ``50``
Multiplication (Operator: * )
    Just multiplies the numbers.
    Usage: ``50*100``
    Output: ``5000``
Division (Operator: / )
    Just divides the numbers.
    Usage: ``50/100``
    Output: ``0.5``
Exponent (Operator: ^ )
    Makes the last number the exponent of the first and calculates the result.
    Usage: ``2^8``
    Output: ``256``
Sine (Operator: sin() )
    Gives you the sine of the given angle.
    Usage: ``sin(50)``
    Output: ``0.76``
Cosine (Operator: cos() )
    Gives you the cosine of the given angle.
    Usage: ``cos(50)``
    Output: ``0.64``
Tangent (Operator: tan() )
    Gives you the tangent of the given angle.
    Usage: ``tan(50)``
    Output: ``1.19``
Arc Sine (Operator: asin() )
    Inverse function of the sine, gives you the angle which the sine equals the argument.
    Usage: ``asin(0.76)``
    Output: ``50``
Arc Cosine (Operator: acos() )
    Inverse function of the cosine, gives you the angle which the cosine equals the argument.
    Usage: ``acos(0.64)``
    Output: ``50``
Arc Tangent (Operator: atan() )
    Inverse function of the tangent, gives you the angle which the tangent equals the argument.
    Usage: ``atan(1.19)``
    Output: ``50``
Absolute (Operator: abs() )
    Gives you the value without negatives.
    Usage: ``abs(75-100)``
    Output: ``25``
Exponent (Operator: exp() )
    Gives you given values using e as the exponent.
    Usage: ``exp(1)``
    Output: ``2.7183``
Natural Logarithm (Operator: ln() )
    Gives you the natural logarithm, which means it has the inverse functionality to exp().
    Usage: ``ln(2)``
    Output: ``0.6931``

The following are technically supported but bugged:

Common Logarithm (Operator: log10() )
    Gives you logarithms of the given value.
    Usage: ``log10(50)``
    Output: ``0.64``

Order of Operations.
--------------------

The order of operations is a globally agreed upon reading order for interpreting mathematical expressions. It solves how to read an expression like:

``2+3*4``

You could read it as 2+3 = 5, and then 5*4 =20. Or you could say 3*4 = 12 and then 2+12 = 14.

The order of operations itself is Exponents, Multiplication, Addition, Subtraction. So we first multiply, and then add, making the answer to the above 14, and this is how Krita will interpret the above.

We can use brackets to specify certain operations go first, so to get 20 from the above expression, we do the following:

``( 2+3 )*4``

Krita can interpret the brackets accordingly and will give 20 from this.

Errors
------

Sometimes, you see the result becoming red. This means you made a mistake and Krita cannot parse your maths expression. Simply click the input box and try again.

