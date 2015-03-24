<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct() {
		parent:: __construct();

		$this->data = array(
			'title' => 'User Management '
		);
	}

	public function index() {

		$this->usersList();

	}

	public function usersList() {
		$this->load->view('manageusers/navtab_manageusers', $this->data);
	}

}