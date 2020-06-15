<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	public function index()
	{
		$this->load->view('mycss');
		$this->load->view('hello_views');
		$this->load->view('myjs');
	}
	public function index2()
	{
		$this->load->view('index2_views');
	}
	
}
 