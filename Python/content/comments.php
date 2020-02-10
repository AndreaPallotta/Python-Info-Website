<?php
include "../include/template.php";
head("Pythoon - Section 3","Comments");
//first argument shows up in <title></title>
//second argument determines what section gets expanded
?>
<h1>Comments</h1>
<h2>Print Statements</h2>
<p>In order to make code more comprehensive, comments are used. Comments are lines of code that are not read by the machine in execution, they are only there so the coder can add notes to their code that explain what the code does. To denote the start of a one-line comment, Python uses the pound symbol (#). To denote the start of a multi-line comment, Python uses three quotes, either ''' or """. The comment is written, and the end of the comment is denoted by three quotes, similar to the beginning of the comment. The types of quote must be consistent; if the beginning three quotes use single quotes, the ending three quotes must also use single quotes.</p>
<p>Some examples:</p>
<div class="codesample">
    <code class="input">#The next line will print the words "hello world".
print(“hello world”)</code>
    <code class="output">hello world</code>
    <code class="input">""" 
this is one way
to do a multiline comment
"""

print("there was a multiline comment")
</code>
    <code class="output">there was a multiline comment</code>
    <code class="input">''' 
this is another way
to do a multiline comment
'''

print("there was another multiline comment")</code>
    <code class="output">there was another multiline comment</code>

</div>
						
						
<?php
foot();





