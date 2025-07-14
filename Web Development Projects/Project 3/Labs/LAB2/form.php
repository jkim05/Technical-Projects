<!--
Jefferson Kim
IT-207-DL1
Lab Activity 02 officeHoursSetup.PHP
-->

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
			<h3>Office Hours Setup Form</h3>
			<div class="officehours">
				<div class="day">
					<div class="daycell">Day:</div>
					<div class="daycell">Monday</div>
					<div class="daycell">Tuesday</div>
					<div class="daycell">Wednesday</div>
					<div class="daycell">Thursday</div>
					<div class="daycell">Friday</div>
				</div><br/><br/><br/>
				<div id="lab2form">
				<form method="POST" action="calendar.php">
						<div class="time">
							<div class="timecell">Time:</div>
							<div class="timecell">
								<select name="timesMon[]" multiple="multiple">
									<option value="7:00am">7:00am</option>
									<option value="7:30am">7:30am</option>
									<option value="8:00am">8:00am</option>
									<option value="8:30am">8:30am</option>
									<option value="9:00am">9:00am</option>
									<option value="9:30am">9:30am</option>
									<option value="10:00am">10:00am</option>
									<option value="10:30am">10:30am</option>
									<option value="11:00am">11:00am</option>
									<option value="11:30am">11:30am</option>
									<option value="12:00pm">12:00pm</option>
									<option value="12:30pm">12:30pm</option>
									<option value="1:00pm">1:00pm</option>
									<option value="1:30pm">1:30pm</option>
									<option value="2:00pm">2:00pm</option>
									<option value="2:30pm">2:30pm</option>
									<option value="3:00pm">3:00pm</option>
									<option value="3:30pm">3:30pm</option>
									<option value="4:00pm">4:00pm</option>
									<option value="4:30pm">4:30pm</option>
									<option value="5:00pm">5:00pm</option>
									<option value="5:30pm">5:30pm</option>
									<option value="6:00pm">6:00pm</option>
									<option value="6:30pm">6:30pm</option>
									<option value="7:00pm">7:00pm</option>
									<option value="7:30pm">7:30pm</option>
									<option value="8:00pm">8:00pm</option>
									<option value="8:30pm">8:30pm</option>
									<option value="9:00pm">9:00pm</option>
									<option value="9:30pm">9:30pm</option>
								</select>
							</div>
							<div class="timecell">
								<select name="timesTue[]" multiple="multiple">
									<option value="7:00am">7:00am</option>
									<option value="7:30am">7:30am</option>
									<option value="8:00am">8:00am</option>
									<option value="8:30am">8:30am</option>
									<option value="9:00am">9:00am</option>
									<option value="9:30am">9:30am</option>
									<option value="10:00am">10:00am</option>
									<option value="10:30am">10:30am</option>
									<option value="11:00am">11:00am</option>
									<option value="11:30am">11:30am</option>
									<option value="12:00pm">12:00pm</option>
									<option value="12:30pm">12:30pm</option>
									<option value="1:00pm">1:00pm</option>
									<option value="1:30pm">1:30pm</option>
									<option value="2:00pm">2:00pm</option>
									<option value="2:30pm">2:30pm</option>
									<option value="3:00pm">3:00pm</option>
									<option value="3:30pm">3:30pm</option>
									<option value="4:00pm">4:00pm</option>
									<option value="4:30pm">4:30pm</option>
									<option value="5:00pm">5:00pm</option>
									<option value="5:30pm">5:30pm</option>
									<option value="6:00pm">6:00pm</option>
									<option value="6:30pm">6:30pm</option>
									<option value="7:00pm">7:00pm</option>
									<option value="7:30pm">7:30pm</option>
									<option value="8:00pm">8:00pm</option>
									<option value="8:30pm">8:30pm</option>
									<option value="9:00pm">9:00pm</option>
									<option value="9:30pm">9:30pm</option>
								</select>
							</div>
							<div class="timecell">
								<select name="timesWed[]" multiple="multiple">
									<option value="7:00am">7:00am</option>
									<option value="7:30am">7:30am</option>
									<option value="8:00am">8:00am</option>
									<option value="8:30am">8:30am</option>
									<option value="9:00am">9:00am</option>
									<option value="9:30am">9:30am</option>
									<option value="10:00am">10:00am</option>
									<option value="10:30am">10:30am</option>
									<option value="11:00am">11:00am</option>
									<option value="11:30am">11:30am</option>
									<option value="12:00pm">12:00pm</option>
									<option value="12:30pm">12:30pm</option>
									<option value="1:00pm">1:00pm</option>
									<option value="1:30pm">1:30pm</option>
									<option value="2:00pm">2:00pm</option>
									<option value="2:30pm">2:30pm</option>
									<option value="3:00pm">3:00pm</option>
									<option value="3:30pm">3:30pm</option>
									<option value="4:00pm">4:00pm</option>
									<option value="4:30pm">4:30pm</option>
									<option value="5:00pm">5:00pm</option>
									<option value="5:30pm">5:30pm</option>
									<option value="6:00pm">6:00pm</option>
									<option value="6:30pm">6:30pm</option>
									<option value="7:00pm">7:00pm</option>
									<option value="7:30pm">7:30pm</option>
									<option value="8:00pm">8:00pm</option>
									<option value="8:30pm">8:30pm</option>
									<option value="9:00pm">9:00pm</option>
									<option value="9:30pm">9:30pm</option>
								</select>
							</div>
							<div class="timecell">
								<select name="timesThu[]" multiple="multiple">
									<option value="7:00am">7:00am</option>
									<option value="7:30am">7:30am</option>
									<option value="8:00am">8:00am</option>
									<option value="8:30am">8:30am</option>
									<option value="9:00am">9:00am</option>
									<option value="9:30am">9:30am</option>
									<option value="10:00am">10:00am</option>
									<option value="10:30am">10:30am</option>
									<option value="11:00am">11:00am</option>
									<option value="11:30am">11:30am</option>
									<option value="12:00pm">12:00pm</option>
									<option value="12:30pm">12:30pm</option>
									<option value="1:00pm">1:00pm</option>
									<option value="1:30pm">1:30pm</option>
									<option value="2:00pm">2:00pm</option>
									<option value="2:30pm">2:30pm</option>
									<option value="3:00pm">3:00pm</option>
									<option value="3:30pm">3:30pm</option>
									<option value="4:00pm">4:00pm</option>
									<option value="4:30pm">4:30pm</option>
									<option value="5:00pm">5:00pm</option>
									<option value="5:30pm">5:30pm</option>
									<option value="6:00pm">6:00pm</option>
									<option value="6:30pm">6:30pm</option>
									<option value="7:00pm">7:00pm</option>
									<option value="7:30pm">7:30pm</option>
									<option value="8:00pm">8:00pm</option>
									<option value="8:30pm">8:30pm</option>
									<option value="9:00pm">9:00pm</option>
									<option value="9:30pm">9:30pm</option>
								</select>
							</div>
							<div class="timecell">
								<select name="timesFri[]" multiple="multiple">
									<option value="7:00am">7:00am</option>
									<option value="7:30am">7:30am</option>
									<option value="8:00am">8:00am</option>
									<option value="8:30am">8:30am</option>
									<option value="9:00am">9:00am</option>
									<option value="9:30am">9:30am</option>
									<option value="10:00am">10:00am</option>
									<option value="10:30am">10:30am</option>
									<option value="11:00am">11:00am</option>
									<option value="11:30am">11:30am</option>
									<option value="12:00pm">12:00pm</option>
									<option value="12:30pm">12:30pm</option>
									<option value="1:00pm">1:00pm</option>
									<option value="1:30pm">1:30pm</option>
									<option value="2:00pm">2:00pm</option>
									<option value="2:30pm">2:30pm</option>
									<option value="3:00pm">3:00pm</option>
									<option value="3:30pm">3:30pm</option>
									<option value="4:00pm">4:00pm</option>
									<option value="4:30pm">4:30pm</option>
									<option value="5:00pm">5:00pm</option>
									<option value="5:30pm">5:30pm</option>
									<option value="6:00pm">6:00pm</option>
									<option value="6:30pm">6:30pm</option>
									<option value="7:00pm">7:00pm</option>
									<option value="7:30pm">7:30pm</option>
									<option value="8:00pm">8:00pm</option>
									<option value="8:30pm">8:30pm</option>
									<option value="9:00pm">9:00pm</option>
									<option value="9:30pm">9:30pm</option>
								</select>
							</div>
							<div class="buttons">
							<p><input type="reset" value="Clear"/>
							<input type="submit" value="Submit"/></p>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>