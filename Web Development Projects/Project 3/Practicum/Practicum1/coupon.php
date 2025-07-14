<!--
Jefferson Kim
IT-207-B01
Lab Practicum 1
coupon.php display
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />

	<link rel="stylesheet" href="../css/styles.css" type="text/css" />
	<title>Lab Practica 1b-1</title>
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
			include 'couponDist.html';
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