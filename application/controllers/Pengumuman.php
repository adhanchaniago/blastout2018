<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {
	
	var $data = array() ;
	function __construct() {
        parent::__construct();
        $this->load->model('Pengumuman_m');
    }	
  	function index() {
        if ($this->input->post('cari')) {
    		$data['tittle'] = 'Pengumuman BLASTOUT ';
	        $data['body'] = $this->load->view('pengumuman/cari_pengumuman', $data, true);
    		$this->data['embuh'] = '';
	        $nomerp =  $this->input->post('no_peserta');
	        $namap = $this->input->post('nama_lju');
	        $cari = $this->Pengumuman_m->hasil_cari($nomerp,$namap);
	        if ($cari == "0") {
    			$data['tittle'] = 'Pengumuman BLASTOUT ';
	        	$data['pesan']="Data tidak ada, kalau ada yang perlu ditanyakan bisa menghubungi 085799228335 (WA)";
	        	$data['body'] = $this->load->view('pengumuman/cari_pengumuman', $data, true);
	        	$this->load->view('pengumuman/index', $data);
	        }else{

	        	$cekLolos = $this->Pengumuman_m->info($nomerp,$namap);
	        	if ($cekLolos == "Gagal") {
	        		$this->data['identitas'] = $this->Pengumuman_m->gagal($nomerp,$namap);
	        		$this->data['prodiii'] = $this->Pengumuman_m->infopro($nomerp,$namap);
	        		$data['body'] = $this->load->view('pengumuman/hasil_pengumuman_gagal', $this->data, true);	

	        	}elseif($cekLolos == "Sukses"){
	        		$this->data['identitas'] = $this->Pengumuman_m->gagal($nomerp,$namap);
	        		$this->data['prodiii'] = $this->Pengumuman_m->infopro($nomerp,$namap);
	        		$data['body'] = $this->load->view('pengumuman/hasil_pengumuman', $this->data, true);	
	        	}
	        		
	        	$this->load->view('pengumuman/index', $data);   	
	        }

	        
    	}else{
    		$data['tittle'] = 'Pengumuman BLASTOUT ';
	        $data['body'] = $this->load->view('pengumuman/cari_pengumuman', $data, true);
	        $this->load->view('pengumuman/index', $data);	
    	}
        
    }
}
