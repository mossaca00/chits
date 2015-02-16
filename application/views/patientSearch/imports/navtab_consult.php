<div style="margin-top: 50px;">
	<ul id="myTab" class="nav nav-tabs">
		<li class="active"><a href="#vdetails" data-toggle="tab">Visit Details</a></li>
		<li><a href="#sconsult" data-toggle="tab">Special Consults</a></li>
		<li><a href="#labs" data-toggle="tab">Labs</a></li>
		<li><a href="#dental" data-toggle="tab">Dental</a></li>
		<li><a href="#forms" data-toggle="tab">Forms</a></li>
		<li><a href="#ddrugs" data-toggle="tab">Dispense Drugs</a></li>
		<li><a href="#appointments" data-toggle="tab">Appointments</a></li>
		<li><a href="#endconsult" data-toggle="tab">End Consults</a></li>
	</ul>

	<div id="myTabContent" class="tab-content">
		<div class="tab-pane fade in active" id="vdetails">
			<?php $this->load->view('patientSearch/imports/view_visitdetails'); ?>
		</div>
		<div class="tab-pane fade" id="sconsult">
			<p> Special Consults </p>
		</div>
		<div class="tab-pane fade" id="labs">
			<p> Labs </p>
		</div>
		<div class="tab-pane fade" id="dental">
			<p> Dental </p>
		</div>
		<div class="tab-pane fade" id="forms">
			<p> Forms </p>
		</div>
		<div class="tab-pane fade" id="ddrugs">
			<p> Dispense Drugs </p>
		</div>
		<div class="tab-pane fade" id="appointments">
			<p> Appointments </p>
		</div>
		<div class="tab-pane fade" id="endconsult">
			<p> End Consults </p>
		</div>
	</div>
</div>