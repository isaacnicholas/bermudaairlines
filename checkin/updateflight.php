<?php
$servername = "localhost";
$username   = "localuser";
$password   = "tG88sAqC";
$dbname     = "airline";
$conn       = new mysqli($servername, $username, $password, $dbname);
$tid = $_GET['tid'];
$sql = "UPDATE `tickets` SET `checkedIn`=1 WHERE tid=".$tid;
$conn->query($sql);
$sql = "SELECT f.depDate, f.depTime, da.name as daname, dg.gname as dgname, dg.concourse as dgconcourse, f.arrDate, f.arrTime, aa.name as aaname, ag.gname as agname, ag.concourse as agconcourse, t.seat, t.price+COALESCE((SELECT SUM(cost) FROM luggage WHERE luggage.tid=t.tid),0) as cost FROM flights f, tickets t, airport aa, airport da, gates dg, gates ag WHERE f.depLocationID=da.aid AND f.arrLocationID=aa.aid AND f.depGate=dg.gname AND f.arrGate=ag.gname AND f.depLocationID=dg.airport AND f.arrLocationID=ag.airport AND t.fid=f.fid AND t.tid=".$tid;
			    $result     = $conn->query($sql);
			    $row = $result->fetch_assoc();
echo("Departure Airport: ".$row['daname']);
echo("<br> Departure Gate: ".$row['dgname'].$row['dgconcourse']);
echo("<br> Departure Date: ".$row['depDate']);
echo("<br> Departure Time: ".$row['depTime']);
echo("<br> Arrival Airport: ".$row['aaname']);
echo("<br> Arrival Gate: ".$row['agname'].$row['agconcourse']);
echo("<br> Arrival Date: ".$row['arrDate']);
echo("<br> Arrival Time: ".$row['arrTime']);
echo("<br> Seat Number: ".$row['seat']);
echo("<br> Cost: $".$row['cost']);
echo("<br>Luggage Items<ul>");
$sql="SELECT weight, type FROM luggage WHERE tid=".$tid;
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
	echo("<li>".$row['weight']." LB ".$row['type']. " Item");
}
echo("</ul>");