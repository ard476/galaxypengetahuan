<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_menudepan');
		
	}
	public function index()
	{		
		$data['menu'] = 'Welcome';
		$data['judul'] = $this->m_menudepan->pengaturan();;
		$data['menudepan'] = $this->m_menudepan->menu();
		$data['kategori'] = $this->m_menudepan->kategori();
		$data['content'] = '';
		$data['js'] = '';
		$this->load->view('depan/dashboard', $data);
		
	}
	public function ikitelo($value='')
	{
		# code...
	}
}
