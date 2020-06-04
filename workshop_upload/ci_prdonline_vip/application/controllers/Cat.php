<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('prd_model');
		$this->load->model('prdtype_model');
	}


	public function index($t_id)
	{
		$data['rsprd']=$this->prd_model->listbycat($t_id);
		$data['query']=$this->prdtype_model->all();
		echo '<pre>';
		print_r($data['rscat']);
		echo '</pre>';
		exit;
		$this->load->view('home/header',$ดาต้า); //อย่าลืมมมมมม !!!!!!!   $data
		$this->load->view('home/banner');
		$this->load->view('home/navbar',$ดาต้า); //อย่าลืมมมมมม !!!!!!!   $data//ประเภทสินค้่า
		$this->load->view('home/prd_mainpage',$ดาต้า); //อย่าลืมมมมมม !!!!!!!   $data
		$this->load->view('home/footer');
	}

}
