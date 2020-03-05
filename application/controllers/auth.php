<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('Guru_model');
        $this->load->model('Siswa_model');
        // $this->load->model('Login_model');
    }

    public function index()
    {
        if (isset($_SESSION['nip'])) {
            redirect(site_url('admin'));
        } else if (isset($_SESSION['nip_guru'])) {
            redirect(site_url('guru'));
        } else if (isset($_SESSION['nis'])) {
            redirect(site_url('siswa'));
        }
        $this->load->view('auth/login');

        //     if ($this->session->userdata('nip')) {
        //         redirect('admin');
        //     } elseif ($this->session->userdata('nip_guru')) {
        //         redirect('guru');
        //     } elseif ($this->session->userdata('nis')) {
        //         redirect('siswa');
        //     }
        //     $this->load->view('auth/login');
    }

    public function cekMasuk()
    {
        if (isset($_POST['submit'])) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $loginAdmin = $this->Admin_model->chekLogin($username, $password);
            $loginGuru = $this->Guru_model->chekLogin($username, $password);
            $loginSiswa = $this->Siswa_model->chekLogin($username, $password);
            if (!empty($loginAdmin)) {
                $this->session->set_userdata($loginAdmin);
                $this->session->set_flashdata('berhasil', 'kamu berhasil masuk ...');
                redirect('admin', 'refresh');
            } elseif (!empty($loginGuru)) {
                $this->session->set_userdata($loginGuru);
                $this->session->set_flashdata('berhasil', 'kamu berhasil masuk ...');
                redirect('guru', 'refresh');
            } elseif (!empty($loginSiswa)) {
                $this->session->set_userdata($loginSiswa);
                $this->session->set_flashdata('berhasil', 'kamu berhasil masuk ...');
                redirect('siswa', 'refresh');
            } else {
                $this->session->set_flashdata('gagal', '<div class="alert alert-danger" role="alert">maaf, username / password kamu salah !</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('gagal', '<div class="alert alert-danger" role="alert">maaf, username / password kamu salah !</div>');
            redirect('auth');
        }
    }



    public function keluar()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('keluar', 'Kamu berhasil keluar ...');
        redirect('auth');
    }
}
