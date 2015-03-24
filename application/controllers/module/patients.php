<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patients extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->model('patient/patient_model');
		
		$this->data = array(
			'title' => 'Patient ',
			'patient_result' => FALSE,
		);
	}

	public function index() {

		$this->findPatient();
	
	}

	public function findPatient() {

		$this->load->view('patientSearch/view_pSearch', $this->data);
	
	}

	public function searchPatient() {

		$pname = $this->input->post('patientname');

		$this->data['patient_result'] = $this->patient_model->searchPatient($pname);

		$this->findPatient();
	}

	public function addPatient() {

		$this->load->view('patientSearch/view_pAdd', $this->data);
	}

	public function viewPatient($id) {

		$this->data['patient_id'] = $id;

		$this->patient_model->view_patient($id);

		$this->load->view('patientSearch/view_patient', $this->data);

	}

}
