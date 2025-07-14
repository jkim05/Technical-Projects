<!--
Jefferson Kim
IT-207-DL1
Lab Activity 03 directory 3.php
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
		<title>Lab Activity 03</title>
	</head>
	<body>
		<div id="main-content">
		<style>
		<?php
			include 'lab03.css';
		?>
		</style>
		
		<?php
			if(!empty($_POST["first"]) && 
			!empty($_POST["last"])) {
				$First = $_POST["first"];
				$Last = $_POST["last"];
				$Key = 0;
			
			if(file_exists("contacts.txt")) {
				$Handler = fopen("contacts.txt", "r");
				flock($Handler, LOCK_SH && LOCK_NB);
				$Content = file_get_contents("contacts.txt");
				
				$contact = explode($content);
				
				for($a =1; $a < $count($contact); $a++) {
					
				$contacts = explode(",",$contact[$a]);
				
				if((!strcasecmp($contacts[0])) && (!strcasecmp($contacts[1]))) {
					$Key = 1;
					
					print_r($contacts);
					
					echo '<a href = "update.php"> Update contacts </a>';
					echo '<a href = "directory.php"> Return to Directory </a>';
				}
			if(!empty($First) && !empty($Last) && $Key ==0) {
				echo "Contact unknown or available";
				echo '<a href = "directory.php"> Return to Directory </a>';
			}
			}
			fclose($Handler);
		}
		else {
			echo "please enter the required fields to search";
			echo '<a href = "directory.php"> Return to Directory </a>';
		}
		?>
	</body>
</html>