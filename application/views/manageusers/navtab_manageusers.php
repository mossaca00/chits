<?php 
	$this->load->view('layout/header');
	$this->load->view('layout/sidebar');	
?>
	
		<ul id="myTab" class="nav nav-tabs">
			<li><a href="#admin" data-toggle="tab">Admin</a></li>
			<li class="active"><a href="#user" data-toggle="tab">Manage User</a></li>
			<li><a href="#role" data-toggle="tab">Manage Role</a></li>
			<li><a href="#role" data-toggle="tab">Manage Privileges</a></li>
			<li><a href="#role" data-toggle="tab">Manage Alert</a></li>
		</ul>
		<div id="myTabContent" class="tab-content">
			<div class="tab-pane fade" id="admin">
				<h1>Admin</h1>
			</div>
			<div class="tab-pane fade in active" id="user">
				<?php $this->load->view('manageusers/view_manageusers'); ?>
			</div>
			<div class="tab-pane fade" id="role">
				<h1>Manage Role</h1>
			</div>
			<div class="tab-pane fade" id="admin">
				<h1>Manage Privileges</h1>
			</div>
			<div class="tab-pane fade" id="admin">
				<h1>Manage Alert</h1>
			</div>
		</div>


<?php 
	$this->load->view('layout/footer');
?>