<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('User/header');
		$this->load->view('User/index');
		$this->load->view('User/footer');
	}
}
