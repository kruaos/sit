<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Prd_model extends CI_Model {

        // public function list()
        // {
        //         $query = $this->db->get('tbl_type');
        //         return $query->result();
        // }

        public function all()
        {
                $this->db->select("p.*,t.t_name,m.mem_name,DATE_FORMAT(p.date_save, '%d-%M-%Y') AS datesave");
                $this->db->from('tbl_product as p');
                $this->db->join('tbl_type as t','p.t_id=t.t_id');
                $this->db->join('tbl_member as m','p.mem_id=m.mem_id','left');
                $query = $this->db->get();
                return $query->result();
        }

        //แสดงสินค้าตามรหัสประเภท
        public function listbycat($t_id)
        {
                $this->db->select("*");
                $this->db->from('tbl_product');
                $this->db->where('t_id',$t_id);
                $query = $this->db->get();
                return $query->result();
             
        }


        public function listbysearch()
        {
                $q = $_GET['q'];
                $this->db->select("*");
                $this->db->from('tbl_product');
                $this->db->like('p_name',$q);
                $query = $this->db->get();
                return $query->result();

           
            // $sql = "SELECT * FROM tbl_product WHERE p_name LIKE '%" .
            // $this->db->escape_like_str($q)."%' ESCAPE '!'";
            //return $sql->result();
            //echo $sql;
             
        }

        public function list_by_member($mem_id)
        {
                $this->db->select("p.*,t.t_name,m.mem_name,DATE_FORMAT(p.date_save, '%d-%M-%Y') AS datesave");
                $this->db->from('tbl_product as p');
                $this->db->join('tbl_type as t','p.t_id=t.t_id');
                $this->db->join('tbl_member as m','p.mem_id=m.mem_id');
                $this->db->where('p.mem_id',$mem_id);
                $query = $this->db->get();
                return $query->result();
        }

        public function insert_prd()
        {
     
               //resize
                if (isset($_FILES['p_img']) && !empty($_FILES['p_img']['name'])) {

                    $upload_path="p_img/";
                    $config['encrypt_name'] = TRUE;
                    $config['upload_path'] = $upload_path;
                    $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
                    $this->load->library('upload', $config);
                                    if ($this->upload->do_upload('p_img')) 
                                    { 
                                            //Image Resizing 
                                            $config1['source_image'] = $this->upload->upload_path.$this->upload->file_name;
                                            $config1['new_image'] =  'p_img/';
                                            $config1['maintain_ratio'] = TRUE; //
                                            $config1['width'] = 600;
                                            $config1['height'] = 600; 
                                            $this->load->library('image_lib', $config1); 

                                            if ( ! $this->image_lib->resize()){ 
                                                echo $this->image_lib->display_errors();
                                                }

                                        //มีการอัพโหลดภาพ 
                                        $data = $this->upload->data();
                                        $filename = $data['file_name'];   
                                        $data = array(
                                        'mem_id' => $this->input->post('mem_id'),
                                        't_id' => $this->input->post('t_id'),
                                        'p_name' => $this->input->post('p_name'),
                                        'p_detail' => $this->input->post('p_detail'),
                                        'p_price' => $this->input->post('p_price'),
                                        'p_unit' => $this->input->post('p_unit'),
                                        'p_img'=>$filename
                                        );
                                        $this->db->insert('tbl_product', $data);

                                }
                        }
               
        }


        public function read($p_id){
                $this->db->select('p.*,t.t_name');
                $this->db->from('tbl_product as p');
                $this->db->join('tbl_type as t','p.t_id=t.t_id');
                $this->db->where('p_id',$p_id);
                $query = $this->db->get();
                if($query->num_rows() > 0){
                        $data = $query->row();
                        return $data;
                }
                return FALSE;
        }

        public function update_prd()
        {
               //resize
                if (isset($_FILES['p_img']) && !empty($_FILES['p_img']['name'])) {

                    $upload_path="p_img/";
                    $config['encrypt_name'] = TRUE;
                    $config['upload_path'] = $upload_path;
                    $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
                    $this->load->library('upload', $config);
                                    if ($this->upload->do_upload('p_img')) 
                                    { 
                                            //Image Resizing 
                                            $config1['source_image'] = $this->upload->upload_path.$this->upload->file_name;
                                            $config1['new_image'] =  'p_img/';
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
                                        't_id' => $this->input->post('t_id'),
                                        'p_name' => $this->input->post('p_name'),
                                        'p_detail' => $this->input->post('p_detail'),
                                        'p_price' => $this->input->post('p_price'),
                                        'p_qty' => $this->input->post('p_qty'),
                                        'p_unit' => $this->input->post('p_unit'),
                                        'p_status' => $this->input->post('p_status'),
                                        'p_img'=>$filename
                                        );
                                        $this->db->where('p_id', $this->input->post('p_id'));
                                        $query=$this->db->update('tbl_product',$data); 

                                }
                        }else{
                             //ไม่มีการอัพโหลดภาพ    
                                $data = array(
                                        't_id' => $this->input->post('t_id'),
                                        'p_name' => $this->input->post('p_name'),
                                        'p_detail' => $this->input->post('p_detail'),
                                        'p_price' => $this->input->post('p_price'),
                                        'p_qty' => $this->input->post('p_qty'),
                                        'p_unit' => $this->input->post('p_unit'),
                                        'p_status' => $this->input->post('p_status')
                                );
                                $this->db->where('p_id', $this->input->post('p_id'));
                                $query=$this->db->update('tbl_product',$data);   
                        }
                
        }




        public function update_pwd()
        {
                $data = array(
                 'mem_password' => sha1($this->input->post('mem_password'))
                );
                $this->db->where('p_id', $this->input->post('p_id'));
                $query=$this->db->update('tbl_product',$data);
        }


        public function delete($p_id)
        {
                $this->db->delete('tbl_product',array('p_id'=>$p_id));
        }






}