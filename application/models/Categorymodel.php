<?php

class Categorymodel extends CI_Model {
        public function __construct(){
            $this->load->database();
        }

        public function get_all_category(){
                $query = $this->db->get('category');
                
                return $query->result();
        }
        
    }

    
?>