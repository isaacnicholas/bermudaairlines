<?php
	$servername = "localhost";
$username = "localuser";
$password = "tG88sAqC";
$dbname = "airline";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$aid=$_GET["aid"];
	$sql="SELECT * FROM airport WHERE aid=".$aid;
	$result=$conn->query($sql);
	$row = $result->fetch_assoc();
	?>
		<form action="submitupdate.php?aid=<?php echo($aid);?>" class="form-horizontal" method="post">
			<div class="form-group">
				<label class="control-label col-sm-1" >Name:</label>
				<div class="col-sm-11">
					<input class="form-control" name="name" type="text" value="<?php echo($row["name"])?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1">Address:</label>
				<div class="col-sm-11">
					<input class="form-control" name="address" type="text" value="<?php echo($row["address"])?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1">City:</label>
				<div class="col-sm-3">
					<input class="form-control" name="city" type="text" value="<?php echo($row["city"])?>">
				</div><label class="control-label col-sm-1">State:</label>
				<div class="col-sm-3">
					<select class="form-control" name="state" id="state">
						<option <?php if(!strcmp($row["state"],"AL")){echo ("selected=\"\"");}?>>
							AL
						</option>
						<option <?php if(!strcmp($row["state"],"AK")){echo ("selected=\"\"");}?>>
							AK
						</option>
						<option <?php if(!strcmp($row["state"],"AZ")){echo ("selected=\"\"");}?>>
							AZ
						</option>
						<option <?php if(!strcmp($row["state"],"AR")){echo ("selected=\"\"");}?>>
							AR
						</option>
						<option <?php if(!strcmp($row["state"],"CA")){echo ("selected=\"\"");}?>>
							CA
						</option>
						<option <?php if(!strcmp($row["state"],"CO")){echo ("selected=\"\"");}?>>
							CO
						</option>
						<option <?php if(!strcmp($row["state"],"CT")){echo ("selected=\"\"");}?>>
							CT
						</option>
						<option <?php if(!strcmp($row["state"],"DE")){echo ("selected=\"\"");}?>>
							DE
						</option>
						<option <?php if(!strcmp($row["state"],"FL")){echo ("selected=\"\"");}?>>
							FL
						</option>
						<option <?php if(!strcmp($row["state"],"GA")){echo ("selected=\"\"");}?>>
							GA
						</option>
						<option <?php if(!strcmp($row["state"],"HI")){echo ("selected=\"\"");}?>>
							HI
						</option>
						<option <?php if(!strcmp($row["state"],"ID")){echo ("selected=\"\"");}?>>
							ID
						</option>
						<option <?php if(!strcmp($row["state"],"IL")){echo ("selected=\"\"");}?>>
							IL
						</option>
						<option <?php if(!strcmp($row["state"],"IN")){echo ("selected=\"\"");}?>>
							IN
						</option>
						<option <?php if(!strcmp($row["state"],"IA")){echo ("selected=\"\"");}?>>
							IA
						</option>
						<option <?php if(!strcmp($row["state"],"KS")){echo ("selected=\"\"");}?>>
							KS
						</option>
						<option <?php if(!strcmp($row["state"],"KY")){echo ("selected=\"\"");}?>>
							KY
						</option>
						<option <?php if(!strcmp($row["state"],"LA")){echo ("selected=\"\"");}?>>
							LA
						</option>
						<option <?php if(!strcmp($row["state"],"ME")){echo ("selected=\"\"");}?>>
							ME
						</option>
						<option <?php if(!strcmp($row["state"],"MD")){echo ("selected=\"\"");}?>>
							MD
						</option>
						<option <?php if(!strcmp($row["state"],"MA")){echo ("selected=\"\"");}?>>
							MA
						</option>
						<option <?php if(!strcmp($row["state"],"MI")){echo ("selected=\"\"");}?>>
							MI
						</option>
						<option <?php if(!strcmp($row["state"],"MN")){echo ("selected=\"\"");}?>>
							MN
						</option>
						<option <?php if(!strcmp($row["state"],"MS")){echo ("selected=\"\"");}?>>
							MS
						</option>
						<option <?php if(!strcmp($row["state"],"MO")){echo ("selected=\"\"");}?>>
							MO
						</option>
						<option <?php if(!strcmp($row["state"],"MT")){echo ("selected=\"\"");}?>>
							MT
						</option>
						<option <?php if(!strcmp($row["state"],"NE")){echo ("selected=\"\"");}?>>
							NE
						</option>
						<option <?php if(!strcmp($row["state"],"NV")){echo ("selected=\"\"");}?>>
							NV
						</option>
						<option <?php if(!strcmp($row["state"],"NH")){echo ("selected=\"\"");}?>>
							NH
						</option>
						<option <?php if(!strcmp($row["state"],"NJ")){echo ("selected=\"\"");}?>>
							NJ
						</option>
						<option <?php if(!strcmp($row["state"],"NM")){echo ("selected=\"\"");}?>>
							NM
						</option>
						<option <?php if(!strcmp($row["state"],"NY")){echo ("selected=\"\"");}?>>
							NY
						</option>
						<option <?php if(!strcmp($row["state"],"NC")){echo ("selected=\"\"");}?>>
							NC
						</option>
						<option <?php if(!strcmp($row["state"],"ND")){echo ("selected=\"\"");}?>>
							ND
						</option>
						<option <?php if(!strcmp($row["state"],"OH")){echo ("selected=\"true\"");}?>>
							OH
						</option>
						<option <?php if(!strcmp($row["state"],"OK")){echo ("selected=\"\"");}?>>
							OK
						</option>
						<option <?php if(!strcmp($row["state"],"OR")){echo ("selected=\"\"");}?>>
							OR
						</option>
						<option <?php if(!strcmp($row["state"],"PA")){echo ("selected=\"\"");}?>>
							PA
						</option>
						<option <?php if(!strcmp($row["state"],"RI")){echo ("selected=\"\"");}?>>
							RI
						</option>
						<option <?php if(!strcmp($row["state"],"SC")){echo ("selected=\"\"");}?>>
							SC
						</option>
						<option <?php if(!strcmp($row["state"],"SD")){echo ("selected=\"\"");}?>>
							SD
						</option>
						<option <?php if(!strcmp($row["state"],"TN")){echo ("selected=\"\"");}?>>
							TN
						</option>
						<option <?php if(!strcmp($row["state"],"TX")){echo ("selected=\"\"");}?>>
							TX
						</option>
						<option <?php if(!strcmp($row["state"],"UT")){echo ("selected=\"\"");}?>>
							UT
						</option>
						<option <?php if(!strcmp($row["state"],"VT")){echo ("selected=\"\"");}?>>
							VT
						</option>
						<option <?php if(!strcmp($row["state"],"VA")){echo ("selected=\"\"");}?>>
							VA
						</option>
						<option <?php if(!strcmp($row["state"],"WA")){echo ("selected=\"\"");}?>>
							WA
						</option>
						<option <?php if(!strcmp($row["state"],"WV")){echo ("selected=\"\"");}?>>
							WV
						</option>
						<option <?php if(!strcmp($row["state"],"WI")){echo ("selected=\"\"");}?>>
							WI
						</option>
						<option <?php if(!strcmp($row["state"],"WY")){echo ("selected=\"\"");}?>>
							WY
						</option>
					</select>
				</div><label class="control-label col-sm-1">Zip:</label>
				<div class="col-sm-3">
					<input class="form-control" name="zip" type="text" value="<?php echo($row["zip"])?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Phone Number:</label>
				<div class="col-sm-3">
					<input class="form-control" name="phone" type="tel" value="<?php echo($row["phone"])?>">
				</div><label class="control-label col-sm-3">Email:</label>
				<div class="col-sm-3">
					<input class="form-control" name="email" type="email" value="<?php echo($row["email"])?>">
				</div>
			</div><button class="btn btn-primary" type="submit">Submit/Update</button>
		</form> 
