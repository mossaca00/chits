<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Familyfolder extends CI_Controller {

	public function __construct() {
		parent:: __construct();

		$this->data = array(
			'title' => 'Family Folder | Chits'
		);
	}

	public function index() {

		$this->folderList();
	
	}

	public function folderList() {
		$this->load->view('familyFolders/view_famFolder', $this->data);
	}

}
