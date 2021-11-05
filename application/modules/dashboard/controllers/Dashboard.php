<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

	
	public  function __construct(){
		parent:: __construct();
		$this->module="dashboard";
		$this->load->model("Dashboard_mdl",'dashboard_mdl');

	}

	public function index()
	{
		$data=array('module'=>$this->module,'title'=>"Main Dashboard",
		            'uptitle'=>"Main Dashboard",'view'=>"home");
	echo Modules::run('templates/main',$data);
	}




}
