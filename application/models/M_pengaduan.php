<?php
class M_pengaduan extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function getAll()
	{
		$data = $this->db->order_by('id_pengaduan', 'ASC');
		$data = $this->db->get('pengaduan');
		return $data;
	}
	function getLap($tgl_awal = null, $tgl_akhir = null)
	{
		// var_dump($tgl_awal,$tgl_akhir);
		// die;
		if ($tgl_awal && $tgl_akhir) {
			$this->db->where('tgl_pengaduan >=', $tgl_awal);
			$this->db->where('tgl_pengaduan <=', $tgl_akhir);
		}
		$data = $this->db->get('pengaduan');
		return $data;
	}
	function getByID($id_pengaduan)
	{
		$data = $this->db->where('id_pengaduan', $id_pengaduan);
		$data = $this->db->get('pengaduan');
		return $data;
	}
	function detailPengaduan($id_pengaduan)
	{
		$data = $this->db->query("SELECT pengaduan.*, masyarakat.nik as nik, masyarakat.nama as nama, masyarakat.username as username, masyarakat.pass as pass, masyarakat.telp as telp , tanggapan.id_tanggapan as id_tanggapan , tanggapan.tanggapan as tanggapan FROM pengaduan LEFT JOIN masyarakat on pengaduan.nik=masyarakat.nik LEFT JOIN tanggapan on pengaduan.id_pengaduan = tanggapan.id_pengaduan WHERE pengaduan.id_pengaduan = '$id_pengaduan' ORDER BY pengaduan.id_pengaduan DESC");
		return $data;
	}
	function get($nik = null)
	{
		$data = $this->db->query("SELECT pengaduan.*, masyarakat.nik as nik, masyarakat.nama as nama, masyarakat.username as username, masyarakat.pass as pass, masyarakat.telp as telp FROM pengaduan LEFT JOIN masyarakat on pengaduan.nik=masyarakat.nik WHERE masyarakat.nik = '$nik' ORDER BY pengaduan.nik DESC");
		return $data;
	}
	function getPengaduan()
	{
		$data = $this->db->query("SELECT pengaduan.*, masyarakat.nik as nik, masyarakat.nama as nama, masyarakat.username as username, masyarakat.pass as pass, masyarakat.telp as telp FROM pengaduan LEFT JOIN masyarakat on pengaduan.nik=masyarakat.nik WHERE masyarakat.nik = pengaduan.nik ORDER BY pengaduan.nik DESC");
		return $data;
	}
	function simpan($id_pengaduan, $nik, $isi_laporan, $foto)
	{
		$data = array(
			'id_pengaduan' => $id_pengaduan,
			'tgl_pengaduan' => date('Y-m-d'),
			'nik' => $nik,
			'isi_laporan' => $isi_laporan,
			'foto' => $foto,
			'status' => 'menunggu'
		);
		$this->db->insert('pengaduan', $data);
	}
	function ubah($id_pengaduan, $tgl_pengaduan, $nik)
	{
		$data = array(
			'tgl_pengaduan' => $tgl_pengaduan,
			'nik' => $nik,
			'isi_laporan' => $isi_laporan,
			'foto' => $foto,
			'status' => $status
		);
		$this->db->where('id_pengaduan', $id_pengaduan);
		$this->db->update('pengaduan', $data);
	}
	function ubahIsi($id_pengaduan, $isi_laporan)
	{
		$data = array(
			'isi_laporan' => $isi_laporan
		);
		$this->db->where('id_pengaduan', $id_pengaduan);
		$this->db->update('pengaduan', $data);
	}
	function hapus($id_pengaduan)
	{
		$data = $this->db->where('id_pengaduan', $id_pengaduan);
		$data = $this->db->delete('pengaduan');
		if ($id_pengaduan) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	function belumProses($nik = null)
	{
		$data = $this->db->query("SELECT pengaduan.*, masyarakat.nik as nik, masyarakat.nama as nama, masyarakat.username as username, masyarakat.pass as pass, masyarakat.telp as telp FROM pengaduan LEFT JOIN masyarakat on pengaduan.nik=masyarakat.nik WHERE masyarakat.nik = '$nik' and pengaduan.status = 'menunggu' OR pengaduan.status = 'proses' ORDER BY pengaduan.nik DESC");
		return $data;
	}
	function tampilSatu($tabel, $where)
	{
		return $this->db->get_where($tabel, $where);
	}
}
