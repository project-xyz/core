<?php

//main controller for the application
//author: J.L    date: 24/8/2013


//todo: 
//1. make this controller unable to direct access

class Main extends CI_Controller {
	//constructor
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$template = $this->load->View('main_view');
	}	
	//stub function
	function index()
	{		
	}	
	
	
	/* form controller functions 
		current control area: 
		view/forms/sign_up       */	
	function form_sign_up_controller(){
		$this->load->model("form_sign_up");	
		$this->form_sign_up->insert_user_detail_into_db();
	}
	
	function test(){
		echo "ok here";
	}
	
	
    
}

?>
