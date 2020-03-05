<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Guru_model extends CI_Model
{

    public $table = 'guru';
    public $id = 'nip_guru';


    public function chekLogin($nip, $password)
    {
        $this->db->where('nip_guru', $nip);
        $this->db->where('password', SHA1($password));
        $guru = $this->db->get($this->table)->row_array();
        return $guru;
    }

    public function list()
    {
        return $this->db->get('guru')->result_array();
    }

    public function get($id = null)
    {
        $this->db->from('guru');
        if ($id != null) {
            $this->db->where('nip_guru', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function simpan($foto)
    {
        $data = [
            'nip_guru' => $this->input->post('nip'),
            'nuptk' => $this->input->post('nuptk'),
            'nama' => $this->input->post('nama'),
            'jenis_kelamin' => $this->input->post('kelamin'),
            'tempat_lahir' => $this->input->post('tempat'),
            'tanggal_lahir' => $this->input->post('tanggal'),
            'agama' => $this->input->post('agama'),
            'alamat' => $this->input->post('alamat'),
            'pendidikan' => $this->input->post('pend'),
            'password' => SHA1($this->input->post('password')),
            'foto' => $foto
        ];

        $this->db->insert($this->table, $data);
    }

    public function ubah($foto)
    {
        if (empty($foto) and $this->input->post('password') == '') {
            $data = [
                'nuptk' => $this->input->post('nuptk'),
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('kelamin'),
                'tempat_lahir' => $this->input->post('tempat'),
                'tanggal_lahir' => $this->input->post('tanggal'),
                'agama' => $this->input->post('agama'),
                'alamat' => $this->input->post('alamat'),
                'pendidikan' => $this->input->post('pend'),
            ];
        } else if (empty($foto) and $this->input->post('password') != '') {
            $data = [
                'password' => SHA1($this->input->post('password')),
                'nuptk' => $this->input->post('nuptk'),
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('kelamin'),
                'tempat_lahir' => $this->input->post('tempat'),
                'tanggal_lahir' => $this->input->post('tanggal'),
                'agama' => $this->input->post('agama'),
                'alamat' => $this->input->post('alamat'),
                'pendidikan' => $this->input->post('pend'),

            ];
        } else if ($this->input->post('password') == '') {
            $data = [
                'nuptk' => $this->input->post('nuptk'),
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('kelamin'),
                'tempat_lahir' => $this->input->post('tempat'),
                'tanggal_lahir' => $this->input->post('tanggal'),
                'agama' => $this->input->post('agama'),
                'alamat' => $this->input->post('alamat'),
                'pendidikan' => $this->input->post('pend'),
                'foto' => $foto
            ];
        } else if ($this->input->post('password') != '') {
            $data = [
                'password' => SHA1($this->input->post('password')),
                'nuptk' => $this->input->post('nuptk'),
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('kelamin'),
                'tempat_lahir' => $this->input->post('tempat'),
                'tanggal_lahir' => $this->input->post('tanggal'),
                'agama' => $this->input->post('agama'),
                'alamat' => $this->input->post('alamat'),
                'pendidikan' => $this->input->post('pend'),
                'foto' => $foto
            ];
        }

        $this->db->where('nip_guru', $this->input->post('nip_guru'));
        $this->db->update($this->table, $data);
    }

    public function hapus($id)
    {
        $this->db->delete('guru', ['nip_guru' => $id]);
    }

    public function getGuruById($id)
    {
        $this->db->get_where('guru', ['nip_guru' => $id])->row_array();
    }
}
