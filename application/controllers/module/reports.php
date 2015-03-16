<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reports extends CI_Controller {

	public function __construct() {
		parent:: __construct();

		$this->data = array(
			'title' => 'Health Center Report | Chits'
		);
	}

	public function index() {

		$this->queries();
	
	}

	public function queries() {

		$this->load->view('queries/navtab_queries', $this->data);

	}

}
