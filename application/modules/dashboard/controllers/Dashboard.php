<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

	
	public  function __construct(){
		parent:: __construct();
		$this->module="dashboard";
		$this->load->model("Dashboard_mdl",'dashboard_mdl');

	}

	public function index()
	{   $count_synronised = $this->dashdata();
		$data=array('module'=>$this->module,'title'=>"Main Dashboard",
		            'uptitle'=>"Main Dashboard",'view'=>"home",'count_synronised'=>$count_synronised);
	echo Modules::run('templates/main',$data);
	}
	public function dashdata(){
		$rows = $this->db->get('records')->num_rows();
		return $rows;
	}




}
