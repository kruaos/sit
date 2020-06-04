<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prd extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('prdtype_model');
		$this->load->model('prd_model');
		if($this->session->userdata('l_id') ==''){
				redirect('home','refresh');
		}
	}



	public function index()
	{
		$data['rsprd']=$this->prd_model->all();
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		//exit;

		echo 'ค่อยๆไล่นะครับ สู้ๆ';
		$this->load->view('template/header');
		$this->load->view('prd/prd_view',$data);
		$this->load->view('template/footer');
	}

	public function form_add()
	{
		$data['query']=$this->prdtype_model->all();
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		exit;

		$this->load->view('template/header');
		$this->load->view('prd/prd_form_add',$ดาต้าาา);
		$this->load->view('template/footer');
	}

	public function adding()
	{
		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
		exit;
		$p_name = $this->input->post('p_name');
		// num rows example
		$this->db->select('p_name');
		$this->db->where('p_name',$p_name);
		$query = $this->db->get('tbl_product');
		$num = $query->num_rows();

		echo $num;

			if($num > 0)
			{
				 	$this->session->set_flashdata('warning', TRUE);
					redirect('prd','refresh');
			}

	exit;
    $this->form_validation->set_rules('mem_id', 'mem_id', 'trim|required|min_length[1]');
	$this->form_validation->set_rules('t_id', 't_id', 'trim|required|min_length[1]');
	$this->form_validation->set_rules('p_name', 'p_name', 'trim|required|min_length[3]');
	$this->form_validation->set_rules('p_detail', 'p_detail', 'trim|required|min_length[10]');
	$this->form_validation->set_rules('p_price', 'p_price', 'trim|required|min_length[1]');
	$this->form_validation->set_rules('p_unit', 'p_unit', 'trim|required|min_length[2]');
	

                if ($this->form_validation->run() == FALSE)
                {
			        $data['query']=$this->prdtype_model->all();
					$this->load->view('template/header');
					$this->load->view('prd/prd_form_add',$data);
					$this->load->view('template/footer');
                }
                else
                {
					$this->prd_model->insert_prd();
					$this->session->set_flashdata('save_success', TRUE);
					$l_id = $_SESSION['l_id'];
					if($l_id==1){
						redirect('prd','refresh');
					}else{
						redirect('mprd','refresh');
					}
                }
	}


	public function edit($p_id)
	{
		$data['query']=$this->prdtype_model->all();
		$data['rsprd']=$this->prd_model->read($p_id);

		echo '<pre>';
		print_r($data['rsprd']);
		echo '</pre>';
		exit;

		$this->load->view('template/header');
		$this->load->view('prd/prd_form_edit',$data);
		$this->load->view('template/footer');
	}

		public function update()
	{
		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
		exit;

			exit;
	$this->form_validation->set_rules('p_status', 'p_status', 'trim|required|min_length[1]');
	$this->form_validation->set_rules('p_id', 'p_id', 'trim|required|min_length[1]');
	$this->form_validation->set_rules('t_id', 't_id', 'trim|required|min_length[1]');
	$this->form_validation->set_rules('p_name', 'p_name', 'trim|required|min_length[3]');
	$this->form_validation->set_rules('p_detail', 'p_detail', 'trim|required|min_length[10]');
	$this->form_validation->set_rules('p_price', 'p_price', 'trim|required|min_length[1]');
	$this->form_validation->set_rules('p_unit', 'p_unit', 'trim|required|min_length[2]');


                if ($this->form_validation->run() == FALSE)
                {
                	$p_id = $this->input->post('p_id');
                	$data['query']=$this->prdtype_model->all();
					$data['rsprd']=$this->prd_model->read($p_id);
					$this->load->view('template/header');
					$this->load->view('prd/prd_form_edit',$data);
					$this->load->view('template/footer');
                }
                else
                {
					$this->prd_model->update_prd();
					$this->session->set_flashdata('save_success', TRUE);
						$l_id = $_SESSION['l_id'];
						if($l_id==1){
							redirect('prd','refresh');
						}else{
							redirect('mprd','refresh');
						}
                }
	}


	public function pwd($p_id)
	{
		$data['query']=$this->prdtype_model->all();
		$data['rsprd']=$this->prd_model->read($p_id);

		echo '<pre>';
		print_r($data['rsprd']);
		echo '</pre>';
		exit;

		$this->load->view('template/header');
		$this->load->view('prd/prd_form_edit_pwd',$dataa);
		$this->load->view('template/footer');
	}

	public function update_pwd()
	{
		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
		exit;

			exit;
	$this->form_validation->set_rules('p_id', 'p_id', 'trim|required|min_length[1]');
	$this->form_validation->set_rules('p_detail', 'p_detail', 'trim|required|min_length[3]');
	$this->form_validation->set_rules('p_detail2', 'Password Confirmation', 'required|matches[p_detail]');

                if ($this->form_validation->run() == FALSE)
                {
                	$p_id = $this->input->post('p_id');
                	$data['query']=$this->prdtype_model->all();
					$data['rsprd']=$this->prd_model->read($p_id);
					$this->load->view('template/header');
					$this->load->view('prd/prd_form_edit_pwd',$data);
					$this->load->view('template/footer');
                }
                else
                {
					$this->prd_model->update_pwd();
					$this->session->set_flashdata('save_success', TRUE);
					redirect('prd','refresh');
                }
	}

	public function del($p_id)
	{

					$this->prd_model->delete($p_id);
					$this->session->set_flashdata('del_success', TRUE);
					redirect('prd','refresh');
		 
	}




}
