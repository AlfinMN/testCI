<?php

class M_pemilik_umkm extends CI_Model
{
    public function get_data()
    {
        return  $this->db->get('pemilik_umkm')->result_array();
    }

    public function tambahDataUmkm()
    {
        $data = [
            "id" => $this->input->POST('id', true),
            "nama" => $this->input->POST('nama', true),
            "produk" => $this->input->POST('produk', true)
        ];
        $this->db->insert('pemilik_umkm', $data);
    }

    public function hapusDataUmkm($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pemilik_umkm');
    }

    public function getUmkmById($id)
    {
        return $this->db->get_where('pemilik_umkm', ['id' => $id])->row_array();
    }

    public function ubahDataUMKM()
    {
        $data = [
            "id" => $this->input->POST('id', true),
            "nama" => $this->input->POST('nama', true),
            "produk" => $this->input->POST('produk', true)
        ];

        $this->db->where('id', $this->input->POST('id'));
        $this->db->update('pemilik_umkm', $data);
    }
}
