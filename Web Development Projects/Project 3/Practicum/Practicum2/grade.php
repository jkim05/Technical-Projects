<!--
Jefferson Kim
Professor Uyar
IT-207-B01
Practicum 2 grade.php
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html" charset="UTF-8"/>
		<title>Practicum 2</title>
		<link rel="stylesheet" href="pract2.css" type="text/css"/>
	</head>
	<body>
	<div id = "pract2Form">
	<h3>Online Quiz</h3>
	<?php
		$question1 = $_POST['0'];
		$question2 = $_POST['1'];
		$question3 = $_POST['2'];
		$userAns = array($question1, $question2, $question3);
		
		function score ($userAns, $correctAns) {
			$correct = 0;
			$total =0;
			for($i=0; $i<count($correctAns); $i++) {
				if($correctAns[$i] == userAns[$i]) {
					$correct++;
					$total++;
				}
					else {
						$correct--;
						$total--;
					}
				}	
		$percentage = (($correct / $total) * 100);
		return $percentage;
		}
		
		$calScore = score($userAns, $correctAns);
		
		function grade($percentage) {
			if ($percentage >= 80.0) {
				echo 'You scored an <div class = "green">' . $percentage . '</div> on the quiz.';
			}
				else if ($percentage <= 79.00 && $percentage >= 60.00) {
					echo 'You scored an <div class = "yellow">' . $percentage .  '</div> on the quiz.';
				}
					else if ($percentage <=59 && $percentage >=50.00) {
						echo 'You scored an<div class = "red">' . $percentage .  '</div> on the quiz.';
					}
						else if ($percentage < 49.00) {
							echo 'You scored an <div class = "black">' . $percentage .  '</div> on the quiz.';
						}
		}
		echo " " . grade($percentage) . " ";
	?>	
		<a href="/~jkim316/IT207/LABP2/practica2.php">Return to Quiz</a><br>
		<br>
		<?php
			 echo '<div class="mod2">';
			 echo "| Last Modified: " . date ("H:i F d, Y T |", getlastmod());
			 echo '</div>';
		?>	
	</div>
	</body>
</html>