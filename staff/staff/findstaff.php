<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" width="100%">
		<tbody>
			<tr>
				<th scope="col">Name</th>
				<th scope="col">Home Airport</th>
				<th scope="col">Position</th>
				<th scope="col">Address</th>
				<th scope="col">Phone Number</th>
				<th scope="col">Select</th>
			</tr><?php
			$name = $_GET["name"];
			if (strlen($name) > 0) {
			    $servername = "localhost";
			    $username   = "localuser";
			    $password   = "tG88sAqC";
			    $dbname     = "airline";
			    $conn       = new mysqli($servername, $username, $password, $dbname);
			    $sql        = "SELECT staff.sid, staff.name, staff.position, staff.state, staff.city, staff.zip, staff.address1, staff.address2, staff.phone, airport.name AS aname FROM `staff`, `airport` WHERE homeAirport=aid AND (staff.name LIKE '" . $name . "%' OR staff.name LIKE '% " . $name . "%')";
			    $result     = $conn->query($sql);
			    while ($row = $result->fetch_assoc()) {
			        echo ("<tr>");
			        echo ("<td>" . $row['name'] . "</td>");
			        echo ("<td>" . $row['aname'] . "</td>");
			        echo ("<td>" . $row['position'] . "</td>");
			        echo ("<td>" . $row['address1'] . " " . $row['address2'] . " " . $row['city'] . " " . $row['state'] . ", " . $row['zip'] . "</td>");
			        echo ("<td>" . $row['phone'] . "</td>");
			        echo ("<td><button class=\"btn btn-primary\" type=\"button\" id=\"button" . $row['sid'] . "\" onClick=\"selectNumber(" . $row['sid'] . ")\">Select</button>");
			        echo ("</tr>");
			    }
			}
			?>
		</tbody>
	</table>
</body>
</html>
<?php
			$conn->close();
		?>