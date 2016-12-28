<!DOCTYPE html>
<html lang="en">
<head>
	<title>Timesheet Calculator</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="screen">
	<link href="css/bootstrap-theme.css" type="text/css" rel="stylesheet" media="screen">

	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen">
</head>
<body>
	<div class="container-fluid">
		<div class="page-header">
			<h1>Timesheet Calculator</h1>
			<p class="lead">A calculator for timesheets written in PHP</p>
		</div>

		<?php

		$hours = "<option value='1'>1</option>
				  <option value='2'>2</option>
				  <option value='3'>3</option>
				  <option value='4'>4</option>
				  <option value='5'>5</option>
				  <option value='6'>6</option>
				  <option value='7'>7</option>
				  <option value='8'>8</option>
				  <option value='9'>9</option>
				  <option value='10'>10</option>
				  <option value='11'>11</option>
				  <option value='12'>12</option>";

		$minutes = "<option value='00'>00</option>
					<option value='01'>01</option>
					<option value='02'>02</option>
					<option value='03'>03</option>
					<option value='04'>04</option>
					<option value='05'>05</option>
					<option value='06'>06</option>
					<option value='07'>07</option>
					<option value='08'>08</option>
					<option value='09'>09</option>
					<option value='10'>10</option>
					<option value='11'>11</option>
					<option value='12'>12</option>
					<option value='13'>13</option>
					<option value='14'>14</option>
					<option value='15'>15</option>
					<option value='16'>16</option>
					<option value='17'>17</option>
					<option value='18'>18</option>
					<option value='19'>19</option>
					<option value='20'>20</option>
					<option value='21'>21</option>
					<option value='22'>22</option>
					<option value='23'>23</option>
					<option value='24'>24</option>
					<option value='25'>25</option>
					<option value='26'>26</option>
					<option value='27'>27</option>
					<option value='28'>28</option>
					<option value='29'>29</option>
					<option value='30'>30</option>
					<option value='31'>31</option>
					<option value='32'>32</option>
					<option value='33'>33</option>
					<option value='34'>34</option>
					<option value='35'>35</option>
					<option value='36'>36</option>
					<option value='37'>37</option>
					<option value='38'>38</option>
					<option value='39'>39</option>
					<option value='40'>40</option>
					<option value='41'>41</option>
					<option value='42'>42</option>
					<option value='43'>43</option>
					<option value='44'>44</option>
					<option value='45'>45</option>
					<option value='46'>46</option>
					<option value='47'>47</option>
					<option value='48'>48</option>
					<option value='49'>49</option>
					<option value='50'>50</option>
					<option value='51'>51</option>
					<option value='52'>52</option>
					<option value='53'>53</option>
					<option value='54'>54</option>
					<option value='55'>55</option>
					<option value='56'>56</option>
					<option value='57'>57</option>
					<option value='58'>58</option>
					<option value='59'>59</option>";

		$ampm = "<option value='AM'>AM</option>
				 <option value='PM'>PM</option>";

		print "<form method='POST' action='index.php'>
			<table class='table table-bordered'>
			<thead>
				<tr>
					<th>Weekday</th>
					<th class='time'>Start Time</th>
					<th class='time'>Finish Time</th>
				</tr>
				<tr>
					<td>Friday</td>
					<td class='time'>
						<select name='fristarthours'>
							 print $hours;
						</select>
						<select name='fristartminutes'>
							print $minutes;
						</select>
						<select name='fristartampm'>
							print $ampm;
						</select>
					</td>
					<td class='time'>
						<select name='frifinishhours'>
							 print $hours;
						</select>
						<select name='frifinishminutes'>
							print $minutes;
						</select>
						<select name='frifinishampm'>
							print $ampm;
						</select>
					</td>
				</tr>
				<tr>
					<td>Saturday</td>
					<td class='time'>
						<select name='satstarthours'>
							 print $hours;
						</select>
						<select name='satstartminutes'>
							print $minutes;
						</select>
						<select name='satstartampm'>
							print $ampm;
						</select>
					</td>
					<td class='time'>
						<select name='satfinishhours'>
							 print $hours;
						</select>
						<select name='satfinishminutes'>
							print $minutes;
						</select>
						<select name='satfinishampm'>
							print $ampm;
						</select>
					</td>
				</tr>
				<tr>
					<td>Sunday</td>
					<td class='time'>
						<select name='sunstarthours'>
							 print $hours;
						</select>
						<select name='sunstartminutes'>
							print $minutes;
						</select>
						<select name='sunstartampm'>
							print $ampm;
						</select>
					</td>
					<td class='time'>
						<select name='sunfinishhours'>
							 print $hours;
						</select>
						<select name='sunfinishminutes'>
							print $minutes;
						</select>
						<select name='sunfinishampm'>
							print $ampm;
						</select>
					</td>
				</tr>
				<tr>
					<td>Monday</td>
					<td class='time'>
						<select name='monstarthours'>
							 $hours;
						</select>
						<select name='monstartminutes'>
							$minutes;
						</select>
						<select name='monstartampm'>
							$ampm;
						</select>
					</td>
					<td class='time'>
						<select name='monfinishhours'>
							 $hours;
						</select>
						<select name='monfinishminutes'>
							$minutes;
						</select>
						<select name='monfinishampm'>
							$ampm;
						</select>
					</td>
				</tr>
				<tr>
					<td>Tuesday</td>
					<td class='time'>
						<select name='tuestarthours'>
							 print $hours;
						</select>
						<select name='tuestartminutes'>
							print $minutes;
						</select>
						<select name='tuestartampm'>
							print $ampm;
						</select>
					</td>
					<td class='time'>
						<select name='tuefinishhours'>
							 print $hours;
						</select>
						<select name='tuefinishminutes'>
							print $minutes;
						</select>
						<select name='tuefinishampm'>
							print $ampm;
						</select>
					</td>
				</tr>
				<tr>
					<td>Wednesday</td>
					<td class='time'>
						<select name='wedstarthours'>
							 print $hours;
						</select>
						<select name='wedstartminutes'>
							print $minutes;
						</select>
						<select name='wedstartampm'>
							print $ampm;
						</select>
					</td>
					<td class='time'>
						<select name='wedfinishhours'>
							 print $hours;
						</select>
						<select name='wedfinishminutes'>
							print $minutes;
						</select>
						<select name='wedfinishampm'>
							print $ampm;
						</select>
					</td>
				</tr>
				<tr>
					<td>Thursday</td>
					<td class='time'>
						<select name='thustarthours'>
							 print $hours;
						</select>
						<select name='thustartminutes'>
							print $minutes;
						</select>
						<select name='thustartampm'>
							print $ampm;
						</select>
					</td>
					<td class='time'>
						<select name='thufinishhours'>
							 print $hours;
						</select>
						<select name='thufinishminutes'>
							print $minutes;
						</select>
						<select name='thufinishampm'>
							print $ampm;
						</select>
					</td>
				</tr>
			</thead>
		</table>
		<br />
		<div id='centerbtn'>
			<input type='submit' class='btn btn-primary' value='Calculate'>
		</div>
		</form>";

		print "<br />";
		print "<br />";

		print "<div id='output'>";

			if ($_POST) {

				// Monday //
				$mondaystart = ($_POST['monstarthours'] . ":" . $_POST['monstartminutes'] . " " . $_POST['monstartampm']);
				$mondayfinish = ($_POST['monfinishhours'] . ":" . $_POST['monfinishminutes'] . " " . $_POST['monfinishampm']);

				$submondaystart = strtotime($mondaystart);
				$submondayfinish = strtotime($mondayfinish);

				$calcmondaystart = new DateTime($mondaystart);
				$calcmondayfinish = new DateTime($mondayfinish);

				$finalmondaystart = date('g:i A', $submondaystart);
				$finalmondayfinish = date('g:i A', $submondayfinish);

				$mondifference = $calcmondaystart->diff($calcmondayfinish);

				// Tuesday//
				$tuesdaystart = ($_POST['tuestarthours'] . ":" . $_POST['tuestartminutes'] . " " . $_POST['tuestartampm']);
				$tuesdayfinish = ($_POST['tuefinishhours'] . ":" . $_POST['tuefinishminutes'] . " " . $_POST['tuefinishampm']);

				$subtuesdaystart = strtotime($tuesdaystart);
				$subtuesdayfinish = strtotime($tuesdayfinish);

				$calctuesdaystart = new DateTime($tuesdaystart);
				$calctuesdayfinish = new DateTime($tuesdayfinish);

				$finaltuesdaystart = date('g:i A', $subtuesdaystart);
				$finaltuesdayfinish = date('g:i A', $subtuesdayfinish);

				$tuedifference = $calctuesdaystart->diff($calctuesdayfinish);

				// Wednesday //
				$wednesdaystart = ($_POST['wedstarthours'] . ":" . $_POST['wedstartminutes'] . " " . $_POST['wedstartampm']);
				$wednesdayfinish = ($_POST['wedfinishhours'] . ":" . $_POST['wedfinishminutes'] . " " . $_POST['wedfinishampm']);

				$subwednesdaystart = strtotime($wednesdaystart);
				$subwednesdayfinish = strtotime($wednesdayfinish);

				$calcwednesdaystart = new DateTime($wednesdaystart);
				$calcwednesdayfinish = new DateTime($wednesdayfinish);

				$finalwednesdaystart = date('g:i A', $subwednesdaystart);
				$finalwednesdayfinish = date('g:i A', $subwednesdayfinish);

				$weddifference = $calcwednesdaystart->diff($calcwednesdayfinish);

				// Thursday //
				$thursdaystart = ($_POST['thustarthours'] . ":" . $_POST['thustartminutes'] . " " . $_POST['thustartampm']);
				$thursdayfinish = ($_POST['thufinishhours'] . ":" . $_POST['thufinishminutes'] . " " . $_POST['thufinishampm']);

				$subthursdaystart = strtotime($thursdaystart);
				$subthursdayfinish = strtotime($thursdayfinish);

				$calcthursdaystart = new DateTime($thursdaystart);
				$calcthursdayfinish = new DateTime($thursdayfinish);

				$finalthursdaystart = date('g:i A', $subthursdaystart);
				$finalthursdayfinish = date('g:i A', $subthursdayfinish);

				$thudifference = $calcthursdaystart->diff($calcthursdayfinish);

				// Friday //
				$fridaystart = ($_POST['fristarthours'] . ":" . $_POST['fristartminutes'] . " " . $_POST['fristartampm']);
				$fridayfinish = ($_POST['frifinishhours'] . ":" . $_POST['frifinishminutes'] . " " . $_POST['frifinishampm']);

				$subfridaystart = strtotime($fridaystart);
				$subfridayfinish = strtotime($fridayfinish);

				$calcfridaystart = new DateTime($fridaystart);
				$calcfridayfinish = new DateTime($fridayfinish);

				$finalfridaystart = date('g:i A', $subfridaystart);
				$finalfridayfinish = date('g:i A', $subfridayfinish);

				$fridifference = $calcfridaystart->diff($calcfridayfinish);

				// Saturday //
				$saturdaystart = ($_POST['satstarthours'] . ":" . $_POST['satstartminutes'] . " " . $_POST['satstartampm']);
				$saturdayfinish = ($_POST['satfinishhours'] . ":" . $_POST['satfinishminutes'] . " " . $_POST['satfinishampm']);

				$subsaturdaystart = strtotime($saturdaystart);
				$subsaturdayfinish = strtotime($saturdayfinish);

				$calcsaturdaystart = new DateTime($saturdaystart);
				$calcsaturdayfinish = new DateTime($saturdayfinish);

				$finalsaturdaystart = date('g:i A', $subsaturdaystart);
				$finalsaturdayfinish = date('g:i A', $subsaturdayfinish);

				$satdifference = $calcsaturdaystart->diff($calcsaturdayfinish);

				// Sunday //
				$sundaystart = ($_POST['sunstarthours'] . ":" . $_POST['sunstartminutes'] . " " . $_POST['sunstartampm']);
				$sundayfinish = ($_POST['sunfinishhours'] . ":" . $_POST['sunfinishminutes'] . " " . $_POST['sunfinishampm']);

				$subsundaystart = strtotime($sundaystart);
				$subsundayfinish = strtotime($sundayfinish);

				$calcsundaystart = new DateTime($sundaystart);
				$calcsundayfinish = new DateTime($sundayfinish);

				$finalsundaystart = date('g:i A', $subsundaystart);
				$finalsundayfinish = date('g:i A', $subsundayfinish);

				$sundifference = $calcsundaystart->diff($calcsundayfinish);

				// Output //

				if ($fridifference->format('%h:%i') > '0:00') {
				print "You worked from " . $finalfridaystart . " to " . $finalfridayfinish . " for a total of " . $fridifference->format('%h hours %i minute(s)') . " on Friday.<br/>";
				}

				if ($satdifference->format('%h:%i') > '0:00') {
				print "You worked from " . $finalsaturdaystart . " to " . $finalsaturdayfinish . " for a total of " . $satdifference->format('%h hours %i minute(s)') . " on Saturday.<br/>";
				}

				if ($sundifference->format('%h:%i') > '0:00') {
				print "You worked from " . $finalsundaystart . " to " . $finalsundayfinish . " for a total of " . $sundifference->format('%h hours %i minute(s)') . " on Sunday.<br/>";
				}

				if ($mondifference->format('%h:%i') > '0:00') {
				print "You worked from " . $finalmondaystart . " to " . $finalmondayfinish . " for a total of " . $mondifference->format('%h hours %i minute(s)') . " on Monday.<br/>";
				}

				if ($tuedifference->format('%h:%i') > '0:00') {
				print "You worked from " . $finaltuesdaystart . " to " . $finaltuesdayfinish . " for a total of " . $tuedifference->format('%h hours %i minute(s)') . " on Tuesday.<br/>";
				}

				if ($weddifference->format('%h:%i') > '0:00') {
				print "You worked from " . $finalwednesdaystart . " to " . $finalwednesdayfinish . " for a total of " . $weddifference->format('%h hours %i minute(s)') . " on Wednesday.<br/>";
				}

				if ($thudifference->format('%h:%i') > '0:00') {
				print "You worked from " . $finalthursdaystart . " to " . $finalthursdayfinish . " for a total of " . $thudifference->format('%h hours %i minute(s)') . " on Thursday.<br/>";
				}



			print "</div>";

			print "<br />";


			print "<br />";
		}

	?>
	</div>
</body>
</html>
