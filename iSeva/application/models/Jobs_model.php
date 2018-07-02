<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs_model extends CI_Model
{
	private $TABLE_NAME_EMP = "job_employee";
	

	function __construct()
	{
		parent::__construct();
		$this->load->model('datetime_model');
	}

public function does_exists($username,$contact,$isemp)
	{
		$this->db->where('username',$username);
		$this->db->or_where('number',$contact);
		
               if($isemp==1)
		$query = $this->db->get('job_employee');
		else
		 $query = $this->db->get('job_employer');

		//$email_exists = 0;
		$contact_exists = 0;
		$username_exists = 0;
		$duplicate_exists = 0;
		//$promocode_exists = 0;
		if($query->num_rows() > 0 )
		{
			
			foreach ($query->result() as $row) {
				/*if($row->email == $email){
					$duplicate_exists = 1;
					$email_exists = 1;
				}*/
				if($row->number == $contact){
					$duplicate_exists = 1;
					$contact_exists = 1;
				}
				if($row->username == $username){
					$duplicate_exists = 1;
					$username_exists = 1;
				}
				
			}
		}
		return array(
						"duplicate_exists"=>$duplicate_exists,
						//"email_exists"=>$email_exists,
						"username_exists"=>$username_exists,
						"contact_exists"=>$contact_exists
						
					);

	}



        public function deletemployee($jobperson,$id){
               if($jobperson==0){
                $this->db->where('id',$id);
		$this->db->delete('job_employer');
		}else{
		  $this->db->where('id',$id);
		 $this->db->delete('job_employee');
		}
		
		return array(
				"id"=>$id,
				"jobperson"=>$jobperson
					);
        }

	public function add($name,$username,$contact,$password,$isemp)
	{
		//GENERATE PROMOCODE HERE.
		//$promocode = $username.substr(md5($username),0,5);
		$data = array(
						"name"=>$name,
						"number"=>$contact,
						//"email"=>$email,
						"username"=>$username,
						"password"=>md5($password)
					);
		if($isemp==1)			
		$this->db->insert("job_employee",$data);
		else
		$this->db->insert("job_employer",$data);
		
		$insertid = $this->db->insert_id();

		return array(
				"empid"=>$insertid,
				"isemployee"=>$isemp
					);
	}
	
	public function addalldata($fname,$cityid,$catid,$empid,$gender,$age,$qualification,$address,$experi,$currentjob,$currentsalary,$others,$resume,$imgid,$currentcompany,$mstatus
	,$achive)
	{
		//GENERATE PROMOCODE HERE.
		//$promocode = $username.substr(md5($username),0,5);
		$data = array(
						"fname"=>$fname,
						"cityid"=>$cityid,
						"catid"=>$catid,
						"gender"=>$gender,
						"age"=>$age,
						"qualification"=>$qualification,
						"address"=>$address,
						//"email"=>$email,
						"experience"=>$experi,
						"currentjob"=>$currentjob,
						"currentsalary"=>$currentsalary,
						"isactive"=>"1",
						"resume"=>$resume,
						"others"=>$others,
						"image"=>$imgid,
						"currentcompany"=>$currentcompany,
						"mstatus"=>$mstatus,
						"achive"=>$achive
					);
					
		            $datamapping = array("empid"=>$empid,
						"jobcateid"=>$catid);
						$this->db->insert("job_cate_empl_mapping",$datamapping);
		                                $insertid = $this->db->insert_id();			
		$this->db->where('id',$empid);
		$this->db->update('job_employee',$data);
		return $this->db->affected_rows();
	}

     
     
     public function addjobdata($catid,$cityid,$title,$salary,$job_profile,$timing,$holidays,$eligiblity,$others,$personname,$personnumber,$expdate,$employerid,$minexp)
	{
		//GENERATE PROMOCODE HERE.
		//$promocode = $username.substr(md5($username),0,5);
		$data = array(
						"catid"=>$catid,
						"cityid"=>$cityid,
						//"email"=>$email,
						"title"=>$title,
						"salary"=>$salary,
						"job_profile"=>$job_profile,
						"timings"=>$timing,
						"holidays"=>$holidays,
						"eligibility"=>$eligiblity,
						"others"=>$others,
						"personname"=>$personname,
						"personnumber"=>$personnumber,
						"isactive"=>"1",
						"expdate"=>$expdate,
						"employerid"=>$employerid,
						"minimumexp"=>$minexp
					);
		$this->db->insert("jobs",$data);
		$insertid = $this->db->insert_id();

		return array(
				"jobid"=>$insertid
					);
	}
	
	public function getjobs($jobid=false,$catid=false,$cityid=false){
	
	
			  $this->db->select('u.*');

			  if($catid !== "" && $catid !== false && $catid!==NULL)
			  	$this->db->where('u.catid',$catid);

			 if($cityid !== "" && $cityid !== false && $cityid !==NULL)
                                 $this->db->where_in('u.cityid',$cityid);
			  if($jobid !== "" && $jobid!== false && $jobid!==NULL )
                                 $this->db->where_in('u.id',$jobid);

           
			  $this->db->where('u.isactive','1');
			  $this->db->where('em.isactive','1');
		      $this->db->join('job_employer em','em.id=u.employerid');
		     $query = $this->db->get('jobs u');

			  

			  $jobs = array();

			 
			  foreach ($query->result() as $row)
			  {
			   $job= array();
			   $job['id'] = (int)$row->id;
			   $job['title'] = $row->title;
			   $job['salary'] = $row->salary;
			   $job['job_profile'] = $row->job_profile;
			   $job['timings'] = $row->timings;
			   $job['holidays'] = $row->holidays;
			   $job['eligibility'] = $row->eligibility;
			   $job['employerid'] = $row->employerid;
			   $job['others'] = $row->others;
			   $job['personname'] = $row->personname;
			   $job['personnumber'] = $row->personnumber;
			   $job['mexp'] = $row->minimumexp;
			   
		      

			   array_push($jobs,$job);
			  }
			  return $jobs;
    }
	
	
	public function getemployee($jobperson,$catid,$cityid){
	
	//if($userid==0 ){
	//if jobperson ==1 is a employee and 0 employer
	$this->load->model('gallery_model');
	         $this->db->select("*");
	          
	          if($jobperson==0){
	          $this->db->order_by("id", "desc");
		$query = $this->db->get('job_employer');
		
		}
		else{
		             if($catid != 0)
			  	$this->db->where('catid',$catid);
			  	//$this->db->join('job_cate_empl_mapping mp','mp.empid=u.id');
			  	
			  	

			     if($cityid != 0)
                                 $this->db->where('cityid',$cityid);
                                 
                                $this->db->order_by("id", "desc"); 
	           $query = $this->db->get('job_employee');
	          }
		$Advertisement = array();
		foreach ($query->result() as $row)
		{
			$advertisement = array();

			$advertisement['id'] = $row->id;
			$advertisement['name'] = $row->name;
			$advertisement['isactive'] = $row->isactive;
			$advertisement['username'] = $row->username;
			
			$advertisement['number'] = $row->number;
			if($jobperson==1){
			$advertisement['image'] = $this->gallery_model->getimagedata($row->image);
			if($advertisement['image']['imageurl']==""){
			$item = array();
                        $item['imageurl'] = "http://xercesblue.website/iservice/publicuploads/2016/10/14763452751476345712.jpg";
                        $advertisement['image'] = $item;
			}
                        }else{
                        $item = array();
                        $item['imageurl'] = "http://xercesblue.website/iservice/publicuploads/2016/10/14763452751476345712.jpg";
                        $advertisement['image'] = $item;
                        }
			//*************imagedata ******************
			

			array_push($Advertisement,$advertisement);
		}
		return $Advertisement;
		
	
	}
	
	function setactive($id,$isenable,$jobperson)
     {
         $data=array('isactive'=>$isenable);
         $this->db->where('id',$id);
         if($jobperson==0)
         $this->db->update('job_employer',$data);
         else
         $this->db->update('job_employee',$data);
         //$updateid = $this->db->update_id();

		return array(
						"id"=>$id
						
					);
     }
	
	
	public function getresume($empid=false,$catid=false,$cityid=false){
	
	                  $this->load->model('gallery_model');
			  $this->db->select('u.*');

			  if($catid !== "" && $catid !== false && $catid!==NULL){
			  	$this->db->where('u.catid',$catid);
			  	//$this->db->join('job_cate_empl_mapping mp','mp.empid=u.id');
			  	
			  	}

			  if($cityid !== "" && $cityid !== false && $cityid !==NULL )
                                 $this->db->where('u.cityid',$cityid);
                                 
			  if($empid !== "" && $empid !== false && $empid !==NULL)
                                 $this->db->where('u.id',$empid);

                         if($empid==false)
			    $this->db->where('u.isactive','1');
			 
			
                          
			  $query = $this->db->get('job_employee u');

			  

			  $jobs = array();

			 
			  foreach ($query->result() as $row)
			  {
			   $resume= array();
			   $resume['id'] = (int)$row->id;
			   $resume['name'] = $row->name;
			   $resume['fname'] = $row->fname;
			   $resume['address'] = $row->address;
			   $resume['qualification'] = $row->qualification;
			   $resume['experience'] = $row->experience;
			   $resume['currentjob'] = $row->currentjob;
			   $resume['cityid'] = $row->cityid;
			   $resume['catid'] = $row->catid;
			   $resume['others'] = $row->others;
			   $resume['currentsalary'] = $row->currentsalary;
			   $resume['number'] = $row->number;
			   $resume['email'] = $row->username;
			   $resume['gender'] = $row->gender;
			   $resume['age'] = $row->age;
			   $resume['currentcompany'] = $row->currentcompany;
			   $resume['mstatus'] = $row->mstatus;
			   $resume['achive'] = $row->achive;
			   $resume['resume'] = $this->gallery_model->getResumedata($row->resume);
			   $resume['image'] = $this->gallery_model->getimagedata($row->image);
		      

			   array_push($jobs,$resume);
			  }
			  return $jobs;
          }
          
          public function getcate()
	{
		$this->db->select('c.*');
		$this->db->order_by("c.name","asc");
		$query = $this->db->get('job_category c');
		$cities = array();
		foreach ($query->result() as $row)
		{
			$city = array();
			$city['id'] = $row->id;
			$city['name'] = $row->name;
			

			array_push($cities, $city);
		}
		return $cities;
		//return $this->db->last_query();
	}
	
	
	public function verify_credentials($usr,$pwd,$isemployee)
	{
		//$this->load->model('gallery_model'); 
		$this->db->where("username",$usr);
		$this->db->where("password",$pwd);
		
		if($isemployee==1)
		  $queryResult = $this->db->get("job_employee");
		else
		  $queryResult = $this->db->get("job_employer");
		
			//return $this->db->last_query();
		if($queryResult->num_rows() == 1)
		{
			$result = $queryResult->result();
			//return $result;
			if($isemployee==0){
			if($result[0]->isactive == 0){
				return array("isValidated"=>0,
						 "error_message"=>'Your approval is pending!',
						 "isemployee"=>$isemployee

						);
			   }else{
				return array(	"isValidated" => 1,
				                       "empid"=>$result[0]->id,
				                       "isemployee"=>$isemployee
							
						);
			}
			}else{
				return array(	"isValidated" => 1,
				                       "empid"=>$result[0]->id,
				                       "isemployee"=>$isemployee
							
						);
		}
		}
		else
		{
			return array("isValidated"=>0,
						 "error_message"=>'Username and Password doesnot match!',
						 "isemployee"=>$isemployee

						);
		}
	}
	
}