<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->view('home/login_form');
		$this->load->view('home/footer');
	}

	public function authen()
	{

			echo '<pre>';
			print_r($this->input->post());
			echo '</pre>';
			//exit;

			//เก่งมากๆ 



				$this->form_validation->set_rules('mem_username', 'username', 'trim|required|min_length[3]');
				$this->form_validation->set_rules('mem_password', 'password', 'trim|required|min_length[3]');

                if ($this->form_validation->run() == FALSE)
                {
                		$this->session->set_flashdata('wrong_alert', TRUE);
                		redirect('home','refresh');
                        
                }
                else
                {

             echo '<pre>';
			print_r($this->input->post());
			echo '</pre>';
			//exit;
			$result = $this->member_model->chklogin(
				$this->input->post('mem_username'),
				sha1($this->input->post('mem_password'))
			);

			if($result==''){

				$this->session->set_flashdata('wrong_login', TRUE);
                redirect('home','refresh');

			}

			    

			print_r($result);

			//  exit;

		
			if(!empty($result)){
				$sess=array(
					'mem_id'    		=> $result->mem_id,
					'l_id'    	        => $result->l_id,
					'mem_name'		    => $result->mem_name,
					'img'			    => $result->img
				);

				echo '<br>';
				print_r($sess);
				// exit;
				$this->session->set_userdata($sess);

				echo '<br>';
				print_r($_SESSION);
				// exit;

				$l_id = $_SESSION['l_id'];

				//echo ' level '.$l_id;

				//echo '<hr>';

				//เช็คสิทธการใช้งาน 
				if($l_id==1){
					//echo 'r u admin';
					redirect('admin','refresh');
				}elseif ($l_id==2) {
					//echo 'r u boss';
					redirect('staff','refresh');
				}

			}else{
				$this->session->unset_userdata(array('mem_id','l_id','mem_name','img'));
				$this->session->set_flashdata('wrong_login', TRUE);
                redirect('home','refresh');
			}
                       
                }
		 
	}



	public function logout()
	{

		echo  'แก้ code นิดเดวเอง อย่าโกรธกันน๊าาาา ';
				/*
				session_unset();
				session_destroy();
				$this->session->unset_userdata(array('mem_id','l_id','mem_name','img'));
                redirect('home','refresh');
                */
		 
	}

}
