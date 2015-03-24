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
			<?php 
				$attributes = array('class' => 'form-inline');
				echo form_open('module/patients/searchPatient', $attributes); 
			?>
				<div class="form-group">
					<label for="pName"> Patient Name: </label>
					<input id="pName" name="patientname" type="text" class="form-control" placeholder="Enter at least 2 characters" aria-describedby="iconSearch">
					<span id="iconSearch" class="sr-only"> </span>
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
	
	<div class="row" style="margin-bottom: 25px;">
		<div class="col-md-12">
			<a href="<?php echo base_url('patients/addPatient');?>" type="button" class="btn btn-default"><span class="glyphicon glyphicon-plus"> </span> Add Patient </a>
		</div>
	</div>

	<?php if ($patient_result): ?>
		<div class="table-responsive">
			<table class="table table-striped table-hover table-bordered table-bordered">
				<tr>
					<th>Identifier</th>
					<th>Given</th>
					<th>Middle</th>
					<th>Family Name</th>
					<th>Gender</th>
					<th>Age</th>
					<th>Birthdate</th>
				</tr>	
				<?php foreach($patient_result->result() as $patient): ?>
					<tr>
						<td><a href="<?php echo base_url('module/patients/viewPatient/'.$patient->person_id); ?>"><?php echo $patient->identifier; ?></a></td>
						<td><?php echo $patient->given_name; ?> </td>
						<td><?php echo $patient->middle_name; ?> </td>
						<td><?php echo $patient->family_name; ?> </td>
						<td><?php echo $patient->gender; ?> </td>
						<td>
							<?php
								$birthdate = $patient->birthdate;

								$datenow = $this->db->query(' SELECT CURDATE() as datenow')->row();
								$now = $datenow->datenow;

								if($birthdate) {
									echo $age = ($now - $birthdate);
								}
							?>
						</td>
						<td><?php echo $patient->birthdate; ?> </td>
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
	<?php endif; ?>


<?php $this->load->view('layout/footer'); ?>
