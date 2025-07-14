<!--
Jefferson Kim
IT-207-DL1
Lab Activity 03 update 3.php
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
		if(!empty($_POST["first"]) && !empty($_POST["last"]) && !empty($_POST["email"]) && 
		!empty($_POST["phone"]) && !empty($_POST["address"]) && !empty($_POST["city"]) &&
		!empty($_POST["state"]) && !empty($_POST["zip"])) {
				
			$updateContacts = .$_POST['first']. "," .$_POST['last']. "," .$_POST['email']. "," .$_POST['Phone']. "," .$_POST['address']. "," 
				.$_POST['city']. "," .$_POST['state']. "," .$_POST['zip'];
			
			if(file_exists("contacts.txt")) {
				$readHandler = fopen("contacts.txt", "r");
				$FileContent = file_get_contents("contacts.txt");
				
				$contact = explode(",", $contacts);
				
				for($a = 1; $a < $count($contact); $a++) {
					$contact = explode(",",$contact[$i]);
				fclose($readHandler);
				if((!strcasecmp($contact[0],$_POST['first'])) && (!strcasecmp($contact[1], $_POST['last'])) {
					
					$contact[$a] = $updateContact;
					$handler = fopen("contacts.txt'", "w");
					flock($handler, LOCK_EX && LOCK_NB);
				
						if(fwrite($handler, $contact[$a])>0) {
							echo "The contact was updated succesfully";
							echo '<a href = "directory.php"> Return to Directory </a>';
							echo '<a href = "update.php"> Return to Update </a>';
						}
						else {
							echo "Error - The contact was not able to update";
							echo '<a href = "directory.php"> Return to Directory </a>';
							echo '<a href = "update.php"> Return to Update </a>';
						}
							fclose($handler);
					}
				}
			}
			}
		?>
	</body>
</html>