<?php


class Form_sign_up extends CI_Model{
	
	
	//global variable declaration
	
	
	//constructor method
	function __construct(){
		//parent::__construct();		
	}
	
	function insert_user_detail_into_db(){	
		$username = mysql_real_escape_string($this->input->post('username'));
		$email = mysql_real_escape_string($this->input->post('email'));
		$password = mysql_real_escape_string($this->input->post('passwd2'));
				
		//data construct and update db
		$data = array(
			'username' =>$username,
			'email'=>$email,
			'password'=> $password
		);
		
		$email_existence_is = $this->check_user_email_exists($email);	
		
		if($email_existence_is == false){
		   $this->db->insert('users',$data);		
		   return false;
		}else{
		   return true;		
		}
		
	}


	function check_user_email_exists($new_email){
	  $query = $this->db->query("SELECT * FROM users WHERE email = '$new_email'");
	
		if ($query->num_rows() > 0)
		{  
			//email exits 
		   $row = $query->row(); 
		   return true;
		}else{
			//email not exits
		   return false;
		}
		return "error with validation of email";		
	}
	

		
}



?>