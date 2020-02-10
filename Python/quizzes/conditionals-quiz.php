<?php
    include "../include/template.php";
    head("Pythoon - Section 4, Conditional Logic Quiz","Conditional Logic");
//first argument shows up in <title></title>
//second argument determines what section gets expanded
?>
<script src="../assets/js/quizForm.js"></script>
<?php
	require 'template.php';
	getQuizForm('Conditional Logic'); // the name in the DB that you gave your section
	// that name should match the section name in the head.
?>

<?php
    foot();
?>