<?php 
	$this->load->view('layout/header');
	$this->load->view('layout/sidebar');	
?>
	
	<div class="row">
		<div class="col-md-12">
			<h2> <strong>QUERIES</strong> </h2>
		</div>
		<div class="col-md-12">
			<ul class="nav nav-tabs">
				<li role="presentation" class="active"><a href="#"><strong>General Reports</strong></a></li>
			</ul>
		</div>
		<div class="col-md-12">
			<br><h4><strong>Summary Raports</strong></h4>
			<ol type="1">
				<li><h5><a href="#">Daily Service Reports</a></h5></li>
				<li><h5><a href="#">Newly Registered Patients</a></h5></li>
			</ol>
			<br><h4><strong>Registries</strong></h4>
			<ol type="1">
				<li><h5>Patient Registry</h5></li>
					<ul>
						<li style="display:block;"><h5><a href="#"><span class="glyphicon glyphicon-arrow-right"></span>Master list of patient</a></h5></li>
					</ul>
				<li><h5>Family Registry</h5></li>
					<ul>
						<li style="display:block;"><h5><a href="#"><span class="glyphicon glyphicon-arrow-right"></span>Master list of Families</a></h5></li>
					</ul>
			</ol>			
		</div>
	</div>

<?php 
	$this->load->view('layout/footer');
?>