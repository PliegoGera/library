<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class booksController extends CI_Controller {


	 public function __construct(){
		 parent::__construct();
		$this->load->model('Booksmodel');
	 }
	public function index()
	{
		$data['books'] = $this->Booksmodel->get_all_books();
		$this->load->view('layout/header');
		$this->load->view('books/vbooks',$data);
		$this->load->view('layout/footer');
	}
}
