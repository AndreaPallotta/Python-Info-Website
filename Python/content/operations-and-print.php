<?php
include "../include/template.php";
head("Pythoon - Section 2","Operations / Print");
?>
<h1>Print Statements and Operations - Section 2</h1>
<h2>Print Statements</h2>
<p>To display things on screen, Python has something called a “print” statement. To use a print statement, you type “print(something)” inside the interpreter, with whatever you want to display on screen to be within the parentheses. Anything can be printed, from strings to ints to operations to variables. When printing strings, there must be quotations to denote the string, but when printing ints, floats, or booleans, quotations are not to be used, otherwise a string will be printed instead. When printing a variable, the value of the variable is printed. When printing mathematical operations (eg: 3+4), the answer is printed.</p>
<div class="codesample">
    <code class="input">print(“hello world”)</code>
    <code class="output">hello world</code>
</div>
<div class="codesample">
    <code class="input">print(3)</code>
    <code class="output">3</code>
</div>
<div class="codesample">
    <code class="input">print(True)</code>
    <code class="output">True</code>
</div>
<div class="codesample">
    <code class="input">stringExample="I am a string" 
print(stringExample)</code>
    <code class="output">
I am a string</code>
</div>
<div class="codesample">
    <code class="input">print(3+4)</code>
    <code class="output">7</code>
</div>

<br>

<h2>Operations</h2>
<p>Python can perform mathematical operations, such as addition, subtraction, multiplication, division, and modulus, with ints and floats. Any operation and number can be typed in, and the answer will be returned. </p>
<p>For example:</p>
<div class="codesample">
    <code class="input">2+3</code>
    <code class="output">5</code>
</div>
<p>If a variable is an int or float type, it can also be used in mathematical operations. Instead of using a number in the operation, the variable can be used.</p>
<p>For example:</p>
<div class="codesample">
    <code class="input">num = 4.5</code>
    <code class="output"></code>
</div>
<div class="codesample">
    <code class="input">num / 2</code>
    <code class="output">2.25</code>
</div>
<div class="codesample">
    <code class="input">num + num</code>
    <code class="output">9</code>
</div>
<p>Operations can also be used to change the values of variables themselves. One way to do this is to set the value of the variable equal to itself plus/minus/times/divided by a number.</p>
<p>For example:</p>
<div class="codesample">
    <code class="input">num = 3</code>
    <code class="output"></code>
</div>
<div class="codesample">
    <code class="input">num =  num - 2</code>
    <code class="output"></code>
</div>
<div class="codesample">
    <code class="input">print(num)</code>
    <code class="output">1</code>
</div>
<p>Another way to do this is to define the variable using an operant and equal sign combined. The left side of the operant/equal sign combination is the variable name and the right side is the number to change the current value of the variable by.</p>
<p>For example: </p>
<div class="codesample">
    <code class="input">changer = 4</code>
    <code class="output"></code>
</div>
<div class="codesample">
    <code class="input">changer += 6</code>
    <code class="output">10</code>
</div>
<div class="codesample">
    <code class="input">changer /= 2</code>
    <code class="output">5</code>
</div>
<?php
foot();
?>




