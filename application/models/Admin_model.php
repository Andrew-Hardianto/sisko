<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public $table = 'admin';
    public $id = 'nip';
    // public $order = 'DESC';

    public function chekLogin($nip, $password)
    {
        $this->db->where('nip', $nip);
        $this->db->where('password', SHA1($password));
        $admin = $this->db->get($this->table)->row_array();
        return $admin;
    }

    public function list()
    {
        return $this->db->get('admin')->result_array();
    }

    public function simpan($foto)
    {
        $data = [
            'nip' => $this->input->post('nip'),
            'nama' => $this->input->post('nama'),
            'jenis_kelamin' => $this->input->post('kelamin'),
            'tempat_lahir' => $this->input->post('tempat'),
            'tanggal_lahir' => $this->input->post('tanggal'),
            'agama' => $this->input->post('agama'),
            'no_telepon' => $this->input->post('no_telp'),
            'password' => SHA1($this->input->post('password')),
            'foto' => $foto
        ];

        $this->db->insert($this->table, $data);
    }

    public function ubah($foto)
    {
        if (empty($foto) and $this->input->post('password') == '') {
            $data = [
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('kelamin'),
                'tempat_lahir' => $this->input->post('tempat'),
                'tanggal_lahir' => $this->input->post('tanggal'),
                'agama' => $this->input->post('agama'),
                'no_telepon' => $this->input->post('no_telp'),
            ];
        } else if (empty($foto) and $this->input->post('password') != '') {
            $data = [
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('kelamin'),
                'tempat_lahir' => $this->input->post('tempat'),
                'tanggal_lahir' => $this->input->post('tanggal'),
                'agama' => $this->input->post('agama'),
                'no_telepon' => $this->input->post('no_telp'),
                'password' => SHA1($this->input->post('password')),
            ];
        } else if ($this->input->post('password') == '') {
            $data = [
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('kelamin'),
                'tempat_lahir' => $this->input->post('tempat'),
                'tanggal_lahir' => $this->input->post('tanggal'),
                'agama' => $this->input->post('agama'),
                'no_telepon' => $this->input->post('no_telp'),
                'foto' => $foto
            ];
        } else if ($this->input->post('password') != '') {
            $data = [
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('kelamin'),
                'tempat_lahir' => $this->input->post('tempat'),
                'tanggal_lahir' => $this->input->post('tanggal'),
                'agama' => $this->input->post('agama'),
                'no_telepon' => $this->input->post('no_telp'),
                'password' => SHA1($this->input->post('password')),
                'foto' => $foto
            ];
        }

        $this->db->where('nip', $this->input->post('nip'));
        $this->db->update($this->table, $data);
    }

    public function hapus($id)
    {
        $this->db->delete('admin', ['nip' => $id]);
    }

    public function getAdminById($id)
    {
        $this->db->get_where('admin', ['nip' => $id])->row_array();
    }
}
