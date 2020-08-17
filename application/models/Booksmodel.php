<?php

class Booksmodel extends CI_Model {
        public function __construct(){
            $this->load->database();
        }

        public function get_all_books(){
                 $this->db->select('b.id,b.name,b.author,b.publish_date,b.available,p.name user,c.name category');
                 $this->db->from('book b');
                 $this->db->join('users p','p.id = b.id_user');
                 $this->db->join('category c','c.id = b.id_category');
                 $query=$this->db->get();
                return $query->result();
        }
        public function get_all_books_category(){
            $this->db->select('b.id,b.name,b.author,b.publish_date,b.available,p.name user,c.name category');
            $this->db->from('book b');
            $this->db->join('users p','p.id = b.id_user');
            $this->db->join('category c','c.id = b.id_category');
            $query=$this->db->get();
           return $query->result();
   }
    }

    
?>