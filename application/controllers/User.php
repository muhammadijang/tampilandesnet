<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('index');
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