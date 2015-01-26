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
		
		<div class="col-md-12">

			<table class="table table-striped">
				<thead>
					<th class="col-md-2">Patient ID</th>
					<th class="col-md-10"> [New] </th>
				</thead>
				<tr>
					<td><h5> Record Type </h5></td>
					<td> 
						<select class="form-control">
							<option> Non Patient </option>
							<option> Patient </option>
						</select>
					</td>
				</tr>
				<tr>
					<td><h5> Family Folder* </h5></td>
					<td>

						<div class="form-inline">
							<form class="form-group">

								<input type="checkbox"> Head of the Family <br>

								<div class="radio">
									<label>
										<input type="radio" name="pRecord" value="find" class="radio1" checked> Find existing record 
									</label>

									<input type="text" class="form-control"> <br>

									<span> Or </span> <br>

									<label>
										<input type="radio" name="pRecord" value="create" class="radio1" > Create new record for the patient's folder 
									</label>

								</div>

							</form>	

						</div>

						<div  id="createnew" >
							
							<form class="form-horizontal">

								<div class="row">

									<div class="col-md-12">

										<h5 class="col-md-3"> Family Name* </h5>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Input family name..."> 
										</div>

									</div>
									<div class="col-md-12">

										<h5 class="col-md-3"> Address </h5>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Input Address..."> 
										</div>

									</div>
									<div class="col-md-12">

										<h5 class="col-md-3"> City* </h5>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Input City..."> 
										</div>

									</div>
									<div class="col-md-12">

										<h5 class="col-md-3"> Baranggay* </h5>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Input Address..."> 
										</div>

									</div>
									<div class="col-md-12">

										<h5 class="col-md-3"> Notes* </h5>
										<div class="col-md-9">
											<textarea class="form-control" rows="5"></textarea> 
										</div>

									</div>

								</div>

							</form>

						</div>

					</td>
				</tr>
				<tr>
					<td><h5>First Name*</h5></td>
					<td> <input type="text" class="form-control"> </td>
				</tr>




			</table>

		</div>

	</div>


<?php $this->load->view('layout/footer.php'); ?>