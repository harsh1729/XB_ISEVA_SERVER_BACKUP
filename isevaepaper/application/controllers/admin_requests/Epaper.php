<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Epaper extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		$this->load->model('epaper_model');
		$this->load->model('user_model');
	}

	//public $basefilepath = "/home/xercextx/public_html/isevaepaper/pdf";

	function upload_pdf()
	{

		if(!$this->input->is_ajax_request())
			redirect('404');
		else
		{
			//$this->load->model('userinfo_model');

			$is_logged_in = $this->user_model->is_logged_in();
			$userid = -1;
			//if(!$is_logged_in)
			//{
			//	echo json_encode(array("status"=>'notlogin'));
			//}
			//else if($is_logged_in)
			//{
				$this->load->helper('path');
				$this->load->model('user_model');

				$userid = $this->session->userdata('epaper_user_id');
				//$clientid = $this->user_model->get_client_id($userid);


				// EXTRACT CLIENT ID,Folders WITH THE HELP OF DOMAIN NAME !!!
				//$this->load->model('client_model');
				//$folders = '../../pdf';

				//$upload_path = realpath($folders['epaperfilespath']);
				$upload_path = "/home/xercextx/public_html/isevaepaper/pdf";
				//echo json_encode(array("upload_path"=>$upload_path,"userid"=>$userid));
				if($upload_path)
				{
					$uploadedfilename = $this->epaper_model->upload_pdf($upload_path);
					echo json_encode(array("filename"=>$uploadedfilename,"totalpages"=>"1"));
					//$this->epaper_model->get_total_pages($upload_path,$uploadedfilename)
				}
				else
				{
					echo json_encode(array('status'=>'login','error'=>'uploadpatherror'));
				}
			//}
		}
	}
	
	
	
	function remove_pdf()
	{
		if(!$this->input->is_ajax_request())
			redirect('404');
		else
		{
			$is_logged_in = $this->user_model->is_logged_in();
			$userid = -1;
			if(!$is_logged_in)
			{
				echo json_encode(array("status"=>'notlogin'));
			}
			else if($is_logged_in)
			{
				//$this->load->model('user_model');
				$this->load->helper('path');
          $basefilepath = "/home/xercextx/public_html/isevaepaper/pdf";
				$userid = $this->session->userdata('epaper_user_id');
				//$clientid = $this->user_model->get_client_id($userid);


				// EXTRACT CLIENT ID,Folders WITH THE HELP OF DOMAIN NAME !!!
				//$this->load->model('client_model');
				//$folders = $this->client_model->get_folder_name_by_id($clientid);
				//$foldername = $folders['epaperfilespath'];
				$filename = $this->input->post('filename');
				$filepath = realpath($basefilepath.$filename);
				$this->epaper_model->delete_files($filepath);
				echo json_encode(array("status"=>'login'));
			}
		}
	}
	function get_epaper_short()
	{
		//$folders,$clientid,$date,$areacodeid

		if(!$this->input->is_ajax_request())
			redirect('404');
		else
		{
			//$this->load->model('userinfo_model');

			$is_logged_in = true;//$this->user_model->is_logged_in();
			$userid = -1;
			if(!$is_logged_in)
			{
				echo json_encode(array("status"=>'notlogin'));
			}
			else if($is_logged_in)
			{
				$this->load->model('user_model');
				//$this->load->model('client_model');
            $basefilepath = "/home/xercextx/public_html/isevaepaper/pdf";
				$userid = $this->session->userdata('epaper_user_id');
				//$clientid = $this->user_model->get_client_id($userid);
				
				$dt = new DateTime($this->input->post('date')." 10:10:10",new DateTimeZone("Asia/Kolkata"));
				$dt->setTimeZone(new DateTimeZone("GMT"));
				$date = $dt->format('Y-m-d');

				//$folders = $this->client_model->get_folder_name_by_id($clientid);
				//$folders = "/home/xercextx/public_html/isevaepaper/pdf";
				echo json_encode(array("status"=>'login',"userid"=>$userid,"data"=>$this->epaper_model->get_epaper_short($basefilepath,$userid,$date)));
			}
		}
	}
	/*function create_preview()
	{
		if(!$this->input->is_ajax_request())
			redirect('404');
		else
		{
			$this->load->model('userinfo_model');

			$is_logged_in = $this->userinfo_model->is_logged_in();
			$userid = -1;
			if(!$is_logged_in)
			{
				echo json_encode(array("status"=>'notlogin'));
			}
			else if($is_logged_in)
			{
				$this->load->model('user_model');
				$this->load->helper('path');
				$this->load->model('client_model');


				$userid = $this->session->userdata('user_id');
				$clientid = $this->user_model->get_client_id($userid);

				$dt = new DateTime($this->input->post('date')." 10:10:10",new DateTimeZone("Asia/Kolkata"));
				$dt->setTimeZone(new DateTimeZone("GMT"));
				$date = $dt->format('Y-m-d');

				$areacodeid = $this->input->post('areacodeid');
				$epaperid = $this->input->post('epaperid');

				$filename = $this->input->post('filename');

				
					$folders = $this->client_model->get_folder_name_by_id($clientid);
					$foldername = $folders['epaperfilespath'];
					$preview_file_name = time().(time()+rand(600,900))."prev".".jpg";
					$this->epaper_model->update_preview_name($epaperid,$preview_file_name);
					
					$preview = $this->epaper_model->create_pdf_preview_image($foldername,$filename,0,$preview_file_name);
					
					//echo json_encode(array("status"=>'login',"epaper_exists"=>false,"previewname"=>$preview));
				
			}
		}
	}*/
	function pdf2image()
	{
		if(!$this->input->is_ajax_request())
			redirect('404');
		else
		{
			//$this->load->model('userinfo_model');

			
			$is_logged_in = true;//$this->user_model->is_logged_in();
			$userid = -1;
			if(!$is_logged_in)
			{
				echo json_encode(array("status"=>'notlogin'));
			}
			else if($is_logged_in)
			{
				//$this->load->model('user_model');
				$this->load->helper('path');
				//$this->load->model('client_model');
                $basefilepath = "/home/xercextx/public_html/isevaepaper/pdf";

				$userid = $this->session->userdata('epaper_user_id');
				//$clientid = $this->user_model->get_client_id($userid);

				$filename = $this->input->post('filename');
				$epaperfilename = $this->input->post('epaperfilename');
				$pagenumberstart = $this->input->post('pagenumberstart');
				//$arrayindex = $this->input->post('arrayindex');

					//$folders = $this->client_model->get_folder_name_by_id($clientid);
                      //$basefilepath = "/home/xercextx/public_html/isevaepaper/pdf";
					//DIRECTORY_SEPARATOR.
					$add = $this->epaper_model->pdf2image($basefilepath.DIRECTORY_SEPARATOR.$filename,$epaperfilename,$pagenumberstart);
					echo json_encode(array("status"=>"login","data"=>$add/*,"arrayindex"=>$arrayindex*/));
			}
		}
	}
	function save_epaper()
	{
		if(!$this->input->is_ajax_request())
			redirect('404');
		else
		{
			//$this->load->model('userinfo_model');

			//$is_logged_in = $this->userinfo_model->is_logged_in();
			$is_logged_in = true;//$this->user_model->is_logged_in();
			$userid = -1;
			if(!$is_logged_in)
			{
				echo json_encode(array("status"=>'notlogin'));
			}
			else if($is_logged_in)
			{
				$this->load->model('user_model');
				$this->load->helper('path');
				//$this->load->model('client_model');
			     $ld = $this->load->model('pdf_merger');
               // echo json_encode(array("status"=>'login',"epaper_exists"=>false,"data"=>$ld));
                $basefilepath = "/home/xercextx/public_html/isevaepaper/pdf";
				$userid = $this->session->userdata('epaper_user_id');
				//$clientid = $this->user_model->get_client_id($userid);

				//$folders = $this->client_model->get_folder_name_by_id($clientid);
				//$basefilepath = realpath($folders['epaperfilespath']);
				// $basefilepath = "/home/xercextx/public_html/isevaepaper/pdf";

				$dt = new DateTime($this->input->post('date')." 10:10:10",new DateTimeZone("Asia/Kolkata"));
				$dt->setTimeZone(new DateTimeZone("GMT"));
				$date = $dt->format('Y-m-d');

				//$areacodeid = $this->input->post('areacodeid');
				$filename = $this->input->post('filename');
				$uploadedfilesarray = $this->input->post('uploadedfiles');
				$totalpages = $this->input->post('totalpages');

				$uploadedfiles = array();
				foreach ($uploadedfilesarray as $key => $value){
					array_push($uploadedfiles, $basefilepath.DIRECTORY_SEPARATOR.$value);
				}

				$this->pdf_merger->setFiles( $uploadedfiles );
				$this->pdf_merger->concat();
				$this->pdf_merger->Output($basefilepath.DIRECTORY_SEPARATOR.$filename, "F");


				foreach ($uploadedfiles as $key => $value){
					$this->epaper_model->delete_files($value);
				}

				$epaperid = $this->epaper_model->save_epaper($date,$userid,$filename,$totalpages);
				echo json_encode(array("status"=>'login',"epaper_exists"=>false,"data"=>$this->epaper_model->get_epaper_short($basefilepath,$userid,$date),"epaperid"=>$epaperid));
				
			}
		}
	}





	function delete_epaper()
	{
		if(!$this->input->is_ajax_request())
			redirect('404');
		else
		{
			$is_logged_in = true;//$this->user_model->is_logged_in();
			$userid = -1;
			if(!$is_logged_in)
			{
				echo json_encode(array("status"=>'notlogin'));
			}
			else if($is_logged_in)
			{
				$this->load->helper('path');
				$this->load->model('user_model');
				//$this->load->model('client_model');
                $basefilepath = "/home/xercextx/public_html/isevaepaper/pdf";
				$userid = $this->session->userdata('epaper_user_id');
				//$clientid = $this->user_model->get_client_id($userid);

				//$folders = $this->client_model->get_folder_name_by_id($clientid);

				$epaperid = $this->input->post('epaperid');

				$dt = new DateTime($this->input->post('date')." 10:10:10",new DateTimeZone("Asia/Kolkata"));
				$dt->setTimeZone(new DateTimeZone("GMT"));
				$date = $dt->format('Y-m-d');


				$pdf_n_img = $this->epaper_model->get_pdf_by_id($epaperid);

				$foldername = $basefilepath;//$folders['epaperfilespath'];
				if($pdf_n_img)
				{
					$pdffile = $pdf_n_img->epaper_name;
					if($pdffile != "")
						$pdffile = realpath($foldername.$pdffile);

					$this->epaper_model->delete_files($pdffile);
					$path_array = pathinfo( $pdffile );
					//$fname = substr($pdf_n_img->epaper_name,start,strlen ( string $string ))
					$finame = basename($pdf_n_img->epaper_name, ".pdf");
					$pdffileWOext = $foldername."/"."pdf".$finame;//$path_array['dirname'].DIRECTORY_SEPARATOR."pdf".$path_array['epaper_name'];
					for($i=1;$i<=$pdf_n_img->total_page;$i++)
					{
						$this->epaper_model->delete_files( $pdffileWOext."_thumb_".$i.".jpg" );
						$this->epaper_model->delete_files( $pdffileWOext."_".$i.".jpg" );
					}
				}
				$this->epaper_model->delete_epaper($epaperid);

				echo json_encode(array("status"=>'login',"data"=>$this->epaper_model->get_epaper_short($basefilepath,$userid,$date)));
			}
		}
	}
	
	
	
}