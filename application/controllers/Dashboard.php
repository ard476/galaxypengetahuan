<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') !== 'login' ) {
			redirect('/');
		}
	}
	public function index()
	{
			
		$data['menu'] = 'Dashboard';
		$data['content'] = 'dashboard';
		$data['js'] = 'js';
		$this->load->view('includes/_main', $data);
		
	}
}
