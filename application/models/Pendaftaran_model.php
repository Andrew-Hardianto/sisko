<?php

class Pendaftaran_model extends CI_Model
{
    public $table = "psb";


    public function daftarSiswaBaru($foto, $kode)
    {
        $data = [
            'kode_pendaftaran' => $kode,
            'nisn' => $this->input->post('nisn'),
            'nama' => $this->input->post('nama'),
            'tempat_lahir' => $this->input->post('tempat'),
            'tanggal_lahir' => $this->input->post('tanggal'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama'),
            'alamat' => $this->input->post('alamat'),
            'nama_ayah' => $this->input->post('nama_ayah'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'asal_sekolah' => $this->input->post('asal_sekolah'),
            'no_telepon' => $this->input->post('no_telp'),
            'jurusan' => $this->input->post('jurusan'),
            'tgl_daftar' => $this->input->post('tgl_daftar'),
            'foto' => $foto,
            // 'bukti' => $this->input->post('bukti'),
            // 'ktp' => $this->input->post('ktp')
        ];

        $this->db->insert($this->table, $data);
    }

    public function hapus($id)
    {
        $this->db->delete('psb', ['kode_pendaftaran' => $id]);
    }

    public function unggah()
    {
        $config['upload_path'] = './assets/img/berkas/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
        $config['max_size'] = 2048;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!empty($_FILES['bukti']['name'])) {
            $this->upload->do_upload('bukti');
            $data1 = $this->upload->data();
            $bukti = $data1['file_name'];
        }

        if (!empty($_FILES['ktp']['name'])) {
            $this->upload->do_upload('ktp');
            $data2 = $this->upload->data();
            $ktp = $data2['file_name'];
        }
        $kode = $this->input->post('kode', TRUE);
        $data = [
            'bukti' => $bukti,
            'ktp' => $ktp
        ];
        $this->db->where('kode_pendaftaran', $kode);
        $this->db->update($this->table, $data);
    }

    public function getAutoNumber($table, $field, $pref, $length, $where = "")
    {
        $ci = &get_instance();
        $query = "SELECT IFNULL(MAX(CONVERT(MID($field," . (strlen($pref) + 1) . "," . ($length - strlen($pref)) . "),UNSIGNED INTEGER)),0)+1 AS NOMOR
                FROM $table WHERE LEFT($field," . (strlen($pref)) . ")='$pref' $where";
        $result = $ci->db->query($query)->row();
        $zero = "";
        $num = $length - strlen($pref) - strlen($result->NOMOR);
        for ($i = 0; $i < $num; $i++) {
            $zero = $zero . "0";
        }
        return $pref . $zero . $result->NOMOR;
    }

    public function verifikasi()
    {
        $getNumber = $this->getAutoNumber('siswa', 'nis', '19201', 10);
        $this->db->query("INSERT INTO siswa(nis, nisn, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, agama, alamat, no_telepon, nama_ayah, nama_ibu, jurusan, asal_sekolah, foto) SELECT kode_pendaftaran, nisn, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, agama, alamat, no_telepon, nama_ayah, nama_ibu, jurusan, asal_sekolah, foto FROM psb WHERE kode_pendaftaran");
    }

    public function list()
    {
        return $this->db->get_where('psb', array('na' => 'N'))->result_array();
    }

    public function tampil_tgl()
    {
        $this->db->from('psb');
        $this->db->where('tgl_daftar >=', $this->input->post('tgl_a'));
        $this->db->where('tgl_daftar <=', $this->input->post('tgl_b'));
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil($id = null)
    {
        $db = $this->mysqli->conn;
        $sql = "SELECT * FROM psb";
        if ($id != null) {
            $sql .= " WHERE kode_pendaftaran = $id";
        }
        $query = $db->query($sql) or die($db->error);
        return $query;
    }
}
