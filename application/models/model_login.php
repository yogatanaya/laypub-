<?php 
class model_login extends CI_Model{
	public function cek_login($table , $where){
		return $this->db->get_where($where, $table);
	}
	 function getWhere($data , $table){
  	 	$res=$this->db->get_where($table, $data);
      	return $res->result_array();
  	}

  	 function view_user(){
  	return $this->db->get('tb_admin');
  	}
}
?>