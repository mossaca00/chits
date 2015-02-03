<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chits extends CI_Controller {

	public function index() {
		// $this->findpatient();
		$this->viewPatient();
	}

	public function findPatient() {
		$this->load->view('patientSearch/view_pSearch');
	}

	public function addPatient() {
		$this->load->view('patientSearch/view_pAdd');
	}

	public function viewPatient(){
		$this->load->view('patientSearch/view_patient');
	}

	public function viewConsults(){
		$this->load->view('patientSearch/view_consults');
	}

	public function familyFolder() {
		$this->load->view('familyFolders/view_famFolder');
	}

	public function appointments() {
		$this->load->view('appointments/view_appointments');
	}

	public function laboratory() {
		$this->load->view('laboratory/view_laboratory');
	}

	public function queries() {
		$this->load->view('queries/view_queries');
	}

	public function manageUsers() {
		$this->load->view('manageusers/view_manageusers');
	}

	public function mergePatients() {
		$this->load->view('mergepatient/view_mergepatients');
	}

	public function administration() {
		$this->load->view('admin/view_administration');
	}


}
