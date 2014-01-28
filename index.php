<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>phpAlarm</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/phpalarm.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="panel panel-default">
				<!-- Default panel contents -->
				<div class="panel-heading">Alarms</div>
				<!-- Table -->
				<table class="table">
					<thead>
            		<tr>
              			<th>#</th>
              			<th>Time</th>
              			<th>Days of the week</th>
              			<th>Snooze</th>
            		</tr>
          		</thead>
          		<tbody>
            		<tr>
              			<td>1</td>
              			<td>
								<!-- Hour -->
								<input id="hour-1" type="number" name="hour" value="00" min="00" max="23" maxlength="2">
								<button type="button" class="btn btn-default btn-xs" onclick="addOne('hour-1', 23)">
									<span class="glyphicon glyphicon-chevron-up"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs" onclick="subOne('hour-1', 23)">
									<span class="glyphicon glyphicon-chevron-down"></span>
								</button>
								<!-- Minute -->
								<input id="minute-1" type="number" name="minute" value="00" min ="00" max="59" maxlength="2">
								<button type="button" class="btn btn-default btn-xs" onclick="addOne('minute-1', 59)">
									<span class="glyphicon glyphicon-chevron-up"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs" onclick="subOne('minute-1', 59)">
									<span class="glyphicon glyphicon-chevron-down">
								</button>
							</td>
              			<td>
								<ul class="pagination">
  									<li id="sun-1"><a href="#" onclick="activateLink('sun-1')">S</a></li>
  									<li id="mon-1"><a href="#" onclick="activateLink('mon-1')">M</a></li>
  									<li id="tue-1"><a href="#" onclick="activateLink('tue-1')">T</a></li>
  									<li id="wed-1"><a href="#" onclick="activateLink('wed-1')">W</a></li>
  									<li id="thu-1"><a href="#" onclick="activateLink('thu-1')">T</a></li>
  									<li id="fri-1"><a href="#" onclick="activateLink('fri-1')">F</a></li>
  									<li id="sat-1"><a href="#" onclick="activateLink('sat-1')">S</a></li>
								</ul>
							</td>
              			<td>
								Ring
								<input id="snoozeTimes-1" type="number" name="quantity" value="00" min="1" max="5">
								<button type="button" class="btn btn-default btn-xs" onclick="addOne('snoozeTimes-1', 5)">
									<span class="glyphicon glyphicon-chevron-up"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs" onclick="subOne('snoozeTimes-1', 5)">
									<span class="glyphicon glyphicon-chevron-down"></span>
								</button>
								times every 
								<input id="snoozeInterval-1" type="number" name="quantity" value="00" min="1" max="10"> 
								<button type="button" class="btn btn-default btn-xs" onclick="addOne('snoozeInterval-1', 10)">
									<span class="glyphicon glyphicon-chevron-up"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs" onclick="subOne('snoozeInterval-1', 10)">
									<span class="glyphicon glyphicon-chevron-down"></span>
								</button>
								minutes
							</td>
            		</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/phpalarm.js"></script>
</body>
</html>

