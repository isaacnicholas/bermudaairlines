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
		<h2>Update Planes</h2>
		<div class="row">
			<label class="control-label col-sm-1" for="plane">Plane:</label>
			<div class="col-sm-3">
				<select class="form-control" id="plane" onchange="newPlane()">
					<option value="new">
						New Plane
					</option><?php
					$sql = "SELECT pid, make, model FROM `airplanes`";

					$result = $conn->query($sql);
					while ($row = $result->fetch_assoc()) {
					    echo ("<option value=\"" . $row["pid"] . "\">#" . $row["pid"] . ": " . $row["make"] . " " . $row["model"] . "</option>");
					}
					$conn->close();
					?>
				</select>
			</div>
		</div>
		<div style="padding-bottom: 20px"></div>
		<div id="form"></div>
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
	       function newPlane(){
	           var value=document.getElementById("plane").value;
	           if(value==="new"){
	               runnew();
	           }else{
	               runupdate(value);   
	           }
	       }
	       function runnew(){
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
	     document.getElementById("form").innerHTML = this.responseText;
	   }
	 };
	 xhttp.open("GET", "update.php?pid="+value, true);
	 xhttp.send();
	       }
	       runnew();
	</script>
</body>
</html>
<?php
			$conn->close();
		?>