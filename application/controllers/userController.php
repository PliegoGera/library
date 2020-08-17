<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userController extends CI_Controller {


	 public function __construct(){
		 parent::__construct();
		$this->load->model('Usermodel');
	 }
	public function index()
	{
		$data['query'] = $this->Usermodel->get_all_users();
		$this->load->view('layout/header');
		$this->load->view('main',$data);
		$this->load->view('layout/footer');
	}
}
