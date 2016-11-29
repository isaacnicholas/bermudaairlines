<?php
	$servername = "localhost";
$username = "localuser";
$password = "tG88sAqC";
$dbname = "airline";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$pid=$_GET["pid"];
	$sql="SELECT * FROM airplanes WHERE pid=".$pid;
	$result=$conn->query($sql);
	$row = $result->fetch_assoc();
	?>
		<form action="submitupdate.php?pid=<?php echo($pid)?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="form-group">
					<label class="control-label col-sm-2">Make:</label>
					<div class="col-sm-4">
						<input class="form-control" name="make" type="text" value="<?php echo($row["make"])?>">
					</div><label class="control-label col-sm-2">Model:</label>
					<div class="col-sm-4">
						<input class="form-control" name="model" type="text" value="<?php echo($row["model"])?>">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1">Status:</label>
				<div class="col-sm-11">
					<input class="form-control" name="status" type="text" value="<?php echo($row["status"])?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2"]>Number of First Class:</label>
				<div class="col-sm-4">
					<input class="form-control" name="firstclass" type="number" value="<?php echo($row["numFirstClass"])?>">
				</div><label class="control-label col-sm-2">Number of Economy:</label>
				<div class="col-sm-4">
					<input class="form-control" name="economy" type="number" value="<?php echo($row["numEconomy"])?>">
				</div>
			</div><button class="btn btn-primary" type="submit">Submit/Update</button>
		</form>
		<script>
			var element = document.getElementById('state');
    element.value = <?php echo($row["state"])?>;
</script>
