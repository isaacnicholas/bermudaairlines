<select class="form-control" id="arrival" onChange="findFlights()">
<?php
$aid=$_GET["aid"];
$servername = "localhost";
$username   = "localuser";
$password   = "tG88sAqC";
$dbname     = "airline";
$conn       = new mysqli($servername, $username, $password, $dbname);
$aid=$_GET['aid'];
$sql="SELECT DISTINCT a.aid, a.name FROM airport a, flights f WHERE f.depLocationID=".$aid." AND arrLocationID=a.aid AND ((SELECT COUNT(*) FROM tickets t WHERE t.class='First' AND t.fid=f.fid)<(SELECT numFirstCLass FROM airplanes p WHERE p.pid=f.pid) OR (SELECT COUNT(*) FROM tickets t WHERE t.class='Economy' AND t.fid=f.fid)<(SELECT numEconomy FROM airplanes p WHERE p.pid=f.pid))";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
		echo ("<option value=".$row["aid"].">" . $row["name"] . "</option>");
					}
?>
</select>