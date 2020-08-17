<?php

class Usermodel extends CI_Model {
        public function __construct(){
            $this->load->database();
        }

        public function get_all_users(){
                $query = $this->db->get('users');
                //echo json_encode($query->result());
                return $query->result();
        }
                /**
         * get users by id
         */
        public function get_all_users_id($id){
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('id',$id);
            $query=$this->db->get();
           
           return $query->result();
        }
        /**
         * save new users
         */
        public function save($param){
            $data = array(
                'name'=>$param['name'],
                'email'=>$param['email'],

            );
            return $this->db->insert('users', $data);
            }

        /**
         * update edited users
         */
        public function update_users($param,$id){
            $data = array(
                'name'=>$param['name'],
                'email'=>$param['email'],

            );
            $this->db->where('id', $id);
            return $this->db->update('users', $data);
        }
        
        

    public function delete_users($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('users');
    }
    }

    
?>