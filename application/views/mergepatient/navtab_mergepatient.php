<?php 
	$this->load->view('layout/header');
	$this->load->view('layout/sidebar');	
?>

		<ul id="myTab" class="nav nav-tabs">
			 <li><a href="#admin" data-toggle="tab">Admin</a></li>
			 <li class="active"><a href="#merge" data-toggle="tab">Merge Patient</a></li>
			 <li><a href="#find" data-toggle="tab">Find Patient to merge</a></li>
			 <li><a href="#identifier" data-toggle="tab">Manage Identifier Types</a></li>
		</ul>
		<div id="myTabContent" class="tab-content">
			<div class="tab-pane fade" id="admin">
				<h1>Admin</h1>
			</div>
			<div class="tab-pane fade in active" id="merge">
				<?php $this->load->view('mergepatient/view_mergepatient'); ?>
			</div>
			<div class="tab-pane fade" id="find">
				<h1>Find Patient to merge</h1>
			</div>
			<div class="tab-pane fade" id="identifier">
				<h1>Manage Identifier Types</h1>
			</div>
		</div>

<?php 
	$this->load->view('layout/footer');
?>