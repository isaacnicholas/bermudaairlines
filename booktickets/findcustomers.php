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
			    $sql        = "SELECT customers.sid, customers.name, customers.state, customers.city, customers.zip, customers.address, customers.address2, customers.phone, airport.name AS aname FROM `customers`, `airport` WHERE homeAirport=aid AND (customers.name LIKE '" . $name . "%' OR customers.name LIKE '% " . $name . "%')";
			    $result     = $conn->query($sql);
			    while ($row = $result->fetch_assoc()) {
			        echo ("<tr>");
			        echo ("<td>" . $row['name'] . "</td>");
			        echo ("<td>" . $row['aname'] . "</td>");
			        echo ("<td>" . $row['address1'] . " " . $row['address2'] . " " . $row['city'] . " " . $row['state'] . ", " . $row['zip'] . "</td>");
			        echo ("<td>" . $row['phone'] . "</td>");
			        echo ("<td><button class=\"btn btn-primary\" type=\"button\" id=\"button" . $row['cid'] . "\" onClick=\"selectNumber(" . $row['cid'] . ")\">Select</button>");
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