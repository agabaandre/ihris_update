<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \utils\HttpUtil;

class Data extends MX_Controller {

	
	public  function __construct(){
		parent:: __construct();
		$this->module="data";
		$this->load->model("Data_mdl",'data_mdl');

	}

	public function index()
	{
		$data=array('module'=>$this->module,'title'=>"Data",
		            'uptitle'=>"iHRIS Updates Data",'view'=>"data");
	echo Modules::run('templates/main',$data);
	}
	public function forms(){
		$data=array('module'=>$this->module,'title'=>"Forms",
		            'uptitle'=>"Forms",'view'=>"forms");
		
		$http = new HttpUtil();
	   
		$body = array();
	
		$endpoint='/data/forms';
		$headr = array();
		$headr[] = 'Content-length:'.strlen(json_encode($body));
		$headr[] = 'Content-type: application/json';
	
		
		$response = $http->getRequest($endpoint);
	    foreach($response as $resp){
			print_r($resp);
		}
	
	}




}
