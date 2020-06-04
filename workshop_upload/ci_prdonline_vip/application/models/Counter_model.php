<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Counter_model extends CI_Model {

        public function byday()
        {
                $this->db->select('DATE_FORMAT(c_date, "%d-%M-%Y") AS datesave, COUNT(c_id) as total');
                $this->db->from('tbl_counter');
                $this->db->group_by('DATE_FORMAT(c_date, "%d-%M-%Y")');
                $query = $this->db->get();
                return $query->result();
        }


        public function bym()
        {
                
                // $this->db->select('DATE_FORMAT(c_date, "%M-%Y") AS datesave, COUNT(c_id) as total');
                // $this->db->from('tbl_counter');
                // $this->db->group_by('DATE_FORMAT(c_date, "%M-%Y")');
                // $query = $this->db->get();
                // return $query->result();
        }


        public function byy()
        {
                // $this->db->select('DATE_FORMAT(c_date, "%Y") AS datesave, COUNT(c_id) as total');
                // $this->db->from('tbl_counter');
                // $this->db->group_by('DATE_FORMAT(c_date, "%Y")');
                // $query = $this->db->get();
                // return $query->result();
        }


       

}