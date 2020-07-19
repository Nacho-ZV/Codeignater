<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->$mi_menu;
	}
	
	function index(){

		echo $this->Api_m->get_today();
		
		$this->load->view("welcome_message");
	}

	
	}


	

		
	