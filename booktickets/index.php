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
	<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
	<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
	<link href="jQueryAssets/jquery.ui.dialog.min.css" rel="stylesheet" type="text/css">
	<link href="jQueryAssets/jquery.ui.resizable.min.css" rel="stylesheet" type="text/css">
	<link href="jQueryAssets/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	</script>
	<script src="jQueryAssets/jquery-1.11.1.min.js">
	</script>
	<script src="jQueryAssets/jquery.ui-1.10.4.dialog.min.js">
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
		<h2>Book Tickets</h2>
		<div style="padding-bottom: 20px">
			Is this a new Customer? <button class="btn btn-success" onclick="hideexisting()" type="button">Yes</button> <button class="btn btn-danger" onclick="showexisting()" type="button">No</button><br><br>
		</div>
		<div id="returning" style="display: none">
			<label for="usr">Customer Name:</label> <input class="form-control" id="namesearch" type="text" oninput="lookforcustomers()">
			<div id="customerslist">
			</div>
		</div>
		<div id="form">
		</div>
		
		<div style="padding-top: 20px">
			<div class="control-label col-sm-12">
				<h2>Select Flight</h2>
			</div>
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
			</div>Click on a price to book a ticket
			<div id="options">
			</div>
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
		<?php
			if(isset($_GET["cid"])){
					echo("start(".$_GET["cid"].");");
			}else{
				echo('newcustomer();');
			}
		?>
		function start(name){
			selectNumber(name);
			updatecustomers();
		}
		 var cid;
	       function selectNumber(number){
	           cid=number;
	           updatecustomers(number);
	       }
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
		function runflights(departureid, arrivalid, date){
			alert(cid);
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
	 xhttp.open("GET", "flights.php?dep="+departureid+"&arr="+arrivalid+"&date="+date+"&cid="+cid, true);
	 xhttp.send();}
	       function updatecustomers(){
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
	     document.getElementById("form").innerHTML = this.responseText;
	   }
	 };
	 xhttp.open("GET", "update.php?cid="+cid, true);
	 xhttp.send();
	       }
	       function newcustomer(){
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
	     document.getElementById("form").innerHTML = this.responseText;
	   }
	 };
	 xhttp.open("GET", "new.php", true);
	 xhttp.send();
	       }
	   function lookforcustomers(){
	       var name=document.getElementById("namesearch").value;
	       runsearch(name);
	   }
	       function runsearch(value){
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
	     document.getElementById("customerslist").innerHTML = this.responseText;
	   }
	 };
	 xhttp.open("GET", "findcustomers.php?name="+value, true);
	 xhttp.send();
	   }
	       function showexisting(){
	           $("#returning").slideDown();
	       }
	       function hideexisting(){
	           $("#returning").slideUp();
	           newcustomer();
	       }
			
	</script>
</body>
</html>