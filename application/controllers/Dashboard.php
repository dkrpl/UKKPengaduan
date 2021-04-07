<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
		$jml_pengaduan = $this->M_pengaduan->get($nik)->num_rows();
		$jml_pengaduan_blm = $this->M_pengaduan->belumProses($nik)->num_rows();
		$data = [
			"jumlah_pengaduan" => $jml_pengaduan,
			"jumlah_pengaduan_belum" => $jml_pengaduan_blm
		];
		$this->template->display_admin('admin/view_dashboard', $data);
	}
	public function dashboard_admin()
	{

		$jml_pengaduan = $this->M_pengaduan->getAll()->num_rows();
		$where = ['status' => 'menunggu'];
		$pengaduan_proses = $this->M_pengaduan->tampilSatu('pengaduan', $where)->num_rows();
		$where = ['status' => 'proses'];
		$pengaduan_ditanggapi = $this->M_pengaduan->tampilSatu('pengaduan', $where)->num_rows();
		$where = ['status' => 'selesai'];
		$pengaduan_selesai = $this->M_pengaduan->tampilSatu('pengaduan', $where)->num_rows();
		$data = [
			"jumlah_pengaduan" => $jml_pengaduan,
			"pengaduan_proses" => $pengaduan_proses,
			"pengaduan_ditanggapi" => $pengaduan_ditanggapi,
			"pengaduan_selesai" => $pengaduan_selesai
		];
		$this->template->display_admin('admin/admin_dashboard', $data);
	}
}
