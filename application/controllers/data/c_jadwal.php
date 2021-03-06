<?php

class c_jadwal extends CI_Controller
{
    public function index()
    {
        $this->load->model('m_jadwal');
        $data['judul'] = " Jadwal Dosen";
        $data['jadwalDosen'] = $this->m_jadwal->get_data();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $this->load->view('dataDosen/jadwal', $data);
        $this->load->view('template/footer');
        $this->load->view('template/plugin');
    }

    public function tambah()
    {
        $this->load->model('m_jadwal');
        $data['judul'] = "Tambah Data Jadwal";
        $data['guru'] = $this->m_jadwal->getGuru();
        $data['kelas'] = $this->m_jadwal->getKelas();
        $this->form_validation->set_rules('KodeJadwal', 'Kode Jadwal', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/navbar');
            $this->load->view('dataDosen/tambahJadwal', $data);
            // $this->load->view('template/footer');
            $this->load->view('template/plugin');
        } else {
            $this->m_jadwal->tambahDataJadwal();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('/data/c_jadwal');
        }
    }

    public function hapus($id)
    {
        $this->load->model('m_jadwal');
        $this->m_jadwal->hapusDataJadwal($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('/data/c_jadwal');
    }
}
