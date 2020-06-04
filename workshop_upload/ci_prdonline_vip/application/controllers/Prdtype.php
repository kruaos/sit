<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prdtype extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('prdtype_model');
		if($this->session->userdata('l_id') !=1){
				redirect('home','refresh');
		}
	}

	public function index()
	{

		$data['query']=$this->prdtype_model->all();
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		// exit;


		$this->load->view('template/header');
		$this->load->view('prdtype/prdtype_view',$data);
		$this->load->view('template/footer');
	}


	public function form()
	{
		$this->load->view('template/header');
		$this->load->view('prdtype/prdtype_form_add');
		$this->load->view('template/footer');
	}


	public function form_save()
	{
		print_r($_POST);
		exit;
		$t_name = $this->input->post('t_name');
		// num rows example
		$this->db->select('t_name');
		$this->db->where('t_name',$t_name);
		$query = $this->db->get('tbl_type');
		$num = $query->num_rows();

		echo $num;
			if($num > 0)
			{
				 	$this->session->set_flashdata('warning', TRUE);
					redirect('prdtype','refresh');
			}

			exit;
				$this->form_validation->set_rules('t_name', 'ประเภทสินค้า', 'trim|required|min_length[3]');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('template/header');
						$this->load->view('prdtype/prdtype_form_add');
						$this->load->view('template/footer');
                }
                else
                {
					$this->prdtype_model->insert_entry();
					$this->session->set_flashdata('save_success', TRUE);
					redirect('prdtype','refresh');
                       
                }

	}


	public function edit($t_id)
	{
		$data['query']=$this->prdtype_model->read($t_id);
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		exit;


		$this->load->view('template/header');
		$this->load->view('prdtype/prdtype_form_edit',$ดาต้าาาา);
		$this->load->view('template/footer');
	}


	public function form_edit()
	{
		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
		exit;

			exit;
				$this->form_validation->set_rules('t_name', 'ประเภทสินค้า', 'trim|required|min_length[3]');
				$this->form_validation->set_rules('t_id', 't_id', 'trim|required|min_length[1]');

                if ($this->form_validation->run() == FALSE)
                {
                	$t_id = $this->input->post('t_id');
                	echo $t_id;
                	exit;
                	$data['query']=$this->prdtype_model->read($t_id);
					$this->load->view('template/header');
					$this->load->view('prdtype/prdtype_form_edit',$data);
					$this->load->view('template/footer');
                         
                }
                else
                {
                	echo 'ส่งไปแก้ที่ model';
                	exit;
					$this->prdtype_model->update_prdtype();
					$this->session->set_flashdata('save_success', TRUE);
					redirect('prdtype','refresh');
                       
                }

	}

	public function del($t_id)
	{
					$this->prdtype_model->del_prdtype($t_id);
					$this->session->set_flashdata('del_success', TRUE);
					redirect('prdtype','refresh');
		 
	}





}
