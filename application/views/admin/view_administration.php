<?php 
	$this->load->view('layout/header');
	$this->load->view('layout/sidebar');	
?>
	<div class="row">
		<div class="col-md-12">
			<h2><strong>Administration</strong></h2>
		</div>
		<div class="col-md-4">
			<ul>
				<li class="admin-list">Users
					<ul>
						<li class="admin-list"><a href="">Manage Users</a></li>
						<li class="admin-list"><a href="">Manage Roles</a></li>
						<li class="admin-list"><a href="">Manage Privilleges</a></li>
						<li class="admin-list"><a href="">Manage Alerts</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="col-md-4">
			<ul>
				<li class="admin-list">Concepts
					<ul>
						<li class="admin-list">View Concept Dictionary</li>
						<li class="admin-list">Manage Concept Drugs</li>
						<li class="admin-list">Manage Propose Concepts</li>
						<li class="admin-list">Update Concept Index</li>
						<li class="admin-list">Derive Concept Set</li>
						<li class="admin-list">Manage Concept Classes</li>
						<li class="admin-list">Manage Concept Datatype</li>
						<li class="admin-list">Manage Concept Sources</li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="col-md-4">
			<ul>
				<li class="admin-list">Modules
					<ul>
						<li class="admin-list">Manage Module</li>
						<li class="admin-list">Module Properties</li>
					</ul>
				</li>
				<li class="admin-list">Logic Module
					<ul>
						<li class="admin-list">Token Registration</li>
						<li class="admin-list">Rule Definitions</li>
						<li class="admin-list">Test Logic Registrations</li>
						<li class="admin-list">Initial Set-up</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
<?php 
	$this->load->view('layout/footer');
?>