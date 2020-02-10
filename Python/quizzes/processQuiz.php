<?php
	require "../../../../../dbConnect.inc"; // define mysqli

	// run the queries to get the data
	// iterate through POST to get the question id and answer id
	$total = 0;
	$totalCorrect = 0;
	$anId;
	$answerIds = array();
	$yourAnswers = array();

	foreach ($_POST as $questionId => $answerId) {
		
		// determine the section -- just need to grab a question id
		$anId = $questionId; 
		
		$answerIds[] = $answerId;
		$total = $total + 1;
	}

	// obtain the section name
	$stmt = $mysqli->prepare('select * from questions where id=?');
	$stmt->bind_param("s", $anId);
	$stmt->execute();
	$res = $stmt->get_result();
	$row = mysqli_fetch_array($res, MYSQLI_ASSOC);

	// got the section name here
	$sectionName = $row['section'];
	$stmt->close();
	
	// obtain answers that were submitted
	// prepare one query, then reuse for each question
	$stmt = $mysqli->prepare('select * from answers where id=?');
	
	foreach ($answerIds as $id) {
		$stmt->bind_param('s', $id);
		$stmt->execute();
		$res = $stmt->get_result();
		$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
		if ($row['isCorrect'] != 0) { // the answer is the correct one
			$totalCorrect = $totalCorrect + 1;
		}
		$yourAnswers[$row['questionId']] = $row['description'];
	}
	$stmt->close();

	include "../include/template.php";
    head("Pythoon - Quiz Results for " . $sectionName,$sectionName);
//first argument shows up in <title></title>
//second argument determines what section gets expanded
?>

<h1>Quiz results</h1>
<h2>You got a score of <?php echo $totalCorrect . "/" . $total ?></h2>

<?php
	
	// could make this more efficient by re-using the queries up above, but
	//  it shouldn't matter too much
	$questionStmt = $mysqli->prepare('select * from questions where id=?');
	$answerStmt = $mysqli->prepare('select * from answers where questionId=? and isCorrect=true');
	
	foreach ($_POST as $questionId => $answerId) {
		global $mysqli;
		
		// obtain the question's text
		$questionStmt->bind_param("s", $questionId);
		$questionStmt->execute();
		$res = $questionStmt->get_result();
		$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
		echo "<h3>" . $row['description'] . "</h3>";
		
		// obtain the correct answer to the question.
		// compare to the answerId here. If they match, then we got it right
		$answerStmt->bind_param("s", $row['id']);
		$answerStmt->execute();
		$res = $answerStmt->get_result();
		$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
		if ($answerId == $row['id']) {
			// got it right
			echo "<ul><li>Correct (yours):<code>" . $row['description'] . "</code></li></ul>";
		} else {
			// print out your answer and the right one
			echo "<ul><li>Correct:<code>";
			echo $row['description'];
			echo "</code></li><li>Your answer: <code>";
			echo $yourAnswers[$row['questionId']];
			echo "</code></li></ul>";
		}
	}
	
	$questionStmt->close();
	$answerStmt->close();
	
    foot();
?>