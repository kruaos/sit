<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('l_id') !=1){
				redirect('home','refresh');
		}
		$this->load->model('counter_model');
	}


	public function index()
	{
		$data['rsbyday']=$this->counter_model->byday();
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		// exit;
		$this->load->view('template/header');
		$this->load->view('report/r_by_day_view',$data); 
		$this->load->view('template/footer');
	}

	public function m()
	{
		$data['rsbyday']=$this->counter_model->bym();
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		// exit;
		$this->load->view('template/header');
		$this->load->view('report/r_by_day_view',$ดาต้า); //อย่าลืมมมมมม !!!!!!!   $data
		$this->load->view('template/footer');
	}


public function m2()
	{
		$data['rsbyday']=$this->counter_model->bym();
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		// exit;
		$this->load->view('template/header');
		$this->load->view('report/y_chart',$ดาต้า); //อย่าลืมมมมมม !!!!!!!   $data
		$this->load->view('template/footer');
	}

	public function y()
	{
		$data['rsbyday']=$this->counter_model->byy();
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		// exit;
		$this->load->view('template/header');
		$this->load->view('report/r_by_day_view',$ดาต้า); //อย่าลืมมมมมม !!!!!!!   $data
		$this->load->view('template/footer');
	}

	public function y2()
	{
		$data['rsbyday']=$this->counter_model->byy();
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		// exit;
		$this->load->view('template/header');
		$this->load->view('report/y_chart',$ดาต้า); //อย่าลืมมมมมม !!!!!!!   $data
		$this->load->view('template/footer');
	}

}
