<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mylevel_model');
		$this->load->model('member_model');
		if($this->session->userdata('l_id')==''){
				redirect('home','refresh');
		}
	}



	public function index()
	{
		$data['rsmember']=$this->member_model->all();
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		// exit;


		$this->load->view('template/header');
		$this->load->view('member/member_view',$data);
		$this->load->view('template/footer');
	}

	public function form_add()
	{
		$data['query']=$this->mylevel_model->all();
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		exit;

		$this->load->view('template/header');
		$this->load->view('member/member_form_add',$data);
		$this->load->view('template/footer');
	}

	public function adding()
	{
		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
		exit;
		$mem_username = $this->input->post('mem_username');
		$mem_email = $this->input->post('mem_email');
		// num rows example
		$this->db->select('mem_username');
		$this->db->where('mem_username',$mem_username);
		$this->db->or_where('mem_email',$mem_email);
		$query = $this->db->get('tbl_member');
		$num = $query->num_rows();

		echo $num;

			if($num > 0)
			{
				 	$this->session->set_flashdata('warning', TRUE);
					redirect('member','refresh');
			}

	exit;
	$this->form_validation->set_rules('l_id', 'l_id', 'trim|required|min_length[1]');
	$this->form_validation->set_rules('mem_username', 'mem_username', 'trim|required|min_length[3]');
	$this->form_validation->set_rules('mem_password', 'mem_password', 'trim|required|min_length[3]');
	$this->form_validation->set_rules('mem_fname', 'mem_fname', 'trim|required|min_length[3]');
	$this->form_validation->set_rules('mem_name', 'mem_name', 'trim|required|min_length[3]');
	$this->form_validation->set_rules('mem_lname', 'mem_lname', 'trim|required|min_length[3]');
	$this->form_validation->set_rules('mem_tel', 'mem_tel', 'trim|required|min_length[3]');
	$this->form_validation->set_rules('mem_email', 'Email', 'required|valid_email');


                if ($this->form_validation->run() == FALSE)
                {
			        $data['query']=$this->mylevel_model->all();
					$this->load->view('template/header');
					$this->load->view('member/member_form_add',$ดาต้าาาาาา);
					$this->load->view('template/footer');
                }
                else
                {
					$this->member_model->insert_member();
					$this->session->set_flashdata('save_success', TRUE);
					redirect('member','refresh');
                }
	}


	public function edit($mem_id)
	{
		$data['query']=$this->mylevel_model->all();
		$data['rsmember']=$this->member_model->read($mem_id);

		echo '<pre>';
		print_r($data['rsmember']);
		echo '</pre>';
		exit;

		$this->load->view('template/header');
		$this->load->view('member/member_form_edit',$data);
		$this->load->view('template/footer');
	}

		public function update()
	{
		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
		exit;

			exit;
	$this->form_validation->set_rules('mem_id', 'mem_id', 'trim|required|min_length[1]');
	$this->form_validation->set_rules('l_id', 'l_id', 'trim|required|min_length[1]');
	$this->form_validation->set_rules('mem_fname', 'mem_fname', 'trim|required|min_length[3]');
	$this->form_validation->set_rules('mem_name', 'mem_name', 'trim|required|min_length[3]');
	$this->form_validation->set_rules('mem_lname', 'mem_lname', 'trim|required|min_length[3]');
	$this->form_validation->set_rules('mem_tel', 'mem_tel', 'trim|required|min_length[3]');
	$this->form_validation->set_rules('mem_email', 'Email', 'required|valid_email');
	$l_id = $_SESSION['l_id'];

                if ($this->form_validation->run() == FALSE)
                {
                	$mem_id = $this->input->post('mem_id');
					$data['rsmember']=$this->member_model->read($mem_id);

					if($l_id==1){
					$data['query']=$this->mylevel_model->all();
						}
					$this->load->view('template/header');
					$this->load->view('member/member_form_edit',$data);
					$this->load->view('template/footer');
                }
                else
                {
					$this->member_model->update_member();
					$this->session->set_flashdata('save_success', TRUE);
					
					if($l_id==1){
						redirect('member','refresh');
					}else{
						redirect('staff/profile','refresh');
					}
                }
	}


	public function pwd($mem_id)
	{
		$data['query']=$this->mylevel_model->all();
		$data['rsmember']=$this->member_model->read($mem_id);

		echo '<pre>';
		print_r($data['rsmember']);
		echo '</pre>';
		exit;

		$this->load->view('template/header');
		$this->load->view('member/member_form_edit_pwd',$ดาต้าาาาาา);
		$this->load->view('template/footer');
	}

	public function update_pwd()
	{
		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
		exit;

			exit;
	$this->form_validation->set_rules('mem_id', 'mem_id', 'trim|required|min_length[1]');
	$this->form_validation->set_rules('mem_password', 'mem_password', 'trim|required|min_length[3]');
	$this->form_validation->set_rules('mem_password2', 'Password Confirmation', 'required|matches[mem_password]');

                if ($this->form_validation->run() == FALSE)
                {
                	$mem_id = $this->input->post('mem_id');
                	$data['query']=$this->mylevel_model->all();
					$data['rsmember']=$this->member_model->read($mem_id);
					$this->load->view('template/header');
					$this->load->view('member/member_form_edit_pwd',$data);
					$this->load->view('template/footer');
                }
                else
                {
					$this->member_model->update_pwd();
					$this->session->set_flashdata('save_success', TRUE);
					$l_id = $_SESSION['l_id'];
					if($l_id==1){
						redirect('member','refresh');
					}else{
						redirect('staff','refresh');
					}
                }
	}

	public function del()
	{

					$this->member_model->delete($mem_id);
					$this->session->set_flashdata('del_success', TRUE);
					redirect('member','refresh');
		 
	}




}
