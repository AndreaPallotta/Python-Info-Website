<?php 

require "../../../../../dbConnect.inc"; // define mysqli

function getQuizForm($sectionName) {
	
	// do two queries, one for the question, the next for the choices
	
	// obtain questions
	global $mysqli;
	$stmt = $mysqli->prepare('select * from questions where section=?');
	$stmt->bind_param("s", $sectionName);
	$stmt->execute();
	$res = $stmt->get_result();
	while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
		$questions[] = $row;
		$qIds[] = $row['id']; // qIds is the list of question id's
	}
	$stmt->close();
	
	// obtain answers
	// prepare one query, then reuse for each question
	$stmt = $mysqli->prepare('select * from answers where questionId=?');
	
	foreach ($questions as $question) {
		$stmt->bind_param('s', $question['id']);
		$stmt->execute();
		$res = $stmt->get_result();
		while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
			$answers[] = $row;
		}
	}	
	$stmt->close();
			
	?>
	<script>var ids = [<?php echo implode(',', $qIds); ?>]</script>
	<form action="processQuiz.php" onSubmit="return validateForm(ids);" method="POST">
	<?php
		foreach ($questions as $question) {
			// clear the list of answers to this question
			$theseAnswers = array();
			
			$questionId = $question['id'];
			// the end form should pairs of 
			//   <name='QUESTION_ID' value='ANSWER_ID'>
			
			echo "<fieldset>";
			echo "<legend>" . $question['description'];
			// make a span if the text is invalid
			echo "<span class='invalid' id='" . $questionId . "invalid'</span>";
			echo "</legend>";
			
			// the list of radio buttons
			foreach ($answers as $answer) {
				// append the answers that are for this question only.
				if ($answer['questionId'] == $questionId)
					$theseAnswers[] = $answer;
			}
			
			// shuffle theseAnswers (like shuffling a card deck)
			shuffle($theseAnswers);
			
			foreach ($theseAnswers as $answer) {
				// print out the radio buttons
				echo "<div>";
				echo "<input type='radio' name='" . $questionId . "'";
				echo "  value='" . $answer['id'] . "'";
				echo "  id='" . $answer['id'] . "'/>";
				echo "<label for='" . $answer['id'] . "'>";
				echo $answer['description'];
				echo "</label>";
				echo "</div>";
			} // end answers for each
			
			echo "</fieldset>";
		} // end question for each loop
	?>
		<input type="submit" value="Submit" />
	</form>
	<?php
}

?>