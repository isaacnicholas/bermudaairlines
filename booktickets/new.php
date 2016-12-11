<form class="form-horizontal" action="submitnew.php" method="post">
			<div class="form-group">
				<label class="control-label col-sm-1" >Name:</label>
				<div class="col-sm-11">
					<input class="form-control" name="name" type="text">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1">DOB:</label>
				<div class="col-sm-3">
					<input class="form-control" name="dob" type="date">
				</div><label class="control-label col-sm-1">Sex:</label>
				<div class="col-sm-3">
					<select class="form-control" name="sex">
						<option>
							Male
						</option>
						<option>
							Female
						</option>
					</select>
				</div><label class="control-label col-sm-1">Weight:</label>
				<div class="col-sm-3">
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
				<label class="control-label col-sm-1">City:</label>
				<div class="col-sm-3">
					<input class="form-control" name="city" type="text">
				</div><label class="control-label col-sm-1">State:</label>
				<div class="col-sm-3">
					<select class="form-control" name="state">
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
					<input class="form-control" name="zip" type="number">
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
					<select class="form-control" name="homeairport">
						<?php
					$sql    = "SELECT aid, name FROM airport";
					$result = $conn->query($sql);
					while ($row = $result->fetch_assoc()) {
					    echo ("<option value=" . $row['aid'] . ">");
					    echo ($row['name']);
					    echo ("</option>");
					}?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1">Payment Method:</label>
				<div class="col-sm-5">
					<input class="form-control" name="payment" type="text">
				</div>
				<label class="control-label col-sm-1">Diet:</label>
				<div class="col-sm-5">
					<input class="form-control" name="diet" type="text">
				</div>
			</div><button class="btn btn-primary" type="submit">Submit/Update</button>
		</form>