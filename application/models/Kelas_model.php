<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_model extends CI_Model
{

    public $table = 'kelas';
    public $id = 'kode_kelas';
    // public $order = 'DESC';


    public function list()
    {
        return $this->db->get('kelas')->result_array();
    }

    public function get($id = null)
    {
        $this->db->from('kelas');
        if ($id != null) {
            $this->db->where('kode_kelas', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function simpan()
    {
        $data = [
            'kode_kelas' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'tahun_ajaran' => $this->input->post('ajaran'),
        ];
        $this->db->insert('kelas', $data);
    }

    public function ubah()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'tahun_ajaran' => $this->input->post('ajaran'),
        ];
        $this->db->where('kode_kelas', $this->input->post('kode'));
        $this->db->update($this->table, $data);
    }

    public function hapus($kode)
    {
        $this->db->delete('kelas', ['kode_kelas' => $kode]);
    }
}
