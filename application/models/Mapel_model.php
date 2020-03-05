<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mapel_model extends CI_Model
{

    public $table = 'mapel';
    public $id = 'kode_mapel';
    // public $order = 'DESC';


    public function list()
    {
        return $this->db->get('mapel')->result_array();
    }

    // function cari($id)
    // {
    //     $query = $this->db->get_where('mapel', array('kode_mapel' => $id));
    //     return $query;
    // }

    public function get($id = null)
    {
        $this->db->select('mapel.*, guru.nama as guru_nama');
        $this->db->from('mapel');
        $this->db->join('guru', 'guru.nip_guru = mapel.nip_guru');
        if ($id != null) {
            $this->db->where('kode_mapel', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function simpan()
    {
        $data = [
            'kode_mapel' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'nip_guru' => $this->input->post('nip'),
        ];
        $this->db->insert('mapel', $data);
    }

    public function ubah()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nip_guru' => $this->input->post('guru'),
        ];
        $this->db->where('kode_mapel', $this->input->post('kode'));
        $this->db->update($this->table, $data);
    }

    public function hapus($id)
    {
        $this->db->delete('mapel', ['kode_mapel' => $id]);
    }
}
