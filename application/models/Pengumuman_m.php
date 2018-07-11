<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
* 
*/
class Pengumuman_m extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}

	function hasil_cari($no_pes,$nama){
		$query = $this->db->query("SELECT no_pes from hasil where no_pes = '$no_pes' AND nama ='$nama'");
		foreach ($query->result() as $key);
		if (empty($key->no_pes) ) {
			return "0";
		}else
			return "1";
			
	}
	function info($no_pes,$nama){
		$query = $this->db->query("SELECT pil_1,pil_2,pil_3 from hasil where no_pes = '$no_pes' AND nama ='$nama'");
		foreach ($query->result_array() as $valu){
			if ($valu['pil_1'] == "99999") {
				return "Sukses";
			}elseif ($valu['pil_2'] == "99999") {
				return "Sukses";
			}elseif ($valu['pil_3'] == "99999") {
				return "Sukses";
			}else 
				return "Gagal";
		}		
	}

	function infopro($no_pes,$nama){
		$query = $this->db->query("SELECT pil_1,pil_2,pil_3 from hasil where no_pes = '$no_pes' AND nama ='$nama'");
		$query1 = $this->db->query("SELECT pil1_n,pil2_n,pil3_n from hasil where no_pes = '$no_pes' AND nama ='$nama'");
		foreach ($query1->result_array() as $key);
		foreach ($query->result_array() as $valu){
			if ($valu['pil_1'] == "99999") {
				return $key['pil1_n']="Pilihan 1 : ".$key['pil1_n'];
			}elseif ($valu['pil_2'] == "99999") {
				return $key['pil2_n']="Pilihan 2 : ".$key['pil2_n'];
			}elseif ($valu['pil_3'] == "99999") {
				return $key['pil3_n']="Pilihan 3 : ".$key['pil3_n'];
			}
		}		
	}

	function gagal($no_pes,$nama){
		$query = $this->db->query("SELECT nama,no_pes from hasil where no_pes = '$no_pes' AND nama ='$nama'");
		foreach ($query->result_array() as $value) ;
		return $value;
	}

}
