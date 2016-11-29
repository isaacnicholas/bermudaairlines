<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Bermuda Airlines</title><!-- Bootstrap -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	</script><!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body style="padding-top: 70px">
	<div class="container">
		<h2>Update Staff</h2>
		<div style="padding-bottom: 20px">
			Is this a new Staff Member? <button class="btn btn-success" type="button">Yes</button> <button class="btn btn-danger" type="button">No</button><br>
		</div>
		<div id="returning">
			<label for="usr">Staff Name:</label> <input class="form-control" id="namesearch" type="text" oninput="updatestaff()">
			<div style="padding-top: 20px"></div>
			<div id="stafflist">
			</div>
		</div>
		<form class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-1" for="name">Name:</label>
				<div class="col-sm-11">
					<input class="form-control" id="name" type="text">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1" for="Datepicker1">DOB:</label>
				<div class="col-sm-3">
					<input class="form-control" id="Datepicker1" type="text">
				</div><label class="control-label col-sm-1" for="sex">Sex:</label>
				<div class="col-sm-3">
					<select class="form-control" id="sex">
						<option>
							Male
						</option>
						<option>
							Female
						</option>
					</select>
				</div><label class="control-label col-sm-1" for="weight">Weight:</label>
				<div class="col-sm-3">
					<input class="form-control" id="weight" type="number">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1" for="address1">Address Line 1:</label>
				<div class="col-sm-11">
					<input class="form-control" id="address1" type="text">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1" for="address2">Address Line 2:</label>
				<div class="col-sm-11">
					<input class="form-control" id="address2" type="text">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1" for="city">City</label>
				<div class="col-sm-3">
					<input class="form-control" id="city" type="text">
				</div><label class="control-label col-sm-1" for="state">State:</label>
				<div class="col-sm-3">
					<select class="form-control" id="state">
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
				</div><label class="control-label col-sm-1" for="zip">Zip:</label>
				<div class="col-sm-3">
					<input class="form-control" id="zip" type="number">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1" for="phone">Phone Number:</label>
				<div class="col-sm-3">
					<input class="form-control" id="phone" type="tel">
				</div><label class="control-label col-sm-1" for="email">Email:</label>
				<div class="col-sm-3">
					<input class="form-control" id="email" type="email">
				</div><label class="control-label col-sm-1" for="homeairport">Home Airport:</label>
				<div class="col-sm-3">
					<select class="form-control" id="homeairport">
						<option>
							Airport 1
						</option>
						<option>
							Airport 2
						</option>
					</select>
				</div>
			</div><button class="btn btn-primary" type="submit">Submit/Update</button>
		</form>
	</div>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button aria-expanded="false" class="navbar-toggle collapsed" data-target="#topFixedNavbar1" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="https://vps101733.vps.ovh.ca/bermudaair">Bermuda Airlines</a>
			</div><!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="topFixedNavbar1">
				<ul class="nav navbar-nav">
					<li>
						<a href="https://vps101733.vps.ovh.ca/bermudaair/booktickets">Book Tickets</a>
					</li>
					<li>
						<a href="https://vps101733.vps.ovh.ca/bermudaair/createflight">Create Flight</a>
					</li>
					<li>
						<a href="https://vps101733.vps.ovh.ca/bermudaair/checkin">Check In</a>
					</li>
					<li>
						<a href="https://vps101733.vps.ovh.ca/bermudaair/flightstatus">Flight Status</a>
					</li>
					<li class="dropdown">
						<a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">Admin<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li>
								<a href="https://vps101733.vps.ovh.ca/bermudaair/admin/plane">Add/Modify Plane</a>
							</li>
							<li>
								<a href="https://vps101733.vps.ovh.ca/bermudaair/admin/airport">Add/Modify Airport</a>
							</li>
							<li>
								<a href="https://vps101733.vps.ovh.ca/bermudaair/admin/gate">Add/Modify Gate</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">Staff<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li>
								<a href="https://vps101733.vps.ovh.ca/bermudaair/staff/staff">Add/Modify Staff</a>
							</li>
							<li>
								<a href="https://vps101733.vps.ovh.ca/bermudaair/staff/pay">Add/Modify Pay</a>
							</li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<script>
		
		var sid=0;
		function selectNumber(number){
			sid=number;
			alert(number);
		}
	function updatestaff(){
		var name=document.getElementById("namesearch").value;
		runupdate(name);
	}
		function runupdate(value){
			var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("stafflist").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "findstaff.php?name="+value, true);
  xhttp.send();
	}
	</script>
</body>
</html>