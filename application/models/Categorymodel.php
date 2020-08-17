<?php

class Categorymodel extends CI_Model {
        public function __construct(){
            $this->load->database();
        }

        public function get_all_category(){
                $query = $this->db->get('category');                
                return $query->result();
        }
                        /**
         * get category by id
         */
        public function get_all_category_id($id){
            $this->db->select('*');
            $this->db->from('category');
            $this->db->where('id',$id);
            $query=$this->db->get();
           
           return $query->result();
        }
        /**
         * save new category
         */
        public function save($param){
            $data = array(
                'name'=>$param['name'],
                'description'=>$param['description'],

            );
            return $this->db->insert('category', $data);
            }

        /**
         * update edited category
         */
        public function update_category($param,$id){
            $data = array(
                'name'=>$param['name'],
                'description'=>$param['description'],

            );
            $this->db->where('id', $id);
            return $this->db->update('category', $data);
        }
        
        

    public function delete_category($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('category');
    }
        
    }

    
?>