<select class="form-control" name="arrivegate">
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
		echo ("<option value=".$row["gname"].">" . $row["gname"] . $row["concourse"] . "</option>");
					}
?>
</select>