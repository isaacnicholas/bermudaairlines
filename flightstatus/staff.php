<?php
$servername = "localhost";
$username   = "localuser";
$password   = "tG88sAqC";
$dbname     = "airline";
$conn       = new mysqli($servername, $username, $password, $dbname);
$aid=$_GET['aid'];
$fid=$_GET['fid'];
$sql="SELECT pilotID, copilotID, stewID1, stewID2 FROM flights WHERE fid=".$fid;
$result = $conn ->query($sql);
$row=$result->fetch_assoc();
?>
			<label class="control-label col-sm-1">Pilot:</label>
				<div class="col-sm-2">
					<select class="form-control" name="pilot">
						<?php
						$sql="SELECT name, sid FROM staff WHERE homeAirport = ".$aid." AND position = 'pilot'";
						$result = $conn->query($sql);
							while ($row2 = $result->fetch_assoc()) {
								if(!strcmp($row2["sid"],$row["pilotID"])){
						echo("<option value='".$row2["sid"]."' selected=\"\">");
								}else{
									echo("<option value='".$row2["sid"]."'>");
								}
						echo($row2["name"]);
						echo("</option>");}
								?>
					</select>
				</div><label class="control-label col-sm-1">Co-Pilot:</label>
				<div class="col-sm-2">
					<select class="form-control" name="copilot">
						<?php
						$sql="SELECT name, sid FROM staff WHERE homeAirport = ".$aid." AND position = 'copilot'";
						$result = $conn->query($sql);
						while ($row2 = $result->fetch_assoc()) {
								if(!strcmp($row2["sid"],$row["copilotID"])){
						echo("<option value='".$row2["sid"]."' selected=\"\">");
								}else{
									echo("<option value='".$row2["sid"]."'>");
								}
						echo($row2["name"]);
						echo("</option>");}
								?>
					</select>
				</div><label class="control-label col-sm-1">Steward:</label>
				<div class="col-sm-2">
					<select class="form-control" name="steward1">
						<?php
						$sql="SELECT name, sid FROM staff WHERE homeAirport = ".$aid." AND position = 'steward'";
						$result = $conn->query($sql);
							while ($row2 = $result->fetch_assoc()) {
								if(!strcmp($row2["sid"],$row["stewID1"])){
						echo("<option value='".$row2["sid"]."' selected=\"\">");
								}else{
									echo("<option value='".$row2["sid"]."'>");
								}
						echo($row2["name"]);
						echo("</option>");}
								?>
					</select>
				</div><label class="control-label col-sm-1">Steward 2:</label>
				<div class="col-sm-2">
					<select class="form-control" name="steward2">
						<option>
							
						</option>
						<?php
						$sql="SELECT name, sid FROM staff WHERE homeAirport = ".$aid." AND position = 'steward'";
						$result = $conn->query($sql);
							while ($row2 = $result->fetch_assoc()) {
								if(!strcmp($row2["sid"],$row["pilotID"])){
						echo("<option value='".$row2["sid"]."' selected=\"\">");
								}else{
									echo("<option value='".$row2["sid"]."'>");
								}
						echo($row2["name"]);
						echo("</option>");}
								?>
					</select>
				</div>