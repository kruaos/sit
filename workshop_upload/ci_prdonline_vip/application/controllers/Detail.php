<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('prd_model');
		$this->load->model('prdtype_model');
	}

	private function update_view($p_id)
	{
		$sql="UPDATE tbl_product SET p_view = p_view +1 WHERE p_id = $p_id";
        $this->db->query($sql);
	}


	public function index($p_id)
	{
		$this->update_view($p_id);
		$data['rsprd']=$this->prd_model->read($p_id);
		$data['query']=$this->prdtype_model->all();
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		exit;
		$this->load->view('home/header_p');
		$this->load->view('home/banner');
		$this->load->view('home/navbar');
		$this->load->view('home/prd_detail');
		$this->load->view('home/footer');
	}

}
