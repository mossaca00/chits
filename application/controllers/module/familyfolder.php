<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Familyfolder extends CI_Controller {

	public function index() {

		$this->folderList();
	
	}

	public function folderList() {
		$this->load->view('familyFolders/view_famFolder');
	}

}
