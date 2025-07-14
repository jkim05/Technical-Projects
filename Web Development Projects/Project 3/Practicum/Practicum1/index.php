<!--
Jefferson Kim
IT-207-DL1
Lab Practicum 1 Index.php
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head> 
		<meta http-equiv="Content-Type" content="text/html"; charset-utf-8"/>
		<title> Lab Practicum 1 METS Calculator</title>
		<link rel="stylesheet" href="labPracticum1.css" type="text/css"/>
	</head>
	<body>
		<div id="content">
			<div class="pract">
				<div class="heading"><h3>Metabolic Equivalents Energy Expender</h3></div>
				<div>
					<form action="/~jkim316/IT207/LABP1/calculate.php" method="post">
					<div class="inputs">
						<p>
							<label for="id_weight">Weight: </label><input id="id_weight" type="number" name="weight" /> pounds<br/>
							<label for="id_runMin">Running (at 6mph) <br/> <input id="id_runMin" type="number" name="running"> minutes<br/>
							<label for="id_bBall">Basketball<br/>Duration: <input id="id_bBall" type="number" name="bball"> minutes<br/>
							<label for="id_sleep">Sleep<br/>Duration: <input id="id_sleep" type="number" name="sleep"> hours<br/></div>
								
							<div class="bottom"><input type="submit" value="Calculate"></div>
						</form>
				</div>
		</div>
			 <p><a href="/~jkim316/IT207/LABP1/couponDist.html"> Part 2 of Practicum 1</a></p>
		<?php
			 echo "Last Modified: " . date ("H:i F d, Y T |", getlastmod());
		?>
	 </div>
	</body>
</html>