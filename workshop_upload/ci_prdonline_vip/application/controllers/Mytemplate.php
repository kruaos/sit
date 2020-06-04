<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mytemplate extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('mainpage_view');
		$this->load->view('template/footer');
	}

	public function form()
	{
		$this->load->view('template/header');
		$this->load->view('register_view');
		$this->load->view('template/footer');
		//$this->session->set_flashdata('save_success', TRUE);
	}

	public function form_save()
	{
		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
	}













}
