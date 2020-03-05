<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Siswa_model extends CI_Model
{

    public $table = 'siswa';
    public $id = 'nis';
    // public $order = 'DESC';

    public function chekLogin($nis, $password)
    {
        $this->db->where('nis', $nis);
        $this->db->where('password', SHA1($password));
        $siswa = $this->db->get($this->table)->row_array();
        return $siswa;
    }

    // function cari($id)
    // {
    //     $query = $this->db->get_where('siswa', array('nis' => $id));
    //     return $query;
    // }

    public function list()
    {
        return $this->db->get('siswa')->result_array();
    }

    public function get($id = null)
    {
        $this->db->from('siswa');
        if ($id != null) {
            $this->db->where('nis', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function simpan($foto)
    {
        $data = [
            'nis' => $this->input->post('nis'),
            'nisn' => $this->input->post('nisn'),
            'nama' => $this->input->post('nama'),
            'jenis_kelamin' => $this->input->post('kelamin'),
            'tempat_lahir' => $this->input->post('tempat'),
            'tanggal_lahir' => $this->input->post('tanggal'),
            'agama' => $this->input->post('agama'),
            'alamat' => $this->input->post('alamat'),
            'no_telepon' => $this->input->post('no_telp'),
            'nama_ayah' => $this->input->post('ayah'),
            'nama_ibu' => $this->input->post('ibu'),
            'jurusan' => $this->input->post('jurusan'),
            'asal_sekolah' => $this->input->post('sekolah'),
            'password' => SHA1($this->input->post('password')),
            'foto' => $foto
        ];

        $this->db->insert($this->table, $data);
    }

    public function ubah($foto)
    {
        if (empty($foto) and $this->input->post('password') == '') {
            $data = [
                'nis' => $this->input->post('nis'),
                'nisn' => $this->input->post('nisn'),
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('kelamin'),
                'tempat_lahir' => $this->input->post('tempat'),
                'tanggal_lahir' => $this->input->post('tanggal'),
                'agama' => $this->input->post('agama'),
                'alamat' => $this->input->post('alamat'),
                'no_telepon' => $this->input->post('no_telp'),
                'nama_ayah' => $this->input->post('ayah'),
                'nama_ibu' => $this->input->post('ibu'),
                'jurusan' => $this->input->post('jurusan'),
                'asal_sekolah' => $this->input->post('sekolah'),
            ];
        } else if (empty($foto) and $this->input->post('password') != '') {
            $data = [
                'nis' => $this->input->post('nis'),
                'nisn' => $this->input->post('nisn'),
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('kelamin'),
                'tempat_lahir' => $this->input->post('tempat'),
                'tanggal_lahir' => $this->input->post('tanggal'),
                'agama' => $this->input->post('agama'),
                'alamat' => $this->input->post('alamat'),
                'no_telepon' => $this->input->post('no_telp'),
                'nama_ayah' => $this->input->post('ayah'),
                'nama_ibu' => $this->input->post('ibu'),
                'jurusan' => $this->input->post('jurusan'),
                'asal_sekolah' => $this->input->post('sekolah'),
                'password' => SHA1($this->input->post('password')),
            ];
        } else if ($this->input->post('password') == '') {
            $data = [
                'nis' => $this->input->post('nis'),
                'nisn' => $this->input->post('nisn'),
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('kelamin'),
                'tempat_lahir' => $this->input->post('tempat'),
                'tanggal_lahir' => $this->input->post('tanggal'),
                'agama' => $this->input->post('agama'),
                'alamat' => $this->input->post('alamat'),
                'no_telepon' => $this->input->post('no_telp'),
                'nama_ayah' => $this->input->post('ayah'),
                'nama_ibu' => $this->input->post('ibu'),
                'jurusan' => $this->input->post('jurusan'),
                'asal_sekolah' => $this->input->post('sekolah'),
                'foto' => $foto
            ];
        } else if ($this->input->post('password') != '') {
            $data = [
                'nis' => $this->input->post('nis'),
                'nisn' => $this->input->post('nisn'),
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('kelamin'),
                'tempat_lahir' => $this->input->post('tempat'),
                'tanggal_lahir' => $this->input->post('tanggal'),
                'agama' => $this->input->post('agama'),
                'alamat' => $this->input->post('alamat'),
                'no_telepon' => $this->input->post('no_telp'),
                'nama_ayah' => $this->input->post('ayah'),
                'nama_ibu' => $this->input->post('ibu'),
                'jurusan' => $this->input->post('jurusan'),
                'asal_sekolah' => $this->input->post('sekolah'),
                'password' => SHA1($this->input->post('password')),
                'foto' => $foto
            ];
        }

        $this->db->where('nis', $this->input->post('nis'));
        $this->db->update($this->table, $data);
    }

    public function hapus($id)
    {
        $this->db->delete('siswa', ['nis' => $id]);
    }

    public function getSiswaById($id)
    {
        $this->db->get_where('siswa', ['nis' => $id])->row_array();
    }
}
