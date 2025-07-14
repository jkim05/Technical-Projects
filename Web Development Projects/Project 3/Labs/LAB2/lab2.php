<!--
Jefferson Kim
Professor Uyar
IT-207-B01
Lab Practicum 1
officerHours.php action page
-->

<?php
	if (isset($_POST["timesMon"])) {
		$timesMon = $_POST["timesMon"];
	}
	if (isset($_POST["timesTue"])) {
		$timesTue = $_POST["timesTue"];
	}
	if (isset($_POST["timesWed"])) {
		$timesWed = $_POST["timesWed"];
	}
	if (isset($_POST["timesThu"])) {
		$timesThu = $_POST["timesThu"];
	}
	if (isset($_POST["timesFri"])) {
		$timesFri = $_POST["timesFri"];
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
		<title>Lab Assignment 2</title>
		<link rel="stylesheet" href="../css/labactivity2.css" type="text/css"/>
	</head>
	<body>
		<div id="main-content">
				<h3>Office Hours Sign Up</h3>
				<form action="calendar.php" method="post">
					<p><label for="id_userName">Student Name: </label><input id="id_userName" type="text" name="userName" />
					<label for="id_userMail">Student Email: </label><input id="id_userMail" type="text" name="userMail" />

					<?php
						if (isset($_POST["timesMon"])) {

							for ($i = 0; $i < count($_POST["timesMon"]); $i++) {
					?>
							<input type="hidden" name="timesMon2[]" value="<?php echo $timesMon[$i]; ?>" />
					<?php
						}
							}
					?>
					<?php
						if (isset($_POST["timesTue"])) {

							for ($i = 0; $i < count($_POST["timesTue"]); $i++) {
					?>
							<input type="hidden" name="timesTue2[]" value="<?php echo $timesTue[$i]; ?>" />
					<?php
						}
							}
					?>
					<?php
						if (isset($_POST["timesWed"])) {

							for ($i = 0; $i < count($_POST["timesWed"]); $i++) {
					?>
							<input type="hidden" name="timesWed2[]" value="<?php echo $timesWed[$i]; ?>" />
					<?php
						}
							}
					?>
					<?php
						if (isset($_POST["timesThu"])) {

							for ($i = 0; $i < count($_POST["timesThu"]); $i++) {
					?>
							<input type="hidden" name="timesThu2[]" value="<?php echo $timesThu[$i]; ?>" />
					<?php
						}
							}
					?>
					<?php
						if (isset($_POST["timesFri"])) {

							for ($i = 0; $i < count($_POST["timesFri"]); $i++) {
					?>
							<input type="hidden" name="timesFri2[]" value="<?php echo $timesFri[$i]; ?>" />
					<?php
						}
							}
					?>
					<input type="submit" name="Submit" value="Submit"/>
					<input type="reset" value="Clear"/>
					</p>
					<div class="calendar">
						<?php
						if(!empty($_POST["timesMon"]))
						{
							$timesMon = $_POST["timesMon"];
							$lengthTimesMon = count($timesMon);
						}
						if(!empty($_POST["timesTue"]))
						{
							$timesTue = $_POST["timesTue"];
							$lengthTimesTue = count($timesTue);
						}
						if(!empty($_POST["timesWed"]))
						{
							$timesWed = $_POST["timesWed"];
							$lengthTimesWed = count($timesWed);
						}
						if(!empty($_POST["timesThu"]))
						{
							$timesThu = $_POST["timesThu"];
							$lengthTimesThu = count($timesThu);
						}
						if(!empty($_POST["timesFri"]))
						{
							$timesFri = $_POST["timesFri"];
							$lengthTimesFri = count($timesFri);
						}

						function displayhiddentimes ($hiddentime)
						{
							if(!empty($hiddentime))
							{
								$hiddentimes = $hiddentime;
								return $hiddentimes;
							}
						}

						if(isset($_POST['Submit']))
						{
							$userName = $_POST['userName'];
							$userMail = $_POST['userMail'];
							$to = 'euyar@gmu.edu'/*'jkim316@gmu.edu'*/;
							$subject = 'IT-207-B01 | Office Hours Sign Up Form';
							$message = 'You have received a reservation from ' . $userName;
							$headers = 'From: ' . $userMail;

							$email = mail ($to, $subject, $message, $headers);
							$testemail = ($email) ? $testemail = "Email successfully sent from " . $_POST['userMail'] : $testemail = "Message failed to send";

							if (isset($_POST['timeradio']) and isset($userName) and isset($userMail))
							{
								echo $testemail;
							}
							else
							{
								echo 'Error: You must enter a name, email, and select a time!!';
							}


							if(!empty($_POST["timesMon2"]))
							{
								$timesMon2 = $_POST["timesMon2"];
							}
							if(!empty($_POST["timesTue2"]))
							{
								$timesTue2 = $_POST["timesTue2"];
							}
							if(!empty($_POST["timesWed2"]))
							{
								$timesWed2 = $_POST["timesWed2"];
							}
							if(!empty($_POST["timesThu2"]))
							{
								$timesThu2 = $_POST["timesThu2"];
							}
							if(!empty($_POST["timesFri2"]))
							{
								$timesFri2 = $_POST["timesFri2"];
							}
						}
							date_default_timezone_set('EST');
							$monthyear = date ("F, Y");
							$currentmonth = date("n");
							$currentday = date("j");
							$currentyear = date("Y");
							$totaldays = date("t");
							$dayonecurrentmonth = date("N", mktime(0,0,0,$currentmonth,1,$currentyear));
							$divmonth = '<div class="month">';
							$divmonth .= $monthyear;
							$divmonth .= '</div>';
							echo $divmonth;

							echo '<div class="row">
				  			<div class="cell"><div class="day">Monday</div></div>
				  			<div class="cell"><div class="day">Tuesday</div></div>
				  			<div class="cell"><div class="day">Wednesday</div></div>
				  			<div class="cell"><div class="day">Thursday</div></div>
				  			<div class="cell"><div class="day">Friday</div></div>
				  			<div class="cell"><div class="day">Saturday</div></div>
							<div class="cell"><div class="day">Sunday</div></div>
				  			<br class="clear"/>
				  		</div>';
							function displaycounter ($counter)
							{
								$totaldays = date("t");
								if($counter > 0 and $counter <= $totaldays)
								{
									return $counter;
								}
								else
								{
									return;
								}
							}
							function checkcounter ($dayonecurrentmonth,$day,$counter)
							{
								if ($day >= $dayonecurrentmonth)
								{
									$counter = ($day - $dayonecurrentmonth) + 1;
								}
								else {
								}
								return $counter;
							}
							$divfirstrow = '<div class="row">';
							$divfirstrow .= '<div class="cell">';
							$counter = 0;
							$divfirstrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,1,$counter)) . '</div>';
							if(!empty($_POST["timesMon"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,1,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,1,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesMon; $x++)
									{
										$divfirstrow .= '<br/><input type="radio" name="timeradio" value="';
										$divfirstrow .= $timesMon[$x];
										$divfirstrow .= 'firmon"/>';
										$divfirstrow .= $timesMon[$x];
										$divfirstrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'firmon') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divfirstrow .= '<br/>';
										$divfirstrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesMon2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,1,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,1,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesMon2); $x++)
											{
												if ($timeradioselectpart == $timesMon2[$x] and strpos($timeradioselect, 'firmon') !==false)
												{
												}
												else
												{
													$divfirstrow .= '<br/><input type="radio" name="timeradio" value="';
													$divfirstrow .= $timesMon2[$x];
													$divfirstrow .= 'firmon"/>';
													$divfirstrow .= $timesMon2[$x];
													$divfirstrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divfirstrow .= '</div>';
							$divfirstrow .= '<div class="cell">';
							$divfirstrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,2,$counter)) . '</div>';
							if(!empty($_POST["timesTue"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,2,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,2,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesTue; $x++)
									{
										$divfirstrow .= '<br/><input type="radio" name="timeradio" value="';
										$divfirstrow .= $timesTue[$x];
										$divfirstrow .= 'firtue"/>';
										$divfirstrow .= $timesTue[$x];
										$divfirstrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'firtue') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divfirstrow .= '<br/>';
										$divfirstrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesTue2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,2,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,2,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesTue2); $x++)
											{
												if ($timeradioselectpart == $timesTue2[$x] and strpos($timeradioselect, 'firtue') !==false)
												{
												}
												else
												{
													$divfirstrow .= '<br/><input type="radio" name="timeradio" value="';
													$divfirstrow .= $timesTue2[$x];
													$divfirstrow .= 'firtue"/>';
													$divfirstrow .= $timesTue2[$x];
													$divfirstrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divfirstrow .= '</div>';
							$divfirstrow .= '<div class="cell">';
							$divfirstrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,3,$counter)) . '</div>';
							if(!empty($_POST["timesWed"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,3,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,3,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesWed; $x++)
									{
										$divfirstrow .= '<br/><input type="radio" name="timeradio" value="';
										$divfirstrow .= $timesWed[$x];
										$divfirstrow .= 'firwed"/>';
										$divfirstrow .= $timesWed[$x];
										$divfirstrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'firwed') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divfirstrow .= '<br/>';
										$divfirstrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesWed2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,3,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,3,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesWed2); $x++)
											{
												if ($timeradioselectpart == $timesWed2[$x] and strpos($timeradioselect, 'firwed') !==false)
												{
												}
												else
												{
													$divfirstrow .= '<br/><input type="radio" name="timeradio" value="';
													$divfirstrow .= $timesWed2[$x];
													$divfirstrow .= 'firwed"/>';
													$divfirstrow .= $timesWed2[$x];
													$divfirstrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divfirstrow .= '</div>';
							$divfirstrow .= '<div class="cell">';
							$divfirstrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,4,$counter)) . '</div>';
							if(!empty($_POST["timesThu"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,4,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,4,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesThu; $x++)
									{
										$divfirstrow .= '<br/><input type="radio" name="timeradio" value="';
										$divfirstrow .= $timesThu[$x];
										$divfirstrow .= 'firthu"/>';
										$divfirstrow .= $timesThu[$x];
										$divfirstrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'firthu') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divfirstrow .= '<br/>';
										$divfirstrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesThu2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,4,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,4,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesThu2); $x++)
											{
												if ($timeradioselectpart == $timesThu2[$x] and strpos($timeradioselect, 'firthu') !==false)
												{
												}
												else
												{
													$divfirstrow .= '<br/><input type="radio" name="timeradio" value="';
													$divfirstrow .= $timesThu2[$x];
													$divfirstrow .= 'firthu"/>';
													$divfirstrow .= $timesThu2[$x];
													$divfirstrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divfirstrow .= '</div>';
							$divfirstrow .= '<div class="cell">';
							$divfirstrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,5,$counter)) . '</div>';
							if(!empty($_POST["timesFri"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,5,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,5,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesFri; $x++)
									{
										$divfirstrow .= '<br/><input type="radio" name="timeradio" value="';
										$divfirstrow .= $timesFri[$x];
										$divfirstrow .= 'firfri"/>';
										$divfirstrow .= $timesFri[$x];
										$divfirstrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'firfri') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divfirstrow .= '<br/>';
										$divfirstrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesFri2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,5,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,5,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesFri2); $x++)
											{
												if ($timeradioselectpart == $timesFri2[$x] and strpos($timeradioselect, 'firfri') !==false)
												{
												}
												else
												{
													$divfirstrow .= '<br/><input type="radio" name="timeradio" value="';
													$divfirstrow .= $timesFri2[$x];
													$divfirstrow .= 'firfri"/>';
													$divfirstrow .= $timesFri2[$x];
													$divfirstrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divfirstrow .= '</div>';
							$divfirstrow .= '<div class="cell">';
							$divfirstrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,6,$counter)) . '</div>';
							$divfirstrow .= '</div>';
							$divfirstrow .= '<div class="cell">';
							$divfirstrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,7,$counter)) . '</div>';
							$divfirstrow .= '</div>';
							$divfirstrow .= '<br class="clear"/>';
							$divfirstrow .= '</div>';
							echo $divfirstrow;

							$divsecondrow = '<div class="row">';
							$divsecondrow .= '<div class="cell">';
							$divsecondrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,8,$counter)) . '</div>';
							if(!empty($_POST["timesMon"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,8,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,8,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesMon; $x++)
									{
										$divsecondrow .= '<br/><input type="radio" name="timeradio" value="';
										$divsecondrow .= $timesMon[$x];
										$divsecondrow .= 'sermon"/>';
										$divsecondrow .= $timesMon[$x];
										$divsecondrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'sermon') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divsecondrow .= '<br/>';
										$divsecondrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesMon2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,8,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,8,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesMon2); $x++)
											{
												if ($timeradioselectpart == $timesMon2[$x] and strpos($timeradioselect, 'sermon') !==false)
												{
												}
												else
												{
													$divsecondrow .= '<br/><input type="radio" name="timeradio" value="';
													$divsecondrow .= $timesMon2[$x];
													$divsecondrow .= 'sermon"/>';
													$divsecondrow .= $timesMon2[$x];
													$divsecondrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divsecondrow .= '</div>';
							$divsecondrow .= '<div class="cell">';
							$divsecondrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,9,$counter)) . '</div>';
							if(!empty($_POST["timesTue"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,9,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,9,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesTue; $x++)
									{
										$divsecondrow .= '<br/><input type="radio" name="timeradio" value="';
										$divsecondrow .= $timesTue[$x];
										$divsecondrow .= 'sertue"/>';
										$divsecondrow .= $timesTue[$x];
										$divsecondrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'sertue') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divsecondrow .= '<br/>';
										$divsecondrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesTue2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,9,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,9,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesTue2); $x++)
											{
												if ($timeradioselectpart == $timesTue2[$x] and strpos($timeradioselect, 'sertue') !==false)
												{
												}
												else
												{
													$divsecondrow .= '<br/><input type="radio" name="timeradio" value="';
													$divsecondrow .= $timesTue2[$x];
													$divsecondrow .= 'sertue"/>';
													$divsecondrow .= $timesTue2[$x];
													$divsecondrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divsecondrow .= '</div>';
							$divsecondrow .= '<div class="cell">';
							$divsecondrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,10,$counter)) . '</div>';
							if(!empty($_POST["timesWed"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,10,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,10,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesWed; $x++)
									{
										$divsecondrow .= '<br/><input type="radio" name="timeradio" value="';
										$divsecondrow .= $timesWed[$x];
										$divsecondrow .= 'serwed"/>';
										$divsecondrow .= $timesWed[$x];
										$divsecondrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'serwed') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divsecondrow .= '<br/>';
										$divsecondrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesWed2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,10,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,10,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesWed2); $x++)
											{
												if ($timeradioselectpart == $timesWed2[$x] and strpos($timeradioselect, 'serwed') !==false)
												{
												}
												else
												{
													$divsecondrow .= '<br/><input type="radio" name="timeradio" value="';
													$divsecondrow .= $timesWed2[$x];
													$divsecondrow .= 'serwed"/>';
													$divsecondrow .= $timesWed2[$x];
													$divsecondrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divsecondrow .= '</div>';
							$divsecondrow .= '<div class="cell">';
							$divsecondrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,11,$counter)) . '</div>';
							if(!empty($_POST["timesThu"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,11,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,11,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesThu; $x++)
									{
										$divsecondrow .= '<br/><input type="radio" name="timeradio" value="';
										$divsecondrow .= $timesThu[$x];
										$divsecondrow .= 'serthu"/>';
										$divsecondrow .= $timesThu[$x];
										$divsecondrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'serthu') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divsecondrow .= '<br/>';
										$divsecondrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesThu2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,11,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,11,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesThu2); $x++)
											{
												if ($timeradioselectpart == $timesThu2[$x] and strpos($timeradioselect, 'serthu') !==false)
												{
												}
												else
												{
													$divsecondrow .= '<br/><input type="radio" name="timeradio" value="';
													$divsecondrow .= $timesThu2[$x];
													$divsecondrow .= 'serthu"/>';
													$divsecondrow .= $timesThu2[$x];
													$divsecondrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divsecondrow .= '</div>';
							$divsecondrow .= '<div class="cell">';
							$divsecondrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,12,$counter)) . '</div>';
							if(!empty($_POST["timesFri"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,12,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,12,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesFri; $x++)
									{
										$divsecondrow .= '<br/><input type="radio" name="timeradio" value="';
										$divsecondrow .= $timesFri[$x];
										$divsecondrow .= 'serfri"/>';
										$divsecondrow .= $timesFri[$x];
										$divsecondrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'serfri') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divsecondrow .= '<br/>';
										$divsecondrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesFri2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,12,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,12,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesFri2); $x++)
											{
												if ($timeradioselectpart == $timesFri2[$x] and strpos($timeradioselect, 'serfri') !==false)
												{
												}
												else
												{
													$divsecondrow .= '<br/><input type="radio" name="timeradio" value="';
													$divsecondrow .= $timesFri2[$x];
													$divsecondrow .= 'serfri"/>';
													$divsecondrow .= $timesFri2[$x];
													$divsecondrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divsecondrow .= '</div>';
							$divsecondrow .= '<div class="cell">';
							$divsecondrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,13,$counter)) . '</div>';
							$divsecondrow .= '</div>';
							$divsecondrow .= '<div class="cell">';
							$divsecondrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,14,$counter)) . '</div>';
							$divsecondrow .= '</div>';
							$divsecondrow .= '<br class="clear"/>';
							$divsecondrow .= '</div>';
							echo $divsecondrow;

							$divthirdrow = '<div class="row">';
							$divthirdrow .= '<div class="cell">';
							$divthirdrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,15,$counter)) . '</div>';
							if(!empty($_POST["timesMon"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,15,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,15,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesMon; $x++)
									{
										$divthirdrow .= '<br/><input type="radio" name="timeradio" value="';
										$divthirdrow .= $timesMon[$x];
										$divthirdrow .= 'thrmon"/>';
										$divthirdrow .= $timesMon[$x];
										$divthirdrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'thrmon') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divthirdrow .= '<br/>';
										$divthirdrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesMon2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,15,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,15,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesMon2); $x++)
											{
												if ($timeradioselectpart == $timesMon2[$x] and strpos($timeradioselect, 'thrmon') !==false)
												{
												}
												else
												{
													$divthirdrow .= '<br/><input type="radio" name="timeradio" value="';
													$divthirdrow .= $timesMon2[$x];
													$divthirdrow .= 'thrmon"/>';
													$divthirdrow .= $timesMon2[$x];
													$divthirdrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divthirdrow .= '</div>';
							$divthirdrow .= '<div class="cell">';
							$divthirdrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,16,$counter)) . '</div>';
							if(!empty($_POST["timesTue"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,16,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,16,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesTue; $x++)
									{
										$divthirdrow .= '<br/><input type="radio" name="timeradio" value="';
										$divthirdrow .= $timesTue[$x];
										$divthirdrow .= 'thrtue"/>';
										$divthirdrow .= $timesTue[$x];
										$divthirdrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'thrtue') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divthirdrow .= '<br/>';
										$divthirdrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesTue2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,16,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,16,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesTue2); $x++)
											{
												if ($timeradioselectpart == $timesTue2[$x] and strpos($timeradioselect, 'thrtue') !==false)
												{
												}
												else
												{
													$divthirdrow .= '<br/><input type="radio" name="timeradio" value="';
													$divthirdrow .= $timesTue2[$x];
													$divthirdrow .= 'thrtue"/>';
													$divthirdrow .= $timesTue2[$x];
													$divthirdrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divthirdrow .= '</div>';
							$divthirdrow .= '<div class="cell">';
							$divthirdrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,17,$counter)) . '</div>';
							if(!empty($_POST["timesWed"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,17,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,17,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesWed; $x++)
									{
										$divthirdrow .= '<br/><input type="radio" name="timeradio" value="';
										$divthirdrow .= $timesWed[$x];
										$divthirdrow .= 'thrwed"/>';
										$divthirdrow .= $timesWed[$x];
										$divthirdrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'thrwed') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divthirdrow .= '<br/>';
										$divthirdrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesWed2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,17,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,17,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesWed2); $x++)
											{
												if ($timeradioselectpart == $timesWed2[$x] and strpos($timeradioselect, 'thrwed') !==false)
												{
												}
												else
												{
													$divthirdrow .= '<br/><input type="radio" name="timeradio" value="';
													$divthirdrow .= $timesWed2[$x];
													$divthirdrow .= 'thrwed"/>';
													$divthirdrow .= $timesWed2[$x];
													$divthirdrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divthirdrow .= '</div>';
							$divthirdrow .= '<div class="cell">';
							$divthirdrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,18,$counter)) . '</div>';
							if(!empty($_POST["timesThu"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,18,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,18,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesThu; $x++)
									{
										$divthirdrow .= '<br/><input type="radio" name="timeradio" value="';
										$divthirdrow .= $timesThu[$x];
										$divthirdrow .= 'thrthu"/>';
										$divthirdrow .= $timesThu[$x];
										$divthirdrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'thrthu') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divthirdrow .= '<br/>';
										$divthirdrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesThu2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,18,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,18,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesThu2); $x++)
											{
												if ($timeradioselectpart == $timesThu2[$x] and strpos($timeradioselect, 'thrthu') !==false)
												{
												}
												else
												{
													$divthirdrow .= '<br/><input type="radio" name="timeradio" value="';
													$divthirdrow .= $timesThu2[$x];
													$divthirdrow .= 'thrthu"/>';
													$divthirdrow .= $timesThu2[$x];
													$divthirdrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divthirdrow .= '</div>';
							$divthirdrow .= '<div class="cell">';
							$divthirdrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,19,$counter)) . '</div>';
							if(!empty($_POST["timesFri"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,19,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,19,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesFri; $x++)
									{
										$divthirdrow .= '<br/><input type="radio" name="timeradio" value="';
										$divthirdrow .= $timesFri[$x];
										$divthirdrow .= 'thrfri"/>';
										$divthirdrow .= $timesFri[$x];
										$divthirdrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'thrfri') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divthirdrow .= '<br/>';
										$divthirdrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesFri2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,19,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,19,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesFri2); $x++)
											{
												if ($timeradioselectpart == $timesFri2[$x] and strpos($timeradioselect, 'thrfri') !==false)
												{
												}
												else
												{
													$divthirdrow .= '<br/><input type="radio" name="timeradio" value="';
													$divthirdrow .= $timesFri2[$x];
													$divthirdrow .= 'thrfri"/>';
													$divthirdrow .= $timesFri2[$x];
													$divthirdrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divthirdrow .= '</div>';
							$divthirdrow .= '<div class="cell">';
							$divthirdrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,20,$counter)) . '</div>';
							$divthirdrow .= '</div>';
							$divthirdrow .= '<div class="cell">';
							$divthirdrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,21,$counter)) . '</div>';
							$divthirdrow .= '</div>';
							$divthirdrow .= '<br class="clear"/>';
							$divthirdrow .= '</div>';
							echo $divthirdrow;

							$divfourthrow = '<div class="row">';
							$divfourthrow .= '<div class="cell">';
							$divfourthrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,22,$counter)) . '</div>';
							if(!empty($_POST["timesMon"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,22,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,22,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesMon; $x++)
									{
										$divfourthrow .= '<br/><input type="radio" name="timeradio" value="';
										$divfourthrow .= $timesMon[$x];
										$divfourthrow .= 'formon"/>';
										$divfourthrow .= $timesMon[$x];
										$divfourthrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'formon') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divfourthrow .= '<br/>';
										$divfourthrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesMon2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,22,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,22,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesMon2); $x++)
											{
												if ($timeradioselectpart == $timesMon2[$x] and strpos($timeradioselect, 'formon') !==false)
												{
												}
												else
												{
													$divfourthrow .= '<br/><input type="radio" name="timeradio" value="';
													$divfourthrow .= $timesMon2[$x];
													$divfourthrow .= 'formon"/>';
													$divfourthrow .= $timesMon2[$x];
													$divfourthrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divfourthrow .= '</div>';
							$divfourthrow .= '<div class="cell">';
							$divfourthrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,23,$counter)) . '</div>';
							if(!empty($_POST["timesTue"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,23,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,23,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesTue; $x++)
									{
										$divfourthrow .= '<br/><input type="radio" name="timeradio" value="';
										$divfourthrow .= $timesTue[$x];
										$divfourthrow .= 'fortue"/>';
										$divfourthrow .= $timesTue[$x];
										$divfourthrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'fortue') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divfourthrow .= '<br/>';
										$divfourthrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesTue2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,23,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,23,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesTue2); $x++)
											{
												if ($timeradioselectpart == $timesTue2[$x] and strpos($timeradioselect, 'fortue') !==false)
												{
												}
												else
												{
													$divfourthrow .= '<br/><input type="radio" name="timeradio" value="';
													$divfourthrow .= $timesTue2[$x];
													$divfourthrow .= 'fortue"/>';
													$divfourthrow .= $timesTue2[$x];
													$divfourthrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divfourthrow .= '</div>';
							$divfourthrow .= '<div class="cell">';
							$divfourthrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,24,$counter)) . '</div>';
							if(!empty($_POST["timesWed"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,24,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,24,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesWed; $x++)
									{
										$divfourthrow .= '<br/><input type="radio" name="timeradio" value="';
										$divfourthrow .= $timesWed[$x];
										$divfourthrow .= 'forwed"/>';
										$divfourthrow .= $timesWed[$x];
										$divfourthrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'forwed') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divfourthrow .= '<br/>';
										$divfourthrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesWed2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,24,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,24,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesWed2); $x++)
											{
												if ($timeradioselectpart == $timesWed2[$x] and strpos($timeradioselect, 'forwed') !==false)
												{
												}
												else
												{
													$divfourthrow .= '<br/><input type="radio" name="timeradio" value="';
													$divfourthrow .= $timesWed2[$x];
													$divfourthrow .= 'forwed"/>';
													$divfourthrow .= $timesWed2[$x];
													$divfourthrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divfourthrow .= '</div>';
							$divfourthrow .= '<div class="cell">';
							$divfourthrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,25,$counter)) . '</div>';
							if(!empty($_POST["timesThu"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,25,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,25,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesThu; $x++)
									{
										$divfourthrow .= '<br/><input type="radio" name="timeradio" value="';
										$divfourthrow .= $timesThu[$x];
										$divfourthrow .= 'forthu"/>';
										$divfourthrow .= $timesThu[$x];
										$divfourthrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'forthu') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divfourthrow .= '<br/>';
										$divfourthrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesThu2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,25,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,25,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesThu2); $x++)
											{
												if ($timeradioselectpart == $timesThu2[$x] and strpos($timeradioselect, 'forthu') !==false)
												{
												}
												else
												{
													$divfourthrow .= '<br/><input type="radio" name="timeradio" value="';
													$divfourthrow .= $timesThu2[$x];
													$divfourthrow .= 'forthu"/>';
													$divfourthrow .= $timesThu2[$x];
													$divfourthrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divfourthrow .= '</div>';
							$divfourthrow .= '<div class="cell">';
							$divfourthrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,26,$counter)) . '</div>';
							if(!empty($_POST["timesFri"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,26,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,26,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesFri; $x++)
									{
										$divfourthrow .= '<br/><input type="radio" name="timeradio" value="';
										$divfourthrow .= $timesFri[$x];
										$divfourthrow .= 'forfri"/>';
										$divfourthrow .= $timesFri[$x];
										$divfourthrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'forfri') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divfourthrow .= '<br/>';
										$divfourthrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesFri2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,26,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,26,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesFri2); $x++)
											{
												if ($timeradioselectpart == $timesFri2[$x] and strpos($timeradioselect, 'forfri') !==false)
												{
												}
												else
												{
													$divfourthrow .= '<br/><input type="radio" name="timeradio" value="';
													$divfourthrow .= $timesFri2[$x];
													$divfourthrow .= 'forfri"/>';
													$divfourthrow .= $timesFri2[$x];
													$divfourthrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divfourthrow .= '</div>';
							$divfourthrow .= '<div class="cell">';
							$divfourthrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,27,$counter)) . '</div>';
							$divfourthrow .= '</div>';
							$divfourthrow .= '<div class="cell">';
							$divfourthrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,28,$counter)) . '</div>';
							$divfourthrow .= '</div>';
							$divfourthrow .= '<br class="clear"/>';
							$divfourthrow .= '</div>';
							echo $divfourthrow;

							$divfifthrow = '<div class="row">';
							$divfifthrow .= '<div class="cell">';
							$divfifthrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,29,$counter)) . '</div>';
							if(!empty($_POST["timesMon"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,29,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,29,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesMon; $x++)
									{
										$divfifthrow .= '<br/><input type="radio" name="timeradio" value="';
										$divfifthrow .= $timesMon[$x];
										$divfifthrow .= 'fifrmon"/>';
										$divfifthrow .= $timesMon[$x];
										$divfifthrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'fifrmon') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-7);
										$divfifthrow .= '<br/>';
										$divfifthrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesMon2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,29,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,29,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-7);
											for($x = 0; $x < count($timesMon2); $x++)
											{
												if ($timeradioselectpart == $timesMon2[$x] and strpos($timeradioselect, 'fifrmon') !==false)
												{
												}
												else
												{
													$divfifthrow .= '<br/><input type="radio" name="timeradio" value="';
													$divfifthrow .= $timesMon2[$x];
													$divfifthrow .= 'fifrmon"/>';
													$divfifthrow .= $timesMon2[$x];
													$divfifthrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divfifthrow .= '</div>';
							$divfifthrow .= '<div class="cell">';
							$divfifthrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,30,$counter)) . '</div>';
							if(!empty($_POST["timesTue"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,30,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,30,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesTue; $x++)
									{
										$divfifthrow .= '<br/><input type="radio" name="timeradio" value="';
										$divfifthrow .= $timesTue[$x];
										$divfifthrow .= 'fifrtue"/>';
										$divfifthrow .= $timesTue[$x];
										$divfifthrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'fifrtue') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-7);
										$divfifthrow .= '<br/>';
										$divfifthrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesTue2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,30,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,30,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-7);
											for($x = 0; $x < count($timesTue2); $x++)
											{
												if ($timeradioselectpart == $timesTue2[$x] and strpos($timeradioselect, 'fifrtue') !==false)
												{
												}
												else
												{
													$divfifthrow .= '<br/><input type="radio" name="timeradio" value="';
													$divfifthrow .= $timesTue2[$x];
													$divfifthrow .= 'fifrtue"/>';
													$divfifthrow .= $timesTue2[$x];
													$divfifthrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divfifthrow .= '</div>';
							$divfifthrow .= '<div class="cell">';
							$divfifthrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,31,$counter)) . '</div>';
							if(!empty($_POST["timesWed"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,31,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,31,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesWed; $x++)
									{
										$divfifthrow .= '<br/><input type="radio" name="timeradio" value="';
										$divfifthrow .= $timesWed[$x];
										$divfifthrow .= 'fifrwed"/>';
										$divfifthrow .= $timesWed[$x];
										$divfifthrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'fifrwed') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-7);
										$divfifthrow .= '<br/>';
										$divfifthrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesWed2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,31,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,31,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-7);
											for($x = 0; $x < count($timesWed2); $x++)
											{
												if ($timeradioselectpart == $timesWed2[$x] and strpos($timeradioselect, 'fifrwed') !==false)
												{
												}
												else
												{
													$divfifthrow .= '<br/><input type="radio" name="timeradio" value="';
													$divfifthrow .= $timesWed2[$x];
													$divfifthrow .= 'fifrwed"/>';
													$divfifthrow .= $timesWed2[$x];
													$divfifthrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divfifthrow .= '</div>';
							$divfifthrow .= '<div class="cell">';
							$divfifthrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,32,$counter)) . '</div>';
							if(!empty($_POST["timesThu"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,32,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,32,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesThu; $x++)
									{
										$divfifthrow .= '<br/><input type="radio" name="timeradio" value="';
										$divfifthrow .= $timesThu[$x];
										$divfifthrow .= 'fifrthu"/>';
										$divfifthrow .= $timesThu[$x];
										$divfifthrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'fifrthu') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-7);
										$divfifthrow .= '<br/>';
										$divfifthrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesThu2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,32,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,32,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-7);
											for($x = 0; $x < count($timesThu2); $x++)
											{
												if ($timeradioselectpart == $timesThu2[$x] and strpos($timeradioselect, 'fifrthu') !==false)
												{
												}
												else
												{
													$divfifthrow .= '<br/><input type="radio" name="timeradio" value="';
													$divfifthrow .= $timesThu2[$x];
													$divfifthrow .= 'fifrthu"/>';
													$divfifthrow .= $timesThu2[$x];
													$divfifthrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divfifthrow .= '</div>';
							$divfifthrow .= '<div class="cell">';
							$divfifthrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,33,$counter)) . '</div>';
							if(!empty($_POST["timesFri"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,33,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,33,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesFri; $x++)
									{
										$divfifthrow .= '<br/><input type="radio" name="timeradio" value="';
										$divfifthrow .= $timesFri[$x];
										$divfifthrow .= 'fifrfri"/>';
										$divfifthrow .= $timesFri[$x];
										$divfifthrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'fifrfri') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-7);
										$divfifthrow .= '<br/>';
										$divfifthrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesFri2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,33,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,33,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-7);
											for($x = 0; $x < count($timesFri2); $x++)
											{
												if ($timeradioselectpart == $timesFri2[$x] and strpos($timeradioselect, 'fifrfri') !==false)
												{
												}
												else
												{
													$divfifthrow .= '<br/><input type="radio" name="timeradio" value="';
													$divfifthrow .= $timesFri2[$x];
													$divfifthrow .= 'fifrfri"/>';
													$divfifthrow .= $timesFri2[$x];
													$divfifthrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divfifthrow .= '</div>';
							$divfifthrow .= '<div class="cell">';
							$divfifthrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,34,$counter)) . '</div>';
							$divfifthrow .= '</div>';
							$divfifthrow .= '<div class="cell">';
							$divfifthrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,35,$counter)) . '</div>';
							$divfifthrow .= '</div>';
							$divfifthrow .= '<br class="clear"/>';
							$divfifthrow .= '</div>';
							echo $divfifthrow;

							$divsixthrow = '<div class="row">';
							$divsixthrow .= '<div class="cell">';
							$divsixthrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,36,$counter)) . '</div>';
							if(!empty($_POST["timesMon"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,36,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,36,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesMon; $x++)
									{
										$divsixthrow .= '<br/><input type="radio" name="timeradio" value="';
										$divsixthrow .= $timesMon[$x];
										$divsixthrow .= 'sirmon"/>';
										$divsixthrow .= $timesMon[$x];
										$divsixthrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'sirmon') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divsixthrow .= '<br/>';
										$divsixthrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesMon2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,36,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,36,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesMon2); $x++)
											{
												if ($timeradioselectpart == $timesMon2[$x] and strpos($timeradioselect, 'sirmon') !==false)
												{
												}
												else
												{
													$divsixthrow .= '<br/><input type="radio" name="timeradio" value="';
													$divsixthrow .= $timesMon2[$x];
													$divsixthrow .= 'sirmon"/>';
													$divsixthrow .= $timesMon2[$x];
													$divsixthrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divsixthrow .= '</div>';
							$divsixthrow .= '<div class="cell">';
							$divsixthrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,37,$counter)) . '</div>';
							if(!empty($_POST["timesTue"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,37,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,37,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesTue; $x++)
									{
										$divsixthrow .= '<br/><input type="radio" name="timeradio" value="';
										$divsixthrow .= $timesTue[$x];
										$divsixthrow .= 'sirtue"/>';
										$divsixthrow .= $timesTue[$x];
										$divsixthrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'sirtue') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divsixthrow .= '<br/>';
										$divsixthrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesTue2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,37,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,37,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesTue2); $x++)
											{
												if ($timeradioselectpart == $timesTue2[$x] and strpos($timeradioselect, 'sirtue') !==false)
												{
												}
												else
												{
													$divsixthrow .= '<br/><input type="radio" name="timeradio" value="';
													$divsixthrow .= $timesTue2[$x];
													$divsixthrow .= 'sirtue"/>';
													$divsixthrow .= $timesTue2[$x];
													$divsixthrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divsixthrow .= '</div>';
							$divsixthrow .= '<div class="cell">';
							$divsixthrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,38,$counter)) . '</div>';
							if(!empty($_POST["timesWed"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,38,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,38,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesWed; $x++)
									{
										$divsixthrow .= '<br/><input type="radio" name="timeradio" value="';
										$divsixthrow .= $timesWed[$x];
										$divsixthrow .= 'sirwed"/>';
										$divsixthrow .= $timesWed[$x];
										$divsixthrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'sirwed') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divsixthrow .= '<br/>';
										$divsixthrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesWed2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,38,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,38,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesWed2); $x++)
											{
												if ($timeradioselectpart == $timesWed2[$x] and strpos($timeradioselect, 'sirwed') !==false)
												{
												}
												else
												{
													$divsixthrow .= '<br/><input type="radio" name="timeradio" value="';
													$divsixthrow .= $timesWed2[$x];
													$divsixthrow .= 'sirwed"/>';
													$divsixthrow .= $timesWed2[$x];
													$divsixthrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divsixthrow .= '</div>';
							$divsixthrow .= '<div class="cell">';
							$divsixthrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,39,$counter)) . '</div>';
							if(!empty($_POST["timesThu"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,39,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,39,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesThu; $x++)
									{
										$divsixthrow .= '<br/><input type="radio" name="timeradio" value="';
										$divsixthrow .= $timesThu[$x];
										$divsixthrow .= 'sirthu"/>';
										$divsixthrow .= $timesThu[$x];
										$divsixthrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'sirthu') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divsixthrow .= '<br/>';
										$divsixthrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesThu2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,39,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,39,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesThu2); $x++)
											{
												if ($timeradioselectpart == $timesThu2[$x] and strpos($timeradioselect, 'sirthu') !==false)
												{
												}
												else
												{
													$divsixthrow .= '<br/><input type="radio" name="timeradio" value="';
													$divsixthrow .= $timesThu2[$x];
													$divsixthrow .= 'sirthu"/>';
													$divsixthrow .= $timesThu2[$x];
													$divsixthrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divsixthrow .= '</div>';
							$divsixthrow .= '<div class="cell">';
							$divsixthrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,40,$counter)) . '</div>';
							if(!empty($_POST["timesFri"]))
							{
								if(displaycounter(checkcounter($dayonecurrentmonth,40,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,40,$counter)) <= $totaldays)
								{
									for($x = 0; $x < $lengthTimesFri; $x++)
									{
										$divsixthrow .= '<br/><input type="radio" name="timeradio" value="';
										$divsixthrow .= $timesFri[$x];
										$divsixthrow .= 'sirfri"/>';
										$divsixthrow .= $timesFri[$x];
										$divsixthrow .= '<br/>';
									}
								}
							}
							if(isset($_POST['Submit']))
							{
								if (isset($_POST['timeradio']))
								{
									$timeradioselect = $_POST['timeradio'];
									if (strpos($timeradioselect, 'sirfri') !==false)
									{
										$timeradioselectpart = substr($timeradioselect,0,-6);
										$divsixthrow .= '<br/>';
										$divsixthrow .= '<div class="radiosubmit">' . $timeradioselectpart . ' -- ' . $userName . '</div>';
									}
								}
								if(!empty($_POST["timesFri2"]))
								{
									if(displaycounter(checkcounter($dayonecurrentmonth,40,$counter)) > 0 and displaycounter(checkcounter($dayonecurrentmonth,40,$counter)) <= $totaldays)
									{
										if (isset($_POST['timeradio']))
										{
											$timeradioselectpart = substr($timeradioselect,0,-6);
											for($x = 0; $x < count($timesFri2); $x++)
											{
												if ($timeradioselectpart == $timesFri2[$x] and strpos($timeradioselect, 'sirfri') !==false)
												{
												}
												else
												{
													$divsixthrow .= '<br/><input type="radio" name="timeradio" value="';
													$divsixthrow .= $timesFri2[$x];
													$divsixthrow .= 'sirfri"/>';
													$divsixthrow .= $timesFri2[$x];
													$divsixthrow .= '<br/>';
												}
											}
										}
									}
								}
							}
							$divsixthrow .= '</div>';
							$divsixthrow .= '<div class="cell">';
							$divsixthrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,41,$counter)) . '</div>';
							$divsixthrow .= '</div>';
							$divsixthrow .= '<div class="cell">';
							$divsixthrow .= '<div class="day">' . displaycounter(checkcounter($dayonecurrentmonth,42,$counter)) . '</div>';
							$divsixthrow .= '</div>';
							$divsixthrow .= '<br class="clear"/>';
							$divsixthrow .= '</div>';
							echo $divsixthrow;

						?>
					</div>
				</form>
		</div>
	</body>
</html>