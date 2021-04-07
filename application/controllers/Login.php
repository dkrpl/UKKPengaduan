<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
        $this->load->model('M_petugas');
        $this->load->model('M_masyarakat');
    }
    function index()
    {
        $data['data'] = $this->M_petugas->getAll();
        $this->load->view('login.php', $data);
    }
    function cek()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);


        // jika akses sebagai admin
        $cek_admin = $this->M_login->cek_admin($username, md5($password));
        $cek_masyarakat = $this->M_login->cek_masyarakat($username, md5($password));
        if ($cek_admin != false) {
            $Userdata = $this->M_login->getAdmin($username)->row();
            $nama_petugas = $Userdata->nama_petugas;
            $id_petugas = $Userdata->id_petugas;
            $level = $Userdata->level;
            // cek data apakah ada 
            $data = array(
                'username' => $username,

                'nama_petugas' => $nama_petugas,
                'id_petugas' => $id_petugas,
                'level' => $level,
                'logged_in' => true
            );
            //notifikasi login berhasil
            $this->session->set_userdata($data);
            // masuk ke dashboard admin
            redirect('dashboard/dashboard_admin');
            // var_dump($data);
        } else if ($cek_masyarakat != false) {
            $Userdata = $this->M_login->getMas($username)->row();
            $nama = $Userdata->nama;
            $nik = $Userdata->nik;
            // cek data masyarakat apakah ada
            $data = array(
                'username' => $username,
                'akses' => 'masyarakat',
                'nama' => $nama,
                'nik' => $nik,
                'logged_in' => true
            );
            // notif login berhasil
            $this->session->set_userdata($data);
            // masuk ke dashboard masyakarat
            redirect('dashboard');
            // var_dump($data);
        } else {
            // selain itu jika username dan password salah kembali ke login
            $this->session->set_flashdata('DANGER', 'username dan password yang anda masukan salah');
            redirect('login', 'refresh');
        }
    }
    function logout()
    {
        //hapus session
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        $this->session->set_flashdata('DANGER', "Berhasil logout");
        redirect('login', 'refresh');
    }
    function register()
    {
        $data['data'] = $this->M_masyarakat->getAll();
        $this->load->view('register.php', $data);
    }
    function simpanRegister()
    {
        $nik = $this->input->post('nik', true);
        $nama = $this->input->post('nama', true);
        $username = $this->input->post('username', true);
        $pass = $this->input->post('pass', true);
        $telp = $this->input->post('telp', true);
        $this->M_masyarakat->simpan($nik, $nama, $username, md5($pass), $telp);
        redirect('login');
    }
}
