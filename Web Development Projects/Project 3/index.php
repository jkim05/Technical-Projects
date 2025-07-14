<!--
Jefferson Kim
IT-207-DL1
index.php
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />

	<link rel="stylesheet" href="css/styles.css" type="text/css" />
	
	<title>Lab Practice</title>
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

<div class="top-half">
	<div class="pic-wrapper">	
		<div class ="photo">
			<img src="me.jpg" alt="me">
		</div>
	</div>

	<div class="summary">
		<h3> Summary </h3>
		<ul>
			<li> Personal </li><br>
				 <ul>
					<li>Located in Bristow, VA</li>
					<li>South Korean heritage</li>
					<li>Bodybuilding</li>
				</ul>
				</br>
			<li> Academic </li><br>
				<ul>
					<li>Cisco networking</li>
					<li>Website design</li>
					<li>Programming</li>
				</ul>
		</ul>
	</div>
</div>
	<div class ="personal">
	<h3><center>Personal & Professional Details</center></h3>
		<p>I’m currently a Senior in George Mason University majoring in Cyber Security. 
		Currently seeking an internship or entry level employment opportunity within the 
		IT Cyber Security field that encourages professional growth and challenges my current 
		skill set. I enjoy pushing myself in the gym, playing basketball, and watching the NFL
		in my freetime. I always promote living a healthy lifestyle and working to better 
		ourselves everyday. I'm eager to see what the future holds for me.</p>
	</div>
	
<div class="school">
	<img src="gmu_logo.png" alt="gmu logo">
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