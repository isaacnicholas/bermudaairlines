<?php
$servername = "localhost";
$username   = "localuser";
$password   = "tG88sAqC";
$dbname     = "airline";
$conn       = new mysqli($servername, $username, $password, $dbname);
$aid=$_GET['aid'];
?>
			<label class="control-label col-sm-1">Pilot:</label>
				<div class="col-sm-2">
					<select class="form-control" name="pilot">
						<?php
						$sql="SELECT name, sid FROM staff AND homeAirport = ".$aid."AND position = 'pilot'";
						$result = $conn->query($sql);
							while ($row = $result->fetch_assoc()) {
						echo("<option value='".$row["sid"]."'>");
						echo($row["name"]);
						echo("</option>");}
								?>
					</select>
				</div><label class="control-label col-sm-1">Co-Pilot:</label>
				<div class="col-sm-2">
					<select class="form-control" name="copilot">
						<?php
						$sql="SELECT name, sid FROM staff AND homeAirport = ".$aid."AND position = 'copilot'";
						$result = $conn->query($sql);
							while ($row = $result->fetch_assoc()) {
						echo("<option value='".$row["sid"]."'>");
						echo($row["name"]);
						echo("</option>");}
								?>
					</select>
				</div><label class="control-label col-sm-1">Steward:</label>
				<div class="col-sm-2">
					<select class="form-control" name="steward">
						<?php
						$sql="SELECT name, sid FROM staff AND homeAirport = ".$aid."AND position = 'steward'";
						$result = $conn->query($sql);
							while ($row = $result->fetch_assoc()) {
						echo("<option value='".$row["sid"]."'>");
						echo($row["name"]);
						echo("</option>");}
								?>
					</select>
				</div><label class="control-label col-sm-1">Steward 2:</label>
				<div class="col-sm-2">
					<select class="form-control" name="steward2">
						<option>
							
						</option>
						<?php
						$sql="SELECT name, sid FROM staff AND homeAirport = ".$aid."AND position = 'steward'";
						$result = $conn->query($sql);
							while ($row = $result->fetch_assoc()) {
						echo("<option value='".$row["sid"]."'>");
						echo($row["name"]);
						echo("</option>");}
						$conn->close();
							?>
					</select>
				</div>