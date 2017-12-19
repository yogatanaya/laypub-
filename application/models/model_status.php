<?php 
class model_status extends CI_Model{
	public function __construct()
	{
    	parent::__construct();
	}

	function get_status()
	{
		$data=array();
    	$query = $this->db->get_where('status', array('id_status'=>1));
    	if($query->num_rows() > 0){
    		foreach ($query->result_array() as $row) {
    			$data[]=$row;
    		}
    	}
    	$query->free_result();
    	return $data;
    	//return $this->db->query($query)->result();
	}
}
?>