<!--
Jefferson Kim
IT-207-DL1
Lab Activity 03 addcontact 3.php
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
		<?php
			if(!empty($_POST["first"]) && !empty($_POST["last"]) && !empty($_POST["email"]) && 
			!empty($_POST["phone"]) && !empty($_POST["address"]) && !empty($_POST["city"]) &&
			!empty($_POST["state"]) && !empty($_POST["zip"])) {
			
				$First = $_POST["first"];
				$Last = $_POST["last"];
				$Email = $_POST["email"];
				$Phone = $_POST["phone"];
				$Addr = $_POST["address"];
				$City = $_POST["city"];
				$State = $_POST["state"];
				$Zip = $_POST["zip"];
				
				$Contacts = .$First. "," .$Last. "," .$Email. "," .$Phone. "," .$Addr. "," 
				.$City. "," .$State. "," .$Zip);
				
				$Handle = fopen("contacts.txt", "r+");
				flock($handler, LOCK_EX && LOCK_NB);
				if(fwrite($Handle, $Contacts)>0) {
					echo "Contact has been succesfully added";
					echo '<a href = "search.php"> Return to Directory </a>';
				}
				else {
					echo "There was an error adding the contact";
					echo '<a href = "addContacts.php"> Return to Add contacts </a>';
					echo '<a href = "directory.php"> Return to Directory </a>';
				}
				fclose($Handle);
			}
			else {
				echo "The information fields are required to proceed";
				echo '<a href = "addContacts.php"> Return to Add contacts </a>';
				echo '<a href = "directory.php"> Return to Directory </a>';
			}
		?>
	</body>
</html>