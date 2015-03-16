<?php  
	$this->load->view('layout/header');
	$this->load->view('layout/sidebar');
?>

	<div class="row">
		<div class="col-md-12">
			<h2> <strong> Appointments </strong> </h2>
		</div>
		<div class="col-md-12">
			<form class="form-inline" role="form">
				<label for="pDATE">Appointment Date:</label>
				<input type="text" class="form-control"  placeholder="Enter an ID" aria-describedby="inconoSearch">
				<span id="iconSearch" class="sr-only"> </span>
				<small>
					<a href="#" type="button" class="btn btn-default"> Submit </a>
				</small>
			</form>
		</div><!-- End of search container -->
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered">			   
				        <tr>
				            <th data-field="date"><h4><strong>Date</strong></h4></th>
				            <th data-field="name"><h4><strong>Name</strong></h4></th>
				            <th data-field="reason"><h4><strong>Reason</strong></h4></th>
				            <th data-field="setby"><h4><strong>Set By</strong></h4></th>
				            <th data-field="delete"><h4><strong>Delete</strong></h4></th>
				            <th data-field="queue"><h4><strong>Palce in Queue</strong></h4></th>
				        </tr>
				        <tr><!--POPULATED in database-->
				        	<td></td>
				        	<td></td>
				        	<td></td>
				        	<td></td>
				        	<td></td>
				        	<td></td>
				        </tr>		
				</table>
			</div><!-- End table responsive -->
		</div><!-- End of table container -->
	</div><!-- End of row -->

<?php  
	$this->load->view('layout/footer');
?>