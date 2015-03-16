<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patients extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->model('patient/model_searchpatient');
		
		$this->data = array(
			'title' => 'Patient Search | Chits',
			'patient_result' => FALSE
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

		$this->data['patient_result'] = $this->model_searchpatient->searchPatient($pname);

		$this->findPatient();
	}


}
