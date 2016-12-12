<!DOCTYPE html>
<html lang="en">
<head>
<?php
$servername = "localhost";
$username   = "localuser";
$password   = "tG88sAqC";
$dbname     = "airline";
$conn       = new mysqli($servername, $username, $password, $dbname);
	?>
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
		<h2>Flight Status</h2>
		<h4>Search for a flight</h4><br>
		<div class="row">
				<label class="col-sm-1">Departure:</label>
				<div class="col-sm-3">
					<select class="form-control" id="departureairport" onChange="updateArrival()">
						<?php
					$sql    = "SELECT aid, name FROM airport";
					$result = $conn->query($sql);
					while ($row = $result->fetch_assoc()) {
					    echo ("<option value=\"" . $row["aid"] . "\">" . $row["name"] . "</option>");
					}
					?>
					</select>
				</div><label class="control-label col-sm-1">Arrival:</label>
				<div class="col-sm-3" id="arrivalairport">
				</div><label class="col-sm-2">Date:</label>
				<div class="col-sm-2">
					<input class="form-control" id="date" name="date" type="date">
				</div>
		<div id="options">
			</div>
		<h4>Current Status</h4>
		<div id="status">
			</div>
		
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
		function updateArrival(){
			value = document.getElementById("departureairport").value;
			runarrival(value);
		}
		updateArrival();
		function findFlights(){
			departureid = document.getElementById("departureairport").value;
			arrivalid = document.getElementById("arrival").value;
			date = document.getElementById("date").value;
			runflights(departureid, arrivalid, date);
		}
		var fid;
		function selectNumber(number){
			fid=number;
			getInfo();
			getDepartGates();
			getArriveGates();
		}
		function updateStatus(){
			alert(document.getElementById("status").value);
			status=document.getElementById("status").value;
			sendStatus(status);
		}
		
		function runarrival(aid){
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
	     document.getElementById("arrivalairport").innerHTML = this.responseText;
	   }
	 };
	 xhttp.open("GET", "arrival.php?aid="+aid, true);
	 xhttp.send();
		}
		function sendStatus(status){
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
	   }
	 };
	 xhttp.open("GET", "sendstatus.php?fid="+fid+"&status="+status, true);
	 xhttp.send();
		}
		function runflights(departureid, arrivalid, date){
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
	     document.getElementById("options").innerHTML = this.responseText;
	   }
	 };
	 xhttp.open("GET", "flights.php?dep="+departureid+"&arr="+arrivalid+"&date="+date, true);
	 xhttp.send();}
		function getInfo(){
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
	     document.getElementById("status").innerHTML = this.responseText;
	   }
	 };
	 xhttp.open("GET", "flightinfo.php?fid="+fid, true);
	 xhttp.send();
		}
		function getDepartGates(){
			var value=document.getElementById("departureairport").value;
			alert (document.getElementById("arrivalairport").value)
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
	 xhttp.open("GET", "departuregate.php?aid="+value+"&fid="+fid, true);
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
	 xhttp.open("GET", "arrivalgate.php?aid="+value+"&fid="+fid, true);
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
	 xhttp.open("GET", "staff.php?aid="+value+"&fid="+fid, true);
	 xhttp.send();
	       }
		</script>
</body>
</html>