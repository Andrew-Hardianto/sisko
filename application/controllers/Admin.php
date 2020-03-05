<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        sesiAdmin();
        $this->load->model('Admin_model');
        $this->load->model('Guru_model');
        $this->load->model('Siswa_model');
        $this->load->model('Pendaftaran_model');
        $this->load->model('Kelas_model');
        $this->load->model('Mapel_model');
        $this->load->model('Nilai_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'SISKO | Panel ADMIN';
        $data['panel'] = 'Panel ADMIN';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function upload_foto()
    {
        $config['upload_path'] = './assets/img/foto/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
        $config['max_size'] = 2048;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('foto');
        $upload = $this->upload->data();
        return $upload['file_name'];
    }

    public function admin()
    {
        $data['title'] = 'SISKO | Panel ADMIN';
        $data['panel'] = 'Panel ADMIN';
        $data['page'] = 'DATA MASTER ADMIN';
        $data['admin'] = $this->Admin_model->list();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('admin/admin_list', $data);
        $this->load->view('templates/footer');
    }

    public function admin_tambah()
    {
        $data['title'] = 'SISKO | Panel ADMIN';
        $data['panel'] = 'Panel ADMIN';
        $data['page'] = 'TAMBAH ADMIN';

        $this->form_validation->set_rules('nip', 'NIP', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal_lahir', 'required');
        $this->form_validation->set_rules('no_telp', 'No Telepon', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|max_length[10]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/admin_tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $uploadFoto = $this->upload_foto();
            $this->Admin_model->simpan($uploadFoto);
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data Berhasil Di Tambahkan!</div>');
            redirect('admin/admin');
        }
    }

    public function admin_ubah()
    {


        if ($nip = $this->uri->segment(3)) {

            $data = [
                'title' => 'SISKO | Panel ADMIN',
                'panel' => 'Panel Admin',
                'page' => 'EDIT ADMIN',
                'admin' => $this->db->get_where('admin', array('nip' => $nip))->row_array(),
                // 'jenis_kelamin' => 'Laki-Laki', 'Perempuan',
                // 'agama' => 'ISLAM', 'PROTESTAN', 'KATOLIK', 'BUDHA', 'HINDU', 'KONGHUCHU'
            ];
            $data['jenis_kelamin'] = ['Laki-Laki', 'Perempuan'];
            $data['agama'] = ['ISLAM', 'PROTESTAN', 'KATOLIK', 'BUDHA', 'HINDU', 'KONGHUCHU'];

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/admin_ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $uploadFoto = $this->upload_foto();
            $this->Admin_model->ubah($uploadFoto);
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data Berhasil Di Ubah!</div>');
            redirect('admin/admin');
        }
    }



    public function admin_hapus($id)
    {
        $this->Admin_model->hapus($id);
        $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data Berhasil Di Hapus!</div>');
        redirect('admin/admin');
    }

    public function admin_detail($nip)
    {
        $data['title'] = 'Detail Data Admin';
        $data['panel'] = 'Panel ADMIN';
        $data['page'] = 'BIODATA';
        $data['admin'] =  $this->db->get_where('admin', array('nip' => $nip))->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('admin/admin_detail', $data);
        $this->load->view('templates/footer');
    }

    public function guru()
    {
        $data['title'] = 'SISKO | Panel ADMIN';
        $data['panel'] = 'Panel ADMIN';
        $data['page'] = 'DATA MASTER GURU';
        $data['guru'] = $this->Guru_model->list();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('admin/guru_list', $data);
        $this->load->view('templates/footer');
    }

    public function guru_tambah()
    {
        $data['title'] = 'SISKO | Panel ADMIN';
        $data['panel'] = 'Panel ADMIN';
        $data['page'] = 'TAMBAH GURU';

        $this->form_validation->set_rules('nip', 'NIP', 'required|numeric');
        $this->form_validation->set_rules('nuptk', 'NUPTK', 'numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal_lahir', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|max_length[10]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/guru_tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $uploadFoto = $this->upload_foto();
            $this->Guru_model->simpan($uploadFoto);
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data Berhasil Di Tambahkan!</div>');
            redirect('admin/guru');
        }
    }

    public function guru_ubah()
    {
        if ($nip_guru = $this->uri->segment(3)) {

            $data = [
                'title' => 'SISKO | Panel ADMIN',
                'panel' => 'Panel Admin',
                'page' => 'EDIT DATA GURU',
                'guru' => $this->db->get_where('guru', array('nip_guru' => $nip_guru))->row_array(),
                // 'jenis_kelamin' => 'Laki-Laki', 'Perempuan',
                // 'agama' => 'ISLAM', 'PROTESTAN', 'KATOLIK', 'BUDHA', 'HINDU', 'KONGHUCHU'
            ];
            $data['jenis_kelamin'] = ['Laki-Laki', 'Perempuan'];
            $data['agama'] = ['ISLAM', 'PROTESTAN', 'KATOLIK', 'BUDHA', 'HINDU', 'KONGHUCHU'];

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/guru_ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $uploadFoto = $this->upload_foto();
            $this->Guru_model->ubah($uploadFoto);
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data Berhasil Di Ubah!</div>');
            redirect('admin/guru');
        }
    }



    public function guru_hapus($id)
    {
        $this->Guru_model->hapus($id);
        $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data Berhasil Di Hapus!</div>');
        redirect('admin/guru');
    }

    public function Guru_detail($nip)
    {
        $data['title'] = 'Detail Data Guru';
        $data['panel'] = 'Panel ADMIN';
        $data['page'] = 'BIODATA';
        $data['guru'] =  $this->db->get_where('guru', array('nip_guru' => $nip))->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('admin/guru_detail', $data);
        $this->load->view('templates/footer');
    }

    public function siswa()
    {
        $data['title'] = 'SISKO | Panel ADMIN';
        $data['panel'] = 'Panel ADMIN';
        $data['page'] = 'DATA MASTER SISWA';
        $data['siswa'] = $this->Siswa_model->list();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('admin/siswa_list', $data);
        $this->load->view('templates/footer');
    }

    public function siswa_tambah()
    {
        $data['title'] = 'SISKO | Panel ADMIN';
        $data['panel'] = 'Panel ADMIN';
        $data['page'] = 'TAMBAH SISWA';

        $this->form_validation->set_rules('nis', 'NIS', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'required');
        // $this->form_validation->set_rules('agama', 'Agama', 'required');
        // $this->form_validation->set_rules('tempat', 'Tempat Lahir', 'required');
        // $this->form_validation->set_rules('tanggal', 'tanggal_lahir', 'required');
        // $this->form_validation->set_rules('no_telp', 'No Telepon', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|max_length[10]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/siswa_tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $uploadFoto = $this->upload_foto();
            $this->Siswa_model->simpan($uploadFoto);
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data Berhasil Di Tambahkan!</div>');
            redirect('admin/siswa');
        }
    }

    public function siswa_ubah()
    {
        if ($nis = $this->uri->segment(3)) {

            $data = [
                'title' => 'SISKO | Panel ADMIN',
                'panel' => 'Panel Admin',
                'page' => 'EDIT SISWA',
                'siswa' => $this->db->get_where('siswa', array('nis' => $nis))->row_array(),
                // 'jenis_kelamin' => 'Laki-Laki', 'Perempuan',
                // 'agama' => 'ISLAM', 'PROTESTAN', 'KATOLIK', 'BUDHA', 'HINDU', 'KONGHUCHU'
            ];
            $data['jenis_kelamin'] = ['Laki-Laki', 'Perempuan'];
            $data['agama'] = ['ISLAM', 'PROTESTAN', 'KATOLIK', 'BUDHA', 'HINDU', 'KONGHUCHU'];
            $data['jurusan'] = ['IPA', 'IPS'];

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/siswa_ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $uploadFoto = $this->upload_foto();
            $this->Siswa_model->ubah($uploadFoto);
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data Berhasil Di Ubah!</div>');
            redirect('admin/siswa');
        }
    }

    public function siswa_hapus()
    {
        if ($nis = $this->uri->segment(3)) {
            if (!empty($nis)) {
                $this->db->where('nis', $nis);
                $this->db->delete('siswa');
            }
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data Berhasil Di Hapus!</div>');
            redirect('admin/siswa');
        } else {
            redirect('admin/siswa');
        }
    }

    // public function siswa_hapus($id)
    // {
    //     $this->Siswa_model->hapus($id);
    //     $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data Berhasil Di Hapus!</div>');
    //     redirect('admin/siswa');
    // }

    public function siswa_detail($nip)
    {
        $data['title'] = 'Detail Data Admin';
        $data['panel'] = 'Panel ADMIN';
        $data['page'] = 'BIODATA';
        $data['siswa'] =  $this->db->get_where('siswa', array('nis' => $nip))->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('admin/siswa_detail', $data);
        $this->load->view('templates/footer');
    }

    public function psb()
    {
        $data['title'] = 'SISKO | Panel ADMIN';
        $data['panel'] = 'Panel ADMIN';
        $data['page'] = 'DATA MASTER PSB';
        $data['psb'] = $this->Pendaftaran_model->list();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('admin/psb_list', $data);
        $this->load->view('templates/footer');
    }

    public function psb_ubah()
    {
        if ($kode = $this->uri->segment(3)) {

            $data = [
                'title' => 'SISKO | Panel ADMIN',
                'panel' => 'Panel Admin',
                'page' => 'EDIT PSB',
                'psb' => $this->db->get_where('psb', array('kode_pendaftaran' => $kode))->row_array(),
                // 'jenis_kelamin' => 'Laki-Laki', 'Perempuan',
                // 'agama' => 'ISLAM', 'PROTESTAN', 'KATOLIK', 'BUDHA', 'HINDU', 'KONGHUCHU'
            ];
            $data['jenis_kelamin'] = ['Laki-Laki', 'Perempuan'];
            $data['agama'] = ['ISLAM', 'PROTESTAN', 'KATOLIK', 'BUDHA', 'HINDU', 'KONGHUCHU'];
            $data['jurusan'] = ['IPA', 'IPS'];

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/psb_ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $uploadFoto = $this->upload_foto();
            $this->Pendaftaran_model->ubah($uploadFoto);
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data Berhasil Di Ubah!</div>');
            redirect('admin/psb');
        }
    }

    public function psb_hapus($id)
    {
        $this->Pendaftaran_model->hapus($id);
        $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data Berhasil Di Hapus!</div>');
        redirect('admin/psb');
    }


    public function unggah_berkas()
    {
        if ($kode = $this->uri->segment(3)) {
            $data['title'] = 'Detail Data Admin';
            $data['panel'] = 'Panel ADMIN';
            $data['page'] = 'BIODATA';
            $data['psb'] =  $this->db->get_where('psb', array('kode_pendaftaran' => $kode))->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/psb_berkas', $data);
            $this->load->view('templates/footer');
        } else {

            $this->Pendaftaran_model->unggah($data);
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Berkas berhasil diunggah</div>');
            redirect('admin/psb');
        }
    }

    public function psb_detail($kode)
    {
        $data['title'] = 'Detail Data PSB';
        $data['panel'] = 'Panel ADMIN';
        $data['page'] = 'BIODATA';
        $data['psb'] =  $this->db->get_where('psb', array('kode_pendaftaran' => $kode))->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('admin/psb_detail', $data);
        $this->load->view('templates/footer');
    }

    public function getAutoNis($table, $field, $pref, $length, $where = "")
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

    public function verifikasi($kode)
    {
        $psb =  $this->db->get_where('psb', array('kode_pendaftaran' => $kode))->row_array();
        $getNumber = $this->getAutoNis('siswa', 'nis', '19201', 10);
        // $this->Pendaftaran_model->verifikasi();
        $query = $this->db->query("INSERT INTO siswa (nis, nisn, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, agama, alamat, no_telepon, nama_ayah, nama_ibu, jurusan, asal_sekolah, foto, kode_pendaftaran)
        VALUE($getNumber, " . $psb['nisn'] . ", '" . $psb['nama'] . "', '" . $psb['jenis_kelamin'] . "', '" . $psb['tempat_lahir'] . "', " . $psb['tanggal_lahir'] . ", '" . $psb['agama'] . "', '" . $psb['alamat'] . "', '" . $psb['no_telepon'] . "', '" . $psb['nama_ayah'] . "', '" . $psb['nama_ibu'] . "', '" . $psb['jurusan'] . "', '" . $psb['asal_sekolah'] . "', '" . $psb['foto'] . "', '" . $psb['kode_pendaftaran'] . "' )");
        $query = $this->db->query("UPDATE psb set na = 'Y' WHERE kode_pendaftaran = '" . $psb['kode_pendaftaran'] . "'");
        redirect('admin/psb');
    }

    public function kelas()
    {
        $data['title'] = 'SISKO | Panel ADMIN';
        $data['panel'] = 'Panel ADMIN';
        $data['page'] = 'DATA KELAS';
        $data['kelas'] = $this->Kelas_model->list();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('admin/kelas_list', $data);
        $this->load->view('templates/footer');
    }

    public function kelas_tambah()
    {
        $data['title'] = 'SISKO | Panel ADMIN';
        $data['panel'] = 'Panel ADMIN';
        $data['page'] = 'TAMBAH KELAS';

        $this->form_validation->set_rules('kode', 'Kode Kelas', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('ajaran', 'Tahun Ajaran', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/kelas_tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kelas_model->simpan();
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data Berhasil Di Tambahkan!</div>');
            redirect('admin/kelas');
        }
    }

    public function kelas_ubah()
    {
        if ($id = $this->uri->segment(3)) {

            $data = [
                'title' => 'SISKO | Panel ADMIN',
                'panel' => 'Panel Admin',
                'page' => 'EDIT KELAS',
                'kelas' => $this->db->get_where('kelas', array('kode_kelas' => $id))->row_array(),
            ];

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/kelas_ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kelas_model->ubah();
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data Berhasil Di Ubah!</div>');
            redirect('admin/kelas');
        }
    }

    public function kelas_hapus($id)
    {
        $this->Kelas_model->hapus($id);
        $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data Berhasil Di Hapus!</div>');
        redirect('admin/kelas');
    }

    public function mapel()
    {
        $data['title'] = 'SISKO | Panel ADMIN';
        $data['panel'] = 'Panel ADMIN';
        $data['page'] = 'DATA MATA PELAJARAN';
        $data['mapel'] = $this->Mapel_model->get();
        // $guru = $this->Guru_model->get();

        // $data = [
        //     'title' => 'SISKO | Panel ADMIN',
        //     'panel' => 'Panel ADMIN',
        //     'page' => 'DATA MATA PELAJARAN',
        // 'guru' => $guru,
        // 'mapel' => $this->Mapel_model->get(),
        // ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('admin/mapel_list', $data);
        $this->load->view('templates/footer');
    }

    public function mapel_tambah()
    {
        // $data['title'] = 'SISKO | Panel ADMIN';
        // $data['panel'] = 'Panel ADMIN';
        // $data['page'] = 'TAMBAH MATA PELAJARAN';
        $guru = $this->Guru_model->get();

        $data = [
            'title' => 'SISKO | Panel ADMIN',
            'panel' => 'Panel ADMIN',
            'page' => 'TAMBAH MATA PELAJARAN',
            'guru' => $guru,
        ];

        $this->form_validation->set_rules('kode', 'Kode Mata Pelajaran', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'NIP Guru', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/mapel_tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mapel_model->simpan();
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data Berhasil Di Tambahkan!</div>');
            redirect('admin/mapel');
        }
    }

    public function mapel_ubah()
    {
        if ($id = $this->uri->segment(3)) {
            $query_guru = $this->Guru_model->get();
            $guru[null] = '- Pilih Guru -';
            foreach ($query_guru->result() as $g) {
                $guru[$g->nip_guru] = $g->nama;
            }
            $mapel = $this->db->get_where('mapel', array('kode_mapel' => $id))->row_array();
            $data = [
                'title' => 'SISKO | Panel ADMIN',
                'panel' => 'Panel Admin',
                'page' => 'EDIT MATA PELAJARAN',
                'm' => $mapel,
                'guru' => $guru, 'selectedguru' => $mapel['nip_guru'],
            ];

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/mapel_ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mapel_model->ubah();
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data Berhasil Di Ubah!</div>');
            redirect('admin/mapel');
        }
    }

    public function mapel_hapus($id)
    {
        $this->Mapel_model->hapus($id);
        $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data Berhasil Di Hapus!</div>');
        redirect('admin/mapel');
    }

    public function edit_password()
    {
        $data['title'] = 'SISKO | Panel ADMIN';
        $data['panel'] = 'Panel ADMIN';
        $data['page'] = 'EDIT PASSWORD';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('admin/edit_password', $data);
        $this->load->view('templates/footer');
    }

    public function guru_cetak()
    {
        $this->load->library('pdf');
        $this->pdf->generate('');
        $data = $this->Guru_model->list();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('admin/cetak', $data);
        $this->load->view('templates/footer');
    }

    public function nilai()
    {
        $data['title'] = 'SISKO | Panel ADMIN';
        $data['panel'] = 'Panel ADMIN';
        $data['page'] = 'DATA NILAI SISWA';
        $data['siswa'] = $this->Siswa_model->get();
        $data['nilai'] = $this->Nilai_model->get();
        $data['kelas'] = $this->Kelas_model->get();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('admin/nilai_list', $data);
        $this->load->view('templates/footer');
    }
    // public function filter($kelas, $semester)
    // {
    //     $data['title'] = 'SISKO | Panel ADMIN';
    //     $data['panel'] = 'Panel ADMIN';
    //     $data['page'] = 'DATA NILAI SISWA';
    //     // $data['siswa'] = $this->Siswa_model->get();
    //     $data['kelas'] = $this->db->get('nilai', ['kode_kelas' => $kelas])->result();
    //     $data['semester'] = $this->db->get('nilai', ['kode_kelas' => $semester])->result();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar_admin', $data);
    //     $this->load->view('templates/topbar_admin', $data);
    //     $this->load->view('admin/result', $data);
    //     $this->load->view('templates/footer');
    // }

    public function nilai_detail()
    {
        $data['title'] = 'SISKO | Panel ADMIN';
        $data['panel'] = 'Panel ADMIN';
        $data['page'] = 'DATA NILAI SISWA';
        $data['nilai'] = $this->Nilai_model->get();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('admin/nilai_detail', $data);
        $this->load->view('templates/footer');
    }

    public function cetak()
    {
        $data['nilai'] = $this->Nilai_model->rapor();
        $data['kelas'] = $this->Kelas_model->get();

        $html = $this->load->view('admin/rapor', $data, true);
        $mpdf = new \Mpdf\Mpdf(['orientation' => 'P']);
        $mpdf->WriteHTML($html);
        $mpdf->Output('data_nilai_siswa.pdf', \Mpdf\Output\Destination::INLINE);
    }

    public function cetak_psb()
    {
        $data['psb'] = $this->Pendaftaran_model->tampil_tgl();

        $html = $this->load->view('admin/cetak_psb', $data, true);
        $mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);
        $mpdf->WriteHTML($html);
        $mpdf->Output('data_pendaftaran_siswa_baru.pdf', \Mpdf\Output\Destination::INLINE);
    }

    public function profile()
    {
        $data['title'] = 'SISKO | Panel ADMIN';
        $data['panel'] = 'Panel ADMIN';
        $data['subtitle'] = 'BIODATA';
        $data['admin'] =  $this->db->get_where('admin', array('nip' => $this->session->userdata('nip')))->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('templates/footer');
    }

    // public function rapor()
    //  {
    //     $data['nilai'] = $this->Nilai_model->get();
    //     $data['siswa'] = $this->db->get_where('kelas', array('kode_kelas' => $id))->row_array();
    //     $html = $this->load->view('admin/rapor', $data, true);
    //     $mpdf = new \Mpdf\Mpdf();
    //     $mpdf->WriteHTML($html);
    //     $mpdf->Output('rapor_siswa.pdf', \Mpdf\Output\Destination::INLINE);
    // }
}
