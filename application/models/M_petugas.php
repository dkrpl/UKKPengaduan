<?php
class M_petugas extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function getAll()
	{
		$data = $this->db->order_by('id_petugas', 'ASC');
		$data = $this->db->get('petugas');
		return $data;
	}
	function getPetugas($level = 'petugas')
	{
		$data = $this->db->query("SELECT * FROM `petugas` WHERE level = 'petugas'");
		return $data;
	}
	function getByID($id_petugas)
	{
		$data = $this->db->where('id_petugas', $id_petugas);
		$data = $this->db->get('petugas');
		return $data;
	}
	function simpan($id_petugas, $nama_petugas, $username, $password, $telp, $level)
	{
		$data = array(
			'id_petugas' => $id_petugas,
			'nama_petugas' => $nama_petugas,
			'username' => $username,
			'password' => $password,
			'telp' => $telp,
			'level' => $level
		);
		$this->db->insert('petugas', $data);
	}
	function ubah($id_petugas, $nama_petugas, $username, $password, $telp, $level)
	{
		$data = array(
			'nama_petugas' => $nama_petugas,
			'username' => $username,
			'password' => $password,
			'telp' => $telp,
			'level' => $level
		);
		$this->db->where('id_petugas', $id_petugas);
		$this->db->update('petugas', $data);
	}
	function hapus($id)
	{
		$data = $this->db->where('id_petugas', $id);
		$data = $this->db->delete('petugas');
		if ($id) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}
