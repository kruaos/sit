<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('l_id') !=1){
				redirect('home','refresh');
		}
	}



	public function index()
	{
		//print_r($_SESSION);
		$this->load->view('template/header');
		$this->load->view('mainpage_view');
		$this->load->view('template/footer');
	}

}
