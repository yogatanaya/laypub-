<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_aduan');
		$this->load->helper('url');
		
	}

	public function index()
	{
		$this->load->view('home');
	}

	
	public function insert(){	
		$nik=$this->input->post('nik');
		$nama_pengadu=$this->input->post('nama_pengadu');
		$deskripsi=$this->input->post('deskripsi');
		$layanan=$this->model_aduan->get_layanan();

		$data=array(
			'nik'=>$nik,
			'nama_pengadu'=>$nama_pengadu,
			'deskripsi'=>$deskripsi,
			'layanan'=>$layanan
		);
		$this->model_aduan->insert_data($data, 'aduan');
		redirect();
	}



}
