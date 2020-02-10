<?php
include "../include/template.php";
head("Pythoon - Section 1","Variables / Types");
?>
<h1>Variables and Types - Section 1</h1>
<h2>Introduction</h2>
<p>In Python, each line of code can do something different: one line of code may be executing a step, while another line may be giving definition to something. For example, code that executes a step may be printing a statement to the screen, or doing a mathematical operation. Code that gives definition to something may be where a variable or function is defined.</p>

<h2>Variables</h2>
<p>A variable is a reserved memory location that stores a value, and is referenced by whatever name you decide to call it. Unlike some other coding languages, variables do not need to be explicitly declared to be assigned memory space and values. To assign a value to a variable, we use one equal sign (=). Whatever is on the left of the equal sign is what the variable is called. Whatever is to the right of the equal sign is what the value of the variable will be.</p>
<p>For example:</p>
<div class="codesample">
    <code class="input">x = “cat”</code>
    <code class="output"></code>
</div>
<p>In the code above, we create a variable that we call ‘x’ and assign it the value of “cat”.</p>
<br>
<h2>Types</h2>
<p>Variables can be assigned different types of values. In the example above, x was assigned the value of the string “cat”. A string is a sequence of characters that represents text, and is denoted by either single quotes surrounding the sequence, or double quotes surrounding the sequence. Other types of values include ints, floats, and booleans. An int represents a whole number, and is written as such, with no decimal point. A float represents a decimal, and is written as the decimal number. A boolean is a true or false statement, which is written as “True” or “False”.</p>
<p>More examples:</p>

<code class="input">stringExample = “I am a string”</code>

<code class="input">intExample = 3</code>

<code class="input">floatExample = 3.0</code>

<code class="input">booleanExample = True</code>

<?php
foot();