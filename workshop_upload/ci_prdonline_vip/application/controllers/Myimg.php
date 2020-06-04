<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myimg extends CI_Controller {

	public function index()
	{
		$this->load->view('myimg_view');
	}

}
