<?php
    include "../include/template.php";
    head("Pythoon - Section 3, Comments Quiz","Comments");
//first argument shows up in <title></title>
//second argument determines what section gets expanded
?>
<script src="../assets/js/quizForm.js"></script>
<?php
	require 'template.php';
	getQuizForm('Comments'); // the name in the DB that you gave your section
	// that name should match the section name in the head.
?>

<?php
    foot();
?>