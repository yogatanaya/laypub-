<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_aduan');
		$this->load->model('model_layanan');
		$this->load->model('model_status');
		$this->load->helper('url');
		$this->load->library('form_validation');
		
	}

	public function index()
	{
		//$this->load->model('model_layanan');
		//$this->load->model('model_status');
		$data['layanan']=$this->model_layanan->get_layanan();
		$data['status']=$this->model_status->get_status();
		//$this->load->view('header');
		$this->load->view('home', $data);
		//$this->load->view('footer');
	}



	
	public function insert(){
	
		$nik=$this->input->post('nik');
		$nama_pengadu=$this->input->post('nama_pengadu');
		$deskripsi=$this->input->post('deskripsi');
		$id_layanan=$this->input->post('id_layanan');
		$id_status=$this->input->post('id_status');
		$date=$this->input->post('date');

		 $this->form_validation->set_rules('nik','nik','required');
		 $this->form_validation->set_rules('nama_pengadu','nama_pengadu','required');
		 $this->form_validation->set_rules('id_layanan','id_layanan','required');
		 $this->form_validation->set_rules('id_status','id_status','required');
		// $this->form_validation->set_rules('date','tanggal','required');
		
		if($this->form_validation->run()==FALSE){
			echo "<script>
			alert('salah satu form ada yang kosong');
			document.location='".base_url()."home';
			</script>";
		}else {
			$data=array(
			'nik'=>$nik,
			'nama_pengadu'=>$nama_pengadu,
			'deskripsi'=>$deskripsi,
			'id_layanan'=>$id_layanan,
			'id_status'=>$id_status,
			 'date'=> date('Y-m-d H:i:s')

			);
			echo "<script>alert('Input Berhasil');
			document.location='".base_url()."pengaduan';
			</script>";
			$this->model_aduan->insert_data($data, 'aduan');
		}
			
			//redirect(base_url('home'));
		
			
		//$data['layanan']=$this->model_aduan->get_layanan();
		//$this->load->view('home',$data);
	}


	function pengaduan(){
		$data['aduan']=$this->model_aduan->get_all_aduan();
		$this->load->view('view_pengaduan_user',$data);
	}

	function about(){
		$this->load->view('about');
	}

}
?>