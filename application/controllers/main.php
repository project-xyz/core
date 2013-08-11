<?php

class Main extends CI_Controller {	

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		//render the main view
		$template = $this->load->View('main_view');
		echo "soemthing here";	
	}
	
	
	function index()
	{
		$data['row'] = this->form_sign_up->getValues();	
	}
	
	function test()
	{
		echo "soemthing is";
		//$this->load->model(('form_sign_up');	
	}
    
}

?>
