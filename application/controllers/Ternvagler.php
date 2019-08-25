<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ternvagler extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		// $this->load->dbforge();
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function discount()
	{
		$this->load->view('discount');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function blog()
	{
		$this->load->view('blog');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function register()
	{
		// Status 100 is for Dummy
		$result['status'] = 100;
		$this->load->view('register',$result);
	}
	public function user_register()
	{
		$userdata = array(
			'name' => $this->input->post('user_name'),
			'gender' => $this->input->post('gender'),
			'email' => $this->input->post('email'),
			'dob' => $this->input->post('dob'),
			'mobile' => $this->input->post('mobile'),
			'password' => md5($this->input->post('password'))
		);
		$this->load->model('User');
		$result  = $this->User->registerUser($userdata);
		$this->load->view('register',$result);
	}
	public function user_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->model('User');
		$response = $this->User->loginUser($email , md5($password));
		if($response['status']==200){
			echo 'id'. $response['id'];
		}
		// print_r($result);
	}

}
