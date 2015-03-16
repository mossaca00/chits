<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reports extends CI_Controller {

	public function index() {

		$this->queries();
	
	}

	public function queries() {

		$this->load->view('queries/navtab_queries');

	}

}
