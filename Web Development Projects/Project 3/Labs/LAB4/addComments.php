<!--
Jefferson Kim
Professor Uyar
IT-207-B01
Lab activity 04 addComments.php action page
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html" charset="UTF-8"/>
		<title>Adding Comments...</title>
		<link rel="stylesheet" href="lab04.css" type="text/css"/>
	</head>
	<body>
<?php
if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comment'])) {
	$Name = $_POST['name'];
	$Email = $_POST['email'];
	$Comment = $_POST['comment']);
	$check = 0;
	$newComment = $Name."-".$Email."-".$Comment."\n";
	
	if(file_exists("comments.txt")) {
		$CommentFile = file("comments.txt");
	
				for ($i=0; $i < count($CommentFile); $i++) {
					$curLine = explode("-", $curLine[$i]);
						if(strcasecmp($Name,$curLine[0])==0) {
							$check = 1;
							}
				}
	}
	if($check==1) {
		echo "<h1>Comments Not Added</h1>"
		echo "<hr/>"
		echo "One per person! You have already left comments for this posting.<br>"
		echo "Comment was not added succesfully";
	}
	else {
		$handle = fopen("comments.txt", "a+");
		if(fwrite($handle,$newComment) > 0) {
			echo "<h1>Comments Added</h1>"
			echo "<hr/>"
			echo "Name: <a href = 'mailto:$Email'>$Name</a><br>";
			echo "Comment: $Comment";
		}
	}
	<hr/>
	echo "<a href = 'index.php'>Someone Else Want to Comment</a><br>";
	echo "<a href = 'postedComments.php'>View Posting Comments</a>";
}
	else {
		echo "An error has occured - Please enter all information and return to start";
		echo "<a href = 'index.php'>Return to Start</a>";
	}
?>
</body>
</html>