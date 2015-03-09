		<div class="col-md-12">
			<br><h4><strong>Summary Raports</strong></h4>
			<ol type="1">
				<li><h5><a href="#report" role="button" data-toggle="modal">Daily Service Reports</a></h5></li>
				<li><h5><a href="#newly" data-toggle="modal">Newly Registered Patients</a></h5></li>
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
		<div class="modal fade" id="report">
			<div class="modal-dialog">
				<?php $this->load->view('queries/imports/modal_service'); ?>
			</div>
		</div>
		<div class="modal fade" id="newly">
			<div class="modal-dialog">
				<?php $this->load->view('queries/imports/modal_register_patients'); ?>
			</div>
		</div>