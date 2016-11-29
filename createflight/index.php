<!DOCTYPE html>
<html lang="en">
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
		<form class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-1" for="departureairport">Departure Airport:</label>
				<div class="col-sm-3">
					<select class="form-control" id="departureairport">
						<option>
							Airport 1
						</option>
						<option>
							Airport 2
						</option>
					</select>
				</div><label class="control-label col-sm-1" for="departuregate">Departure Gate:</label>
				<div class="col-sm-1">
					<select class="form-control" id="departuregate">
						<option>
							1
						</option>
						<option>
							2
						</option>
					</select>
				</div><label class="control-label col-sm-1" for="arrivalairport">Arrival Airport:</label>
				<div class="col-sm-3">
					<select class="form-control" id="arrivalairport">
						<option>
							Airport 1
						</option>
						<option>
							Airport 2
						</option>
					</select>
				</div><label class="control-label col-sm-1" for="arrivalegate">Arrival Gate:</label>
				<div class="col-sm-1">
					<select class="form-control" id="arrivalegate">
						<option>
							1
						</option>
						<option>
							2
						</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1" for="plane">Plane:</label>
				<div class="col-sm-3">
					<select class="form-control" id="plane">
						<option>
							Plane 1
						</option>
						<option>
							Plane 2
						</option>
					</select>
				</div><label class="control-label col-sm-2" for="economy">Economy Price:</label>
				<div class="col-sm-2">
					<input class="form-control" id="economy" type="number">
				</div><label class="control-label col-sm-2" for="firstclass">First Class Price:</label>
				<div class="col-sm-2">
					<input class="form-control" id="firstclass" type="number">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1" for="pilot">Departure Date:</label>
				<div class="col-sm-2">
					<input id="Datepicker1" type="text">
				</div><label class="control-label col-sm-1" for="copilot">Departure Time:</label>
				<div class="col-sm-2">
					<input type="time">
				</div><label class="control-label col-sm-1" for="steward">Arrival Date:</label>
				<div class="col-sm-2">
					<input id="Datepicker2" type="text">
				</div><label class="control-label col-sm-1" for="steward2">Arrival Time:</label>
				<div class="col-sm-2">
					<input type="time">
				</div>
			</div>
			<div class="col-sm-12">
				<h3>Staff</h3>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1" for="pilot">Pilot:</label>
				<div class="col-sm-2">
					<select class="form-control" id="pilot">
						<option>
							Me
						</option>
						<option>
							You
						</option>
					</select>
				</div><label class="control-label col-sm-1" for="copilot">Co-Pilot:</label>
				<div class="col-sm-2">
					<select class="form-control" id="copilot">
						<option>
							Me
						</option>
						<option>
							You
						</option>
					</select>
				</div><label class="control-label col-sm-1" for="steward">Steward:</label>
				<div class="col-sm-2">
					<select class="form-control" id="steward">
						<option>
							Me
						</option>
						<option>
							You
						</option>
					</select>
				</div><label class="control-label col-sm-1" for="steward2">Steward 2:</label>
				<div class="col-sm-2">
					<select class="form-control" id="steward2">
						<option>
							Me
						</option>
						<option>
							You
						</option>
					</select>
				</div>
			</div><button class="btn btn-default" type="submit">Submit</button>
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
	<script type="text/javascript">
	   $(function() {
	      $( "#Datepicker1" ).datepicker(); 
	   });
	   $(function() {
	      $( "#Datepicker2" ).datepicker(); 
	   });
	</script>
</body>
</html>