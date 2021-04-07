<?php
class M_tanggapan extends CI_Model {
	function __construct(){
		parent:: __construct();
	}
	function getAll(){
		$data = $this->db->order_by('id_tanggapan', 'ASC');
		$data = $this->db->get('tanggapan');
		return $data;
	}
	function getByID($id_tanggapan){
		$data = $this->db->where('id_tanggapan',$id_tanggapan);
		$data = $this->db->get('tanggapan');
		return $data;
	}
	function get(){
		$data=$this->db->query("SELECT pengaduan.*, tanggapan.id_tanggapan as id_tanggapan, tanggapan.id_pengaduan as id_pengaduan, tanggapan.tgl_tanggapan as tgl_tanggapan, tanggapan.tanggapan as tanggapan, tanggapan.id_petugas as id_petugas from pengaduan LEFT JOIN pengaduan on tanggapan.id_pengaduan=pengaduan.id_pengaduan order by tanggapan.id_pengaduan DESC");
		return $data;
	}
	function simpan($id_tanggapan,$id_pengaduan,$tanggapan,$id_petugas){
		$data=array(
			'id_tanggapan'=>$id_tanggapan,
			'id_pengaduan'=>$id_pengaduan,
			'tgl_tanggapan'=>date('Y-m-d'),
            'tanggapan'=>$tanggapan,
            'id_petugas'=>$id_petugas
        
		);
		$this->db->insert('tanggapan',$data);
	}
	function updateStatus($id_pengaduan){
	$data=array(
		'status'=>'selesai'
	);
		$this->db->where('id_pengaduan',$id_pengaduan);
		$this->db->update('pengaduan',$data);
	}
	function updateKonfirm($id_pengaduan){
		$data=array(
			'status'=>'proses'
		);
			$this->db->where('id_pengaduan',$id_pengaduan);
			$this->db->update('pengaduan',$data);
		}
	// function ubah($id_tanggapan,$id_pengaduan,$tanggal_tanggapan){
	// 	$data=array(
	// 		'id_pengaduan'=>$id_pengaduan,
	// 		'tanggal_tanggapan'=>$tanggal_tanggapan,
    //         'tanggapan'=>$tanggapan,
    //         'id_petugas'=>$id_petugas
	// 	);
	// 	$this->db->where('id_tanggapan',$id_tanggapan);
	// 	$this->db->update('tanggapan',$data);
	// }
	function hapus($id){
		$data=$this->db->where('id_tanggapan',$id);
		$data=$this->db->delete('tanggapan');
		if($id){
			return TRUE;
		}else {
			return FALSE;
		}

	}
}