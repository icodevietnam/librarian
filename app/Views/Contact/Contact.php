<div class="row">
	<div class="col-lg-12">
		<div class="ibox">
			<div class="ibox-content">
				<a href="<?=DIR;?>admin/contact-us" class="btn-link">
					<h2><?= $title ?></h2>
				</a>
				<button data-toggle="modal" data-target="#newItem"class="btn btn-sm btn-primary">Create</button>
				<div class="table-responsive">
					<table id="tblItems"
							class="table table-bordered table-hover table-striped">
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="newItem" tabindex="-1" role="dialog"
			aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
							aria-label="Close">
							<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Add Faculty</h4>
			</div>
			<form id="newItemForm" class="form-horizontal" method="POST">
				<div class="modal-body">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name - Short Name</label>
						<div class="col-sm-10">
							<input type="text" class="name form-control" name="name" >
						</div>
					</div>
					<div class="form-group">
						<label for="description" class="col-sm-2 control-label">Description</label>
						<div class="col-sm-10">
						<input type="text" class="description form-control" name="description" >
						</div>
					</div>
					<div class="form-group">
						<label for="code" class="col-sm-2 control-label">Code</label>
						<div class="col-sm-10">
						<input type="text" readonly class="code form-control" name="code" >
						</div>
					</div>
					<div class="form-group">
						<label for="year" class="col-sm-2 control-label">Year</label>
						<div class="col-sm-10">
							<select class='selectpicker year' name='year' >
								<?php 
									foreach ($years as $value) {
										echo "<option value=".$value.">".$value."</option>";
									}
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="year" class="col-sm-2 control-label">Marketing Coordinator</label>
						<div class="col-sm-10">
							<select class='selectpicker mkcoor' name='mkcoor' >
							</select>
						</div>
					</div>
				<div class="modal-footer">
					<button type="button" onclick="insertItem();" class="btn btn-primary">Save</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="updateItem" tabindex="-1" role="dialog"
			aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
				<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"
							aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title" id="myModalLabel">Edit Role</h4>
				</div>
					<form id="updateItemForm" class="form-horizontal" method="POST">
				<div class="modal-body">
								<input type="text" class="id form-control hide" name="id" >
								<div class="form-group">
									<label for="name" class="col-sm-2 control-label">Name</label>
									<div class="col-sm-10">
										<input type="text" class="name form-control" name="name" >
									</div>
								</div>
								<div class="form-group">
									<label for="name" class="col-sm-2 control-label">Description</label>
									<div class="col-sm-10">
										<input type="text" class="description form-control" name="description" >
									</div>
								</div>
								<div class="form-group">
									<label for="code" class="col-sm-2 control-label">Code</label>
									<div class="col-sm-10">
									<input type="text" readonly="" class="code form-control" name="code" >
									</div>
								</div>
								<div class="form-group">
						<label for="year" class="col-sm-2 control-label">Year</label>
						<div class="col-sm-10">
							<select class='selectpicker year' name='year' >
								<?php 
									foreach ($years as $value) {
										echo "<option value=".$value.">".$value."</option>";
									}
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="year" class="col-sm-2 control-label">Marketing Coordinator</label>
						<div class="col-sm-10">
							<select class='selectpicker mkcoor' name='mkcoor' >
								
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
						<button type="button" onclick="update();" class="btn btn-primary">Edit</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>
