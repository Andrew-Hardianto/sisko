<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        sesiSiswa();
        $this->load->model('Siswa_model');
        $this->load->model('Nilai_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['title'] = 'SISKO | Panel SISWA';
        $data['panel'] = 'Panel SISWA';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_siswa', $data);
        $this->load->view('templates/topbar_siswa', $data);
        $this->load->view('siswa/dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function nilai()
    {

        $nis = $this->session->userdata('nis');
        // $semester = $this->uri->segment(3);
        // $data['title'] = 'SISKO | Panel SISWA';
        // $data['panel'] = 'Panel SISWA';
        // $data['page'] = 'DATA NILAI';
        // $data['nilai'] = $this->Nilai_model->getNilai();
        $data = [
            'title' => 'SISKO | Panel SISWA',
            'panel' => 'Panel SISWA',
            'page' => 'DATA NILAI',
            'nil' => $this->db->query("SELECT * FROM nilai WHERE nis = '$nis'")->result(),
            // 'smt' => $this->Nilai_model->getSemester($semester, $nis),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_siswa', $data);
        $this->load->view('templates/topbar_siswa', $data);
        $this->load->view('siswa/nilai_list', $data);
        $this->load->view('templates/footer');
    }

    public function edit_password()
    {

        $data['title'] = 'SISKO | Panel SISWA';
        $data['panel'] = 'Panel SISWA';
        $data['subtitle'] = 'EDIT PASSWORD';
        $data['siswa'] = $this->db->get_where('siswa', ['nis' => $this->session->userdata('nis')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_siswa', $data);
            $this->load->view('templates/topbar_siswa', $data);
            $this->load->view('siswa/edit_password', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            // $data['siswa'] = $this->db->get_where('siswa', ['nis' => $this->session->userdata('nis')])->row_array();

            if (!password_verify($current_password, $data['siswa']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                redirect('siswa/edit_password');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Tidak Boleh Sama!</div>');
                    redirect('siswa/edit_password');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, SHA1);

                    $this->db->set('password', $password_hash);
                    $this->db->where('nis', $this->session->userdata('nis'));
                    $this->db->update('siswa');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Berhasil Diubah!</div>');
                    redirect('siswa/edit_password');
                }
            }
        }
    }

    public function profile()
    {
        $data['title'] = 'SISKO | Panel SISWA';
        $data['panel'] = 'Panel SISWA';
        $data['page'] = 'BIODATA';
        $data['siswa'] =  $this->db->get_where('siswa', array('nis' => $this->session->userdata('nis')))->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_siswa', $data);
        $this->load->view('templates/topbar_siswa', $data);
        $this->load->view('siswa/profile', $data);
        $this->load->view('templates/footer');
    }
}
