<!--
Jefferson Kim
Professor Uyar
IT-207-B01
Lab activity 04 descendingDatabase.php
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
		<title>Order Comments Desc</title>
		<link rel="stylesheet" href="lab04.css" type="text/css"/>
	</head>
	<body>
				
	<?php
			$descend = file("comments.txt");
			sort($descend);
			for($i=0; $i<count($descend); $i++) {
				$num = 1;
				$user = explode("," $descend[$i]);
				echo ".$num.";
				echo "Name: <a href = 'mailto:$user[1]> $user[0]</a><br>";
			    echo "Comment: $user[2]<br>";
			    echo "<hr>";
				$num++;
			}
				echo "<br><a href = 'addComment.php'>Add New Comment</a><br>";
				echo "<a href = 'ascending.php'>Sort Comments A-Z (by name)</a><br>";
				echo "<a href = 'descending.php'>Sort Comments Z-A (by name)</a><br>";
	?>
</body>
</html>