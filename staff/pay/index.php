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
		<h2>Update Pay</h2><label for="usr">Staff Name:</label> <input class="form-control" id="namesearch" type="text">
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
		<form class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-1" for="wage">Wage:</label>
				<div class="col-sm-3">
					<input class="form-control" id="wage" type="number">
				</div><label class="control-label col-sm-1" for="hours">Hours:</label>
				<div class="col-sm-3">
					<input class="form-control" id="hours" type="number">
				</div><label class="control-label col-sm-1" for="weight">Time:</label>
				<div class="col-sm-3">
					<input class="form-control" id="weight" type="number">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1" for="method">Method:</label>
				<div class="col-sm-3">
					<select class="form-control" id="method">
						<option>
							Check
						</option>
						<option>
							Direct Deposit
						</option>
					</select>
				</div>
			</div>
			<div class="form-group" id="directdeposit">
				<label class="control-label col-sm-1" for="accnum">Account Number:</label>
				<div class="col-sm-3">
					<input class="form-control" id="accbum" type="number">
				</div><label class="control-label col-sm-1" for="routenum">Route Number:</label>
				<div class="col-sm-3">
					<input class="form-control" id="routenum" type="number">
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
</body>
</html>