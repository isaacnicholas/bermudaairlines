<!DOCTYPE html>
<html lang="en">
<?php
$servername = "localhost";
$username   = "localuser";
$password   = "tG88sAqC";
$dbname     = "airline";
$conn       = new mysqli($servername, $username, $password, $dbname);
?>
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Bermuda Airlines</title><!-- Bootstrap -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
	<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
	<link href="jQueryAssets/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	</script>
	<script src="jQueryAssets/jquery-1.11.1.min.js">
	</script>
	<script src="jQueryAssets/jquery.ui-1.10.4.datepicker.min.js">
	</script><!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body style="padding-top: 70px">
	<div class="container">
		<h2>Create Flight</h2>
		<form class="form-horizontal" action="submit.php" method="post">
			<div class="form-group">
				<label class="control-label col-sm-1">Departure Airport:</label>
				<div class="col-sm-3">
					<select class="form-control" name="departureairport" id="departureairport" onChange="getDepartGates()">
					<?php
					$sql    = "SELECT aid, name FROM airport";
					$result = $conn->query($sql);
					while ($row = $result->fetch_assoc()) {
					    echo ("<option value=\"" . $row["aid"] . "\">" . $row["name"] . "</option>");
					}
					?>
					</select>
				</div><label class="control-label col-sm-1">Departure Gate:</label>
				<div class="col-sm-1" id="departuregates">
				</div><label class="control-label col-sm-1">Arrival Airport:</label>
				<div class="col-sm-3">
					<select class="form-control" name="arrivalairport" id="arrivalairport" onChange="getArriveGates()">
					<?php
					$sql    = "SELECT aid, name FROM airport";
					$result = $conn->query($sql);
					while ($row = $result->fetch_assoc()) {
					    echo ("<option value=\"" . $row["aid"] . "\">" . $row["name"] . "</option>");
					}
					?>
					</select>
				</div><label class="control-label col-sm-1">Arrival Gate:</label>
				<div class="col-sm-1" id="arrivalgates">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1">Plane:</label>
				<div class="col-sm-3">
					<select class="form-control" name="plane">
					<?php
					$sql = "SELECT pid, make, model FROM `airplanes`";

					$result = $conn->query($sql);
					while ($row = $result->fetch_assoc()) {
					    echo ("<option value=\"" . $row["pid"] . "\">#" . $row["pid"] . ": " . $row["make"] . " " . $row["model"] . "</option>");
					}
					?>
					</select>
				</div><label class="control-label col-sm-2">Economy Price:</label>
				<div class="col-sm-2"><div class="input-group">
					<span class="input-group-addon">
						  $</span>
					<input class="form-control" name="economy" type="number" step="any">
					</div></div><label class="control-label col-sm-2">First Class Price:</label>
				<div class="col-sm-2"><div class= "input-group">
					<span class="input-group-addon">
						  $</span><input class="form-control" name="firstclass" type="number" step="any">
					</div></div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1">Departure Date:</label>
				<div class="col-sm-2">
					<input class="form-control" type="date" name="departdate">
				</div><label class="control-label col-sm-1" for="copilot">Departure Time:</label>
				<div class="col-sm-2">
					<input class="form-control" type="time" name="departtime">
				</div><label class="control-label col-sm-1" for="steward">Arrival Date:</label>
				<div class="col-sm-2">
					<input class="form-control" type="date" name="arrivedate">
				</div><label class="control-label col-sm-1" for="steward2">Arrival Time:</label>
				<div class="col-sm-2">
					<input class="form-control" type="time" name="arrivetime">
				</div>
			</div>
			<div class="col-sm-12">
				<h3>Staff</h3>
			</div>
			<div id="staff" class="form-group">
				
			</div><button class="btn btn-default" type="submit">Submit</button>
		</form>
	</div>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button aria-expanded="false" class="navbar-toggle collapsed" data-target="#topFixedNavbar1" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="https://isaac-nicholas.com/bermudaair">Bermuda Airlines</a>
			</div><!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="topFixedNavbar1">
				<ul class="nav navbar-nav">
					<li>
						<a href="https://isaac-nicholas.com/bermudaair/booktickets">Book Tickets</a>
					</li>
					<li>
						<a href="https://isaac-nicholas.com/bermudaair/createflight">Create Flight</a>
					</li>
					<li>
						<a href="https://isaac-nicholas.com/bermudaair/checkin">Check In</a>
					</li>
					<li>
						<a href="https://isaac-nicholas.com/bermudaair/flightstatus">Flight Status</a>
					</li>
					<li class="dropdown">
						<a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">Admin<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li>
								<a href="https://isaac-nicholas.com/bermudaair/admin/plane">Add/Modify Plane</a>
							</li>
							<li>
								<a href="https://isaac-nicholas.com/bermudaair/admin/airport">Add/Modify Airport</a>
							</li>
							<li>
								<a href="https://isaac-nicholas.com/bermudaair/admin/gate">Add/Modify Gate</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">Staff<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li>
								<a href="https://isaac-nicholas.com/bermudaair/staff/staff">Add/Modify Staff</a>
							</li>
							<li>
								<a href="https://isaac-nicholas.com/bermudaair/staff/pay">Add/Modify Pay</a>
							</li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<script>
		function getDepartGates(){
			var value=document.getElementById("departureairport").value;
			populatedepart(value);
			populatestaff(value);
		}
		function getArriveGates(){
			var value=document.getElementById("arrivalairport").value;
			populatearrival(value);
		}
			function populatedepart(value){
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
	     document.getElementById("departuregates").innerHTML = this.responseText;
	   }
	 };
	 xhttp.open("GET", "departuregate.php?aid="+value, true);
	 xhttp.send();
	       }
			function populatearrival(value){
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
	     document.getElementById("arrivalgates").innerHTML = this.responseText;
	   }
	 };
	 xhttp.open("GET", "arrivalgate.php?aid="+value, true);
	 xhttp.send();
	       }
		function populatestaff(value){
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
	     document.getElementById("staff").innerHTML = this.responseText;
	   }
	 };
	 xhttp.open("GET", "staff.php?aid="+value, true);
	 xhttp.send();
	       }
		getDepartGates();
		getArriveGates();
	</script>
</body>
</html>