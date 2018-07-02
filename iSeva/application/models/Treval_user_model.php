<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Treval_user_model extends CI_Model
{
	
	

	function __construct()
	{
		parent::__construct();
		
	}

	public function add_user($username,$email,$phone,$password)
	{
	
		$this->db->where("email",$email);
		$query = $this->db->get('treval_user');
		
		$count = $query->num_rows();
		
		if($count == 0)
		{
			$data = array(
					"name"=>$username,
					"email"=>$email,
					"phone"=>$phone,
					"password"=>$password,
					
					
					);
					
			$this->db->insert("treval_user",$data);	
			$insertid = $this->db->insert_id();
			
			$data1 = array();
			 $data1['id'] =$insertid ;
			   $data1['name'] = $username;
			   $data1['email'] =$email;
			   $data1['phone'] =$phone;
			
			return array("success"=>1,"message"=>"successfully registered","data"=>$data1);
		}
		else
		{
			return array("success"=>0,"message"=>"email allready exist !");
		}
				
		
	}
	
	public function loginauth($username,$password)
	{
	
		$this->db->where('email',$username);
		$this->db->where('password',$password);
		$query= $this->db->get('treval_user');
		
		$count = $query->num_rows();
		
		if($count == 1)
		{
			$single_row= array();
			foreach ($query->result() as $row)
			{
				
			  $single_row['id'] = $row->id;
			   $single_row['name'] = $row->name;
			   $single_row['email'] = $row->email;
			   $single_row['phone'] = $row->phone;
			 
			}
			
			return array("success"=>1,"message"=>"Successfully login !","data"=>$single_row);
		}
		else
		{
			return array("success"=>0,"message"=>"Invalid credentials !");
		}
	}
	



       

	
	
}