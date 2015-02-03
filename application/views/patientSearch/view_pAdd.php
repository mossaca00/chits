<?php 
	$this->load->view('layout/header.php'); 
	$this->load->view('layout/sidebar.php');
?>

<div class="row">

	<div class="col-md-12">
		<h2><strong> Add Patient </strong></h2>
	</div>

	<div class="col-md-12">
		<small> * Required Field </small>
	</div>
	<div class="col-md-12">
		<small> ** Required only for 'Patient' record types </small>
	</div>

</div>

<div class="row">
	<div class="col-md-12">
		<br />
	</div>
</div>

<div class="row">

		<div class="col-md-12">
			<table class="table-responsive table-striped my-padding">
				<thead>
					<th class="col-md-2">Patient ID</th>
					<th class="col-md-10"> [New] </th>
				</thead>
				<tr>
					<td><h5> Record Type </h5></td>
					<td> 
						<select class="form-control">
							<optgroup label="--Please Choose--">
								<option> Non Patient </option>
								<option> Patient </option>
							</optgroup>
						</select>
					</td>
				</tr>
				<tr>
					<td style="vertical-align: middle;"><h5> Family Folder* </h5></td>
					<td>

						<div class="form-inline">
							<form class="form-group">
							<div class="checkbox">
								<label><input type="checkbox"> Head of the Family </label>
							</div><br>

								<div class="radio">
									<label>
										<input type="radio" name="pRecord" value="find" class="radio1" checked> Find existing record 
									</label>

									<input type="text" class="form-control" required> <br>

									<span> Or </span> <br>

									<label>
										<input type="radio" name="pRecord" value="create" class="radio1"> Create new record for the patient's folder 
									</label>

								</div>

							</form>	

						</div>

						<?php $this->load->view('patientSearch/imports/accor_createfolder'); ?>
						
					</td>
				</tr>
				<tr>
					<td><h5> First Name* </h5></td>
					<td> <input type="text" class="form-control" required> </td>
				</tr>
				<tr>
					<td><h5> Middle Name </h5></td>
					<td> <input type="text" class="form-control"> </td>
				</tr>
				<tr>
					<td><h5> Surname* </h5></td>
					<td> <input type="text" class="form-control" required> </td>
				</tr>
				<tr>
					<td><h5> Suffix </h5></td>
					<td> <input type="text" class="form-control"> </td>
				</tr>
				<tr>
					<td><h5> Sex* </h5></td>
					<td> 
						<select class="form-control" required>
							<optgroup label="--Please Choose--">
								<option> Male </option>
								<option> Female</option>
							</optgroup>
						</select>
					</td>
				</tr>
				<tr>
					<td><h5> Birth Date** </h5></td>
					<td> <input type="text" class="form-control" required> </td> <!-- NEED DATE PICKER JQUERY -->
				</tr>
				<tr>
					<td><h5> Civil Status** </h5></td>
					<td> 
						<select class="form-control" required> <!-- NEED POPULATE COMBO BOX --> 
							<optgroup label="--Please Choose--">
								<option> separated </option>
								<option> never married </option>
								<option> divorced </option>
								<option> widowed </option>
								<option> living with partner </option>
								<option> married </option>
							</optgroup>
						</select>
					</td>
				</tr>
				<tr>
					<td style="vertical-align:middle;"> Philhealth </td>
					<td>
						<div class="form-inline">
							<div class="radio">
								<label>
									<input type="radio" name="PhilEnrolled" value="notEnrolled" class="radio2" checked> Not enrolled
								</label> 
								<input type="text" class="form-control"><br />
								<span> Or </span> <br />
								<label>
									<input type="radio" name="PhilEnrolled" value="Enrolled" class="radio2"> Enrolled
								</label>

							</div>
						</div>
						<?php $this->load->view('patientSearch/imports/accor_philinfo'); ?>
					</td>
				</tr>
				<tr>
					<td><h5>4Ps</h5></td>
					<td>
						<div class="checkbox">
							<label><input type="checkbox">4Ps</label>
						</div>
					</td>
				</tr>
				<tr>
					<td><h5> Cellphone </h5></td>
					<td>
						<input type="text" class="form-control">
					</td>
				</tr>
				<tr>
					<td><h5> Local ID </h5></td>
					<td>
						<input type="text" class="form-control">
					</td>
				</tr>
				<tr>
					<td style="vertical-align:middle;"><h5> Mother's Name </h5></td>
					<td>
						<div class="form-inline">
							<div class="radio">
								<label>
									<input type="radio" name="patientmother" value="find" class="radio3" checked> Find existing record 
								</label>

								<input type="text" class="form-control"> <br>

								<span> Or </span> <br>

								<label>
									<input type="radio" name="patientmother" value="create" class="radio3"> Create new record for the patient's folder 
								</label>

							</div>
						</div>
						<?php $this->load->view('imports/accor_patientmother'); ?>
					</td>
				</tr>
				<tr>
					<td><h5> CRN </h5></td>
					<td>
						<input type="text" class="form-control">
					</td>
				</tr>
				<tr>
					<td><h5> TIN </h5></td>
					<td>
						<input type="text" class="form-control">
					</td>
				</tr>
				<tr>
					<td><h5> SSS </h5></td>
					<td>
						<input type="text" class="form-control">
					</td>
				</tr>
				<tr>
					<td><h5> GSIS </h5></td>
					<td>
						<input type="text" class="form-control">
					</td>
				</tr>
				<tr>
					<td><h5> Tribe </h5></td>
					<td>
						<input type="text" class="form-control">
					</td>
				</tr>

			</table>

		</div>

</div>

<div class="row">
	<div class="col-md-12">
		<button type="button" class="btn btn-success"> Create Patient </button>
		<a href="<?php echo base_url('module/chits/findPatient');?>" class="btn btn-primary"> Cancel </a>
	</div>
</div>


<?php $this->load->view('layout/footer.php'); ?>