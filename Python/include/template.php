<?php
function head($title,$sec){
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
		<title><?php echo htmlspecialchars($title); ?></title>
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
		<link rel="stylesheet" href="assets/highlight.js/styles/monokai.css">
		<script src="assets/highlight.js/highlight.pack.js"></script>
		<script>document.addEventListener('DOMContentLoaded', (event) => {document.querySelectorAll('code:not(.output)').forEach((block) => {hljs.highlightBlock(block);});});</script>
	</head>
	<body>
		<div id="wrapper">
			<input type="checkbox" id="menu-out" />
			<div id="menu-wrapper">
				<div id="menu-top" class="top-height">
					<label for="menu-out" id="menu-close">x</label>
				</div>
				<div id="menu-content">
					<div class="menu-entry">
						<label id="home-link"><a href="#">Home</a></label>
					</div>
	<?php
	
	menu($sec,"Variables / Types",[["Content","../content/variables-and-type.php"],["Exercise","../exer/variables-and-type-exer.php"],["Quiz","../quizzes/variables-quiz.php"]]);
	menu($sec,"Operations / Print",[["Content","../content/operations-and-print.php"],["Exercise","../exer/operations-exer.php"],["Quiz","../quizzes/operations-quiz.php"]]);
	menu($sec,"Comments",[["Content","../content/comments.php"],["Exercise","../exer/comments-exer.php"],["Quiz","../quizzes/comments-quiz.php"]]);
	menu($sec,"Conditional Logic",[["Content","../content/conditional_logic_content.php"],["Exercise","../exer/conditionallogic-exer.php"],["Quiz","../quizzes/conditionals-quiz.php"]]);
    menu($sec,"Loops",[["Content","../content/loops.php"],["Exercise","../exer/loops-exer.php"],["Quiz","../quizzes/loops-quiz.php"]]);
	menu($sec,"Functions",[["Content","../content/function_content.php"],["Exercise","#"],["Quiz","../quizzes/function_quiz.php"]]);
	menu($sec,"Classes",[["Content","../content/classes.php"],["Exercise","../exer/classes-exer.php"],["Quiz","../quizzes/classes-quiz.php"]]);
	menu($sec,"Modules",[["Content","../content/modules.php"],["Exercise","../exer/modules-exer.php"],["Quiz","../quizzes/modules-quiz.php"]]);
	?>
				</div>
			</div>
			<div id="main-wrapper">
				<div id="titlebar" class="top-height">
					<label for="menu-out" id="menubutton">≡</label>
					<div id="title"><?php echo htmlspecialchars($title); ?></div>
				</div>
				<div id="content-wrapper">
					<div id="content">
<?php
}

function menu($sec,$section,$subsections){
	$secid=htmlspecialchars(str_replace(" ","",$section));//the HTML validator does not like IDs with spaces
	?>
				<div class="menu-entry">
					<input type="checkbox" id="<?php echo $secid; ?>" <?php if($section==$sec){echo "checked";}?> />
					<label for="<?php echo $secid; ?>" <?php if($section==$sec){echo "id=\"current\"";}?> >
						<?php echo htmlspecialchars($section); ?>
					</label>
					<div class="menu-holder">
	<?php
	foreach($subsections as $subsection){
		?>
						<a class="menu-entry" href="<?php echo htmlspecialchars($subsection[1]); ?>"><?php echo htmlspecialchars($subsection[0]); ?></a>
		<?php
	}
	
	?>
					</div>
				</div>
	<?php
}

function foot(){
?>
					</div>
					<footer>
                        Pythoon <br>
                        <?php
                         echo "Last modified: " . date ("F d Y H:i:s", filemtime($_SERVER['SCRIPT_FILENAME']));
                        ?>
					</footer>
				</div>
			</div>
		</div>
	</body>
</html>
<?php
}
