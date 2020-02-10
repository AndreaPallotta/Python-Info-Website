<?php
    include "../include/template.php";
    head("Pythoon - Section 7","Modules");
//first argument shows up in <title></title>
//second argument determines what section gets expanded
?>
<h1>Pythoon - Section 7</h1>
<h2>Modules</h2>

<p>
Modules are python files that contain definitions of classes, methods, or any other python code. Some modules are defined by the python interpreter (such as time, sys, and random). The modules defined by the python interpreter will always be available. You can also define your own python files and import them by their name.
</p>
<p>
For example, let’s work with random variables. Random variables are defined in the module random. First, we need to import the definition of random into our program:
</p>
<div class="codesample">
	<code class="input">import random</code>
</div>

<p>
To obtain random numbers, we then need to create an instance of random. Note that the import statement above just gave us the definitions of random, but doesn’t give us the short names, we need to prefix the names with random. when we want to use the module.
</p>
<div class="codesample">
	<code class="input">r = random.Random()</code>
</div>
<p>
X is now assigned to a pseudo-random number generator, which means we can use x to give us random sequences. It’s called pseudo-random since most generators tend to have a period to the numbers they make, which means the numbers will eventually repeat. According to the python documentation, the numbers have a period of 2**19937-1. This is not something that you need to worry about, but it is important to know that limitations can exist for extremely large data sets.
</p>
<p>
Two of the most important function that you might want to use with random numbers are the randint(a, b), and choice(sequence). randint will return an integer in the range a to b, inclusive on both ends. choice will pick an element from the list or range provided, and return that one element. There are a bunch more methods of the Random class, which can be seen in their documentation.
</p>

<div class="codesample">
	<code class="input">x = r.randint(1, 10)  # x is either 1, 2, 3, 4, 5, 6, 7, 8, 9, or 10</code>
</div>

<p>
With the module, if we don’t want to have to random.Random() to create a random generator, we can use the following syntax, and then use it directly:
</p>
<div class="codesample">
	<code class="input">from random import Random
r=Random()</code>
</div>

<p>
Another package that is commonly used is the sys package. This one relates to your system information. For example, sys.argv is an array containing the program arguments. Note that argv[0] will be the program’s name.
For example the following code, if put in file1.py, will produce the output
</p>

<div class="codesample">
	<code class="input">
file1.py:
import sys
for i in sys.argv:
    print i
	</code>
	<code class="output">
&gt; python file1.py argument1 second third
file1.py
argument1
second
third
	</code>
</div>
<?php
    foot();
?>
