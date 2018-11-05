<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	public function keHalamanLogin(){
		$this->load->view('admin/login');
	}
	
	public function keHalamanDashboard(){
		$data['count'] = $this->m_data->get_count();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/dashboard', $data);
		$this->load->view('template/footer', $data);
	}

	public function keHalamanPerusahaan(){
		// Model Master Perusahaan
		$data['pelanggan'] = $this->m_data->tampil_data()->result();
		// $data['count'] = $this->m_data->get_count();
		// View Halaman Master Perusahaan
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/perusahaan', $data);
		$this->load->view('template/footer', $data);
	}
}