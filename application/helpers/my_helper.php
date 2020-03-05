<?php
defined('BASEPATH') or exit('No direct script access allowed');
//session admin
function sesiAdmin()
{
    if (isset($_SESSION['nip'])) {
        return TRUE;
    } else {
        redirect(base_url(), 'refresh');
    }
}
//session dosen
function sesiGuru()
{
    if (isset($_SESSION['nip_guru'])) {
        return TRUE;
    } else {
        redirect(base_url(), 'refresh');
    }
}
//session Mahasiswa
function sesiSiswa()
{
    if (isset($_SESSION['nis'])) {
        return TRUE;
    } else {
        redirect(base_url(), 'refresh');
    }
}
//getDosen
function getGuru($nip)
{
    $CI = &get_instance();
    $ambil = $CI->db->query("SELECT nama FROM guru WHERE nip_guru = '$nip'")->row();
    return $ambil->nama;
}

//getMhs
function getSwa($nis)
{
    $CI = &get_instance();
    $ambil = $CI->db->query("SELECT nama FROM siswa WHERE nis = '$nis'")->row();
    return $ambil->nama;
}
//getTAMhs
// function getTAMhs($nim)
// {
//     $CI = &get_instance();
//     $ambil = $CI->db->query("SELECT thn_akademik FROM tbl_mahasiswa WHERE nim = '$nim'")->row();
//     return $ambil->thn_akademik;
// }
//getJMhs
function getJSwa($nis)
{
    $CI = &get_instance();
    $ambil = $CI->db->query("SELECT jurusan FROM siswa WHERE nis = '$nis'")->row();
    return $ambil->jurusan;
}
//getMatkul
function getMapel($kode_mapel)
{
    $CI = &get_instance();
    $ambil = $CI->db->query("SELECT nama FROM mapel WHERE kode_mapel = '$kode_mapel'")->row();
    return $ambil->nama;
}
//getSKSMatkul
function getJADMatkul($kode_mapel)
{
    $CI = &get_instance();
    $ambil = $CI->db->query("SELECT nama FROM mapel WHERE kode_mk = '$kode_mapel'")->row();
    return $ambil->nama;
}
//getSMatkul
function getKelas($kode_kelas)
{
    $CI = &get_instance();
    $ambil = $CI->db->query("SELECT nama FROM kelas WHERE kode_kelas = '$kode_kelas'")->row();
    return $ambil->nama;
}
//getDMatkul
function getGMapel($kode_mapel)
{
    $CI = &get_instance();
    $ambil = $CI->db->query("SELECT nip_guru FROM mapel WHERE kode_mapel = '$kode_mapel'")->row();
    return $ambil->nip_guru;
}

function tgl_indonesia($tgl)
{
    $nama_bulan = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

    $tanggal = substr($tgl, 8, 2);
    $bulan = $nama_bulan[(int) substr($tgl, 5, 2)];
    $tahun = substr($tgl, 0, 4);

    return $tanggal . ' ' . $bulan . ' ' . $tahun;
}
function angkaketulisan($number)
{
    $before_comma = trim(to_word($number));
    $after_comma = trim(comma($number));
    return ucwords($results = $before_comma . '  ' . $after_comma);
}

function to_word($number)
{
    $words = "";
    $arr_number = array(
        "",
        "satu",
        "dua",
        "tiga",
        "empat",
        "lima",
        "enam",
        "tujuh",
        "delapan",
        "sembilan",
        "sepuluh",
        "sebelas"
    );

    if ($number < 12) {
        $words = " " . $arr_number[$number];
    } else if ($number < 20) {
        $words = to_word($number - 10) . " belas";
    } else if ($number < 100) {
        $words = to_word($number / 10) . " puluh " . to_word($number % 10);
    } else if ($number < 200) {
        $words = "seratus " . to_word($number - 100);
    } else if ($number < 1000) {
        $words = to_word($number / 100) . " ratus " . to_word($number % 100);
    } else if ($number < 2000) {
        $words = "seribu " . to_word($number - 1000);
    } else if ($number < 1000000) {
        $words = to_word($number / 1000) . " ribu " . to_word($number % 1000);
    } else if ($number < 1000000000) {
        $words = to_word($number / 1000000) . " juta " . to_word($number % 1000000);
    } else {
        $words = "undefined";
    }
    return $words;
}

function comma($number)
{
    $after_comma = stristr($number, ',');
    $arr_number = array(
        "nol",
        "satu",
        "dua",
        "tiga",
        "empat",
        "lima",
        "enam",
        "tujuh",
        "delapan",
        "sembilan"
    );

    $results = "";
    $length = strlen($after_comma);
    $i = 1;
    while ($i < $length) {
        $get = substr($after_comma, $i, 1);
        $results .= " " . $arr_number[$get];
        $i++;
    }
    return $results;
}
