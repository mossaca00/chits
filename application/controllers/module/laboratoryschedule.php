<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laboratoryschedule extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		
		$this->data = array(
			'title' => 'Laboratory Schedule '
		);
	}

	public function index() {

		$this->laboratory();
	
	}

	public function laboratory() {

		$this->load->view('laboratory/view_laboratory', $this->data);

	}

}
