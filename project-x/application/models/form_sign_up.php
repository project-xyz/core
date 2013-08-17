<?php


class Form_sign_up extends CI_Model{
	
	
	//global variable declaration

	//constructor method
	function __construct(){
		//parent::__construct();		
	}
	
	function insert_user_detail_into_db(){
		
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('passwd2');
	
		//$check_email_status =  
		$this->check_user_email_exists($email);
		//echo $check_email_status;
		
		//data construct and update db
		$data = array(
			'username' =>$username,
			'email'=>$email,
			'password'=> $password
		);
		$this->db->insert('users',$data);
	}


	function check_user_email_exists($new_email){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email', $new_email); 
		$query = $this->db->get();
		
		$rows = mysql_num_rows($query);
		echo $rows;
	}
	
	function check_user_name_exists($newUsername){
		
	}
	
	
	
	
	
	
	
	
	
	
	//sample test function
	function test(){
		$query = $this->db->query('SELECT email FROM users WHERE id = ?',array(1));			
		$data = array_shift($query->result_array());
		echo ($data['email']);
	}
	
	
	
		
}



?>