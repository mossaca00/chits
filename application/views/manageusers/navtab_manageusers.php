<?php 
	$this->load->view('layout/header');
	$this->load->view('layout/sidebar');	
?>
	
		<ul id="myTab" class="nav nav-tabs">
			<li><a href="#admin" data-toggle="tab">Admin</a></li>
			<li class="active"><a href="#user" data-toggle="tab">Manage User</a></li>
			<li><a href="#role" data-toggle="tab">Manage Role</a></li>
			<li><a href="#role" data-toggle="tab">Manage Privileges</a></li>
			<li><a href="#role" data-toggle="tab">Manage Alert</a></li>
		</ul>
		<div id="myTabContent" class="tab-content">
			<div class="tab-pane fade" id="admin">
				<h1>Admin</h1>
			</div>
			<div class="tab-pane fade in active" id="user">
				<?php $this->load->view('manageusers/view_manageusers'); ?>
			</div>
			<div class="tab-pane fade" id="role">
				<h1>Manage Role</h1>
			</div>
			<div class="tab-pane fade" id="admin">
				<h1>Manage Privileges</h1>
			</div>
			<div class="tab-pane fade" id="admin">
				<h1>Manage Alert</h1>
			</div>
		</div>

	<!-- <div class="row">
		<div class="col-md-12">
				<ul class="nav nav-tabs">
					 <li role="presentation"><a href="#">Admin</a></li>
					 <li role="presentation"><a href="#">Manage User</a></li>
					 <li role="presentation" class="active"><a href="#">Manage Roles</a></li>
					 <li role="presentation"><a href="#">Manage Privillages</a></li>
					 <li role="presentation"><a href="#">Manage Alert</a></li>
				</ul>
		</div>
		<div class="col-md-12">
			<h2> <strong>Manage Users</strong> </h2>
		</div>
		<div class="col-md-12">			
				<a href="#">Add User</a>
		</div>
		<div class="col-md-6">
			<div class="table-responsive">
				<form class="form-inline" role="form">
				<br>
					<table class="table table-bordered table-condensed">
						<tr>
							<td><h5>Find User on name</h5></td>
							<td><input type="text"  class="form-control" placeholder="Enter Name"></td>
						</tr>
						<tr>
							<td><h5>Role</h5></td>
							<td>								
								<select class="form-control">
									<optgroup label="--Please Choose--">
										<option>All</option>
										<option></option>POPULATED in database
									</optgroup>
								</select>
							</td>
						</tr>
						<tr>
							<td><h5>Include Disable</h5></td>
							<td>
							    <h5><input type="checkbox"></h5>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<center><a href="#" type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"> </span> Search </a></center>
							</td>
						</tr>
					</table>End table
				</form>End of form action
			</div>End of tbl resposive
		</div>End of tbl container
	</div>End of row -->

<?php 
	$this->load->view('layout/footer');
?>