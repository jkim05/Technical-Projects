<!--
Jefferson Kim
Professor Uyar
IT-207-B01
Lab activity 04 addCommentsDatabase.php SQL
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
		<title>Adding Comments...</title>
		<link rel="stylesheet" href="lab04.css" type="text/css"/>
	</head>
	<body>
				
	<?php
		define('SERVER', 'helios.vse.gmu.edu');
		define('USER', 'jkim316');
		define('PASS', 'zoagruth');
		define('DB', 'jkim316');
				//Connect to SQL and database
				$connection = @mysqli_connect(SERVER, USER, PASS, DB) or die("Error, unable to connect" . mysqli_error($connection));
				
				if($connection) {
					$query = "SELECT ID FROM IT207";
					$result = mysqli_query($connection, $query);
					$ID = 1;
					while($row = mysqli_fetch_assoc($result)) {
					if($row['ID'] == $ID) {
						$ID++;
					}	
					else {
						break;
					}
				}
					
		if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comment'])) {
		$Name = $_POST['name'];
		$Email = $_POST['email'];
		$Comment = $_POST['comment']);
		$check = false;
		$SQLquery = "SELECT Name FROM IT207";
		$SQLresult = mysqli_query($connection, $sqlQuery);
		while($row = mysqli_query($link, $query)) {
			if($row['Name'] == $Name) {
				$check = true;
			}
		}
		if($check){
			echo '<h1>Comments Not Added</h1>';
			echo '<hr />';
			echo 'One per person! You have already left comments for this posting.';
		}
			else{
				$insertQuery = "INSERT INTO IT207 VALUES(".
				$ID.", '".$Name."', '".$Email."', '".addslashes($Comment)."')";
				$info = mysqli_query($link, $insertQuery);
					if($info) {
						echo '<h1>Comments Added</h1>';
						echo '<hr />';
						echo 'Your comment has been successfully added!';
						echo 'Name: ', '<a href="mailto:', $Email, '">', $Name, '</a><br />';
						echo 'Comments: ', $Comment, '<br />';
						echo "<a href = 'indexDatabase.php'>Add New Comment</a>";
						
						}
					else{
						echo 'Unable to write to database! Please try again.';
						echo "<a href = 'indexDatabase.php'>Return to Start</a>";
						}
					}
				}
			else{
				echo 'You must fill out all fields in order to leave a comment. Please go back and try again.';
				echo "<a href = 'indexDatabase.php'>Return to Start</a>";
				}
				mysqli_close($link);
				}
			else{
			echo 'Unable to connect to database! Please try again.';
			echo "<a href = 'indexDatabase.php'>Return to Start</a>";
		}
	?>
</body>
</html>


					
					
					
