<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Guru extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        sesiGuru();
        $this->load->model('Guru_model');
        $this->load->model('Nilai_model');
        $this->load->model('Siswa_model');
        $this->load->model('Mapel_model');
        $this->load->model('Kelas_model');
        $this->load->model('Guru_model');

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'SISKO | Panel GURU';
        $data['panel'] = 'Panel GURU';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_guru', $data);
        $this->load->view('templates/topbar_guru', $data);
        $this->load->view('guru/dashboard', $data);
        $this->load->view('templates/footer');
    }

   

    public function nilai()
    {
        $nip_guru = $this->session->userdata('nip_guru');
        $data['title'] = 'SISKO | Panel GURU';
        $data['panel'] = 'Panel GURU';
        $data['page'] = 'DATA NILAI SISWA';
        $data['nilai'] = $this->db->query("SELECT * FROM nilai WHERE nip_guru = '$nip_guru'")->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_guru', $data);
        $this->load->view('templates/topbar_guru', $data);
        $this->load->view('guru/nilai_list', $data);
        $this->load->view('templates/footer');
    }

    public function nilai_tambah()
    {
        $nip_guru = $this->session->userdata('nip_guru');
        $siswa = $this->Siswa_model->get();
        // $mapel = $this->Mapel_model->get();
        $mapel = $this->db->query("SELECT * FROM mapel WHERE nip_guru = '$nip_guru'");
        $guru = $this->Guru_model->get();
        $kelas = $this->Kelas_model->get();
        $data['title'] = 'SISKO | Panel GURU';
        $data['panel'] = 'Panel GURU';
        $data['page'] = 'DATA TAMBAH NILAI';
        $data['nilai'] = $this->Nilai_model->get();
        $data['mapel'] = $mapel;
        $data['siswa'] = $siswa;
        $data['kelas'] = $kelas;
        $data['guru'] = $guru;

        $this->form_validation->set_rules('nis', 'NIS', 'required');
        $this->form_validation->set_rules('kode_mapel', 'Kode Mapel', 'required');
        $this->form_validation->set_rules('nip', 'NIP Guru', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_guru', $data);
            $this->load->view('templates/topbar_guru', $data);
            $this->load->view('guru/nilai_tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Nilai_model->simpan();
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data Berhasil Di Tambahkan!</div>');
            redirect('guru/nilai');
        }
    }

    public function nilai_ubah()
    {
        if ($id = $this->uri->segment(3)) {
            // $siswa = $this->Siswa_model->get();
            // $mapel = $this->Mapel_model->get();
            // $guru = $this->Guru_model->get();
            // $kelas = $this->Kelas_model->get();
            $data['title'] = 'SISKO | Panel GURU';
            $data['panel'] = 'Panel GURU';
            $data['page'] = 'DATA EDIT NILAI';
            $data['nilai'] = $this->db->get_where('nilai', array('id_nilai' => $id))->row_array();
            // $data['mapel'] = $mapel;
            // $data['siswa'] = $siswa;
            // $data['kelas'] = $kelas;
            // $data['guru'] = $guru;


            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_guru', $data);
            $this->load->view('templates/topbar_guru', $data);
            $this->load->view('guru/nilai_ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Nilai_model->ubah();
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data Berhasil Di Ubah!</div>');
            redirect('guru/nilai');
        }
    }

    public function nilai_hapus($id)
    {
        $this->Nilai_model->hapus($id);
        $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data Berhasil Di Hapus!</div>');
        redirect('guru/nilai');
    }

    public function edit_password()
    {
        $data['title'] = 'SISKO | Panel GURU';
        $data['panel'] = 'Panel GURU';
        $data['subtitle'] = 'EDIT PASSWORD';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_guru', $data);
        $this->load->view('templates/topbar_guru', $data);
        $this->load->view('guru/edit_password', $data);
        $this->load->view('templates/footer');
    }

    public function profile()
    {
        $data['title'] = 'SISKO | Panel GURU';
        $data['panel'] = 'Panel GURU';
        $data['subtitle'] = 'BIODATA';
        $data['guru'] =  $this->db->get_where('guru', array('nip_guru' => $this->session->userdata('nip_guru')))->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_guru', $data);
        $this->load->view('templates/topbar_guru', $data);
        $this->load->view('guru/profile', $data);
        $this->load->view('templates/footer');
    }

    public function cariSiswa()
    {
        $nis = $_GET['nis'];
        $cari = $this->Siswa_model->get($nis)->result();
        echo json_encode($cari);
    }

    public function cariMapel()
    {
        $kode = $_GET['kode_mapel'];
        $cari = $this->Mapel_model->get($kode)->result();
        echo json_encode($cari);
    }
}
