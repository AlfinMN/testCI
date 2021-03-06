<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function dashboard()
	{
		$data['judul'] = "Dashboard";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/navbar');
		$this->load->view('dashboard');
		$this->load->view('template/footer');
		$this->load->view('template/plugin');
	}
}
