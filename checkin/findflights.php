
				<table border="1" width="100%">
					<tbody>
						<tr>
							<th scope="col">Departure Airport</th>
							<th scope="col">Departure Time</th>
							<th scope="col">Arrival Airport</th>
							<th scope="col">Arrival Time</th>
							<th scope="col">Checked In?</th>
							<th scope="col">Select</th>
						</tr>
						<?php
$servername = "localhost";
$username   = "localuser";
$password   = "tG88sAqC";
$dbname     = "airline";
$conn       = new mysqli($servername, $username, $password, $dbname);
						$cid=$_GET['cid'];
						$sql        = "SELECT t.tid, t.checkedIn, da.name as daname, aa.name as arname, f.depDate, f.depTime, f.arrDate, f.arrTime FROM flights f, airport da, airport aa, tickets t WHERE t.fid=f.fid AND f.arrLocationID=aa.aid AND f.depLocationID=da.aid AND t.cid=".$cid;
			    $result     = $conn->query($sql);
			    while ($row = $result->fetch_assoc()) {
			        echo ("<tr>");
			        echo ("<td>" . $row['daname'] . "</td>");
			        echo ("<td>" . $row['depDate'] ." ". $row['depTime'] . "</td>");
			        echo ("<td>" . $row['arname'] . "</td>");
			        echo ("<td>" . $row['arrDate'] ." ". $row['arrTime'] . "</td>");
					if($row['checkedIn']){
						echo("<td> Yes </td>");
					}else{
						echo("<td> No </td>");
					}
			        echo ("<td><button class=\"btn btn-primary\" type=\"button\" id=\"button" . $row['cid'] . "\" onClick=\"selectFlight(" . $row['tid'] . ")\">Select</button>");
			        echo ("</tr>");
				}
						?>
					</tbody>
				</table>