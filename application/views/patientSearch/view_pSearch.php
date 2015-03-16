<?php 
	$this->load->view('layout/header.php'); 
	$this->load->view('layout/sidebar.php');
?>

	<div class="row">

		<div class="col-md-12">
			<h2> <strong> Patient Search</strong> </h2>
		</div>
		<div class="col-md-12">
			<small> 
				<cite> Find Patient(s) </cite>
			</small>
		</div>
	</div>
	<!-- SPACE -->
	<div class="row">
		<div class="col-md-12">
			<h2> </h2>
		</div>
	</div>
	<!-- SPACE -->
	<div class="row">
		<div class="col-md-12">
			<form class="form-inline" role="form">
				<div class="form-group">
					<label for="pName"> Patient Name: </label>
					<input id="pName" type="text" class="form-control" placeholder="Enter at least 2 characters" aria-describedby="iconSearch">
					<span id="iconSearch" class="sr-only"> </span>
					<!-- <small>
						<cite>  </cite>
					</small> -->
					<button type="submit" class="btn btn-default"> Search </button>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<br>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<a href="<?php echo base_url('module/chits/addPatient');?>" type="button" class="btn btn-default"><span class="glyphicon glyphicon-plus"> </span> Add Patient </a>
		</div>
	</div>



<?php $this->load->view('layout/footer.php'); ?>
