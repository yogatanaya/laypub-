<?php 
class model_layanan extends CI_Model{
	public function __construct()
	{
    	parent::__construct();
	}

	function get_layanan()
	{
		$data=array();
    	$query = $this->db->get('layanan');
    	if($query->num_rows()>0){
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