<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('model_login');
		$this->load->model('model_aduan');
		$this->load->model('model_layanan');
		$this->load->model('model_status');
		$this->load->model('model_status_admin');
		 $this->load->helper('url');
		 
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$data['title']='Admin';
		$data['aduan']=$this->model_aduan->get_all_aduan();
		//$data['tb_admin']=$this->model_login->view_user()->result();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/home', $data);
		$this->load->view('admin/footer', $data);
	}

	function delete($id){
		$where=array('id_aduan'=>$id);
		$this->model_aduan->delete_data($where,'aduan');
		redirect(base_url('admin'));
	}
	
	function edit($id){
		$data['title']='Edit Aduan';
		$where = array('id_aduan' => $id
					);
		$data['satuan']=$this->model_status_admin->get_status_admin();
		$data['aduan'] = $this->model_aduan->edit_data($where,'aduan')->result();

		$this->load->view('admin/header',$data);
		$this->load->view('admin/edit',$data);
		$this->load->view('admin/footer',$data);
	}
	
	function update(){
		$id_aduan=$this->input->post('id_aduan');
		$deskripsi=$this->input->post('deskripsi');
		$status = $this->input->post('id_status');
		
		/*
		ob_start();
		var_dump($status);
		return ob_get_contents();
		*/
		//$nik = $this->input->post('nik');
		//$nama_pengadu = $this->input->post('nama_pengadu');
		//$pekerjaan = $this->input->post('pekerjaan');
 		//$status=$this->input->post('id_status');
			
		$data = array(
			'id_status' => $status,
			'deskripsi'=>$deskripsi
			//'nik'=>$nik
			//'id_status'=>$status
		);
 
		$where = array(
			'id_aduan' => $id_aduan
		);
 
		$this->model_aduan->update_data($where,$data,'aduan');
		redirect('admin');
	}
}
?>