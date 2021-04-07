<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_tanggapan');
        $this->load->model('M_pengaduan');
        if (!$this->session->userdata('logged_in')) {
            redirect('login', 'refresh');
        }
    }
    public function index()
    {
        $data['data'] = $this->M_pengaduan->getPengaduan();
        $this->template->display_admin('admin/view_kelola.php', $data);
    }
    function konfirm()
    {
        //ambil id dari paremeter uri
        $id_pengaduan = $this->uri->segment(3);
        //memanggil fungsi getById
        $data['isi'] = $this->M_pengaduan->getById($id_pengaduan);
        // parsing data ke view
        $simpan = $this->M_tanggapan->updateKonfirm($id_pengaduan);
        redirect('kelola');
    }
    function balas()
    {
        //ambil id dari paremeter uri
        $id_pengaduan = $this->uri->segment(3);
        //memanggil fungsi getById
        $data['isi'] = $this->M_pengaduan->getById($id_pengaduan);
        // parsing data ke view
        $this->template->display_admin('admin/balas_pengaduan', $data);
    }
    function tanggapan()
    {
        $id_tanggapan = 'TGPN' . random_string('numeric', 12);
        $id_pengaduan = $this->input->post('id_pengaduan', true);
        $tanggapan = $this->input->post('tanggapan', true);
        $id_petugas = $this->input->post('id_petugas', true);
        $simpan = $this->M_tanggapan->updateStatus($id_pengaduan);
        $simpan = $this->M_tanggapan->simpan($id_tanggapan, $id_pengaduan, $tanggapan, $id_petugas);
        redirect('kelola');
    }

    function hapus()
    {
        $id = $this->uri->segment(3);
        $this->M_pengaduan->hapus($id);
        $this->session->set_flashdata('DANGER', "Data.berhasil.di.hapus");
        redirect('kelola');
    }
    public function delete()
    {
        $id_pengaduan = $this->uri->segment(3);
        $data = $this->M_pengaduan->getByID($id_pengaduan);
        $result = $data->row();
        if (!empty($result->foto)) {
            $path = (APPPATH . '../assets/foto/');
            $hapus = unlink($path . $result->foto);
            if ($hapus) {
                //echo "berhasil hapus foto";
                $delete = $this->M_pengaduan->hapus($id_pengaduan);
                $this->session->set_flashdata('DANGER', "Data berhasil di Hapus");
                redirect('kelola');
            }
        } else {
            $id = $this->uri->segment(3);
            $this->M_pengaduan->hapus($id);
            $this->session->set_flashdata('DANGER', "Data.berhasil.di.hapus");
            redirect('kelola');
        }
    }
}
