<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller {

	public function index() {

		$this->appointments();

	}

	public function appointments() {

		$this->load->view('appointments/view_appointments');
	
	}

}
