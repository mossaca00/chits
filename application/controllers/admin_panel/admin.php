<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index() {
		// $this->findpatient();
		$this->administration();
	}

	public function administration() {
		$this->load->view('admin/view_administration');
	}


}
