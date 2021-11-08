<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends MX_Controller {
 	
 	public function __construct()
 	{
 		parent::__construct();
 	
 		$this->load->model(array(
 			'data_model'  
 		));
	}


	public function index()
	{ 
		$data['uptitle']      = 'User List';
		$data['module'] 	= "data";  
		$data['view']   	= "data";   
		$filters=$this->filters();
		$data['user'] = $this->data_model->getData($filters);
		echo Modules::run('templates/main', $data); 
	}

	public function filters(){
		$filter = array();
		$filters=$this->input->post();
		if(!empty($filters)){
		foreach($filters as $key=>$value):
			$filter[]="AND ".$key."=". "$value"; 
		endforeach;
	     }

	return $filter;
	}

	

}
