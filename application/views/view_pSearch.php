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
		<!-- SPACE -->
		<div class="col-md-12">
			<h2> </h2>
		</div>
		<!-- SPACE -->
		<div class="col-md-12">
		
			<?php echo form_open('patients/searchPatients'); ?> 
				<div class="form-group">
					<label for="pName"> Patient Name: </label>
					<input type="text" class="form-control" placeholder="Enter a name" aria-describedby="iconSearch">
					<span id="iconSearch" class="sr-only"> </span>
					<small>
						<cite> Enter at least 2 characters </cite>
					</small>
				</div>
			</form>

		</div>

	</div>


<?php $this->load->view('layout/footer.php'); ?>