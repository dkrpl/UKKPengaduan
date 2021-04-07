<?php
class M_masyarakat extends CI_Model {
	function __construct(){
		parent:: __construct();
	}
	function getAll(){
		$data = $this->db->order_by('nik', 'ASC');
		$data = $this->db->get('masyarakat');
		return $data;
	}
	function getByID($nik){
		$data = $this->db->where('nik',$nik);
		$data = $this->db->get('masyarakat');
		return $data;
	}
	function simpan($nik,$nama,$username,$pass,$telp){
		$data=array(
			'nik'=>$nik,
			'nama'=>$nama,
			'username'=>$username,
            'pass'=>$pass,
            'telp'=>$telp
		);
		$this->db->insert('masyarakat',$data);
	}
	function ubah($nik,$nama,$username,$pass,$telp){
		$data=array(
			'nama'=>$nama,
			'username'=>$username,
            'pass'=>$pass,
            'telp'=>$telp
		);
		$this->db->where('nik',$nik);
		$this->db->update('masyarakat',$data);
	}
	function ubahAkun($nik,$username,$pass){
		$data=array(
			'username'=>$username,
            'pass'=>$pass
		);
		$this->db->where('nik',$nik);
		$this->db->update('masyarakat',$data);
	}
	function hapus($id){
		$data=$this->db->where('nik',$id);
		$data=$this->db->delete('masyarakat');
		if($id){
			return TRUE;
		}else {
			return FALSE;
		}

	}
}