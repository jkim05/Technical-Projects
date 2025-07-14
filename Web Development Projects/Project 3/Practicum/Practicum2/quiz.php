<!--
Jefferson Kim
Professor Uyar
IT-207-B01
Practicum 2 quiz.php
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
	<h3>Online Quiz</h3>
	<?php
		$questFile = 'questions.txt';
		$questions = fopen($questFile, 'r');
		$numberArr = array();
		$questionArr = array();
		$chapterArr = array();
		flock($questions, LOCK_SH);
		
		$ansFile = 'answers.txt';
		$answers = fopen($ansFile), 'r');
		$answerArr = array();
		$correctAnsArr = array();
		flock($answers, LOCK_SH);
		
		while(!feof($questions)) {
			$quesLine = fgetcsv($questions, ',');
			$numberArr[] = $quesLine[0];
			$questionArr[] = $quesLine[1];
			$chapterArr[] = $quesLine[2];
			
			$ansLine = fgetcsv($answers, '-');
			$answer1Arr[]= ansLine[0];
			$answer2Arr[] = ansLine[1];
		}
	
	?>
	<form method ="POST" action="grade1.php">
	<?php
	for($i=0; $i<count($numberArr); $i++) {
		echo " ".$numberArr[$i] . "." . $questionArr[$i] . " " . $chapterArr[$i] . "<br>";
	?>
		<input type="radio" value="<?php echo $answer1Arr[$i]; ?>" name="<?php echo $i;?>"><?php echo $answer1Arr[$i]; ?>
		<input type="radio" value="<?php echo $answer2Arr[$i]; ?>" name="<?php echo $i;?>"><?php echo $answer2Arr[$i]; ?>
		<input type="submit" value="Submit Quiz">
	</form>
	
	<?php
	}
	?>
	<?php
		flock($questions, LOCK_UN);
		flock($answers, LOCK_UN);
		fclose($questions);
		fclose($answers);
	?>

	</body>
</html>