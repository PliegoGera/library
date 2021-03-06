<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userController extends CI_Controller {


	 public function __construct(){
		 parent::__construct();
		 $this->load->model('Usermodel');
		 $this->load->helper('url');
		 $this->load->helper('form');
		 $this->load->library('form_validation');
		 $this->load->library("session");
	 }
	public function index()
	{
		$data['users'] = $this->Usermodel->get_all_users();
		$this->load->view('layout/header');
		$this->load->view('users/vusers',$data);
		$this->load->view('layout/footer');
	}
	   /**
     * view form add user
     */
    public function addUser()
	{
        
        
		$this->load->view('layout/header');
		$this->load->view('users/addUser');
        $this->load->view('layout/footer');
        
    }
    public function editUser($id)
	{
        
        $data['users'] = $this->Usermodel->get_all_users_id($id);
		$this->load->view('layout/header');
		$this->load->view('users/editUser',$data);
        $this->load->view('layout/footer');
        
    }
    

    /**
     * validate and save  form data
     */
    public function store()
	{
        $rules = array(
            array(
                'field' => 'name',
                'label' => 'name',
                'rules' => 'required|alpha'
            ),
            array(
                'field' => 'email',
                'label' => 'email',
                'rules' => 'required',
                
            )
        );

        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == FALSE) {
    
            $this->load->view('layout/header');
            $this->load->view('users/addUser');
            $this->load->view('layout/footer');
        }else{
            $param['name']=$this->input->post('name');
            $param['email']=$this->input->post('email');
        $this->Usermodel->save($param);
        return redirect('users');
        }
        
    }
    public function update($id)
	{
       
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');

        
        if ($this->form_validation->run() == FALSE) {
            $data['categorys'] = $this->Categorymodel->get_all_category();
            $data['users'] = $this->Usermodel->get_all_users();
            $this->load->view('layout/header');
            $this->load->view('users/edituser',$data);
            $this->load->view('layout/footer');
        }else{
            $param['name']=$this->input->post('name');
            $param['email']=$this->input->post('email');
            $this->Usermodel->update_users($param,$id);

        return redirect('users');
        }
        
    }

    public function deleteUser($id)
    {
        if($this->Usermodel-> delete_users($id)){
			$this->session->set_flashdata('message', 'Deleted Sucessfully');
			redirect( base_url());  
		}	
    }
}
