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
		$database_insert_results = $this->form_sign_up->insert_user_detail_into_db();	
		$data['sign_up_results']= $database_insert_results;
		
		if($database_insert_results == true)
		   $template = $this->load->View('forms/results/reg_error_results', $data);
		else
		   $template = $this->load->View('forms/results/reg_pass_results', $data);   
	}
	
	
	function form_sign_in_controller(){
		$this->load->model("form_sign_in");	
		$database_insert_results = $this->form_sign_in->check_user_detail_with_db();
	}
	

	function test(){
		echo "ok here";
	}
	
	
    
}

?>
