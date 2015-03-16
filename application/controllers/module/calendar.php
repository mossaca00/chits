<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller {

	public function __construct() {
		parent:: __construct();

		$this->data = array(
			'title' => 'Appointments | Chits'
		);

	}

	public function index() {

		$this->appointments();

	}

	public function appointments() {

		$this->load->view('appointments/view_appointments', $this->data);
	
	}

}
