<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Mylevel_model extends CI_Model {

        // public function list()
        // {
        //         $query = $this->db->get('tbl_level');
        //         return $query->result();
        // }

        public function all()
        {
                $query = $this->db->get('tbl_level');
                return $query->result();
        }

        public function insert_entry()
        {
                $data = array(
                'l_name' => $this->input->post('l_name')
                );
                $this->db->insert('tbl_level', $data);
        }


        public function read($l_id){
                $this->db->select('*');
                $this->db->from('tbl_level');
                $this->db->where('l_id',$l_id);
                $query = $this->db->get();
                if($query->num_rows() > 0){
                        $data = $query->row();
                        return $data;
                }
                return FALSE;
        }



        public function update_level()
        {
               $data = array(
                'l_name' => $this->input->post('l_name')
                );
                $this->db->where('l_id', $this->input->post('l_id'));
                $query=$this->db->update('tbl_level',$data);
        }


        public function del_level($l_id)
        {
                $this->db->delete('tbl_level',array('l_id'=>$l_id));
        }






}