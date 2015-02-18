<?php 
	$this->load->view('layout/header');
	$this->load->view('layout/sidebar');	
?>
	

		<div class="col-md-12">
			<h2> <strong>Health Center Reports</strong> </h2>
		</div>
		<div class="col-md-12">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#general" data-toggle="tab"><strong>General Reports</strong></a></li>
			</ul>
		</div>
		<div class="tab-content">
			<div class="tab-pane fade in active" id="general">
				<?php $this->load->view('queries/view_queries'); ?>
			</div>
		</div>


<?php $this->load->view('layout/footer'); ?>