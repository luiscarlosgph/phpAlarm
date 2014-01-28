<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>phpAlarm</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/phpAlarm.css">
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
								<button type="button" class="btn btn-default btn-xs" onclick="hourPlusOne('hour-1')">
									<span class="glyphicon glyphicon-chevron-up"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs" onclick="hourMinusOne('hour-1')">
									<span class="glyphicon glyphicon-chevron-down"></span>
								</button>
								<!-- Minute -->
								<input id="minute-1" type="number" name="minute" value="00" min ="00" max="59" maxlength="2">
								<button type="button" class="btn btn-default btn-xs" onclick="minutePlusOne('minute-1')">
									<span class="glyphicon glyphicon-chevron-up"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs" onclick="minuteMinusOne('minute-1')">
									<span class="glyphicon glyphicon-chevron-down">
								</button>
							</td>
              			<td>
								<ul class="pagination">
  									<li class="active"><a href="#">S</a></li>
  									<li><a href="#">M</a></li>
  									<li><a href="#">T</a></li>
  									<li class="active"><a href="#">W</a></li>
  									<li><a href="#">T</a></li>
  									<li><a href="#">F</a></li>
  									<li><a href="#">S</a></li>
								</ul>
							</td>
              			<td>
								Ring
								<input type="number" name="quantity" min="1" max="5">
								<button type="button" class="btn btn-default btn-xs">
									<span class="glyphicon glyphicon-chevron-up"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs">
									<span class="glyphicon glyphicon-chevron-down"></span>
								</button>
								times every 
								<input type="number" name="quantity" min="1" max="10"> 
								<button type="button" class="btn btn-default btn-xs">
									<span class="glyphicon glyphicon-chevron-up"></span>
								</button>
								<button type="button" class="btn btn-default btn-xs">
									<span class="glyphicon glyphicon-chevron-down"></span>
								</button>
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

