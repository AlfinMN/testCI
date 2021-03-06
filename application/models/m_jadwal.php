<?php

class M_jadwal extends CI_Model
{
    public function get_data()
    {
        $this->db->select('jadwal.KodeJadwal,guru.NamaGuru,kelas.NamaKelas,jadwal.Hari,jadwal.Jam');
        $this->db->from('jadwal');
        $this->db->join('guru', 'guru.NIP = jadwal.NIP', 'inner');
        $this->db->join('kelas', 'kelas.KodeKelas = jadwal.KodeKelas', 'inner');
        $this->db->where('status', 'aktif');
        return  $this->db->get()->num_rows();
        // return  $this->db->get()->result_array();
    }

    public function getGuru()
    {
        // $this->db->select('guru.NIP');
        // $this->db->from('guru');
        // return  $this->db->get()->result_array();
        return  $this->db->get('guru')->result_array();
    }


    public function getKelas()
    {
        return  $this->db->get('kelas')->result_array();
    }

    public function tambahDataJadwal()
    {
        $data = [
            "KodeJadwal" => $this->input->POST('KodeJadwal', true),
            "Hari" => $this->input->POST('Hari', true),
            "Jam" => $this->input->POST('Jam', true),
            "NIP" => $this->input->POST('NIP', true),
            "KodeKelas" => $this->input->POST('KodeKelas', true),
        ];
        $this->db->insert('jadwal', $data);
    }

    public function hapusDataJadwal($id)
    {
        $this->db->where('KodeJadwal', $id);
        $this->db->delete('jadwal');
    }
}
