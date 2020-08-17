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
	 }
	public function index()
	{
		$data['books'] = $this->Booksmodel->get_all_books();
		$this->load->view('layout/header');
		$this->load->view('books/vbooks',$data);
		$this->load->view('layout/footer');
    }
    public function addBook()
	{
        $data['categorys'] = $this->Categorymodel->get_all_category();
        $data['users'] = $this->Usermodel->get_all_users();
		$this->load->view('layout/header');
		$this->load->view('books/addBook',$data);
		$this->load->view('layout/footer');
    }
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
        }
        
	}
}
