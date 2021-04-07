<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_masyarakat');
        if (!$this->session->userdata('logged_in')) {
            redirect('login', 'refresh');
        }
    }
    public function index()
    {
        $nik = $this->session->userdata('nik');
        $data['data'] = $this->M_masyarakat->getByID($nik);
        $this->template->display_admin('admin/view_akun', $data);
    }
    public function ubah()
    {
        $nik = $this->input->post('nik', true);
        $username = $this->input->post('username', true);
        $pass = $this->input->post('pass', true);
        $this->M_masyarakat->ubahAkun($nik, $username, md5($pass));
        redirect('masyarakat');
    }
}
