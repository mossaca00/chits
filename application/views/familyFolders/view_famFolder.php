<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/sidebar'); ?>

	<div class="row">
		<div class="col-md-12">
			<h2> <strong>Search Family Folder</strong> </h2>
		</div>
		<div class="col-md-12">
			<small>
				<cite>Find Family Folder(s)</cite>
			</small>
		</div>	
	</div>

	<div class="row">
		<div class="col-md-12">
			<h2> </h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<form class="form-inline" role="form">
				<label for="pID">Folder ID or name:</label>
				<input type="text" class="form-control" placeholder="Enter an ID" aria-describedby="inconoSearch">
				<span id="iconSearch" class="sr-only"> </span>
				<small>
					<cite> Enter at least 2 characters </cite>
				</small>
			</form>
		</div>
	</div>

<?php $this->load->view('layout/footer'); ?>