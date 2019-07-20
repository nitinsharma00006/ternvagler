<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ternvagler extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
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
		$this->load->view('register');
	}
	public function user_register()
	{
		echo 'tested';
	}

}
