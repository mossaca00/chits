<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$this->memlogin();
	}

	public function memlogin() {
		$this->load->view('view_login');
	}

	public function login_validation() {
		echo 'asdfsadfasdf';
	}

}
