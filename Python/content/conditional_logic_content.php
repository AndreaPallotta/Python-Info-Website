<?php
include "../include/template.php";
head("Pythoon - Section 4","Conditional Logic");
?>
<h1>Conditional Logic - Section 4</h1>
<h2>Statements - Content</h2>
<p>The if statement is a conditional statements that checks conditions and change the behavior of the program. There are many ways to control program’s behaviors. It could be like a true or false.

    The Python boolean is something which can either be true or false but it is different from if statement. Because it uses "==" "!=" "&gt;=" "&lt;=" "not" "and" "or" and "not".

    For example, this if statement is like...
</p>
<br/>
<code>weight = float(input("How many pounds does your cat weight?"))

if weight > 10:
    print("Your cat is overweight than 10 pounds.")
</code><br/><br/>

<h2>Booleans - Content</h2>
<p>This if statement shows that someone puts more weights than 10 pounds and the result is that someone’s cat is overweight.

    For example, this boolean is like... </p>

    <code>&gt;&gt;&gt; 1 == 1
    True

    &gt;&gt;&gt; 0 == 1
    False
    </code>

    <p>This is how boolean works. If it is 0 == (is equal to) 1, it is false. If it is 1 == (is equal to) 1, it is true.</p>
<?php
foot();
