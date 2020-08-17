<?php

class Usermodel extends CI_Model {
        public function __construct(){
            $this->load->database();
        }

        public function get_all_users(){
                $query = $this->db->get('users');
                //json_encode($query->result());
                return $query->result();
        }
    }

    
?>