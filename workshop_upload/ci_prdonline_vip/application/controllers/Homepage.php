<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('prd_model');
		$this->load->model('prdtype_model');
	}


private function c_view()
	{
		$c_ip = $_SERVER['REMOTE_ADDR'];
		$sql="INSERT INTO  tbl_counter 
		(c_ip)
		VALUES
		('$c_ip')";
        $this->db->query($sql);
	}


	public function index()
	{

		$this->c_view();
		$data['rsprd']=$this->prd_model->all();
		$data['query']=$this->prdtype_model->all();
		// echo '<pre>';
		// print_r($data['query']);
		// echo '</pre>';
		// exit;
		$this->load->view('home/header');
		$this->load->view('home/banner');
		$this->load->view('home/navbar',$data);
		$this->load->view('home/prd_mainpage',$data);
		$this->load->view('home/footer');
	}


	private function update_view($p_id)
	{
		$sql="UPDATE tbl_product SET p_view = p_view +1 WHERE p_id = $p_id";
        $this->db->query($sql);
	}


	public function p($p_id)
	{
		$this->update_view($p_id);
		$data['rsprd']=$this->prd_model->read($p_id);
		$data['query']=$this->prdtype_model->all();
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		exit;
		$this->load->view('home/header_p',$ดาต้า); //อย่าลืมมมมมม !!!!!!!   $data
		$this->load->view('home/banner');
		$this->load->view('home/navbar',$ดาต้า); //อย่าลืมมมมมม !!!!!!!   $data
		$this->load->view('home/prd_detail',$ดาต้า); //อย่าลืมมมมมม !!!!!!!   $data
		$this->load->view('home/footer');
	}

	public function search()
	{
		//print_r($_GET);
		$data['rsprd']=$this->prd_model->listbysearch();
		$data['query']=$this->prdtype_model->all();
		$this->load->view('home/header',$ดาต้า); //อย่าลืมมมมมม !!!!!!!   $data
		$this->load->view('home/banner');
		$this->load->view('home/navbar',$ดาต้า); //อย่าลืมมมมมม !!!!!!!   $data
		$this->load->view('home/prd_mainpage',$ดาต้า); //อย่าลืมมมมมม !!!!!!!   $data
		$this->load->view('home/footer');
	}





}
