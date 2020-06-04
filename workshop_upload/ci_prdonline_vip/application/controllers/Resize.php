<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resize extends CI_Controller {

	public function index()
	{
		$this->load->view('upload_form_resize');
	}


	public function do_upload()
        {
        	
             //resize
                if (isset($_FILES['m_img']) && !empty($_FILES['m_img']['name'])) {

                    $upload_path="uploads2/";
                    $config['encrypt_name'] = TRUE;
                    $config['upload_path'] = $upload_path;
                    $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
                    $this->load->library('upload', $config);
                                    if ($this->upload->do_upload('m_img')) 
                                    { 
                                            //Image Resizing 
                                            $config1['source_image'] = $this->upload->upload_path.$this->upload->file_name;
                                            $config1['new_image'] =  'uploads2/';
                                            $config1['maintain_ratio'] = TRUE; //
                                            $config1['width'] = 200;
                                            $config1['height'] = 200; 
                                            $this->load->library('image_lib', $config1); 
                                            if ( ! $this->image_lib->resize()){ 
                                            $this->session->set_flashdata('message', $this->image_lib->display_errors('', ''));
                                        }
                                }
                        }

        }







}
