<table border="1" width="100%">
				<tbody>
					<tr>
						<th scope="col">Departure Date</th>
						<th scope="col">Departure Time</th>
						<th scope="col">Departure Airport</th>
						<th scope="col">Departure Gate</th>
						<th scope="col">Arrival Date</th>
						<th scope="col">Arrival Time</th>
						<th scope="col">Arrival Airport</th>
						<th scope="col">Arrival Gate</th>
						<th scope="col">Plane Type</th>
						<th scope="col">Economy Cost</th>
						<th scope="col">First Class Cost</th>
					</tr>
<?php
$servername = "localhost";
$username   = "localuser";
$password   = "tG88sAqC";
$dbname     = "airline";
$conn       = new mysqli($servername, $username, $password, $dbname);
$aid=$_GET['aid'];
$sql="SELECT * FROM `gates` WHERE airport=".$aid;
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
		echo ("<option value=".$row["gid"].">" . $row["gname"] . $row["concourse"] . "</option>");
					}
?>