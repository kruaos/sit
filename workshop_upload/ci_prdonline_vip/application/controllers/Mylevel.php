<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mylevel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mylevel_model');
		if($this->session->userdata('l_id') !=1){
				redirect('home','refresh');
		}
	}

	public function index()
	{

		$data['query']=$this->mylevel_model->all();
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		// exit;
		$this->load->view('template/header');
		$this->load->view('level/level_view',$data);
		$this->load->view('template/footer');
	}


	public function form()
	{
		$this->load->view('template/header');
		$this->load->view('level/level_form_add');
		$this->load->view('template/footer');
	}


	public function form_save()
	{
		print_r($_POST);
		exit;
		$l_name = $this->input->post('l_name');
		// num rows example
		$this->db->select('l_name');
		$this->db->where('l_name',$l_name);
		$query = $this->db->get('tbl_level');
		$num = $query->num_rows();

		echo $num;
			if($num > 0)
			{
				 	$this->session->set_flashdata('warning', TRUE);
					redirect('mylevel','refresh');
			}

			// exit;
				$this->form_validation->set_rules('l_name', 'ชื่อสิทธิการใช้งาน', 'trim|required|min_length[3]');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('template/header');
						$this->load->view('level/level_form_add');
						$this->load->view('template/footer');
                }
                else
                {
					$this->mylevel_model->insert_entry();
					$this->session->set_flashdata('save_success', TRUE);
					redirect('mylevel','refresh');
                       
                }

	}


	public function edit($l_id)
	{
		$data['query']=$this->mylevel_model->read($l_id);
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		exit;


		$this->load->view('template/header');
		$this->load->view('level/level_form_edit',$data);
		$this->load->view('template/footer');
	}


	public function form_edit()
	{
		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
		// exit;



			// exit;
				$this->form_validation->set_rules('l_name', 'ชื่อสิทธิการใช้งาน', 'trim|required|min_length[3]');
				$this->form_validation->set_rules('l_id', 'l_id', 'trim|required|min_length[1]');

                if ($this->form_validation->run() == FALSE)
                {
                	$l_id = $this->input->post('l_id');
                	// echo $l_id;
                	// exit;
                	$data['query']=$this->mylevel_model->read($l_id);
					$this->load->view('template/header');
					$this->load->view('level/level_form_edit',$ดาต้าาาาาาาาา);
					$this->load->view('template/footer');
                         
                }
                else
                {
					$this->mylevel_model->update_level();
					$this->session->set_flashdata('save_success', TRUE);
					redirect('mylevel','refresh');
                       
                }

	}

	public function del($l_id)
	{
					$this->mylevel_model->del_level($l_id);
					$this->session->set_flashdata('del_success', TRUE);
					redirect('mylevel','refresh');
		 
	}





}
