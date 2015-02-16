<?php 
	$this->load->view('layout/header');
	$this->load->view('layout/sidebar');	
?>

	<div class="row">
		<div class="col-md-12">
			<h2> <strong>Laboratory Log</strong> </h2>
		</div>
		<div class="col-md-12">
			<h5>Date: </h5>
			<h5>User Logged: </h5>
		</div>
		<div class="col-md-12">
			<h5><strong>Find Patient(s)</strong></h5>
		</div>
		<div class="col-md-12">
			<form class="form-inline" role="form">
			<label for="pDATE">Patient Name: </label>
			<input type="text" class="form-control" placeholder="Enter an ID" aria-describedby="inconoSearch">
			<span id="iconSearch" class="sr-only"> </span>
			<small>
				<cite> Enter at least 2 characters </cite>
			</small>
		</form>
		</div>
			<div class="col-md-6">
			<div class="table-responsive">
				<form class="form-inline" role="form">
				<br>
					<table class="table table-bordered table-condensed">
						<tr>
							<td><h5>Patient ID:</h5></td>
							<td><input type="text" class="form-control" placeholder="Enter an ID" aria-describedby="inconoSearch"></td>
						</tr>
						<tr>
							<td><h5>Lab Exam:</h5></td>
							<td>
								<select class="form-control">
									<optgroup label="--Please Choose--">
										<option>All</option>
										<option></option><!--POPULATED in database-->
									</optgroup>
								</select>
							</td>
						</tr>
						<tr>
							<td><h5>Status:</h5></td>
							<td>
								<select class="form-control">
									<optgroup label="--Please Choose--">
										<option>All</option>
										<option></option><!--POPULATED in database-->
									</optgroup>
								</select>
							</td>
						</tr>
						<tr>
							<td><h5>Order:</h5></td>
							<td>
								<select class="form-control">
									<optgroup label="--Please Choose--">								
										<option></option><!--POPULATED in database-->
									</optgroup>
								</select>
							</td>
						</tr>
						<tr>
							<td><h5>Lab Form Ref. No.:</h5></td>
							<td><input type="text" class="form-control" placeholder="Enter Ref. No." aria-describedby="inconoSearch"></td>
						</tr>
						<tr>
							<td><h5>Sent To Lab:</h5></td>
							<td>
								<select class="form-control">
									<optgroup label="--Please Choose--">								
										<option></option><!--POPULATED in database-->
									</optgroup>
								</select>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<center><a href="#" type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"> </span> Search </a></center>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<div class="col-md-12">
			<div class="table-responsive">
				<form class="form-inline" role="form">
					<table class="table table-striped table-bordered table-condensed">
						<tr>
							<td>Page</td>
							<td colspan="6">
								<select class="form-control">
									<optgroup label="--Please Choose--">
										<option>1</option><!--POPULATED in database-->
									</optgroup>
								</select>
							</td>
						</tr>
						<tr>
							<th data-field="ref. no." class="text-center">Ref. No.</th>
							<th data-field="name" class="text-center">Name</th>
							<th data-field="request" class="text-center">Request Date</th>
							<th data-field="lab" class="text-center">Lab Request Type</th>
							<th data-field="status" class="text-center">Status</th>
							<th data-field="date" class="text-center">Date Concluded</th>
							<th data-field="action" class="text-center">Action</th>
						</tr>
						<tr>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
						</tr>
						<tr>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
						</tr>
						<tr>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
						</tr>
						<tr>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
						</tr>
						<tr>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
							<td>population by database</td>
						</tr>
						<tr>
							<td>Page</td>
							<td colspan="6">
								<select class="form-control">
									<optgroup label="--Please Choose--">
										<option>1</option><!--POPULATED in database-->
									</optgroup>
								</select>
							</td>
						</tr>
					</table><!-- End of table -->
				</form><!-- End of form group -->
			</div><!-- End of table resposive -->
		</div>	<!-- End of table container -->
		<div class="col-md-12">
			<a href="#" type="button" class="btn btn-default"><span class="glyphicon glyphicon-refresh"></span> Refresh </a>
		</div>
	</div><!-- End of row -->
<?php 
$this->load->view('layout/footer');
?>