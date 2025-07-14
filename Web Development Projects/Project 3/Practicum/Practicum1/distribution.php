<!--
Jefferson Kim
IT-207-B01
Lab Practicum 1 - coupon
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
					<h3>Contribution Distribution Results</h3>
				</div>
				<div class="output">
						<?php	
								$coupons = $_POST["coupons"];
								$candy = 10;
								$gum = 3;
								
								if (empty($coupons))
								{
									$coupons=0;
									echo "Please enter a value<br>";
								}
								else if ($coupons <= 0) {
									echo "Please enter a number greater than 0<br>";
								}
								
								$totalCandy = $coupons/$candy;
								
								$totalRemainder = $coupons % $totalCandy;
								
								$totalGum = $totalRemainder/$gum;
								
								$totalRemain = $coupons % $candy % $gum;
								
								
								
								$NumberOfCandys = array("", "O", "O O", "O O O", "O O O O", "O O O O O",
								"O O O O O O", "O O O O O O O", "O O O O O O O O", "O O O O O O O O O", 
								"O O O O O O O O O O", "O O O O O O O O O O O", "O O O O O O O O O O O O");
								
								
								
								echo "For " .$coupons. " you can get:";
								echo "<br>";
								echo "<br>" .(floor($totalCandy)). " candy bars<br>";
								echo $NumberOfCandys[$totalCandy];
								echo "<br>" .(floor($totalGum)). " gumballs<br>";
								echo $NumberOfCandys[$totalGum];
								echo "<br>" .(floor($totalRemain)). " coupons left over<br>";
								echo $NumberOfCandys[$totalRemain];
								echo '<div class="mod">';
								echo "Legend: Candy Bar = 10 | Gumball = 3<br>";
								echo '</div>';
						?>
					</div>
</div>
	</body>
</html>