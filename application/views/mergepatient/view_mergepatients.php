<?php 
	$this->load->view('layout/header');
	$this->load->view('layout/sidebar');	
?>

	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-tabs">
				 <li role="presentation"><a href="#">Admin</a></li>
				 <li role="presentation"><a href="#">Manage Patient</a></li>
				 <li role="presentation" class="active"><a href="#">Find Patient to merge</a></li>
				 <li role="presentation"><a href="#">Manage Identifier Types</a></li>
			</ul>
		</div>
		<div class="col-md-12">
			<h2> <strong>Merge Patients</strong> </h2>
			<h5><strong>Search On:</strong></h5>
		</div>
		<div class="col-md-12">
			<ul>			
				<li class="merger "><input type="checkbox"> Identifier</li>
				<li class="merger"><input type="checkbox"> Gender</li>
				<li class="merger"><input type="checkbox"> Birthday</li>
				<li class="merger"><input type="checkbox"> Given</li>
				<li class="merger"><input type="checkbox"> Middle</li>
				<li class="merger"><input type="checkbox"> Family Name</li>						
				<li class="merger"><input type="checkbox"> Include Voided</li>
			</ul>															
			<a href="#" type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"> </span> Search </a>
				<h5><cite>(Choose a minimum of two attributes)</cite></h5>
		</div>
	</div>

<?php 
	$this->load->view('layout/footer');
?>