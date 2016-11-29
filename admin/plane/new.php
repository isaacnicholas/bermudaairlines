<form action="submitnew.php" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="form-group">
					<label class="control-label col-sm-2">Make:</label>
					<div class="col-sm-4">
						<input class="form-control" name="make" type="text">
					</div><label class="control-label col-sm-2">Model:</label>
					<div class="col-sm-4">
						<input class="form-control" name="model" type="text">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1">Status:</label>
				<div class="col-sm-11">
					<input class="form-control" name="status" type="text">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2"]>Number of First Class:</label>
				<div class="col-sm-4">
					<input class="form-control" name="firstclass" type="number">
				</div><label class="control-label col-sm-2">Number of Economy:</label>
				<div class="col-sm-4">
					<input class="form-control" name="economy" type="number">
				</div>
			</div><button class="btn btn-primary" type="submit">Submit/Update</button>
		</form>