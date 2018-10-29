<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('index');
		$this->load->view('template/footer');
	}

	public function halamanLayanan()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('layanan');
		$this->load->view('template/footer');
	}

	public function halamanProfile()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('profile');
		$this->load->view('template/footer');
	}

	public function halamanPengguna()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar_pengguna');
		$this->load->view('pengguna');
		$this->load->view('template/footer');
	}
}
