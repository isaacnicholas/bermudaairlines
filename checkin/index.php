<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bermuda Airlines</title>
    <!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body style="padding-top: 70px">
  <div class="container">
  	<h2>Check In</h2>

    <label for="usr">Customer Name:</label> <input class="form-control" id="namesearch" type="text" oninput="lookforcustomers()">
  	<div id="customerslist">
			</div>
	  <h3>Customer's Flights:</h3>
	  <div id="flights">
				
	</div>
		<div id="flightinfo">
	  </div>
			
	  <h3>Add Luggage</h3>
	  <div id="luggage">
	  </div>
  </div>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a class="navbar-brand" href="https://vps101733.vps.ovh.ca/bermudaair">Bermuda Airlines</a></div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="topFixedNavbar1">
        <ul class="nav navbar-nav">
          <li><a href="https://vps101733.vps.ovh.ca/bermudaair/booktickets">Book Tickets</a></li>
          <li><a href="https://vps101733.vps.ovh.ca/bermudaair/createflight">Create Flight</a></li>
          <li><a href="https://vps101733.vps.ovh.ca/bermudaair/checkin">Check In</a></li>
          <li><a href="https://vps101733.vps.ovh.ca/bermudaair/flightstatus">Flight Status</a></li>
          
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="https://vps101733.vps.ovh.ca/bermudaair/admin/plane">Add/Modify Plane</a></li>
              <li><a href="https://vps101733.vps.ovh.ca/bermudaair/admin/airport">Add/Modify Airport</a></li>
              <li><a href="https://vps101733.vps.ovh.ca/bermudaair/admin/gate">Add/Modify Gate</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Staff<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="https://vps101733.vps.ovh.ca/bermudaair/staff/staff">Add/Modify Staff</a></li>
              <li><a href="https://vps101733.vps.ovh.ca/bermudaair/staff/pay">Add/Modify Pay</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
<script>
	<?php
			if(isset($_GET["tid"])){
					echo("start(".$_GET["tid"].");");
			}
		?>
		function start(name){
			selectFlight(name);
		}
		 var cid;
	       function selectNumber(number){
	           cid=number;
	           findflights(number);
	       }
	var tid;
	function selectFlight(number){
	           tid=number;
	           runflight(number);
				runluggage(number);
	       }
	       function runflight(value){
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
	     document.getElementById("flightinfo").innerHTML = this.responseText;
	   }
	 };
	 xhttp.open("GET", "updateflight.php?tid="+value, true);
	 xhttp.send();
	   }
	function runluggage(value){
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
	     document.getElementById("luggage").innerHTML = this.responseText;
	   }
	 };
	 xhttp.open("GET", "addluggage.php?tid="+value, true);
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
	function findflights(){
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
	     document.getElementById("flights").innerHTML = this.responseText;
	   }
	 };
	 xhttp.open("GET", "findflights.php?cid="+cid, true);
	 xhttp.send();
	   }
	  </script>	
  </body>
</html>