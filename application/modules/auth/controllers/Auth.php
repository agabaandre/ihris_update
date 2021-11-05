<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {

	
	public  function __construct(){
		parent:: __construct();

			$this->load->model("Auth_mdl",'auth_mdl');

			}

	public function index()
	{
	
	}




}
