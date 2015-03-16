<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laboratoryschedule extends CI_Controller {

	public function index() {

		$this->laboratory();
	
	}

	public function laboratory() {

		$this->load->view('laboratory/view_laboratory');

	}

}
