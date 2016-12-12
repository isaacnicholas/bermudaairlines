
  <form class="form-horiziontal" action="submitluggage.php?tid=<?php echo($_GET['tid']);?>" method="post">

  <div class="form-group">
	  <div class="col-sm-1">Luggage Type</div>
		  <div class="col-sm-2">
					<select class="form-control" name="type">
						<option>
							CarryOn
						</option>
						<option>
							Check
						</option>
					</select>
					</div><label class="control-label col-sm-1">Price:</label>
				<div class="col-sm-2">
					<div class="input-group">
					<span class="input-group-addon">
						  $</span>
					<input class="form-control" name="price" type="number" step="any">
					</div></div>
					<label class="control-label col-sm-1" for="weight">Weight:</label>
				<div class="col-sm-2">
					<input name="weight" class="form-control" type="number" step="any">
				</div>
				<button class="btn btn-default">Submit</button>
	  </div>
</form>