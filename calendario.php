<!DOCTYPE html>
<html>
<head>
	<title>CALENDAR</title>
	<link rel="stylesheet" type="text/css" href="calendario.css">
</head>
<body>
	<table>
		<tr>
			<th>Monday</th>
			<th>Tuesday</th>
			<th>Wednesday</th>
			<th>Thursday</th>
			<th>Friday</th>
			<th>Saturday</th>
			<th>Sunday</th>
		</tr>
		<tr>
		<?php 
			for ($day=1; $day <= 31 ; $day++) { 
				echo "
					<td>
						<div class='dia'>$day</div>
						<div style='position: relative;'><textarea></textarea></div>
					</td>";
				if ($day % 7 == 0) {
					echo "</tr><tr>";
				}
			}
		 ?>
	</table>
</body>
</html>