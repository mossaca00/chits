<br/>
	<div class="col-md-6">
		<h4>Visit Details</h4>
	</div>

	<div class="col-md-6">
		<h4> PATIENT CHART </h4>
		
		<div style="margin-left: 15px;">

			<table width="100%">
				<tr>
					<td><strong> Height: </strong></td>
					<td>no data entered!</td>
				</tr>
				<tr>
					<td><strong> Weight: </strong></td>
					<td>no data entered!</td>
				</tr>
				<tr>
					<td><strong> Body Mass Index: </strong></td>
					<td>no data entered!</td>
				</tr>
				<tr>
					<td colspan="2"> <hr /> </td>
				</tr>
				<tr>
					<td><strong> Waist Circumference: </strong></td>
					<td>no data entered!</td>
				</tr>
				<tr>
					<td><strong> Hip Circumference: </strong></td>
					<td>no data entered!</td>
				</tr>
				<tr>
					<td><strong> Waist-Hip Ratio: </strong></td>
					<td>no data entered!</td>
				</tr>
				<tr>
					<td colspan="2"> <hr /> </td>
				</tr>
				<tr>
					<td><strong> Head Circumference: </strong></td>
					<td>no data entered!</td>
				</tr>
				<tr>
					<td><strong> Chest Circumference: </strong></td>
					<td>no data entered!</td>
				</tr>
			</table> <br>
			<a href="#history_modal" class="btn btn-default" data-toggle="modal"> History </a>
			<a href="#update_modal" class="btn btn-info" data-toggle="modal"> Update </a>

		</div> <!-- /patient chart --><br>

		<h4> VITAL SIGNS </h4> 
		<div class="table-responsive" style="margin-left: 15px">
			<table class="table table-bordered table-condensed">
	            <tr>
	                <td valign="top">aaaaaaaaaaa</td>
	                <td>bbbbbbbbbb</td>
	                <td valign="top">ccccccccccc</td>
	            </tr>
	        </table>
		</div>
		<div style="margin-left: 15px">
		 	<a href="#archive_modal" class="btn btn-default" data-toggle="modal"> Archive </a>
			<a href="#entry_modal" class="btn btn-info" data-toggle="modal"> Create new entry </a>
			<a href="#"> Add using RxBox </a>
		</div>
	</div> <!-- /.col-md-6 -->		


<div class="modal fade" id="history_modal">
	<div class="modal-dialog">
		<?php $this->load->view('patientSearch/imports/modal_history'); ?>
	</div>
</div>
<div class="modal fade" id="update_modal">
	<div class="modal-dialog">
		<?php $this->load->view('patientSearch/imports/modal_update'); ?>
	</div>
</div>
<div class="modal fade" id="archive_modal">
	<div class="modal-dialog">
		<?php $this->load->view('patientSearch/imports/modal_archive'); ?>
	</div>
</div>
<div class="modal fade" id="entry_modal">
	<div class="modal-dialog">
		<?php $this->load->view('patientSearch/imports/modal_entry'); ?>
	</div>
</div>


