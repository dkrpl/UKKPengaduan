<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_petugas');
        $this->load->model('M_masyarakat');
        if (!$this->session->userdata('logged_in')) {
            redirect('login', 'refresh');
        }
    }
    public function Petugas()
    {
        $data['data'] = $this->M_petugas->getPetugas();
        $this->template->display_admin('admin/view_petugas.php', $data);
    }
    public function Masyarakat()
    {
        $data['data'] = $this->M_masyarakat->getAll();
        $this->template->display_admin('admin/view_masyarakat.php', $data);
    }
    public function hapus_masyarakat()
    {
        $id = $this->uri->segment(3);
        $this->M_masyarakat->hapus($id);
        $this->session->set_flashdata('DANGER', "Data.berhasil.di.hapus");
        redirect('pengguna/masyarakat');
    }
    public function hapus_petugas()
    {
        $id = $this->uri->segment(3);
        $this->M_petugas->hapus($id);
        $this->session->set_flashdata('DANGER', "Data.berhasil.di.hapus");
        redirect('pengguna/petugas');
    }
}
