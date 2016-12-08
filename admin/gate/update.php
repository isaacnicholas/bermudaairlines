 <?php
	$servername = "localhost";
$username = "localuser";
$password = "tG88sAqC";
$dbname = "airline";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$gid=$_GET["gid"];
	$sql="SELECT * FROM gates WHERE gid=".$gid;
	$result=$conn->query($sql);
	$row = $result->fetch_assoc();
	?>
	
<form class="form-horizontal" action="submitupdate.php?gid=<?php echo($_GET['gid'])?>" method="post">
			<div class="form-group">
				<label class="control-label col-sm-3">Gate Name (single letter):</label>
				<div class="col-sm-2">
					<input class="form-control" name="gname" value="<?php echo($row["gname"])?>" type="text">
				</div>
					<label class="control-label col-sm-3" for="name">Concourse (number):</label>
				<div class="col-sm-2">
					<input class="form-control" name="concourse" value="<?php echo($row["concourse"])?>" type="number">
				</div>
			</div><button class="btn btn-primary" type="submit">Submit/Update</button>
</form>