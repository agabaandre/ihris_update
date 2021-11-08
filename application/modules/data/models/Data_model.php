<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model {
 
	

	public function getData($filters)
	{ 
		if(empty($filters)){
			$filters="";
		}
		$this->db->query("SELECT * FROM `records` where mobile_number!='' $filters");
	
	}

	

}
 




