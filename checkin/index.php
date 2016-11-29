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
    <label for="usr">Customer Name:<br>
    </label>
    <input class="form-control" id="namesearch" type="text">
  	<div class="radio">
				<table border="1" width="100%">
					<tbody>
						<tr>
							<th scope="col">Name</th>
							<th scope="col">Home Airport</th>
							<th scope="col">Address</th>
							<th scope="col">Phone Number</th>
						</tr>
						<tr>
							<td><label><input name="optradio" type="radio">My Name Goes Here</label></td>
							<td>Home Airport</td>
							<td>Address</td>
							<td>1021021022</td>
						</tr>
					</tbody>
				</table>
	</div>
	  <h3>Customer's Flights:</h3>
	  <div class="radio">
				<table border="1" width="100%">
					<tbody>
						<tr>
							<th scope="col">Departure Airport</th>
							<th scope="col">Departure Time</th>
							<th scope="col">Arrival Airport</th>
							<th scope="col">Arrival Time</th>
						</tr>
						<tr>
							<td><label><input name="optradio" type="radio">Airport 1</label></td>
							<td>Date</td>
							<td>Airport 2</td>
							<td>Date</td>
						</tr>
					</tbody>
				</table>
	</div>
			Departure Airport:<br>
			Departure Gate:<br>
			Departure Date:<br>
			Departure Time:<br>
			Arrival Airport:<br>
			Arrival Gate:<br>
			Arrival Time:<br>
			Arrival Time:<br>
			Airport:<br>
			Seat Number:<br>
			Cost: $134<br>
			Luggage Items:
			
	  <h3>Add Luggage</h3>
	  <div class="row">
		  <div class="col-sm-1">Luggage Type</div>
		  <div class="col-sm-2">
					<select class="form-control" id="sex">
						<option>
							Carry-On
						</option>
						<option>
							Stowaway
						</option>
					</select>
					</div><label class="control-label col-sm-1" for="price">Price:</label>
				<div class="col-sm-2">
					<input id="price" type="number">
					</div><label class="control-label col-sm-1" for="weight">Weight:</label>
				<div class="col-sm-2">
					<input id="price" type="weight">
				</div>
				<button class="btn btn-default">Submit</button>
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
	
  </body>
</html>