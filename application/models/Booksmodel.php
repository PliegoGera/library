<?php

class Booksmodel extends CI_Model {
        public function __construct(){
            $this->load->database();
        }

        public function get_all_books(){
                $query = $this->db->get('book');
                //json_encode($query->result());
                return $query->result();
        }
    }

    
?>