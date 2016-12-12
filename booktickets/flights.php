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
						<th scope="col">First Class Cost</th>
						<th scope="col">Economy Class Cost</th>
					</tr>
<?php
$servername = "localhost";
$username   = "localuser";
$password   = "tG88sAqC";
$dbname     = "airline";
$conn       = new mysqli($servername, $username, $password, $dbname);
$arr=$_GET['arr'];
$dep=$_GET['dep'];
$cid=$_GET['cid'];
$date=$_GET['date'];
if($date){
	$sql="SELECT f.fid, f.depDate, f.depTime, da.name as daname, dg.gname as dgname, dg.concourse as dgconcourse, f.arrDate, f.arrTime, aa.name as aaname, ag.gname as agname, ag.concourse agconcourse, f.pid, p.make, p.model, f.firstClassPrice, f.economyPrice FROM flights f, airport da, airport aa, gates dg, gates ag, airplanes p WHERE f.depLocationID=da.aid AND f.arrLocationID=aa.aid AND f.depGate=dg.gname AND f.arrGate=ag.gname AND f.depLocationID=dg.airport AND f.arrLocationID=ag.airport AND p.pid=f.pid AND ((SELECT COUNT(*) FROM tickets t WHERE t.class='First' AND t.fid=f.fid)<(SELECT numFirstCLass FROM airplanes p WHERE p.pid=f.pid) OR (SELECT COUNT(*) FROM tickets t WHERE t.class='Economy' AND t.fid=f.fid)<(SELECT numEconomy FROM airplanes p WHERE p.pid=f.pid)) AND f.status!='Cancelled' AND f.depLocationID=".$dep." AND f.arrLocationID=".$arr." AND f.arrDate=".$date;
}else{
$sql="SELECT f.fid, f.depDate, f.depTime, da.name as daname, dg.gname as dgname, dg.concourse as dgconcourse, f.arrDate, f.arrTime, aa.name as aaname, ag.gname as agname, ag.concourse agconcourse, f.pid, p.make, p.model, f.firstClassPrice, f.economyPrice FROM flights f, airport da, airport aa, gates dg, gates ag, airplanes p WHERE f.depLocationID=da.aid AND f.arrLocationID=aa.aid AND f.depGate=dg.gname AND f.arrGate=ag.gname AND f.depLocationID=dg.airport AND f.arrLocationID=ag.airport AND p.pid=f.pid AND ((SELECT COUNT(*) FROM tickets t WHERE t.class='First' AND t.fid=f.fid)<(SELECT numFirstCLass FROM airplanes p WHERE p.pid=f.pid) OR (SELECT COUNT(*) FROM tickets t WHERE t.class='Economy' AND t.fid=f.fid)<(SELECT numEconomy FROM airplanes p WHERE p.pid=f.pid)) AND f.status!='Cancelled' AND f.depLocationID=".$dep." AND f.arrLocationID=".$arr;}
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
	echo ("<tr>");
	echo("<td>" . $row['depDate'] . "</td>");
	echo("<td>" . $row['depTime'] . "</td>");
	echo("<td>" . $row['daname'] . "</td>");
	echo("<td>" . $row['dgname'] . $row['dgconcourse'] . "</td>");
	echo("<td>" . $row['arrDate'] . "</td>");
	echo("<td>" . $row['arrTime'] . "</td>");
	echo("<td>" . $row['aaname'] . "</td>");
	echo("<td>" . $row['agname'] . $row['agconcourse'] . "</td>");
	echo("<td>" . $row['make'] ." ". $row['model'] . "</td>");
	$sql="(SELECT numFirstCLass -(SELECT COUNT(*) FROM tickets t WHERE t.class='First' AND t.fid=".$row['fid'].")FROM airplanes p WHERE ".$row['pid'].")";
	$result2 = $conn->query($sql);
	$row2=$result2->fetch_assoc();
	if($row2>0){
		echo("<td><a href=\"buytickets.php?fid=".$row['fid']."&cid=".$cid."&class=e\" class=\"btn btn-default\">".$row['firstClassPrice']."</a></td>");
	}
	else{
		echo( "<td>Sold Out</td>");
	}
	$sql="(SELECT numFirstCLass -(SELECT COUNT(*) FROM tickets t WHERE t.class='Economy' AND t.fid=".$row['fid'].")FROM airplanes p WHERE ".$row['pid'].")";
	$result2 = $conn->query($sql);
	$row2=$result2->fetch_assoc();
	if($row2>0){
		echo("<td><a href=\"buytickets.php?fid=".$row['fid']."&cid=".$cid."&class=e\" class=\"btn btn-default\">".$row['economyPrice']."</a></td>");
	}
	else{
		echo( "<td>Sold Out</td>");
	}
}
?>