		<div class="col-md-12">
			<br><h4><strong>Summary Raports</strong></h4>
			<ol type="1">
				<li><h5><a href="#report" role="button" data-toggle="modal">Daily Service Reports</a></h5></li>
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
		<div class="modal fade" id="report">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3>General Daily Service Report</h3>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p><h4><strong>Daily Service Report</strong></h4></p>
							<p><h4 style="color:#1F8BB2;">INCLUSIVE REPORT FOR THIS DATE</h4></p>
							<br><br>
						</div>
						<div class="col-md-6">
							<form>
								<div class="form-group">
									<label>Start Date: </label> <input type="text" placeholder="00/00/00">
									<cite><small>(Format: mm/dd/yyyy)</small></cite>									
								</div>
								<div class="form-group">
									<label>End Date: </label> <input type="text" placeholder="00/00/00">
									<cite><small>(Format: mm/dd/yyyy)</small></cite>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" data-dismiss="modal">Generate <span class="glyphicon glyphicon-ok-circle"></span></button>
					<button type="submit" class="btn btn-default" data-dismiss="modal">Close <span class="glyphicon glyphicon-remove"></span></button>
				</div>
			</div>
		</div>
	</div>