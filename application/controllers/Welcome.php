<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	//Validating login
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('uid')) {
			redirect('signin');
		}
	}

	public function index()
	{
		$data = array(
			'firstname' => $this->session->userdata('fname'),
			'lastname' => $this->session->userdata('lname')
		);

		$this->load->view('welcome', $data);
	}
}
