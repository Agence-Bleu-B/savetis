<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
    	parent :: __construct();
    }

	public function index()
	{
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/accueil');
		$this->load->view('admin/footer');
	}
}
