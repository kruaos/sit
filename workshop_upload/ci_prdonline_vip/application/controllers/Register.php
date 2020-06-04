<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('member_model');
		$this->load->model('prdtype_model');
	}

	public function index()
	{
		$data['query']=$this->prdtype_model->all();
		$this->load->view('home/header');
		$this->load->view('home/banner');
		$this->load->view('home/navbar',$data);
		$this->load->view('home/register_form');
		$this->load->view('home/footer');
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

		//echo $num;

			if($num > 0)
			{
				 	$this->session->set_flashdata('warning', TRUE);
					redirect('register','refresh');
			}

			// exit;
				$this->form_validation->set_rules('mem_username', 'mem_username', 'trim|required|min_length[3]');
				$this->form_validation->set_rules('mem_password', 'mem_password', 'trim|required|min_length[3]');
				$this->form_validation->set_rules('mem_fname', 'mem_fname', 'trim|required|min_length[3]')
				$this->form_validation->set_rules('mem_name', 'mem_name', 'trim|required|min_length[3]')
				$this->form_validation->set_rules('mem_lname', 'mem_lname', 'trim|required|min_length[3]');
				$this->form_validation->set_rules('mem_tel', 'mem_tel', 'trim|required|min_length[3]');
				$this->form_validation->set_rules('mem_email', 'Email', 'required|valid_email');


                if ($this->form_validation->run() == FALSE)
                {
			        $this->load->view('home/header');
					$this->load->view('home/banner');
					$this->load->view('home/navbar');
					$this->load->view('home/register_form');
					$this->load->view('home/footer');
                }
                else
                {
					$this->member_model->register_member();
					$this->session->set_flashdata('regis_success', TRUE);
					redirect('home','refresh');
                }
	}


}










