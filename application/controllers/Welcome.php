<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
    public function index()
	{
		$data['all_setting'] = $this->Admin_Model->select_all_data('tbl_setting');
		$data['all_data'] = $this->Admin_Model->select_all_data('tbl_resume');
		$data['all_profile'] = $this->Admin_Model->select_all_data('tbl_profile');
		$data['all_portfolio'] = $this->Admin_Model->select_all_data('tbl_protfolio');
		$this->load->view('index', $data); 
	}
	
	public function new_pdf($id)
	{
 		header("Cache-Control: no-cache, must-revalidate");
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
      //  header("Content-Type: application/xml; charset=utf-8");
		
		$data['person']=$this->db->where('id',$id)->get('tbl_resume')->row_array(); 
	
		$data['name']='ADM';
	    $this->load->view('cv/w3_cv',$data);
		$html = $this->output->get_output();
        $this->load->library('pdf');
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper('A4', 'landscape');
        $this->dompdf->render();
        $this->dompdf->stream("resume.pdf", array("Attachment"=>0)); 
	}
	
	public function new_protfolio($id)
	{
		header("Cache-Control: no-cache, must-revalidate");
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
       // header("Content-Type: application/html; charset=utf-8");
		
		$data['protfolio_person']=$this->db->where('id',$id)->get('tbl_protfolio')->row_array(); 
	    
		$data['name']='ADM';
	    $this->load->view('cv/portfolio',$data);
		$html = $this->output->get_output();
        $this->load->library('pdf');
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper('A4', 'landscape');
        $this->dompdf->render();
        $this->dompdf->stream("protfolio.pdf", array("Attachment"=>0));
		// unset($dompdf);
        //unset($data);
	}
	
	
	public function new_profile($id)
	{
  		 header("Cache-Control: no-cache, must-revalidate");
         header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        // header("Content-Type: application/xml; charset=utf-8");
		
		$data['profile_person']=$this->db->where('id',$id)->get('tbl_profile')->row_array(); 
	    
		$data['name']='ADM';
		$this->load->view('cv/profile',$data);
	    $html = $this->output->get_output();
        $this->load->library('pdf');
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper('A4', 'landscape');
        $this->dompdf->render();
        $this->dompdf->stream("profile.pdf", array("Attachment"=>0)); 
	}
	
	
	public function profile_register()
	{
		if(!empty($this->input->post())){
		$email = $this->input->post('email');
        $data = array(
	         "name"=>$this->input->post('name'),
			 "last"=>$this->input->post('last'),
			 "mobile"=>$this->input->post('mobile'),
			 "password"=>$this->input->post('password'),
	         "email"=>$this->input->post('email')  
	     );
		       $message = '<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" style="font-family:Helvetica,Arial,serif;background-color:#fff">
                </table>
                <table width="100%" align="center" style="font-family:Helvetica,Arial,serif;background-color:#fff;padding:0px 20px 20px 20px;border-bottom:1px solid #4cb96b">
                <tbody>
                <tr>
                <td style="font-size:16px;padding-top:10px">
                Username: '.ucfirst($this->input->post("name")).'&nbsp;'.ucfirst($this->input->post("last")).'<br>
                Email: <a href="mailto:'.$this->input->post("email").'" target="_blank">'.$this->input->post("email").'</a><br>
                Password: '.$this->input->post('password').'<br><br>
                </td>
                </tr>
                </tbody>
                </table>';
		        $to = $email;
                $subject = "The Account Sheet - Thank You For Register";
                $from = 'infoaccount@gmail.com';
                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
                // More headers
                $headers .= 'From: '.$from . "\r\n";
                //$headers .= 'Cc: '.$email . "\r\n";
                
                mail($to,$subject,$message,$headers);
		  $this->Admin_Model->insert_data('tbl_profile',$data);
		  redirect(base_url('profile_login'));
		}
		  $this->load->view('profile_register'); 
	}
	
	public function profile_login()
	{
		if(!empty($this->input->post())){ 
            $user = $this->input->post('email');
			$passw = $this->input->post('password');
			$result = $this->Admin_Model->select_by_codition('tbl_profile',array('email'=>$user,'password'=>$passw));
			
			if(!empty($result)){
			  $this->session->set_userdata('profile', $result);
			  redirect(base_url('view_profile'));
			}
			else{
			  redirect(base_url('profile_login'));
			} 
		}
		$this->load->view('profile/profile_login'); 
	}
	
	public function profile_update()
	{
		if(!empty($this->input->post('update'))){
		
        $data = array(
	         "mobile"=>$this->input->post('phone'),
	         "dob"=>$this->input->post('dob'),
	         "address"=>$this->input->post('address'),
	         "cmp_name"=>$this->input->post('cmp_name'),
	         "cmp_email"=>$this->input->post('cmp_email'),
	         "cmp_phone"=>$this->input->post('cmp_phone'),
	         "cmp_address"=>$this->input->post('cmp_address')
	     );
		  $this->Admin_Model->insert_data('tbl_profile',$data);
		}
		//$this->load->view('admin/profile_register'); 
		redirect(base_url('view_profile'));
	}
	
	
	/*public function view_profile(){
	    $userId = $this->session->userdata('profile')->id;
       
		$data['profile'] = $this->Admin_Model->get_id('tbl_profile',$userId);
		//print_r($data['profile']);
		$data['all_education'] = $this->Admin_Model->get_by_codition('add_education',array('uid'=>$userId));
		//print_r($data['all_education']);
		$data['all_experience'] = $this->Admin_Model->get_by_codition('add_experience',array('uid'=>$userId));
		//print_r($data['all_experience']);
		$data['all_skill'] = $this->Admin_Model->get_by_codition('add_skill',array('uid'=>$userId));
		//print_r($data['all_skill']);
		$this->load->view('admin/include/header_css',$data);
		$this->load->view('admin/include/header_nav',$data);
		$this->load->view('admin/include/header_aside',$data);
		$this->load->view('admin/view_profile',$data);
		$this->load->view('admin/include/footer',$data);
	}*/

	public function update_intro()
	{
	
	   //$User_id = $this->session->userdata('profile')->id;
		 $User_id = $this->input->post('id');
		 $update_data=$this->input->post();
		
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3000;
		$config['max_width']            = 3000;
		$config['max_height']           = 3000;
		$config['encrypt_name']         = true;

		$this->load->library('upload', $config);
			
        if($_FILES['back_img'])
		{
			if ($this->upload->do_upload('back_img'))
			{
				$fileData = $this->upload->data();
				$update_data['back_img'] = $fileData['file_name'];
			}
		}
        if($_FILES['image'])
		{
			if ($this->upload->do_upload('image'))
			{
				$fileData = $this->upload->data();
				$update_data['image'] = $fileData['file_name'];
			}
		}		
		
        $this->Admin_Model->update_data($User_id,$update_data,'tbl_profile'); 		
		echo '200'; 
	}
	
	
}
