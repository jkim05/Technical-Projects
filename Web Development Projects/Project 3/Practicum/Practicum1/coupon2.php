<!--
Jefferson Kim
IT-207-B01
Lab Practicum 1
coupon2.php action page
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />

	<link rel="stylesheet" href="../css/styles.css" type="text/css" />
	
	<title>Lab Practica 1b- coupons2</title>
</head>

<body>
<div class="container">

<div class="left-side">
<!--#include virtual="menu.inc" -->
	<?php
		include('nav.php');
	?>
</div>

<div class="right-side">
<div class="header">
	<?php
		include('header.php');
	?>
</div>

<div class ="main-content">
		<?php
			include 'distribution.php';
		?>
<div class ="return-link">
		<a href="/~jkim316/IT207/LABP1/practica1.php">Return to Part 1</a><br>
		<br>
		<a href="/~jkim316/IT207/LABP1/coupon.php">Return to Part 2</a>
</div>
	<?php
			 echo '<div class="mod2">';
			 echo "| Last Modified: " . date ("H:i F d, Y T |", getlastmod());
			 echo '</div>';
		?>
</div>
</div>
</div>
	<div class="footer">
		<?php
			include('footer.php');
		?>
	</div>
</body>
</html>