<?php

class c_register extends CI_Controller
{
    public function index()
    {
        $data['judul'] = " Form Register";
        $this->load->view('pages/register', $data);
    }
}
