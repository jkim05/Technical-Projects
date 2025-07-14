<!---
Jefferson Kim
Professor Uyar
IT 207-B01
Lab Activity 01
--->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />

		<title>Lab Assignment 1</title>
		<link rel="stylesheet" href="../css/styles.css" type="text/css"/>
	</head>
		<body>
	
	<div class="container">
		<div class="left-side">
<!--#include virtual="menu.inc" -->
	<?php
		include('../nav.php');
	?>
</div>

<div class="right-side">
<div class="header">
	<?php
		include('../header.php');
	?>
</div>
	
    <div class ="main-content">
		<div id="lab1form">
	     <?php
              $partEarned = $_POST['earnedParticipation'];
              $partMax = $_POST['maxParticipation'];
              $partW = $_POST['weightParticipation'];
              $quizEarned = $_POST['earnedQuiz'];
              $quizMax = $_POST['maxQuiz'];
              $quizW = $_POST['weightQuiz'];
              $labEarned = $_POST['earnedLab'];
              $labMax = $_POST['maxLab'];
              $labW = $_POST['weightLab'];
              $practicaEarned = $_POST['earnedPracticum'];
              $practicaMax = $_POST['maxPracticum'];
              $practicaW = $_POST['weightPracticum'];


            function calculatePercentage($a,$b)
            {
              $percent = ($a/$b)*100;
              return $percent;
            }

            function calculateWeight($c,$d,$e)
            {
             $weight = (percentage($c,$d) * $e)/100 ;
             return $weight;
            }

            $partWeight = calculateWeight($partEarned,$partMax,$partW);
            $quizWeight = calculateWeight($quizEarned,$quizMax,$quizW);
            $labWeight = calculateWeight($labEarned,$labMax,$labW);
            $practicaWeight = calculateWeight($practicaEarned,$practicaMax,$practicaW);
            $total = $partWeight+$quizWeight+$labWeight+$practicaWeight;

            function determineGrade($total) {
            if ($total >= 95) {
            $grade = "A+";
            }
            else if ($total < 95 && $total >= 90 ) {
                $grade = "A";
            }
            else if ($total < 90 && $total >= 85) {
                $grade = "B+" ;
            }
            else if ($total < 85 && $total >= 80) {
                $grade = "B" ;
            }
            else if ($total < 80 && $total >= 75) {
                $grade = "C+" ;
            }
            else if ($total < 75 && $total >= 70) {
                $grade = "C" ;
            }
            else if ($total < 70 && $total >= 60) {
                $grade ="D" ;
            }
            else if ($total < 60 && $total >= 0) {
                $grade = "F" ;
            }
            return $grade;
}
	echo "<p>You earned a " .calculatePercentage($partEarned, $partMax). "% for Participation, with a weighted value of " .$partWeight. "% </p><br>";
	echo "<p>You earned a " .calculatePercentage($quizEarned, $quizMax). "% for Quizzes, with a weighted value of " .$quizWeight. "% </p><br>";
	echo "<p>You earned a " .calculatePercentage($labEarned, $labMax). "% for Labs, with a weighted value of " .$labWeight. "% </p><br>";
	echo "<p>You earned a " .calculatePercentage($practicaEarned, $practicaMax). "% for Practica, with a weighted value of " .$pracWeight. "% </p><br>";
    echo "<p><b>Your Final Grade is a " .$total. "%, Which is a ".determineGrade($total).".</b></p>";
    ?>
			</div>
		</div>
	</div>
</div>
	<div class="footer">
		<?php
			include('../footer.php');
		?>
	</div>
	</body>
</html>