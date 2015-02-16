<?php 
	$this->load->view('layout/header');
	$this->load->view('layout/sidebar');
?>

<div class="row">
	<div class="col-md-12">
		<h1> Name here </h1>
	</div>
</div>

<div class="row">

	<div class="col-md-12">
		<div class="table-responsive">
			<table class="table table-condensed table-text">

				<tr>
					<td> Age: </td>
					<td><strong>Age here</strong></td>

					<td> Birthdate: </td>
					<td><strong>Birthdate here</strong></td>

					<td> Patient ID: </td>
					<td><strong>Patient ID here</strong></td>
				</tr>

				<tr>
					<td> Sex: </td>
					<td><strong>Gender here</strong></td>

					<td> Civil Status: </td>
					<td><strong>Civil status here</strong></td>
					
					<td> Family Folder: </td>
					<td><strong>Family Folder here</strong></td>
				</tr>

				<tr>
					<td> Address: </td>
					<td colspan="5"><strong> Address here </strong></td>
				</tr>

				<tr>
					<td>Philhealth ID:</td>
					<td><strong>Philhealth ID here</strong></td>

					<td>Expiration Date</td>
					<td colspan="3"><strong>Expiration Date here</strong></td>

				</tr>

			</table>
		</div>
	</div>

</div>

<div class="row">
	<div class="col-md-12 col-sm-12">
		<?php $this->load->view('patientSearch/imports/navtab_consult'); ?>
	</div>
</div>



<?php $this->load->view('layout/footer'); ?>