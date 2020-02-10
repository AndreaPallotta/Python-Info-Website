<?php
include "../include/template.php";
head("Pythoon - Section 4","Conditional Logic");
?>

<h2>Conditional Logic Exercise</h2>
<ul>
	<li>Create a Python script called grading.py</li>
	<li>Set variable as "grade" and you can put your final exam grade as hard coded with your grade variable</li>
	<li>When your script runs and it should say...</li>
	<li>If at least 70%, your script must say you are passed.</li>
	<li>If less than 70%, your script must say you are not passed.</li>
</ul>

<br>

<div id="replCode">
    <iframe height="850px" width="100%" src="https://repl.it/@web2group3/Conditional-Logic?lite=true" scrolling="no"
            frameborder="no" allowtransparency="true" allowfullscreen="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-modals">
	</iframe>
</div>

<h2>The Sample Solution</h2>

<div class="codesample">
<code class="input">
grade = 60

if grade >= 70:
    print("You are passed.")

else:
    print("You are not passed.")

	</code>
</div>

<?php foot(); ?>
