<!--
Jefferson Kim
Professor Uyar
IT-207-B01
Lab activity 04 postingComments.php
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html" charset="UTF-8"/>
		<title>Posted Comments</title>
		<link rel="stylesheet" href="lab04.css" type="text/css"/>
	</head>
	<body>
		<div id="content">
		<div id="lab4">
	      <div class="title">Sports and PED report:</div>
					<div class="body">Studies have found that athletes that use performance enhancing drugs (PED's) have an 
					exponential increase in strength and recovery.
					Scientists from George Mason University have stated that athletes that utilize PED's have a 90% increase in
					performance based on their data. Therefore, the ban on PED's will remain indefinite.</div><br>
	      <br/>
	      <h1>Comments</h1>
	      <hr/>
		  <a href='index.php'>Add New Comment</a><br/>
		  <a href='ascending.php'>Sort Comments A-Z (by name)</a><br/>
		  <a href='descending.php'>Sort Comments Z-A (by name)</a><br/><br/>
		  <form action = "postedComments.php" method = "POST">
				<label for="id_delete">Delete Comment Number</label><input = "text" name = "Delete"/>
				<input type = "submit" value = "Delete Comment"/>
				</form>
		<?php
				if(file_exists("comments.txt")) {
					$Handler = file("comments.txt");
					$check = 0;
					
					if($check == 0) {
						echo "Comments are not posted";
					}
					else {
						$num=1;
						for ($z=0; $z<count($Handler); $z++) {
						$user = explode("-",$Handler[$z]);
						echo ".$num.";
						echo "Name: <a href = 'mailto:$user[1]> $user[0]</a><br>";
						echo "Comment: $user[2]<br>";
						echo "<hr>";
						$num++;
					}
				}
				else {
					echo "Error";
					echo "<a href = 'index.php'>Return to Start</a>";
				}
				echo "<a href='index.php'>Add New Comment</a><br/>";
				echo "<a href='ascending.php'>Sort Comments A-Z (by name)</a><br/>";
				echo "<a href='descending.php'>Sort Comments Z-A (by name)</a><br/><br/>";
				}
				?>
				
				<?php
				
				if(!empty($_POST['Delete'])) {
					if(file_exists("comments.txt")) {
						$handle = file("comments.txt");
						$Deleted = $_POST['Delete']-1;
						unset($handle[$Deleted]);
						array_values($handle);
						$updateHandle=fopen("comments.txt", "w");
						fwrite($updateHandle,implode($Deleted);
					}
				else {
					echo "Error - unable to process request";
					echo "<a href = 'index.php'>Return to Start</a>";
					}
				}
				?>
				<a href='index.php'>Add New Comment</a><br/>
				<a href='ascending.php'>Sort Comments A-Z (by name)</a><br/>
				<a href='descending.php'>Sort Comments Z-A (by name)</a><br/><br/>
				<div class = "form">
				<form action = "postedComments.php" method = "POST">
				<label for="id_delete">Delete Comment Number</label><input = "text" name = "Delete"/>
				<input type = "submit" value = "Delete Comment"/>
				</form>
				</div>
				</div>
				</div>
	</body>
</html>