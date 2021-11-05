<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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




}
