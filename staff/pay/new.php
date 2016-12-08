<?php
	$servername = "localhost";
$username = "localuser";
$password = "tG88sAqC";
$dbname = "airline";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql="SELECT * FROM `payroll` WHERE payID=".sid;
	$result=$conn->query($sql);
	$row = $result->fetch_assoc();
	?>
		<form class="form-horizontal" action="submitnew.php" method="post">
			<div class="form-group">
				<label class="control-label col-sm-1">Wage:</label>
				<div class="col-sm-3">
					<input class="form-control" name="wage" type="number">
				</div><label class="control-label col-sm-1">Hours:</label>
				<div class="col-sm-3">
					<input class="form-control" name="hours" type="number">
				</div><label class="control-label col-sm-1">Time:</label>
				<div class="col-sm-3">
					<select class="form-control" name="time" id="hours">
						<option>
							Full
						</option>
						<option>
							Part
						</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1">Method:</label>
				<div class="col-sm-3">
					<select class="form-control" id="method" name="method" onChange="checkmethod()">
						<option>
							Check
						</option>
						<option>
							Direct Deposit
						</option>
					</select>
				</div>
			</div>
			<div class="form-group" id="directdeposit">
				<label class="control-label col-sm-1">Account Number:</label>
				<div class="col-sm-3">
					<input class="form-control" name="accnum" type="number">
				</div><label class="control-label col-sm-1">Route Number:</label>
				<div class="col-sm-3">
					<input class="form-control" name="routenum" type="number">
				</div>
			</div><button class="btn btn-primary" type="submit">Submit/Update</button>
		</form>
		<?php
			$conn->close();
		?>
