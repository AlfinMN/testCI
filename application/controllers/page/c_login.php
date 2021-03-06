<?php

class c_login extends CI_Controller
{
    public function index()
    {
        $data['judul'] = " Form Login";
        $this->load->view('pages/login', $data);
    }
}
