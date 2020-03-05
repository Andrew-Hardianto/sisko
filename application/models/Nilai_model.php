<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_model extends CI_Model
{

    public $table = 'nilai';
    public $id = 'id_nilai';
    // public $order = 'DESC';


    public function list()
    {
        return $this->db->get('nilai')->result_array();
    }

    public function get($id = null)
    {
        $this->db->select('nilai.*, guru.nama as guru_nama, siswa.nama as siswa_nama, mapel.nama as mapel_nama, kelas.nama as kelas_nama, kelas.kode_kelas as kode');
        $this->db->from('nilai');
        $this->db->join('guru', 'guru.nip_guru = nilai.nip_guru');
        $this->db->join('siswa', 'siswa.nis = nilai.nis');
        $this->db->join('mapel', 'mapel.kode_mapel = nilai.kode_mapel');
        $this->db->join('kelas', 'kelas.kode_kelas = nilai.kode_kelas');
        if ($id != null) {
            $this->db->where('id_nilai', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function getNilai()
    {
        $query = $this->db->order_by('semester')
            ->get('nilai');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function getSemester($semester, $nis)
    {
        $query = $this->db->select('*')
            ->from('nilai')
            ->join('mapel', 'mapel.kode_mapel = nilai.kode_mapel')
            ->join('guru', 'guru.nip_guru = nilai.nip_guru')
            ->join('siswa', 'siswa.nis = nilai.nis')
            ->join('kelas', 'kelas.kode_kelas = nilai.kode_kelas')
            ->where('nilai.semester', $semester)
            ->where('nilai.nis', $nis)
            ->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function rapor()
    {
        $this->db->from('nilai');
        $this->db->where('nis', $this->input->post('nis'));
        $this->db->where('kode_kelas', $this->input->post('kelas'));
        $this->db->where('semester', $this->input->post('semester'));
        $query = $this->db->get();
        return $query->result();
    }


    public function simpan()
    {
        $data = [
            'nis' => $this->input->post('nis'),
            'kode_mapel' => $this->input->post('kode_mapel'),
            'nip_guru' => $this->input->post('nip'),
            'kode_kelas' => $this->input->post('kelas'),
            'semester' => $this->input->post('semester'),
            'tahun_ajaran' => $this->input->post('tahun'),
            'tugas' => $this->input->post('tugas'),
            'uts' => $this->input->post('uts'),
            'uas' => $this->input->post('uas'),
            't_nilai' => $this->input->post('nilai'),
            'praktek' => $this->input->post('praktek'),
            'predikat' => $this->input->post('predikat')
        ];
        $this->db->insert('nilai', $data);
    }

    public function ubah()
    {
        $data = [
            'nis' => $this->input->post('nis'),
            'kode_mapel' => $this->input->post('kode'),
            'nip_guru' => $this->input->post('nip'),
            'kode_kelas' => $this->input->post('kelas'),
            'semester' => $this->input->post('semester'),
            'tahun_ajaran' => $this->input->post('tahun'),
            'tugas' => $this->input->post('tugas'),
            'uts' => $this->input->post('uts'),
            'uas' => $this->input->post('uas'),
            't_nilai' => $this->input->post('nilai'),
            'praktek' => $this->input->post('praktek'),
            'predikat' => $this->input->post('predikat')
        ];
        $this->db->where('id_nilai', $this->input->post('id_nilai'));
        $this->db->update($this->table, $data);
    }

    public function hapus($id)
    {
        $this->db->delete('nilai', ['id_nilai' => $id]);
    }
}
