<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hello extends CI_Controller
{

    public function index()
    {
        $this->load->model('m_pemilik_umkm');
        $data['pemilikUmkm'] = $this->m_pemilik_umkm->get_data();
        $this->load->view('v_pemilik_umkm', $data);
    }
}
