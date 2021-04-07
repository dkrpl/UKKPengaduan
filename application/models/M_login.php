<?php
class M_login extends CI_Model{
    function __construct(){
        parent:: __construct();
    }
    function cek_admin ($username,$password){
        $data=$this->db->where('username',$username);
        $data=$this->db->where('password',$password);
        $data=$this->db->get('petugas');

        if($data->num_rows() > 0) { //jika data ada
            return TRUE;
        }else{
            return FALSE; //jika data tidak ada
        }
    }

	function cek_petugas($username, $password){
        $data=$this->db->where('username',$username);
		$data=$this->db->where('password', $password);
		$data=$this->db->get('petugas');

		if ($data->num_rows() > 0){ //Jika data ada
			return TRUE;
		} else {
			return FALSE; //Jika data tidak ada
		}
	}
    function cek_masyarakat($username, $password){
        $data=$this->db->where('username',$username);
		$data=$this->db->where('pass', $password);
		$data=$this->db->get('masyarakat');

		if ($data->num_rows() > 0){ //Jika data ada
			return TRUE;
		} else {
			return FALSE; //Jika data tidak ada
		}
	}
	function getAdmin($username){
		$data=$this->db->where('username',$username);
		$data=$this->db->get('petugas');
		return $data;
	}
	function getMas($username){
		$data=$this->db->where('username',$username);
		$data=$this->db->get('masyarakat');
		return $data;
	}
        
    
}