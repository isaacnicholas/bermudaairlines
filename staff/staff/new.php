<?php
$servername = "localhost";
$username   = "localuser";
$password   = "tG88sAqC";
$dbname     = "airline";
$conn       = new mysqli($servername, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="submitnew.php" class="form-horizontal" method="post">
		<div class="form-group">
			<label class="control-label col-sm-1">Name:</label>
			<div class="col-sm-11">
				<input class="form-control" name="name" type="text">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-1">Position:</label>
			<div class="col-sm-2">
				<select class="form-control" id="position" name="position">
					<option>
						steward
					</option>
					<option>
						janitor
					</option>
					<option>
						copilot
					</option>
					<option>
						secretary
					</option>
					<option>
						pilot
					</option>
					<option>
						security
					</option>
				</select>
			</div><label class="control-label col-sm-1">DOB:</label>
			<div class="col-sm-2">
				<input class="form-control" name="dob" type="date">
			</div><label class="control-label col-sm-1">Sex:</label>
			<div class="col-sm-2">
				<select class="form-control" id="sex" name="sex">
					<option value="M">
						Male
					</option>
					<option value="F">
						Female
					</option>
				</select>
			</div><label class="control-label col-sm-1">Weight:</label>
			<div class="col-sm-2">
				<input class="form-control" name="weight" type="number">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-1">Address Line 1:</label>
			<div class="col-sm-11">
				<input class="form-control" name="address1" type="text">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-1">Address Line 2:</label>
			<div class="col-sm-11">
				<input class="form-control" name="address2" type="text">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-1">City</label>
			<div class="col-sm-3">
				<input class="form-control" name="city" type="text">
			</div><label class="control-label col-sm-1">State:</label>
			<div class="col-sm-3">
				<select class="form-control" id="state" name="state">
					<option>
						AL
					</option>
					<option>
						AK
					</option>
					<option>
						AZ
					</option>
					<option>
						AR
					</option>
					<option>
						CA
					</option>
					<option>
						CO
					</option>
					<option>
						CT
					</option>
					<option>
						DE
					</option>
					<option>
						FL
					</option>
					<option>
						GA
					</option>
					<option>
						HI
					</option>
					<option>
						ID
					</option>
					<option>
						IL
					</option>
					<option>
						IN
					</option>
					<option>
						IA
					</option>
					<option>
						KS
					</option>
					<option>
						KY
					</option>
					<option>
						LA
					</option>
					<option>
						ME
					</option>
					<option>
						MD
					</option>
					<option>
						MA
					</option>
					<option>
						MI
					</option>
					<option>
						MN
					</option>
					<option>
						MS
					</option>
					<option>
						MO
					</option>
					<option>
						MT
					</option>
					<option>
						NE
					</option>
					<option>
						NV
					</option>
					<option>
						NH
					</option>
					<option>
						NJ
					</option>
					<option>
						NM
					</option>
					<option>
						NY
					</option>
					<option>
						NC
					</option>
					<option>
						ND
					</option>
					<option>
						OH
					</option>
					<option>
						OK
					</option>
					<option>
						OR
					</option>
					<option>
						PA
					</option>
					<option>
						RI
					</option>
					<option>
						SC
					</option>
					<option>
						SD
					</option>
					<option>
						TN
					</option>
					<option>
						TX
					</option>
					<option>
						UT
					</option>
					<option>
						VT
					</option>
					<option>
						VA
					</option>
					<option>
						WA
					</option>
					<option>
						WV
					</option>
					<option>
						WI
					</option>
					<option>
						WY
					</option>
				</select>
			</div><label class="control-label col-sm-1">Zip:</label>
			<div class="col-sm-3">
				<input class="form-control" name="zip" type="text">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-1">Phone Number:</label>
			<div class="col-sm-3">
				<input class="form-control" name="phone" type="tel">
			</div><label class="control-label col-sm-1">Email:</label>
			<div class="col-sm-3">
				<input class="form-control" name="email" type="email">
			</div><label class="control-label col-sm-1">Home Airport:</label>
			<div class="col-sm-3">
				<select class="form-control" id="homeairport" name="homeAirport">
					<?php
					$sql    = "SELECT aid, name FROM airport";
					$result = $conn->query($sql);
					while ($row = $result->fetch_assoc()) {
					    echo ("<option value=" . $row['aid'] . ">");
					    echo ($row['name']);
					    echo ("</option>");
					}
					?>
				</select>
			</div>
		</div><button class="btn btn-primary" type="submit">Submit/Update</button>
	</form>
</body>
</html>
<?php
			$conn->close();
		?>