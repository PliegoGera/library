<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categoriesController extends CI_Controller {


	 public function __construct(){
		 parent::__construct();
		 $this->load->model('Categorymodel');
		 $this->load->helper('url');
		 $this->load->helper('form');
		 $this->load->library('form_validation');
		 $this->load->library("session");
	 }
	public function index()
	{
		$data['categories'] = $this->Categorymodel->get_all_category();
		$this->load->view('layout/header');
		$this->load->view('categories/vcategory',$data);
		$this->load->view('layout/footer');
	}
	   /**
     * view form add user
     */
    public function addCategory()
	{
        
        
		$this->load->view('layout/header');
		$this->load->view('categories/addcategory');
        $this->load->view('layout/footer');
        
    }
    public function editCategory($id)
	{
        
        $data['categories'] = $this->Categorymodel->get_all_category_id($id);
		$this->load->view('layout/header');
		$this->load->view('categories/editcategory',$data);
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
                'field' => 'description',
                'label' => 'description',
                'rules' => 'required',
                
            )
        );

        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == FALSE) {
    
            $this->load->view('layout/header');
            $this->load->view('categories/addCategory');
            $this->load->view('layout/footer');
        }else{
            $param['name']=$this->input->post('name');
            $param['description']=$this->input->post('description');
        $this->Categorymodel->save($param);
        return redirect('categories');
        }
        
    }
    public function update($id)
	{
       
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');

        
        if ($this->form_validation->run() == FALSE) {
            
            $this->load->view('layout/header');
            $this->load->view('categories/editCategory');
            $this->load->view('layout/footer');
        }else{
            $param['name']=$this->input->post('name');
            $param['description']=$this->input->post('description');
            $this->Categorymodel->update_category($param,$id);

        return redirect('categories');
        }
        
    }

    public function deleteCategory($id)
    {
        if($this->Categorymodel-> delete_category($id)){
			$this->session->set_flashdata('message', 'Deleted Sucessfully');
			redirect( base_url());  
		}	
    }
}
