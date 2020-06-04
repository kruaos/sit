<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inputpattern extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('l_id') !=1){
				redirect('home','refresh');
		}
	}



	public function index()
	{
		print_r($_SESSION);
		$this->load->view('template/header');
		$this->load->view('form_input_pattern');
		$this->load->view('template/footer');
	}

}
