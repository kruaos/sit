<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Member_model extends CI_Model {

        // public function list()
        // {
        //         $query = $this->db->get('tbl_level');
        //         return $query->result();
        // }

        public function all()
        {
                $this->db->select('m.*,l.l_name');
                $this->db->from('tbl_member as m');
                $this->db->join('tbl_level as l','m.l_id=l.l_id');
                $query = $this->db->get();
                return $query->result();
        }

        public function insert_member()
        {
     
               //resize
                if (isset($_FILES['img']) && !empty($_FILES['img']['name'])) {

                    $upload_path="uploads/";
                    $config['encrypt_name'] = TRUE;
                    $config['upload_path'] = $upload_path;
                    $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
                    $this->load->library('upload', $config);
                                    if ($this->upload->do_upload('img')) 
                                    { 
                                            //Image Resizing 
                                            $config1['source_image'] = $this->upload->upload_path.$this->upload->file_name;
                                            $config1['new_image'] =  'uploads/';
                                            $config1['maintain_ratio'] = TRUE; //
                                            $config1['width'] = 150;
                                            $config1['height'] = 150; 
                                            $this->load->library('image_lib', $config1); 

                                            if ( ! $this->image_lib->resize()){ 
                                                echo $this->image_lib->display_errors();
                                                }

                                        //มีการอัพโหลดภาพ 
                                        $data = $this->upload->data();
                                        $filename = $data['file_name'];   
                                        $data = array(
                                        'l_id' => $this->input->post('l_id'),
                                        'mem_username' => $this->input->post('mem_username'),
                                        'mem_password' => sha1($this->input->post('mem_password')),
                                        'mem_fname' => $this->input->post('mem_fname'),
                                        'mem_name' => $this->input->post('mem_name'),
                                        'mem_lname' => $this->input->post('mem_lname'),
                                        'mem_email' => $this->input->post('mem_email'),
                                        'mem_tel' => $this->input->post('mem_tel'),
                                        'img'=>$filename
                                        );
                                        $this->db->insert('tbl_member', $data);

                                }
                        }
               
        }


         public function register_member()
        {
     
               //resize
                if (isset($_FILES['img']) && !empty($_FILES['img']['name'])) {

                    $upload_path="uploads/";
                    $config['encrypt_name'] = TRUE;
                    $config['upload_path'] = $upload_path;
                    $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
                    $this->load->library('upload', $config);
                                    if ($this->upload->do_upload('img')) 
                                    { 
                                            //Image Resizing 
                                            $config1['source_image'] = $this->upload->upload_path.$this->upload->file_name;
                                            $config1['new_image'] =  'uploads/';
                                            $config1['maintain_ratio'] = TRUE; //
                                            $config1['width'] = 150;
                                            $config1['height'] = 150; 
                                            $this->load->library('image_lib', $config1); 

                                            if ( ! $this->image_lib->resize()){ 
                                                echo $this->image_lib->display_errors();
                                                }

                                        //มีการอัพโหลดภาพ 
                                        $data = $this->upload->data();
                                        $filename = $data['file_name'];   
                                        $data = array(
                                        'l_id' => 2,
                                        'mem_username' => $this->input->post('mem_username'),
                                        'mem_password' => sha1($this->input->post('mem_password')),
                                        'mem_fname' => $this->input->post('mem_fname'),
                                        'mem_name' => $this->input->post('mem_name'),
                                        'mem_lname' => $this->input->post('mem_lname'),
                                        'mem_email' => $this->input->post('mem_email'),
                                        'mem_tel' => $this->input->post('mem_tel'),
                                        'img'=>$filename
                                        );
                                        $this->db->insert('tbl_เมมเบอร์ อิๆ', $data);

                                }
                        }
        }


        public function read($mem_id){
                $this->db->select('m.*,l.l_name');
                $this->db->from('tbl_member as m');
                $this->db->join('tbl_level as l','m.l_id=l.l_id');
                $this->db->where('mem_id',$mem_id);
                $query = $this->db->get();
                if($query->num_rows() > 0){
                        $data = $query->row();
                        return $data;
                }
                return FALSE;
        }

        public function update_member()
        {
               //resize
                if (isset($_FILES['img']) && !empty($_FILES['img']['name'])) {

                    $upload_path="uploads/";
                    $config['encrypt_name'] = TRUE;
                    $config['upload_path'] = $upload_path;
                    $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
                    $this->load->library('upload', $config);
                                    if ($this->upload->do_upload('img')) 
                                    { 
                                            //Image Resizing 
                                            $config1['source_image'] = $this->upload->upload_path.$this->upload->file_name;
                                            $config1['new_image'] =  'uploads/';
                                            $config1['maintain_ratio'] = TRUE; //
                                            $config1['width'] = 150;
                                            $config1['height'] = 150; 
                                            $this->load->library('image_lib', $config1); 
                                            if ( ! $this->image_lib->resize()){ 
                                            $this->session->set_flashdata('message', $this->image_lib->display_errors('', ''));
                                        }

                                        //มีการอัพโหลดภาพ 
                                        $data = $this->upload->data();
                                        $filename = $data['file_name'];   
                                        $data = array(
                                        'l_id' => $this->input->post('l_id'),
                                        'mem_fname' => $this->input->post('mem_fname'),
                                        'mem_name' => $this->input->post('mem_name'),
                                        'mem_lname' => $this->input->post('mem_lname'),
                                        'mem_email' => $this->input->post('mem_email'),
                                        'mem_tel' => $this->input->post('mem_tel'),
                                        'img' => $filename
                                        );
                                        $this->db->where('mem_id', $this->input->post('mem_id'));
                                        $query=$this->db->update('tbl_member',$data); 

                                }
                        }else{
                             //ไม่มีการอัพโหลดภาพ    
                                $data = array(
                                'l_id' => $this->input->post('l_id'),
                                'mem_fname' => $this->input->post('mem_fname'),
                                'mem_name' => $this->input->post('mem_name'),
                                'mem_lname' => $this->input->post('mem_lname'),
                                'mem_email' => $this->input->post('mem_email'),
                                'mem_tel' => $this->input->post('mem_tel')
                                );
                                $this->db->where('mem_id', $this->input->post('mem_id'));
                                $query=$this->db->update('tbl_member',$data);   
                        }
                
        }




        public function update_pwd()
        {
                $data = array(
                 'mem_password' => sha1($this->input->post('mem_password'))
                );
                $this->db->where('mem_id', $this->input->post('mem_id'));
                $query=$this->db->update('tbl_member',$data);
        }


        public function delete($mem_id)
        {
                $this->db->delete('tbl_member',array('mem_id'=>$mem_id));
        }


        public function chklogin($mem_username,$mem_password)
        {
        $this->db->where('mem_username',$mem_username);
        $this->db->where('mem_password',$mem_password);
        $query = $this->db->get('tbl_member');
        return $query->row();
        }







}