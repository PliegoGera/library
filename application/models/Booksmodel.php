<?php

class Booksmodel extends CI_Model {
        public function __construct(){
            $this->load->database();
        }

        /**
         * get all data books
         */
        public function get_all_books(){
                 $this->db->select('b.id,b.name,b.author,b.publish_date,b.available,p.name user,c.name category');
                 $this->db->from('book  b');
                 $this->db->join('users p','p.id = b.id_user');
                 $this->db->join('category c','c.id = b.id_category');
                 $query=$this->db->get();
                return $query->result();
        }
        /**
         * get book by id
         */
        public function get_all_books_id($id){
            $this->db->select('*');
            $this->db->from('book ');
            $this->db->where('id',$id);
            $query=$this->db->get();
           
           return $query->result();
        }
        /**
         * save new book
         */
        public function save($param){
            $data = array(
                'name'=>$param['name'],
                'author'=>$param['author'],
                'id_category'=>$param['category'],
                'publish_date'=>$param['date'],
                'id_user'=>$param['user']
            );
            return $this->db->insert('book', $data);
            }

        /**
         * update edited book
         */
        public function updateBook($param,$id){
            $data = array(
                'name'=>$param['name'],
                'author'=>$param['author'],
                'id_category'=>$param['category'],
                'publish_date'=>$param['date'],
                'id_user'=>$param['user']
            );
            $this->db->where('id', $id);
            return $this->db->update('book', $data);
        }
    }

    
?>