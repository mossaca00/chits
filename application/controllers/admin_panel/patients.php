<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patients extends CI_Controller {

	public function index() {
		// $this->findpatient();
		$this->findDuplicatePatients();
	}

	public function findDuplicatePatients() {
		$this->load->view('mergepatient/navtab_mergepatient');
	}

}
