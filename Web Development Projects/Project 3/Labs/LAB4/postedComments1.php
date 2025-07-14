<!--
Jefferson Kim
Professor Uyar
IT-207-B01
Lab activity 04 indexDatabase.php display
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html" charset="UTF-8"/>

	<link rel="stylesheet" href="../css/styles.css" type="text/css"/>
	
	<title>Lab Activity 04</title>
</head>

<body>
<div class="container">

<div class="left-side">
<!--#include virtual="menu.inc" -->
	<?php
		include('../nav.php');
	?>
</div>

<div class="right-side">
<div class="header">
	<?php
		include('../header.php');
	?>
</div>

<div class ="main-content">
		<?php
			include 'postingComments.php';
		?>
		<style>
		<?php
			include 'lab04.css';
		?>
		</style>
</div>
</div>
</div>
	<div class="footer">
		<?php
			include('../footer.php');
		?>
	</div>
</body>
</html>