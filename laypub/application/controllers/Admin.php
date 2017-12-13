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
		$data['aduan']=$this->model_aduan->get_all_aduan();
		//$data['tb_admin']=$this->model_login->view_user()->result();
		
		$this->load->view('admin/home', $data);
	}

	function delete($id){
		$where=array('id_aduan'=>$id);
		$this->model_aduan->delete_data($where,'aduan');
		redirect(base_url('admin'));
	}
	
	function edit($id){
		$where = array('id_aduan' => $id);
		$data['status']=$this->model_status_admin->get_status_admin();
		$data['aduan'] = $this->model_aduan->edit_data($where,'aduan')->result();
		$this->load->view('admin/edit',$data);
	}
	
	function update(){
	//$id = $this->input->post('id_aduan');

		$data = array(
			'id_status' => $this->input->post('id_status')
		);

 		$res= $this->model_aduan->update_data(array('id_status' => $this->input->post('id_status')), $data);
 
		//$this->model_aduan->update_data($data,'aduan');
		redirect(base_url('admin'));
	}
	
	
}
?>