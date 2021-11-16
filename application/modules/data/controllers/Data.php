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
		$data['uptitle']      = 'Activity Report';
		$data['title']      = 'Activity Report';
		$data['module'] 	= "data";  
		$data['view']   	= "data";   
		$data['headers']   	= $this->data_model->headers();
		$filters=$this->filters();
		$data['staffs'] = $this->data_model->getData($filters);
		echo Modules::run('templates/main', $data); 
	}

	public function kyc()
	{ 
		$data['uptitle']      = 'KYC Verified Data';
		$data['title']      = 'KYC Verified Data ';
		$data['module'] 	= "data";  
		$data['view']   	= "kyc";   
		$data['headers']   	= $this->data_model->headers();
		$filters=$this->filters();
		$data['staffs'] = $this->data_model->kycData($filters);
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
