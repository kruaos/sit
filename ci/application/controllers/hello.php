<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	public function index()
	{
		$this->load->view('hello_views');
	}
	public function index2()
	{
		$this->load->view('index2_views');
	}
	
}
 