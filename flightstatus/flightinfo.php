<?php
$servername = "localhost";
$username   = "localuser";
$password   = "tG88sAqC";
$dbname     = "airline";
$conn       = new mysqli($servername, $username, $password, $dbname);
$fid=$_GET['fid'];
?>
		<div class="row">
			<div class="col-sm-2">
				Update Status
			</div><input class="col-sm-6 form-control" type="text" id="status" onChange="updateStatus()" value="<?php $sql="SELECT status FROM `flights` WHERE fid=".$fid;
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
								echo($row['status']);?> ">
		</div>
		<div class="row">
			<div class="col-sm-6">
				Passenger Statistics
				<table border="1" width="100%">
					<tbody>
						<tr>
							<th scope="col">Location</th>
							<th scope="col"># Checked In</th>
							<th scope="col"># Booked</th>
							<th scope="col"># Possible</th>
						</tr>
						<tr>
							<td>First Class</td>
							
							<td><?php
								$sql="SELECT COUNT(*) as counts FROM `tickets` WHERE checkedIn=1 AND class='First' AND fid=".$fid;
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
								echo($row['counts']);?></td>
							<td><?php
								$sql="SELECT COUNT(*) as count FROM `tickets` WHERE class='First' AND fid=".$fid;
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
								echo($row['count']);?></td>
							<td><?php
								$sql="SELECT numFirstClass as count FROM airplanes, flights WHERE flights.pid=airplanes.pid AND fid=".$fid;
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
								echo($row['count']);?></td>
						</tr>
						<tr>
							<td>Economy</td>
							<td><?php
								$sql="SELECT COUNT(*) as count FROM `tickets` WHERE checkedIn=1 AND class='Economy' AND fid=".$fid;
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
								echo($row['count']);?></td>
							<td><?php
								$sql="SELECT COUNT(*) as count FROM `tickets` WHERE class='Economy' AND fid=".$fid;
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
								echo($row['count']);?></td>
							<td><?php
								$sql="SELECT numEconomy as count FROM airplanes, flights WHERE flights.pid=airplanes.pid AND fid=".$fid;
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
								echo($row['count']);?></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-sm-6">
				Weight Statistics
				<table border="1" width="100%">
					<tbody>
						<tr>
							<th scope="col">Item</th>
							<th scope="col">Total Number</th>
							<th scope="col">Total Weight</th>
						</tr>
						<tr>
							<td>Passengers</td>
							<td><?php
								$sql="SELECT COUNT(*) as count FROM `tickets` WHERE fid=".$fid;
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
								echo($row['count']);?></td>
							<td><?php
								$sql="SELECT SUM(weight) as count FROM customers c, tickets t WHERE t.cid=c.cid AND t.fid=".$fid;
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
								echo($row['count']);?></td>
						</tr>
						<tr>
							<td>Carry-On</td>
							<td><?php
								$sql="SELECT COUNT(*) as count FROM luggage, tickets WHERE luggage.tid=tickets.tid AND luggage.type='CarryOn' AND fid=".$fid;
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
								echo($row['count']);?></td>
							<td><?php
								$sql="SELECT SUM(weight) as count FROM luggage, tickets WHERE luggage.tid=tickets.tid AND luggage.type='CarryOn' AND fid=".$fid;
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
								echo($row['count']);?></td>
						</tr>
						<tr>
							<td>Checked</td>
							<td><?php
								$sql="SELECT COUNT(*) as count FROM luggage, tickets WHERE luggage.tid=tickets.tid AND luggage.type='Checked' AND fid=".$fid;
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
								echo($row['count']);?></td>
							<td><?php
								$sql="SELECT SUM(weight) as count FROM luggage, tickets WHERE luggage.tid=tickets.tid AND luggage.type='Checked' AND fid=".$fid;
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
								echo($row['count']);?></td>
						</tr>
						<tr>
							<td>Total</td>
							<td>N/A</td>
							<td><?php
								$sql="SELECT SUM(weight)+COALESCE((SELECT SUM(weight) FROM luggage, tickets WHERE luggage.tid=tickets.tid AND fid=".$fid."),0) as count FROM customers c, tickets t WHERE t.cid=c.cid AND t.fid=".$fid;
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
								echo($row['count']);?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<h4>Update Info</h4>
		<?php
			$sql="SELECT depLocationID, arrLocationID, pid, economyPrice, firstClassPrice, depDate, depTime, arrDate, arrTime FROM flights WHERE fid=".$fid;
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
		?>
			
		<form class="form-horizontal" action="submit.php?fid=<?php echo($fid);?>" method="post">
			<div class="form-group">
				<label class="control-label col-sm-1">Departure Airport:</label>
				<div class="col-sm-3">
					<select class="form-control" name="departureairport" id="departureairport" onChange="getDepartGates()">
					<?php
					$sql    = "SELECT aid, name FROM airport";
					$result = $conn->query($sql);
					while ($row2 = $result->fetch_assoc()) {
						if(!strcmp($row["depLocationID"],$row2["aid"])){
					    echo ("<option value=\"" . $row2["aid"] . "\" selected=\"\">" . $row2["name"] . "</option>");
						}else{
							echo ("<option value=\"" . $row2["aid"] . "\">" . $row2["name"] . "</option>");
						}
					}
					?>
					</select>
				</div><label class="control-label col-sm-1">Departure Gate:</label>
				<div class="col-sm-1" id="departuregates">
				</div><label class="control-label col-sm-1">Arrival Airport:</label>
				<div class="col-sm-3">
					<select class="form-control" name="arrivalairport" id="arrivalairport" onChange="getArriveGates()">
					<?php
					$sql    = "SELECT aid, name FROM airport";
					$result = $conn->query($sql);
					while ($row2 = $result->fetch_assoc()) {
					    if(!strcmp($row["arrLocationID"],$row2["aid"])){
					    echo ("<option value=\"" . $row2["aid"] . "\" selected=\"\">" . $row2["name"] . "</option>");
						}else{
							echo ("<option value=\"" . $row2["aid"] . "\">" . $row2["name"] . "</option>");
						}
					}
					?>
					</select>
				</div><label class="control-label col-sm-1">Arrival Gate:</label>
				<div class="col-sm-1" id="arrivalgates">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1">Plane:</label>
				<div class="col-sm-3">
					<select class="form-control" name="plane">
					<?php
					$sql = "SELECT pid, make, model FROM `airplanes`";

					$result = $conn->query($sql);
					while ($row2 = $result->fetch_assoc()) {
						if(!strcmp($row['pid'],$row2['pid'])){
					    echo ("<option value=\"" . $row2["pid"] . "\" selected=\"\">#" . $row2["pid"] . ": " . $row2["make"] . " " . $row2["model"] . "</option>");
						}else{
							echo ("<option value=\"" . $row2["pid"] . "\">#" . $row2["pid"] . ": " . $row2["make"] . " " . $row2["model"] . "</option>");
						}
					}
					?>
					</select>
				</div><label class="control-label col-sm-2">Economy Price:</label>
				<div class="col-sm-2"><div class="input-group">
					<span class="input-group-addon">
						  $</span>
					<input class="form-control" name="economy" type="number" step="any"  value="<?php echo($row['economyPrice']);?>">
					</div></div><label class="control-label col-sm-2">First Class Price:</label>
				<div class="col-sm-2"><div class= "input-group">
					<span class="input-group-addon">
						  $</span><input class="form-control" name="firstclass" type="number" step="any" value="<?php echo($row['firstClassPrice']);?>">
					</div></div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1">Departure Date:</label>
				<div class="col-sm-2">
					<input class="form-control" type="date" name="departdate" value="<?php echo($row['depDate']);?>">
				</div><label class="control-label col-sm-1">Departure Time:</label>
				<div class="col-sm-2">
					<input class="form-control" type="time" name="departtime" value="<?php echo($row['depTime']);?>">
				</div><label class="control-label col-sm-1">Arrival Date:</label>
				<div class="col-sm-2">
					<input class="form-control" type="date" name="arrivedate" value="<?php echo($row['arrDate']);?>">
				</div><label class="control-label col-sm-1">Arrival Time:</label>
				<div class="col-sm-2">
					<input class="form-control" type="time" name="arrivedate" value="<?php echo($row['arrTime']);?>">
				</div>
			</div>
			<div class="col-sm-12">
				<h3>Staff</h3>
			</div>
			<div id="staff" class="form-group">
				
			</div><button class="btn btn-default" type="submit">Submit</button>
		</form>