<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Templates extends MX_Controller {




	public function main($data)
	{   
		
		$this->load->view('main',$data);
	}


	

}
