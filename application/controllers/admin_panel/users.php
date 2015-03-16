<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index() {

		$this->usersList();

	}

	public function usersList() {
		$this->load->view('manageusers/navtab_manageusers');
	}

}