<?php
include "../include/template.php";
head("Pythoon - Section 5","Functions");
?>
<h1>Functions - Section 5</h1>
<h2>Function - Content</h2>
<p>A function in Python is very similar to a function in any other programming language. It is a segment or block of code that is run when called. Typically functions are used to execute code designed for the same purpose. For example, one function may be used to multiply two numbers and a function may also be used to add two numbers.</p>
<br/>
<code>def addNumbers():
    x = 1
    y = 2

    z = x + y
    return z
</code>
<br/><br/><br/>

<p>Functions in python are defined by using the “def” keyword followed by the name of the function and opening and closing parenthesis and a colon. Any code that is associated with that function must be indented from the definition of the function.</p>
<br/>
<code>def exampleFunction():
    print(“This print is indented from the exampleFunction”)
</code>
<br/><br/><br/>

<p>Functions often do calculations and then return a value or several values. An example of this can be seen in the first example function called “addNumbers”.

    A function can be placed anywhere in your code but will only run once it is called.To call a function in Python you type out the name of the function followed by parentheses, and then a list of information to be passed to the function, called arguments.
</p>
<br/>
<code>exampleFunction(“variable”)
</code>
<br/><br/><br/>

<p>Passing information or variables to a function can be very useful. If you calculate a value in one function and return it, then want to apply different calculation to it in another function, you can pass it to the new function when you call it.</p>
<br/>
<code>def addNumbers():
    x = 1
    y = 2

    z = x + y
    return z
    #to return multiple variables
    return x, y, z


def multiplyNumber(passedVariable)
    passedVariable =  passedVariable * 5

    return passedVariable


addedNumbers = addNumbers()
#to assign multiple values with a multivalue return
x, y, z = addNumbers()

multiplyNumber(addedNumbers)
</code>
<br/><br/><br/>

<p>When using function in Python, scope is important to keep in mind. Scope defines where a variable is usable in a program. A variable defined in a function has local scope to that function and is only usable in that function. However, a variable defined outside of all functions in the program has global scope and is usable in all functions and outside of all functions. This allows separate functions to reuse the names of their local variables. A variable can not have the same name as a global scope variable even if it is local.</p>
<br/>
<code>x = 7 #This variable has global scope

def myFunction():
    z = 8 #This variable has local scope
</code>
<?php
foot();
