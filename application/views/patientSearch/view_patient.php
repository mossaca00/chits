<?php 
	$this->load->view('layout/header');
	$this->load->view('layout/sidebar');
?>


<div class="row">
	<div class="col-md-12">
		<h2><strong> View Consults </strong></h2>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<br />
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<a href="#" class="btn btn-success"> Edit Patient </a>
		<a href="#" class="btn btn-primary"> Place in Queue </a>
		<a href="<?php echo base_url('module/chits/viewConsults'); ?>" class="btn btn-info"> View Consults </a>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table table-striped table-bordered tbl-no-padding">
			<thead>
				<th><h4><strong> Patient ID </strong></h4></th>
				<th><h4><strong> PATIENT IDENTIFIER ID HERE </strong></h4></th>
			</thead>
			<tr>
				<td><h5>Record Type</h5></td>
				<td><h5>Patient Type here</h5></td>
			</tr>
			<tr>
				<td><h5>Created By</h5></td>
				<td><h5>User here</h5></td>
			</tr>
			<tr>
				<td><h5>Modified By</h5></td>
				<td><h5>User here</h5></td>
			</tr>
			<tr>
				<td><h5>Family Folder</h5></td>
				<td><h5>Family Folder link here</h5></td>
			</tr>
			<tr>
				<td><h5>First Name</h5></td>
				<td><h5>First Name here</h5></td>
			</tr>
			<tr>
				<td><h5>Middle Name</h5></td>
				<td><h5>Middle Name here</h5></td>
			</tr>
			<tr>
				<td><h5>Surname</h5></td>
				<td><h5>Surname here</h5></td>
			</tr>
			<tr>
				<td><h5>Suffix</h5></td>
				<td><h5>Suffix here</h5></td>
			</tr>
			<tr>
				<td><h5>Sex</h5></td>
				<td><h5>Gender here</h5></td>
			</tr>
			<tr>
				<td><h5>Birth Date</h5></td>
				<td><h5>Birth Date here</h5></td>
			</tr>
			<tr>
				<td><h5>Civil Status</h5></td>
				<td><h5>Civil Status here</h5></td>
			</tr>
			<tr>
				<td><h5>Philhealth Status</h5></td>
				<td><h5>Philhealth Status here</h5></td>
			</tr>
			<tr>
				<td><h5>4Ps</h5></td>
				<td><h5>4Ps here</h5></td>
			</tr>
			<tr>
				<td><h5>Cellphone</h5></td>
				<td><h5>Cellphone number here</h5></td>
			</tr>
			<tr>
				<td><h5>Local ID</h5></td>
				<td><h5>Local ID here</h5></td>
			</tr>
			<tr>
				<td><h5>Mother's Name</h5></td>
				<td><h5>Mother's Name here</h5></td>
			</tr>
			<tr>
				<td><h5>Record Type</h5></td>
				<td><h5>Patient Type here</h5></td>
			</tr>
			<tr>
				<td><h5>CRN</h5></td>
				<td><h5>CRN here</h5></td>
			</tr>
			<tr>
				<td><h5>TIN</h5></td>
				<td><h5>TIN here</h5></td>
			</tr>
			<tr>
				<td><h5>SSS</h5></td>
				<td><h5>SSS Number here</h5></td>
			</tr>
			<tr>
				<td><h5>GSIS</h5></td>
				<td><h5>GSIS here</h5></td>
			</tr>
			<tr>
				<td><h5>Tribe</h5></td>
				<td><h5>Tribe here</h5></td>
			</tr>
			<tr>
				<td><h5>Record Status</h5></td>
				<td><h5>Record Status here</h5></td>
			</tr>
		</table>
	</div>
</div>

<?php $this->load->view('layout/footer');