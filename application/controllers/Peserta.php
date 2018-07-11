<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {
	
	var $data = array() ;
	function __construct() {
        parent::__construct();
        $this->load->model(array('home_m','peserta_m'));
        $this->load->library("pdf");
    }

	public function index(){
		if ($this->home_m->check_logged() === false)
            redirect('home');
        $data['tittle'] = "Home | Peserta";
		$data['body'] = $this->load->view('peserta/info_content',$this->data, true);
		$this->load->view('peserta/index', $data);
	}
	public function biodata(){
		if ($this->home_m->check_logged() === false)
            redirect('home');
        $data['tittle'] = "Biodata | Peserta";
        $this->data['biodata'] = $this->peserta_m->getBiodata();
		$data['body'] = $this->load->view('peserta/biodata_content',$this->data, true);
		$this->load->view('peserta/index', $data);
	}
	public function jurusan(){
		if ($this->home_m->check_logged() === false)
            redirect('home');
        $data['tittle'] = "Jurusan | Peserta";
        $this->data['jurusan'] = $this->peserta_m->getJurusan();
        $this->data['univ'] =$this->peserta_m->namaUniv();
		$data['body'] = $this->load->view('peserta/jurusan_content',$this->data, true);
		$this->load->view('peserta/index', $data);
	}
	public function kartu_ujian(){
		if ($this->home_m->check_logged() === false)
            redirect('home');
        $data['tittle'] = "Cetak Kartu | Peserta";
        $data['biodata'] = $this->peserta_m->getBiodata();
        $data['jurusan'] = $this->peserta_m->getJurusan();
        $data['univ'] =$this->peserta_m->namaUniv();
		$data['body'] = $this->load->view('peserta/kartu_ujian_content',$this->data, true);
		$this->load->view('peserta/index', $data);
	}
	public function akun(){
		if ($this->home_m->check_logged() === false)
            redirect('home');
        $data['tittle'] = "Pengaturan Akun | Peserta";
        $data['biodata'] = $this->peserta_m->getBiodata();
        $data['jurusan'] = $this->peserta_m->getJurusan();
        $data['univ'] =$this->peserta_m->namaUniv();
		$data['body'] = $this->load->view('peserta/akun_content',$this->data, true);
		$this->load->view('peserta/index', $data);
	}
	public function lihat_nilai(){
		if ($this->home_m->check_logged() === false)
            redirect('home');
        $data['tittle'] = "Nilai | Peserta";
        $this->data['dataPeserta'] = $this->peserta_m->getDataPeserta();
		$data['body'] = $this->load->view('peserta/lihat_nilai_content',$this->data, true);
		$this->load->view('peserta/index', $data);
	}
	public function lihat_denah(){
		if ($this->home_m->check_logged() === false)
            redirect('home');
        $data['tittle'] = "Denah | Peserta";
		$data['body'] = $this->load->view('peserta/denah_content',$this->data, true);
		$this->load->view('peserta/index', $data);
	}

	public function maps(){
		if ($this->home_m->check_logged() === false)
            redirect('home');
        $data['tittle'] = "Lokasi | Peserta";
		$data['body'] = $this->load->view('peserta/maps_content',$this->data, true);
		$this->load->view('peserta/index', $data);
	}
		
	
	public function editbio()
	{
		if ($this->home_m->check_logged() === false)
            redirect('home');
		$id = $this->peserta_m->id_pesertaa();
        $data = array(                    
                    'nama'=> $this->input->post('nama'),
                    'no_hp'=> $this->input->post('nohp'),
                    'sekolah'    => $this->input->post('sekolah'));

        $this->db->where('id_peserta', $id);
        $update = $this->db->update('peserta', $data);
        $data = $this->peserta_m->getBiodataBy($id);
        if ($update) {
            echo json_encode(array('status' =>True,'data' => $data));
        }
	}

	public function editjur()
	{
		if ($this->home_m->check_logged() === false)
            redirect('home');
		$id = $this->peserta_m->id_pesertaa();
		$this->db->where('id_peserta',$id);
		$row = $this->db->get('jurusan')->num_rows();

		$data = array(                    
                    'kode_pil1'=> substr($this->input->post('pilihan11'),0,6),
                    'nama_pil1'=> substr($this->input->post('pilihan11'),9),
                    'kode_pil2'=> substr($this->input->post('pilihan22'),0,6),
                    'nama_pil2'=> substr($this->input->post('pilihan22'),9),
                    'kode_pil3'=> substr($this->input->post('pilihan33'),0,6),
                    'nama_pil3'=> substr($this->input->post('pilihan33'),9),
                    'id_peserta'=> $id);

		if ($row == 1) {
			$this->db->where('id_peserta',$id);
			$update = $this->db->update('jurusan',$data);
			if ($update) {
				echo json_encode(array('status' => True,'data' => $data,'pesan' => 'Data Jurusan telah berhasil di perbaharui !'));
			}
		}else{
			$insert = $this->db->insert('jurusan',$data);
			if ($insert) {
				echo json_encode(array('status' => True,'data' => $data,'pesan' => 'Data Jurusan telah berhasil di tambahkan !'));
			}
		}

	}

	public function ajaxjurusan()
	{
		if ($this->home_m->check_logged() === false)
            redirect('home');
		$id=$this->input->post('id');
        echo $this->peserta_m->prodi($id);
	}
	
	public function editpass()
	{
		if ($this->home_m->check_logged() === false)
            redirect('home');
		$data = array(
			'password' => sha1(md5($this->input->post('password'))),
			'hash' => $this->input->post('password')
			);		
		$this->db->where('username',$this->session->userdata('loginPeserta_Blastout_2018_Bklass'));
		$result = $this->db->update('user',$data);
		if ($result) {
			echo json_encode(array('status'=>True));
		}
	}
	public function download(){
		$u =$this->session->userdata('loginPeserta_Blastout_2018_Bklass');
		$data['isi'] = $this->db->query("SELECT * from peserta,kartu,jurusan where peserta.id_peserta = jurusan.id_peserta and peserta.u_user = kartu.username and peserta.u_user='$u'")->row();
			
		if ($data['isi']->jurusan == "SAINTEK") {
			$this->pdf->load_view('peserta/kartusaintek_v',$data);	
		}else
			$this->pdf->load_view('peserta/kartusoshum_v',$data);	
		
		$this->pdf->render();
		$this->pdf->stream($u.".pdf");
		
	}
}
