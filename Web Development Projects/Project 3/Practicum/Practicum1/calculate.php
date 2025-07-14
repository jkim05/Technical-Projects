<!--
Jefferson Kim
IT-207-B01
Lab Practicum 1 - calorie
distribution.php code
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head> 
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html">
		<title> Lab Practicum 1 Midway Coupons</title>
		<link rel="stylesheet" href="pract1.css" type="text/css"/>
	</head>
	<body>
<div id="prac1Form">
				<div class="heading">
					<h3>Metabolic Equivalents Energy Expender</h3>
				</div>
			<div class="output">
<?php	
				$weightData = $_POST["weight"];
				$runningData = $_POST["running"];
				$bballData = $_POST["bball"];
				$sleepData = $_POST["sleep"];

					if (empty($weightData)) {
									$weightData=0;
									echo "Please enter a value for weight!<br>";
					}
					else if($weightData <= 0) {
							echo "please enter a number greater than 0<br>";
					}
					if (empty($runningData)) {
									$RunningData=0;
									echo "Please enter a value for running!<br>";
					}
					else if($runningData <= 0) {
							echo "please enter a number greater than 0<br>";
					}
					if (empty($bballData)) {
									$bballData=0;
									echo "Please enter a value for basketball!<br>";
					}
					else if($bballData <= 0) {
							echo "please enter a number greater than 0<br>";
					}
					if (empty($sleepData)) {
									$sleepData=0;
									echo "Please enter a value for sleep!<br>";
					}
					else if($sleepData <= 0) {
							echo "please enter a number greater than 0<br>";
					}
					
					function conversionSleep($a) {
					$minSleep = $a * 60;
					
					return $minSleep;
					}
	
					function conversionWeight($b) {
					$kg = $b/2.2;
									
					return $kg;
					}
					
					$minSleep = conversionSleep($sleepData);
					$kg = conversionWeight($weightData);
					
					function calculateRCal($d, $t) {
					$runTotal = 0.0175*(10*$d)*$t;
									
					return $runTotal;
					}
					
					function calculateBCal($e, $g) {
					$ballTotal = 0.0175*(8*$e)*$g;
									
					return $ballTotal;
					}
					
					function calculateSCal($f, $h) {
					$sleepTotal = 0.0175*(1*$f)*$h;
									
					return $sleepTotal;
					}
					
					$runCal = calculateRCal($runningData, $kg);
					$ballCal = calculateBCal($bballData, $kg);
					$sleepCal = calculateSCal($minSleep, $kg);
					
					$total = $runCal + $ballCal + $sleepCal;
				echo "For a " .$weightData. " pound person, it is estimated that: ";
				echo "<br>" .(round($runCal)). " calories were burned running";
				echo "<br>" .(round($ballCal)). " calories were burned basketball";
				echo "<br>" .(round($sleepCal)). " calories were burned sleeping";
				echo '<div class="mod">';
				echo "Total calories burned:" .(round($total)). ".<br>";
				echo '</div>';
	?>
	</div>
</div>
</body>
</html>