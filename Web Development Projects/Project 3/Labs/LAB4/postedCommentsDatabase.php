<!--
Jefferson Kim
Professor Uyar
IT-207-B01
Lab activity 04 postedCommentsDatabase.php
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
	      <div class="main">Posted Comments for Database</div><br>
				<div class="title">Sports and PED report:</div>
					<div class="body">Studies have found that athletes that use performance enhancing drugs (PED's) have an 
					exponential increase in strength and recovery.
					Scientists from George Mason University have stated that athletes that utilize PED's have a 90% increase in
					performance based on their data. Therefore, the ban on PED's will remain indefinite.</div><br>
	      <br/>
	      <h1>Comments</h1>
	      <hr/>
				<?php
					define('SERVER', 'helios.vse.gmu.edu');
					define('USER', 'jkim316');
					define('PASS', 'zoagruth');
					define('DB', 'jkim316');
				//Connect to SQL and database
				$connection = @mysqli_connect(SERVER, USER, PASS, DB) or die("Error, unable to connect" . mysqli_error($connection));
				
				if($connection) {
				if(!empty($_POST['numberToDelete'])){
					$check = false;
					$numToDel = $_POST['numberToDelete'];
					$findQuery = 'SELECT ID FROM IT207';
					$result = mysqli_query($connection, $findQuery);
					$numResults = 0;
					while($row = mysqli_fetch_assoc($result)){
						$numResults++;
					if($row['ID'] == $numToDel){
						$check = true;
						$delQuery = 'DELETE FROM IT207 WHERE ID ='.$numToDel;
						mysqli_query($connection, $delQuery);
						echo 'Comment deleted';
						$updateQuery = 'UPDATE Comment SET ID = ID - 1 WHERE ID > '.$numToDelete;
					mysqli_query($connection, $updateQuery);
					}
					}

			for($i = $numToDel+1; $i <= $numResults; $i++){
				$query = 'UPDATE IT207 SET ID = ('.$i.' - 1) WHERE ID = '.$i;
				mysqli_query($connection, $query);
			}
			
		if(!$check){
		echo 'Match not found! Please enter the ID of the comment you want to delete</p>';
		}
		}
		
		if(isset($_POST['AZ'])){
			$listQuery = 'SELECT * FROM IT207 ORDER BY Name';
		}
		else if(isset($_POST['ZA'])){
			$listQuery = 'SELECT * FROM IT207 ORDER BY Name DESC';
		}
	else{
		$listQuery = 'SELECT * FROM IT207';
		}
			$listResult = mysqli_query($connection, $listQuery);
		while($row = mysqli_fetch_assoc($listResult)){
			echo 'Comment ID: ', $row['ID'], '<br />';
			echo 'Name: <a href="mailto:', $row['Email'], '">', $row['Name'], '</a><br />';
			echo 'Comments: ', $row['Comment'], '<br />';
			echo '<hr />';
			}
		mysqli_close($connection);
		}
	else{
		echo 'Unable to connect to database! Please try again.<br />';
		echo "<a href = 'postedCommentsDatabase.php'>View Postings</a><br />";
		echo "<a href = 'indexDatabase.php'>Return to Start</a>";
		die(mysqli_connect_error($connection));
		}
?>
</div>
</div>
	</body>
</html>
