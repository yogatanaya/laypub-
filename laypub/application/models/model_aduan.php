<?php
class model_aduan extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	

	function insert_data($data, $table){

		$this->db->insert($table, $data);
	}
	
	function get_layanan(){
		$query=$this->db->get('layanan');
		return $query->result_array();
	}

	function get_all_aduan(){
		$query=$this->db->query('SELECT
		aduan.nik,
		aduan.id_aduan,
		aduan.nama_pengadu,
		aduan.date,
		layanan.nama_layanan,
		`status`.`status`,
		aduan.deskripsi
		FROM
		aduan

		Inner Join `status` ON aduan.id_status = `status`.id_status
		Inner Join layanan ON aduan.id_layanan = layanan.id_layanan

		');

		return $query->result_array();
	}
	
	function delete_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	 function update_data($data){

		$this->db->where('id_status');
		$this->db->update('aduan', $data);
	}
}
?>