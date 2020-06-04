<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Prdtype_model extends CI_Model {

        // public function list()
        // {
        //         $query = $this->db->get('tbl_type');
        //         return $query->result();
        // }

        public function all()
        {
                $query = $this->db->get('tbl_type');
                return $query->result();
        }

        public function insert_entry()
        {
                $data = array(
                't_name' => $this->input->post('t_name')
                );
                $this->db->insert('tbl_type', $data);
        }


        public function read($t_id){
                $this->db->select('*');
                $this->db->from('tbl_type');
                $this->db->where('t_id',$t_id);
                $query = $this->db->get();
                if($query->num_rows() > 0){
                        $data = $query->row();
                        return $data;
                }
                return FALSE;
        }



        public function update_prdtype()
        {
               $data = array(
                't_name' => $this->input->post('t_name')
                );
                $this->db->where('t_id', $this->input->post('t_id'));
                $query=$this->db->update('tbl_type',$data);
        }


        public function del_prdtype($t_id)
        {
                $this->db->delete('tbl_type',array('t_id'=>$t_id));
        }






}