<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftaran_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $data['kodeunik'] = $this->Pendaftaran_model->buat_kode();
        $this->load->view('psb/psb');
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

    public function daftar()
    {
        // $this->form_validation->set_rules('nisn', 'NISN', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal_lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        // $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
        // $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
        $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required');
        // $this->form_validation->set_rules('no_telp', 'No Telepon', 'required');
        // $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('psb/psb');
        } else {
            $uploadFoto = $this->upload_foto();
            $getNumber = $this->getAutoNumber('psb', 'kode_pendaftaran', 'KD1920', 9);
            $this->Pendaftaran_model->daftarSiswaBaru($uploadFoto, $getNumber);
            $this->session->set_flashdata('flash', 'Berhasil Mendaftar');
            redirect('pendaftaran/berhasil');
        }
    }

    public function berhasil()
    {
        $this->load->view('psb/berhasil_daftar');
    }

    public function cetakBukti()
    {
        $this->load->library('pdf');
        $this->pdf->generate('');

        // $data['bukti'] = $this->db->get_where('psb', array('kode_pendaftaran' => $id))->row_array();
        $data['bukti'] = $this->Pendaftaran_model->list();

        $this->load->view('psb/bukti_pendaftaran', $data);

        // $paper_size = 'A4';
        // $orientation = 'potrait';
        // $html = $this->output->get_output();
        // $this->dompdf->set_paper($paper_size, $orientation);

        // $this->dompdf->load_html($html);
        // $this->dompdf->render();
        // $this->dompdf->stream("bukti_pendaftaran.pdf", array('Attachment' => 0));
    }

    public function bukti()
    {
        $data['bukti'] = $this->db->query("SELECT * FROM psb ORDER BY kode_pendaftaran DESC LIMIT 1");

        $html = $this->load->view('psb/bukti_pendaftaran', $data, true);
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($html);
        $mpdf->Output('bukti_pendafaran.pdf', \Mpdf\Output\Destination::INLINE);
    }
}
