<?php
class Login_model extends CI_Model
{
    //cek nip dan password dosen
    function auth_admin($username, $password)
    {
        $query = $this->db->query("SELECT * FROM admin WHERE nip='$username' AND password=SHA1('$password') LIMIT 1");
        return $query;
    }
    function auth_guru($username, $password)
    {
        $query = $this->db->query("SELECT * FROM guru WHERE nip_guru='$username' AND password=SHA1('$password') LIMIT 1");
        return $query;
    }

    //cek nim dan password mahasiswa
    function auth_siswa($username, $password)
    {
        $query = $this->db->query("SELECT * FROM siswa WHERE nis='$username' AND password=SHA1('$password') LIMIT 1");
        return $query;
    }
}
