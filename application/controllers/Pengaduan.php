<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pengaduan');
        if (!$this->session->userdata('logged_in')) {
            redirect('login', 'refresh');
        }
    }
    public function index()
    {
        $nik = $this->session->userdata('nik');
        $data['data'] = $this->M_pengaduan->get($nik);
        $this->template->display_admin('admin/view_pengaduan.php', $data);
    }

    public function simpan()
    {
        // konsfigurasi librari aploud
        $config = array(
            'allowed_types' => 'jpg|jpeg|png', 'upload_path' => './assets/foto/', 'max_size' => '1024', 'file_name' => url_title($this->input->post('foto'))
        );
        //instalasi
        $this->upload->initialize($config);
        if ($this->upload->do_upload('foto')) {
            $id_pengaduan = 'PGN' . random_string('numeric', 12);
            $nik = $this->input->post('nik', true);
            $isi_laporan = $this->input->post('isi_laporan', true);
            $foto = $this->upload->file_name;
            $simpan = $this->M_pengaduan->simpan($id_pengaduan, $nik, $isi_laporan, $foto);
            redirect('pengaduan');
        } else {
            // $error = $this->upload->display_errors();
            // $this->session->flash_data('danger', $error);
            redirect('pengaduan');
        }
    }

    function detail()
    {
        //ambil id dari paremeter uri
        $id_pengaduan = $this->uri->segment(3);
        //memanggil fungsi getById
        $data['isi'] = $this->M_pengaduan->detailPengaduan($id_pengaduan);
        // parsing data ke view
        $this->template->display_admin('admin/detail_pengaduan', $data);
    }
}
