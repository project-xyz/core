<?php

class Main extends CI_Controller {

	function index()
	{
		$this->load->helper('url');
		$template = $this->load->View('main_view');
		
	}
    
}

?>
