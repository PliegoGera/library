<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class booksController extends CI_Controller {


	 public function __construct(){
		 parent::__construct();
        $this->load->model('Booksmodel');
        $this->load->model('Categorymodel');
        $this->load->model('Usermodel');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library("session");
	 }
	public function index()
	{
		$data['books'] = $this->Booksmodel->get_all_books();
		$this->load->view('layout/header');
		$this->load->view('books/vbooks',$data);
		$this->load->view('layout/footer');
    }
    /**
     * view form add book
     */
    public function addBook()
	{
        
        $data['categorys'] = $this->Categorymodel->get_all_category();
        $data['users'] = $this->Usermodel->get_all_users();
		$this->load->view('layout/header');
		$this->load->view('books/addBook',$data);
        $this->load->view('layout/footer');
        
    }
    public function editBook($id)
	{
        $data['books'] = $this->Booksmodel->get_all_books_id($id);
        $data['categorys'] = $this->Categorymodel->get_all_category();
        $data['users'] = $this->Usermodel->get_all_users();
		$this->load->view('layout/header');
		$this->load->view('books/editBook',$data);
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
                'field' => 'author',
                'label' => 'author',
                'rules' => 'required|alpha',
                
            ),
            array(
                'field' => 'category',
                'label' => 'category',
                'rules' => 'required',
                
            ),
            array(
                'field' => 'date',
                'label' => 'date',
                'rules' => 'required',
                
            ),
            
            array(
                'field' => 'user',
                'label' => 'user',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == FALSE) {
            $data['categorys'] = $this->Categorymodel->get_all_category();
            $data['users'] = $this->Usermodel->get_all_users();
            $this->load->view('layout/header');
            $this->load->view('books/addBook',$data);
            $this->load->view('layout/footer');
        }else{
            $param['name']=$this->input->post('name');
            $param['author']=$this->input->post('author');
            $param['category']=$this->input->post('category');
            $param['date']=$this->input->post('date');
            $param['user']=$this->input->post('user');
        $this->Booksmodel->save($param);
        return redirect('books');
        }
        
    }
    public function update($id)
	{
       
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('author', 'author', 'required');
        $this->form_validation->set_rules('category', 'category', 'required');
        $this->form_validation->set_rules('date', 'date', 'required');
        $this->form_validation->set_rules('user', 'user', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['categorys'] = $this->Categorymodel->get_all_category();
            $data['users'] = $this->Usermodel->get_all_users();
            $this->load->view('layout/header');
            $this->load->view('books/editbook',$data);
            $this->load->view('layout/footer');
        }else{
            $param['name']=$this->input->post('name');
            $param['author']=$this->input->post('author');
            $param['category']=$this->input->post('category');
            $param['date']=$this->input->post('date');
            $param['user']=$this->input->post('user');
            $this->Booksmodel->update_book($param,$id);

        return redirect('books');
        }
        
    }

    public function deleteBook($id)
    {
        if($this->Booksmodel-> delete_book($id)){
			$this->session->set_flashdata('message', 'Deleted Sucessfully');
			redirect( base_url());  
		}	
    }

}
