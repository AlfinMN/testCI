<?php

class c_tables extends CI_Controller
{

    public function index()
    {
        $this->load->model('m_pemilik_umkm');
        $data['judul'] = "Data UMKM";
        $data['pemilikUmkm'] = $this->m_pemilik_umkm->get_data();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $this->load->view('data/tables', $data);
        $this->load->view('template/footer');
        $this->load->view('template/plugin');
    }

    public function tambah()
    {

        $data['judul'] = "Form Tambah Data UMKM";
        $this->form_validation->set_rules('id', 'ID', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('produk', 'Produk', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/navbar');
            $this->load->view('data/tambah', $data);
            // $this->load->view('template/footer');
            $this->load->view('template/plugin');
        } else {
            $this->m_pemilik_umkm->tambahDataUmkm();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('/data/c_tables');
        }
    }

    public function hapus($id)
    {
        $this->m_pemilik_umkm->hapusDataUmkm($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('/data/c_tables');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data UMKM';
        $data['pemilikUmkm'] = $this->m_pemilik_umkm->getUmkmById($id);
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $this->load->view('data/detail', $data);
        $this->load->view('template/footer');
        $this->load->view('template/plugin');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Ubah data pemilik UMKM';
        $data['pemilikUmkm'] = $this->m_pemilik_umkm->getUmkmById($id);

        // $this->form_validation->set_rules('id', 'ID', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('produk', 'Produk', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/navbar');
            $this->load->view('data/ubah', $data);
            // $this->load->view('template/footer');
            $this->load->view('template/plugin');
        } else {
            $this->m_pemilik_umkm->ubahDataUMKM();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('/data/c_tables');
        }
    }
}
