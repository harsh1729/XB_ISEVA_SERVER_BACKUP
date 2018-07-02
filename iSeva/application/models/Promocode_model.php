<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promocode_model extends CI_Model
{
	
	

	function __construct()
	{
		parent::__construct();
		
	}
	public function get_all()
	{	
		$this->db->order_by('id','desc');
		$query = $this->db->get('promocode');
		
		$all_rows = array();
		foreach ($query->result() as $row)
		{
			 $single_row= array();
			  $single_row['id'] = $row->id;
			  $single_row['isGlobel'] = $row->isGlobel;
			  $single_row['isActive']= $row->isActive;
			   $single_row['tag'] = $row->tag;
			   $single_row['detail'] = $row->detail;
			   $single_row['coupan_code'] = $row->coupan_code;
			   $single_row['discount_percentage'] = $row->discount_percentage;
			   $single_row['discount_amount'] = $row->discount_amount;
			   $single_row['max_uses_count'] = $row->max_uses_count;
			   $single_row['start_date'] = $row->start_date;
			   $single_row['end_date'] = $row->end_date;
			   $single_row['image'] = $row->image;
			  array_push($all_rows,$single_row);
			 
		}
		

		return $all_rows;
	}
	public function get_all_offers()
	{
		$today_date = date('Y-m-d H:i:s');
		
		$this->db->where('isGlobel',true);
		$this->db->where('isActive',true);
		$this->db->where('start_date <=',$today_date);
		$this->db->where('end_date >=',$today_date);
		$query = $this->db->get('promocode');
		
			$all_rows = array();
		foreach ($query->result() as $row)
		{
			 $single_row= array();
			  $single_row['id'] = $row->id;
			   $single_row['tag'] = $row->tag;
			   $single_row['detail'] = $row->detail;
			   $single_row['coupan_code'] = $row->coupan_code;
			   $single_row['discount_percentage'] = $row->discount_percentage;
			   $single_row['discount_amount'] = $row->discount_amount;
			   $single_row['max_uses_count'] = $row->max_uses_count;
			   
			  array_push($all_rows,$single_row);
			 
		}
		

		return $all_rows;
	}
	
		public function get_offer_with_coupan_no($coupan_no,$userid,$isglobal)
	{
		
		/*if($isglobal == 0)
		{
			$today_date = date('Y-m-d H:i:s');
			
			$this->db->where('isActive',true);
			$this->db->where('start_date <=',$today_date);
			$this->db->where('end_date >=',$today_date);
			$this->db->where('coupan_code',$coupan_no);

			$query = $this->db->get('promocode');
			
			$count = $query->num_rows();
			$all_rows = array();
			if($count == 1)
			{
				$check_globel =0;
				foreach ($query->result() as $row)
				{
					 $single_row= array();
					  $single_row['id'] = $row->id;
					   $single_row['tag'] = $row->tag;
					   $single_row['detail'] = $row->detail;
					   $single_row['discount_percentage'] = $row->discount_percentage;
					   $single_row['discount_amount'] = $row->discount_amount;
					  
					  $check_globel = $row->isGlobel;
					   
					  array_push($all_rows,$single_row);
				 
				}
				
				if($check_globel == 0)
				{
				
					$data2 = array(
							
							"isActive"=>false,
							);
					$this->db->where('coupan_code',$coupan_no);
					$this->db->where('isGlobel',false);				
					$this->db->update("promocode",$data2);
				}
				return $all_rows; 
			}
			else
			{
				return $all_rows;
			}
		}
		else*/
		
			$count_use = $this->coupan_use_count($coupan_no,$userid);
		
			$today_date = date('Y-m-d H:i:s');
			
			$this->db->where('isActive',true);
			$this->db->where('start_date <=',$today_date);
			$this->db->where('end_date >=',$today_date);
			$this->db->where('coupan_code',$coupan_no);
			$this->db->where('max_uses_count >',$count_use);
			$query = $this->db->get('promocode');
			
			$count = $query->num_rows();
			$all_rows = array();
			if($count == 1)
			{
				$check_globel =0;
				foreach ($query->result() as $row)
				{
					 $single_row= array();
					  $single_row['id'] = $row->id;
					   $single_row['tag'] = $row->tag;
					   $single_row['detail'] = $row->detail;
					   $single_row['discount_percentage'] = $row->discount_percentage;
					   $single_row['discount_amount'] = $row->discount_amount;
					  
					    $check_globel = $row->isGlobel;
					  array_push($all_rows,$single_row);
				 
				}
				
				if($check_globel == 0)
				{
				
					$data2 = array(
							
							"isActive"=>false,
							);
					$this->db->where('coupan_code',$coupan_no);
					$this->db->where('isGlobel',false);				
					$this->db->update("promocode",$data2);
				}
				
				return $all_rows; 
			}
			else
			{
				return $all_rows;
			}
		
	}
	
	public function coupan_use_count($coupan_code,$userid)
	{
		$this->db->select('*');
		$this->db->where('p.coupan_code',$coupan_code);
		$this->db->where('t.transaction_status',"4");
		$this->db->where('t.user_id',$userid);
		$this->db->join('transaction_travel t','t.coupan_id=p.id');
		$query= $this->db->get('promocode p');
		
		return $query->num_rows();
		
	}
	
	public function enable_coupan($coupan_code)
	{
		$data2 = array(
					
					"isActive"=>true,
					);
					
			$this->db->where('coupan_code',$coupan_code);
			$this->db->where('isGlobel',false);				
			$this->db->update("promocode",$data2);	
			
	}

       
	public function change_globle($isgloble,$promoid)
	{
		$data2 = array(
					
					"isGlobel"=>$isgloble,
					);
					
			$this->db->where('id',$promoid);
			$this->db->update("promocode",$data2);
			echo json_encode("success");
	}

	public function change_active($isactive,$promoid)
	{
		$data2 = array(
					
					"isActive"=>$isactive,
					);
					
			$this->db->where('id',$promoid);
			$this->db->update("promocode",$data2);
			echo json_encode("success");
	}

	public function add_promocode($promocode,$promo_tag,$promo_detail,$promo_amount,$promo_amount_percentage,$max_count,$start_date,$end_date,$imageurl)
	{
		$data = array(
					
						"tag"=>$promo_tag,
						"detail"=>$promo_detail,
						"discount_percentage"=>$promo_amount_percentage,
						"discount_amount"=>$promo_amount,
						"coupan_code"=>$promocode,
						"max_uses_count"=>$max_count,
						"start_date"=>$start_date,
						"end_date"=>$end_date,
						"image"=>$imageurl,
					);

		$this->db->insert("promocode",$data);	
		echo json_encode("success");
	}

	public function delete($promoid)
	{
		 $this -> db -> where('id', $promoid);
  		$this -> db -> delete('promocode');
  		echo json_encode("success");
	}

	public function update_commition($commition,$extra_charge,$userid,$password)
	{
		$data2 = array(
					"extra_charge"=>$extra_charge,
					"commition"=>$commition,
					"password"=>$password,
					"userid"=>$userid
					);
					
			$this->db->where('id',1);
			$this->db->update("commition_travel",$data2);
			echo json_encode(array("success"=>1,"message"=>"update successfully","extra_charge"=>$extra_charge,"commition"=>$commition));
	}
	
	
	public function get_extra_charge()
	{
	
		
		$query = $this->db->get('commition_travel');
		
		$single_row= array();			
		foreach ($query->result() as $row)
		{

			  $single_row['commition'] = $row->extra_charge;
			   
			  
			 
		}
		

		return $single_row;
	}
	
	public function get_commition_echarge()
	{
		$query = $this->db->get('commition_travel');
		
		$single_row= array();			
		foreach ($query->result() as $row)
		{
			
			$single_row['extra_charge'] = $row->extra_charge;
			  $single_row['commition'] = $row->commition;
			  $single_row['password'] = $row->password;
			  $single_row['username'] = $row->userid;
			  $single_row['version_name']= $row->version_name;
			  $single_row['force_update'] = $row->force_update;
			  $single_row['url']= $row->api_url;
			   
			  
			 
		}
		

		return $single_row;
	}
	
	
	public function get_promo_images()
	{
		$this->db->where('isGlobel',true);
		$this->db->where('isActive',true);
		$query = $this->db->get('promocode');
		
		$all_row = array();
		foreach ($query->result() as $row)
		{
			
			  
			  $url = $row->image;
			  if(strlen($url) > 0)
			  {
			  	 array_push($all_row,$url);
			  }
			  
			  
			  
			 
		}
		
		
		
		return $all_row;
		
	}
	
	
	public function get_access_details($passkey=false,$id,$key){
	 
	        $this->db->where('travel_key',md5($passkey));
	        $query = $this->db->get('master_keys');
	        
	        $datamain = array();	
	        		
		if($query->num_rows() == 1)
		{
		      $datamain['main_url']="http://api.iamgds.com";
		      $datamain['trans_url']="http://tranapi.iamgds.com";
		     $datamain['success']=true;
		     $datamain['msg'] = "Key matched";
                     $datamain['pass_key'] = $passkey;
		     $datamain['data'] = $this->get_commition_echarge();   
			  
			 
			 
			 
		   //  $id = 50;
		//	$key = "d66de12fa3473a93415b02494253f088";
			$url = "http://api.iamgds.com/ota/Auth";
			
			//$url = "";
			
			       $data = array(
		    "ClientId" => $id,
		    "ClientSecret" => $key);
		    
		   // echo json_encode($data);
		
		   	function_exists('curl_version') or die('CURL support required');
			function_exists('json_encode') or die('JSON support required');
		
			set_time_limit(1000);
		
		#curl post
			$data_string = json_encode($data);
		
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_POST,1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		        'Content-Type: application/json',
		        'Content-Length: ' . strlen($data_string))
		);
		
		  $result = curl_exec($ch);
		
		 $datamain['secret_key'] = $result;	 
		}else{
		     $datamain['success']=false;
		    $datamain['msg'] = "Key did not match";
		}
		
		
			
		
		return $datamain;
			
	}
	
}