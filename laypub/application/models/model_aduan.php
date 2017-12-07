<?php
class model_aduan extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	

	function insert_data($data, $table){

		$this->db->insert($table, $data);
	}
	
	function get_layanan()
	{
		$this->db->order_by('nama_layanan','asc');
		return $this->db->get('layanan')->result();
	}

}
?>