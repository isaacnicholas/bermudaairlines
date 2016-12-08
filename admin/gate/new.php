<form class="form-horizontal" action="submitnew.php?aid=<?php echo($_GET['aid'])?>" method="post">
			<div class="form-group">
				<label class="control-label col-sm-3">Gate Name (single letter):</label>
				<div class="col-sm-2">
					<input class="form-control" name="gname" type="text">
				</div>
					<label class="control-label col-sm-3" for="name">Concourse (number):</label>
				<div class="col-sm-2">
					<input class="form-control" name="concourse" type="number">
				</div>
			</div><button class="btn btn-primary" type="submit">Submit/Update</button>
</form>