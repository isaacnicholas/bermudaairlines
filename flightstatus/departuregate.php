<select class="form-control" name="departgate">
<?php
$servername = "localhost";
$username   = "localuser";
$password   = "tG88sAqC";
$dbname     = "airline";
$conn       = new mysqli($servername, $username, $password, $dbname);
$aid=$_GET['aid'];
$fid=$_GET['fid'];
$sql="SELECT depGate FROM flights WHERE fid=".$fid;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$sql="SELECT * FROM `gates` WHERE airport=".$aid;
$result = $conn->query($sql);
while ($row2 = $result->fetch_assoc()) {
		if(!strcmp($row["depGate"],$row2["gname"])){
		echo ("<option value=".$row2["gname"]." selected=\"\">" . $row2["gname"] . $row2["concourse"] . "</option>");
		}else{
			echo ("<option value=".$row2["gname"].">" . $row2["gname"] . $row2["concourse"] . "</option>");
		}
					}
?>
</select>