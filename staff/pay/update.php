<?php
	$servername = "localhost";
$username = "localuser";
$password = "tG88sAqC";
$dbname = "airline";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sid=$_GET["sid"];
	$sql="SELECT * FROM `payroll` WHERE payID=".sid;
	$result=$conn->query($sql);
	$row = $result->fetch_assoc();
	?>
		<form class="form-horizontal" action="submitupdate.php?sid=<?php echo($sid)?>" method="post">
			<div class="form-group">
				<label class="control-label col-sm-1">Wage:</label>
				<div class="col-sm-3">
					<input class="form-control" name="wage" type="number" value="<?php echo($row["wage"])?>">
				</div><label class="control-label col-sm-1">Hours:</label>
				<div class="col-sm-3">
					<input class="form-control" name="hours" type="number" value="<?php echo($row["hours"])?>">
				</div><label class="control-label col-sm-1">Time:</label>
				<div class="col-sm-3">
					<select class="form-control" name="time" id="hours">
						<option <?php if(!strcmp($row["time"],"Full")){echo ("selected=\"\"");}?>>
							Full
						</option <?php if(!strcmp($row["time"],"Part")){echo ("selected=\"\"");}?>>
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
						<option <?php if(!strcmp($row["payType"],"Check")){echo ("selected=\"\"");}?>>
							Check
						</option>
						<option <?php if(!strcmp($row["payType"],"Deposit")){echo ("selected=\"\"");}?>>
							Direct Deposit
						</option>
					</select>
				</div>
			</div>
			<div class="form-group" id="directdeposit" style="display: none">
				<label class="control-label col-sm-1">Account Number:</label>
				<div class="col-sm-3">
					<input class="form-control" name="accnum" type="number">
				</div><label class="control-label col-sm-1"value="<?php echo($row["name"])?>">Route Number:</label>
				<div class="col-sm-3">
					<input class="form-control" name="routenum" type="number" value="<?php echo($row["name"])?>">
				</div>
			</div><button class="btn btn-primary" type="submit">Submit/Update</button>
		</form>
		<script>
			function checkmethod(){
				name=document.getElementById("method").value;
				if(name=="Check"){
					$("#directdeposit").slideUp();
				}else{
					 $("#directdeposit").slideDown(); 
					  }
			}
		</script>
		<?php
			$conn->close();
		?>
