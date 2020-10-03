<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Welcome extends CI_Controller {


    public function admin()
	{
		$data['admin']=$this->db->get('tbl_admin')->row();
	    $this->load->view('admin/index',$data);
	}
	
	public function login()
	{
	    $data['all_icon'] = $this->Admin_Model->select_all_data('tbl_social_icon');
		$this->load->view('admin/include/header_css',$data);
		$this->load->view('admin/include/header_nav',$data);
		$this->load->view('admin/include/header_aside',$data);
		$this->load->view('admin/dashboad',$data);
		$this->load->view('admin/include/footer',$data);
	}
	public function detete_social($uid){
	    $this->Admin_Model->delete_data($uid,'tbl_social_icon');
		redirect(base_url('login'));
	}
	public function edit_social($eid){
		$data['social'] = $this->Admin_Model->get_id('tbl_social_icon',$eid);
		$this->load->view('admin/include/header_css',$data);
		$this->load->view('admin/include/header_nav',$data);
		$this->load->view('admin/include/header_aside',$data);
		$this->load->view('admin/update_social',$data);
		$this->load->view('admin/include/footer',$data);
	}
	public function update_social()
	{
		$id = $this->input->post('id');
		
		if(!empty($this->input->post('update'))){
		 
		$banner = $_FILES['file']['name'];
		
       $data = array(
	         "title"=>$this->input->post('title'),
	         "url"=>$this->input->post('url')
	        
	     );
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3000;
		$config['max_width']            = 3000;
		$config['max_height']           = 3000;
		$config['encrypt_name']         = true;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file'))
		{
			$fileData = $this->upload->data();  
            $data['logo'] = $fileData['file_name'];
		}
		   $this->Admin_Model->update_data($id,$data,'tbl_social_icon');
		}
		$this->session->set_flashdata('success','Updated Successfully...');
		redirect(base_url('login'));
	}
	
	public function admin_login(){
		$user = $this->input->post('email');
		$passw = $this->input->post('password');
		$result = $this->Admin_Model->select_admin_data($user,$passw);
		if(!empty($result)){
		  $this->session->set_userdata('admin', $result);
		  redirect(base_url('login'));
		}
		else{
		  redirect(base_url('admin'));
		}
	}
	
	// pdf
	
	public function create_pdf(){
		$data['title'] = 'create_pdf';
		$this->load->view('pdf/pdf_receipt',$data);
	}
	
	public function add_resume()
	{
		if(!empty($this->input->post())){
		 
		$hobby = $this->input->post('hobbies');
        $lang = $this->input->post('language'); 
		$gender = $this->input->post('gender'); 
		$file = $_FILES['file']['name'];
		  
        $data = array(
	         "full_name"=>$this->input->post('name'),
	         "phone"=>$this->input->post('phone'),
	         "email"=>$this->input->post('email'),
	         "message"=>$this->input->post('address'),
	         "summary"=>$this->input->post('summary'),
	         "exprience"=>$this->input->post('experience'),
	         "education"=>$this->input->post('education'),
	         "skills"=>$this->input->post('skill'),
	         "hobbies"=>implode(",",$hobby),
	         "gender"=>$gender,
	         "languages"=>implode(",",$lang),
			 "designation" =>$this->input->post('designation'), 
			 "image" =>$file 
	     );
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 3000;
			$config['max_width']            = 3000;
			$config['max_height']           = 3000;

			$this->load->library('upload', $config);

			if( ! $this->upload->do_upload('file'))
			{
					$error = array('error' => $this->upload->display_errors()); 
						print_r($error); 
			}
		   $this->Admin_Model->insert_data('tbl_resume',$data);
		   $this->session->set_flashdata('success','Added Successfully...');
		}
		$this->load->view('admin/add_job'); 
	}
	public function show_job(){
		$data['all_job'] = $this->Admin_Model->select_all_data('tbl_resume');
		$this->load->view('admin/include/header_css',$data);
		$this->load->view('admin/include/header_nav',$data);
		$this->load->view('admin/include/header_aside',$data);
	    $this->load->view('admin/dashboads',$data);
	//	$this->load->view('admin/all_resume',$data);
		$this->load->view('admin/include/footer',$data);
	}
	public function detete_job($uid){
	    $this->Admin_Model->delete_data($uid,'tbl_resume');
		redirect(base_url('show_job'));
	}
	public function edit_job($eid){
		$data['job'] = $this->Admin_Model->get_id('tbl_resume',$eid);
		$this->load->view('admin/include/header_css',$data);
		$this->load->view('admin/include/header_nav',$data);
		$this->load->view('admin/include/header_aside',$data);
		$this->load->view('admin/update_job',$data);
		$this->load->view('admin/include/footer',$data);
	}
	public function update_job()
	{
		$id = $this->input->post('id');
		
		if(!empty($this->input->post('update'))){
		 
	    $hobby = $this->input->post('hobbies');
        $lang = $this->input->post('language'); 
		$gender = $this->input->post('gender'); 
		$file = $_FILES['file']['name'];
		
       $data = array(
	         "full_name"=>$this->input->post('name'),
	         "phone"=>$this->input->post('phone'),
	         "email"=>$this->input->post('email'),
	         "dob"=>$this->input->post('dob'),
	         "message"=>$this->input->post('address'),
	         "summary"=>$this->input->post('summary'),
	         "exprience"=>$this->input->post('experience'),
	         "education"=>$this->input->post('education'),
	         "skills"=>$this->input->post('skill'),
	         "hobbies"=>$hobby?implode(",",$hobby):'', 
	         "gender"=>$gender,
	         "languages"=>$lang?implode(",",$lang):'',
			 "designation" =>$this->input->post('designation')
			 //"image" =>$file
	        
	     );
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3000;
		$config['max_width']            = 3000;
		$config['max_height']           = 3000;
		$config['encrypt_name']         = true;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file'))
		{
			$fileData = $this->upload->data();  
            $data['image'] = $fileData['file_name'];
		}
		   $this->Admin_Model->update_data($id,$data,'tbl_resume');
		   $this->session->set_flashdata('success','Updated Successfully...');
		}
		
		redirect(base_url('show_job'));
	}
	
	public function menu()
	{
		if(!empty($this->input->post())){
		 
		$banner = $_FILES['banner']['name'];
		
       $data = array(
	         "title"=>$this->input->post('title'),
	         "slug"=>$this->input->post('slug'),
	         "description"=>$this->input->post('description'),
	         "banner"=>$banner
	     );
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3000;
		$config['max_width']            = 3000;
		$config['max_height']           = 3000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('banner'))
		{
				$error = array('error' => $this->upload->display_errors()); 
					print_r($error); 
		}
		   $this->Admin_Model->insert_data('tbl_menu',$data);
		}
		$this->load->view('admin/add_menu');
	}
	
	public function content()
	{
		if(!empty($this->input->post())){
		 
		$banner = $_FILES['banners']['name'];
		
       $data = array(
	         "menu_id"=>$this->input->post('menu_id'),
	         "title"=>$this->input->post('title'),
	         "sub_title"=>$this->input->post('sub_title'),
	         "description"=>$this->input->post('desc'),
	         "banner"=>$banner
	     );
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3000;
		$config['max_width']            = 3000;
		$config['max_height']           = 3000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('banners'))
		{
				$error = array('error' => $this->upload->display_errors()); 
					print_r($error); 
		}
		   $this->Admin_Model->insert_data('tbl_contents',$data);
		}
		 $data['all_menu'] = $this->Admin_Model->select_all_data('tbl_menu');
		 $this->load->view('admin/content',$data);
	}
	
	public function update_setting()
	{
		$id = $this->input->post('id');
		
		if(!empty($this->input->post('update'))){
		 
		$banner = $_FILES['logo']['name']; 
		
       $data = array(
	         "company"=>$this->input->post('name'),
	         "user_name"=>$this->input->post('user'),
	         "email"=>$this->input->post('email'),
	         "phone"=>$this->input->post('phone'),
	         "address"=>$this->input->post('address'),
	         "website"=>$this->input->post('web_url'),
	         "whatsapp"=>$this->input->post('whatsapp'),
	         "direction"=>$this->input->post('google'),
	         "about_company"=>$this->input->post('about'),
	         "theme_color"=>$this->input->post('theme_color')
	         
	     );
		 
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'GIF|gif|jpg|png|jpeg|PNG';
		$config['max_size']             = 6000;
		$config['max_width']            = 6000;
		$config['max_height']           = 6000;
		$config['encrypt_name']         = true;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('logo'))
		{
				$fileData = $this->upload->data();  
                $data['logo'] = $fileData['file_name'];
		}
		$data['all_setting'] = $this->Admin_Model->update_data($id,$data,'tbl_setting');
		}
		
		redirect(base_url('setting'));
	}
	public function setting(){
		$data['setting'] = $this->Admin_Model->select_all_data('tbl_setting');
		$this->load->view('admin/include/header_css',$data);
		$this->load->view('admin/include/header_nav',$data);
		$this->load->view('admin/include/header_aside',$data);
		$this->load->view('admin/setting',$data);
		$this->load->view('admin/include/footer',$data);
	}
	
	
	public function menus(){
		$data['all_menus'] = $this->Admin_Model->select_all_data('tbl_menu');
		$this->load->view('admin/all_menu',$data);
	}
	public function detete_menu($uid){
	    $this->Admin_Model->delete_data($uid,'tbl_menu');
		redirect(base_url('menus'));
	}
	public function edit_menus($eid){
		$data['menu'] = $this->Admin_Model->get_id('tbl_menu',$eid);
		$this->load->view('admin/include/header_css',$data);
		$this->load->view('admin/include/header_nav',$data);
		$this->load->view('admin/include/header_aside',$data);
		$this->load->view('admin/update_menu',$data);
		$this->load->view('admin/include/footer',$data);
		
	}
	public function update_menus()
	{
		$id = $this->input->post('id');
		
		if(!empty($this->input->post('update'))){
		 
		$banner = $_FILES['banner']['name'];
		
       $data = array(
	         "title"=>$this->input->post('title'),
	         "slug"=>$this->input->post('slug'),
	         "description"=>$this->input->post('description')
	        
	     );
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3000;
		$config['max_width']            = 3000;
		$config['max_height']           = 3000;
		$config['encrypt_name']         = true;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('banner'))
		{
				$fileData = $this->upload->data();  
                $data['banner'] = $fileData['file_name'];
		}
		   $this->Admin_Model->update_data($id,$data,'tbl_menu');
		}
		redirect(base_url('menus'));
	}
	
	
	public function contents(){
		$data['all_content'] = $this->Admin_Model->select_all_data('tbl_contents');
		$this->load->view('admin/all_contents',$data);
	}
	
	public function detete_content($uid){
	    $this->Admin_Model->delete_data($uid,'tbl_contents');
		redirect(base_url('contents'));
	}
	public function edit_content($eid){
		$data['content'] = $this->Admin_Model->get_id('tbl_contents',$eid);
		$this->load->view('admin/include/header_css',$data);
		$this->load->view('admin/include/header_nav',$data);
		$this->load->view('admin/include/header_aside',$data);
		$this->load->view('admin/update_content',$data);
		$this->load->view('admin/include/footer',$data);
	}
	
    public function update_content()
	{
		 $id = $this->input->post('id');
		
		if(!empty($this->input->post('update'))){
		 
		$banner = $_FILES['banners']['name'];
		
       $data = array(
	         "title"=>$this->input->post('title'),
	         "sub_title"=>$this->input->post('sub_title'),
	         "description"=>$this->input->post('desc'),
	         "banner"=>$banner
	     );
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3000;
		$config['max_width']            = 3000;
		$config['max_height']           = 3000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('banners'))
		{
				$error = array('error' => $this->upload->display_errors()); 
					print_r($error); 
		}
		   $this->Admin_Model->update_data($id,$data,'tbl_contents');
		}
		redirect(base_url('contents'));
	}
	
	public function students(){
		$data['all_students'] = $this->Admin_Model->select_all_data('tbl_protfolio');
		$this->load->view('admin/all_students',$data);
	}
	public function delete_students($uid){
	    $this->Admin_Model->delete_data($uid,'tbl_protfolio');
		redirect(base_url('students'));
	}
	public function edit_students($eid){
		$data['student'] = $this->Admin_Model->get_id('tbl_protfolio',$eid);
		$this->load->view('admin/include/header_css',$data);
		$this->load->view('admin/include/header_nav',$data);
		$this->load->view('admin/include/header_aside',$data);
		$this->load->view('admin/update_student',$data);
		$this->load->view('admin/include/footer',$data);
	}
	 public function update_students()
	 {
		 $id = $this->input->post('id');
		
		if(!empty($this->input->post('update'))){
		 
	   $file = $_FILES['file']['name'];
		
       $data = array(
	         "title"=>$this->input->post('title'),
	         "sub_title"=>$this->input->post('sub_title'),
	         //"category"=>$this->input->post('category'),
	         //"image"=>$file,
	         "description"=>$this->input->post('description')
	     );
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3000;
		$config['max_width']            = 3000;
		$config['max_height']           = 3000;
		$config['encrypt_name']         = true;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file'))
		{
	    	$fileData = $this->upload->data();  
            $data['image'] = $fileData['file_name']; 
		}
		   $this->Admin_Model->update_data($id,$data,'tbl_protfolio');
		   $this->session->set_flashdata('success','Update Successfully...');
		}
		
		redirect(base_url('students'));
	}
	
	
	public function add_notice()
	{
		if(!empty($this->input->post())){
		 
		$banner = $_FILES['file']['name'];
		
       $data = array(
	         "notice"=>$this->input->post('notice'),
	         "content"=>$this->input->post('content'),
	         "file"=>$banner
	     );
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3000;
		$config['max_width']            = 3000;
		$config['max_height']           = 3000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('file'))
		{
				$error = array('error' => $this->upload->display_errors()); 
					print_r($error); 
		}
		   $this->Admin_Model->insert_data('tbl_profile',$data);
		}
		$this->load->view('admin/add_notice');
	}
	public function notice(){
		$data['all_notice'] = $this->Admin_Model->select_all_data('tbl_profile');
		$this->load->view('admin/all_notice',$data);
	}
	public function delete_notice($uid){
	    $this->Admin_Model->delete_data($uid,'tbl_profile');
		redirect(base_url('notice'));
	}
	public function edit_notice($eid){
		$data['notice'] = $this->Admin_Model->get_id('tbl_profile',$eid);
		$this->load->view('admin/include/header_css',$data);
		$this->load->view('admin/include/header_nav',$data);
		$this->load->view('admin/include/header_aside',$data);
		$this->load->view('admin/update_notice',$data);
		$this->load->view('admin/include/footer',$data);
	}
	public function update_notice()
	{
		$id = $this->input->post('id');
		
		if(!empty($this->input->post('update'))){
		    
		$data = array(
	         "name"=>$this->input->post('name'),
	         "email"=>$this->input->post('email'),
	         "mobile"=>$this->input->post('phone'),
	         "dob"=>$this->input->post('dob'),
	         "address"=>$this->input->post('address'),
	         "cmp_name"=>$this->input->post('cmp_name'),
	         "cmp_email"=>$this->input->post('cmp_email'),
	         "cmp_phone"=>$this->input->post('cmp_phone'),
	         "cmp_address"=>$this->input->post('cmp_address')
	     );
	     
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3000;
		$config['max_width']            = 3000;
		$config['max_height']           = 3000;
		$config['encrypt_name']         = true;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file'))
		{
			$fileData = $this->upload->data();  
            $data['image'] = $fileData['file_name']; 
		}
		   $this->Admin_Model->update_data($id,$data,'tbl_profile');
		   $this->session->set_flashdata('success','Update Successfully...');
		}
		
		redirect(base_url('notice'));
	}
	
	public function add_video()
	{
		if(!empty($this->input->post())){
		 
		$banner = $_FILES['file']['name'];
		
       $data = array(
	         "title"=>$this->input->post('video'),
	         "video_url_link"=>$this->input->post('content'),
	         "add_image"=>$banner
	     );
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3000;
		$config['max_width']            = 3000;
		$config['max_height']           = 3000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('file'))
		{
				$error = array('error' => $this->upload->display_errors()); 
					print_r($error); 
		}
		   $this->Admin_Model->insert_data('tbl_video',$data);
		}
		$this->load->view('admin/add_video');
	}
	public function video(){
		$data['all_video'] = $this->Admin_Model->select_all_data('tbl_video');
		$this->load->view('admin/all_video',$data);
	}
	public function delete_video($uid){
	    $this->Admin_Model->delete_data($uid,'tbl_video');
		redirect(base_url('video'));
	}
	public function edit_video($eid){
		$data['video'] = $this->Admin_Model->get_id('tbl_video',$eid);
		$this->load->view('admin/include/header_css',$data);
		$this->load->view('admin/include/header_nav',$data);
		$this->load->view('admin/include/header_aside',$data);
		$this->load->view('admin/update_video',$data);
		$this->load->view('admin/include/footer',$data);
	}
	public function update_video()
	{
		$id = $this->input->post('id');
		
		if(!empty($this->input->post('update'))){
			
		$banner = $_FILES['file']['name'];
		
        $data = array(
	         "title"=>$this->input->post('video'),
	         "video_url_link"=>$this->input->post('content'),
	         "add_image"=>$banner
	     );
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3000;
		$config['max_width']            = 3000;
		$config['max_height']           = 3000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('file'))
		{
				$error = array('error' => $this->upload->display_errors()); 
					print_r($error); 
		}
		   $this->Admin_Model->update_data($id,$data,'tbl_video');
		}
		redirect(base_url('video'));
	}
	
	public function add_specialities()
	{
		if(!empty($this->input->post())){
		 
		$banner = $_FILES['file']['name'];
		
       $data = array(
	         "title"=>$this->input->post('name'),
	         "description"=>$this->input->post('content'),
	         "file"=>$banner
	     );
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3000;
		$config['max_width']            = 3000;
		$config['max_height']           = 3000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('file'))
		{
				$error = array('error' => $this->upload->display_errors()); 
					print_r($error); 
		}
		   $this->Admin_Model->insert_data('tbl_specialities',$data);
		}
		$this->load->view('admin/add_specialities');
	}
	public function specialities(){
		$data['all_specialities'] = $this->Admin_Model->select_all_data('tbl_specialities');
		$this->load->view('admin/include/header_css',$data);
		$this->load->view('admin/include/header_nav',$data);
		$this->load->view('admin/include/header_aside',$data);
		$this->load->view('admin/all_specialities',$data);
		$this->load->view('admin/include/footer',$data);
	}
	public function delete_specialities($uid){
	    $this->Admin_Model->delete_data($uid,'tbl_specialities');
		redirect(base_url('specialities'));
	}
	public function edit_specialities($eid){
		$data['specialities'] = $this->Admin_Model->get_id('tbl_specialities',$eid);
		$this->load->view('admin/include/header_css',$data);
		$this->load->view('admin/include/header_nav',$data);
		$this->load->view('admin/include/header_aside',$data);
		$this->load->view('admin/update_specialities',$data);
		$this->load->view('admin/include/footer',$data);
	}
	public function update_specialities()
	{
		$id = $this->input->post('id');
		
		if(!empty($this->input->post('update'))){
		 
		$banner = $_FILES['file']['name'];
		
       $data = array(
	         "title	"=>$this->input->post('name'),
	         "description"=>$this->input->post('content')
	        
	     );
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3000;
		$config['max_width']            = 3000;
		$config['max_height']           = 3000;
		$config['encrypt_name']         = true;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file'))
		{
			$fileData = $this->upload->data();  
            $data['file'] = $fileData['file'];
		}
		   $this->Admin_Model->update_data($id,$data,'tbl_specialities');
		   $this->session->set_flashdata('success','Updated Successfully...');
		}
		
		redirect(base_url('specialities'));
	}
	
	
	
	
	
	
	public function logout(){
      //unset($_SESSION['admin']);
      $this->session->sess_destroy();
       redirect(base_url('admin')); 
    }
	
	
	public function portfolio()
	{
		if(!empty($this->input->post())){
		 
		 //$file = $_FILES['file']['name'];
		 
        $data = array(
	         "title"=>$this->input->post('title'),
	         "sub_title"=>$this->input->post('sub_title'),
	         //"category"=>$this->input->post('category'),
	         //"image"=>$file,
	         "description"=>$this->input->post('description')
	       );
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3000;
		$config['max_width']            = 3000;
		$config['max_height']           = 3000;
		$config['encrypt_name']         = true;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file'))
		{
			$fileData = $this->upload->data();  
            $data['image'] = $fileData['file_name'];
		}
			$this->Admin_Model->insert_data('tbl_protfolio',$data);
			$this->session->set_flashdata('success','Added Successfully...');
		}
		
		$this->load->view('admin/portfolio'); 
	}
	
	public function profile()
	{
		if(!empty($this->input->post())){
		  
        $data = array(
	         "name"=>$this->input->post('name'),
	         "email"=>$this->input->post('email'),
	         "mobile"=>$this->input->post('phone'),
	         "dob"=>$this->input->post('dob'),
	         "address"=>$this->input->post('address'),
	         "cmp_name"=>$this->input->post('cmp_name'),
	         "cmp_email"=>$this->input->post('cmp_email'),
	         "cmp_phone"=>$this->input->post('cmp_phone'),
	         "cmp_address"=>$this->input->post('cmp_address')
	     );
			
		   $this->Admin_Model->insert_data('tbl_profile',$data);
		   $this->session->set_flashdata('success','Added Successfully...');
		}
	
		$this->load->view('admin/profile'); 
	}
	
	
	
	public function add_education(){
		
		$insert_data = $this->input->post();
	  //  $session = $this->session->userdata('profile')->id;
	 //	$insert_data['uid'] = $session; 
		
        $this->Admin_Model->insert_data('add_education',$insert_data);
		
		echo '200';
		
	}
	
	public function add_experience(){
		
		$insert_data = $this->input->post();
	 //   $session = $this->session->userdata('profile')->id;
	//	$insert_data['uid'] = $session; 
		
        $this->Admin_Model->insert_data('add_experience',$insert_data);
		
		echo '200';
	}
	
	public function add_skill(){
		
		$insert_data = $this->input->post();
	  //  $session = $this->session->userdata('profile')->id;
	   // $insert_data['uid'] = $session; 
		
        $this->Admin_Model->insert_data('add_skill',$insert_data);
		
		echo '200';
	}
	
	// update Function
	public function detete_education($uid){
	    $this->Admin_Model->delete_data($uid,'add_education');
		redirect(base_url('view_profile'));
	}
	public function edit_education($eid){
		$data['education'] = $this->Admin_Model->get_id('add_education',$eid);
		$this->load->view('admin/include/header_css',$data);
		$this->load->view('admin/include/header_nav',$data);
		$this->load->view('admin/include/header_aside',$data);
		$this->load->view('admin/update_education',$data);
		$this->load->view('admin/include/footer',$data);
	}
	public function update_education()
	{
		$id = $this->input->post('id');
		
		if(!empty($this->input->post('update'))){
		
        $data = array(
	         "school"=>$this->input->post('school'),
	         "degree"=>$this->input->post('degree'),
	         "start_year"=>$this->input->post('start_year'),
	         "end_year"=>$this->input->post('end_year'),
	         "description"=>$this->input->post('desc')
	     );
		   $this->Admin_Model->update_data($id,$data,'add_education');
		}
		redirect(base_url('view_profile'));
	}

    public function detete_experience($uid){
	    $this->Admin_Model->delete_data($uid,'add_experience');
		redirect(base_url('view_profile'));
	}
	public function edit_experience($eid){
		$data['experience'] = $this->Admin_Model->get_id('add_experience',$eid);
		$this->load->view('admin/include/header_css',$data);
		$this->load->view('admin/include/header_nav',$data);
		$this->load->view('admin/include/header_aside',$data);
		$this->load->view('admin/update_experience',$data);
		$this->load->view('admin/include/footer',$data);
	}
	public function update_experience()
	{
		$id = $this->input->post('id');
		
		if(!empty($this->input->post('update'))){
		
        $data = array(
	         "cmp_name"=>$this->input->post('cmp_name'),
	         "designation"=>$this->input->post('designation'),
	         "start_date"=>$this->input->post('start_date'),
	         "end_date"=>$this->input->post('end_date'),
	         "description"=>$this->input->post('desc'),
	         "address"=>$this->input->post('address')
	     );
		   $this->Admin_Model->update_data($id,$data,'add_experience');
		}
		redirect(base_url('view_profile'));
	}
	
	public function detete_skill($uid){
	    $this->Admin_Model->delete_data($uid,'add_skill');
		redirect(base_url('view_profile'));
	}
	public function edit_skill($eid){
		$data['all_skill'] = $this->Admin_Model->get_id('add_skill',$eid);
		$this->load->view('admin/include/header_css',$data);
		$this->load->view('admin/include/header_nav',$data);
		$this->load->view('admin/include/header_aside',$data);
		$this->load->view('admin/update_skill',$data);
		$this->load->view('admin/include/footer',$data);
	}
	public function update_skill()
	{
		$id = $this->input->post('id');
		
		if(!empty($this->input->post('update'))){
		
        $data = array(
	         "skill"=>$this->input->post('skill')
	     );
		   $this->Admin_Model->update_data($id,$data,'add_skill');
		}
		redirect(base_url('view_profile'));
	}
    
   public function detete_location($uid){
	    $this->Admin_Model->delete_data($uid,'tbl_profile');
		redirect(base_url('view_profile'));
	}
	public function edit_location($eid){
		$data['profile'] = $this->Admin_Model->get_id('tbl_profile',$eid);
		$this->load->view('admin/include/header_css',$data);
		$this->load->view('admin/include/header_nav',$data);
		$this->load->view('admin/include/header_aside',$data);
		$this->load->view('admin/update_location',$data);
		$this->load->view('admin/include/footer',$data);
	}
	public function update_location()
	{
		$id = $this->input->post('id');
		
		if(!empty($this->input->post('update'))){
		
        $data = array(
	         "country"=>$this->input->post('country'),
	         "city"=>$this->input->post('city'),
	         "note"=>$this->input->post('note')
	     );
		   $this->Admin_Model->update_data($id,$data,'tbl_profile');
		}
		redirect(base_url('view_profile'));
	}

   
	
	/*View Profile Start */
	public function view_profile($id=""){
	     
        if(!empty($this->session->userdata('profile'))){ 
            $userId = $this->session->userdata('profile')->id;
        }
        else{   
            $userId = $id;
        }
        
		$data['profile'] = $this->Admin_Model->get_id('tbl_profile',$userId);
		$data['all_education'] = $this->Admin_Model->get_by_codition('add_education',array('uid'=>$userId));
		$data['all_experience'] = $this->Admin_Model->get_by_codition('add_experience',array('uid'=>$userId));
		$data['all_skill'] = $this->Admin_Model->get_by_codition('add_skill',array('uid'=>$userId));
		$this->load->view('admin/include/header_css',$data);
		$this->load->view('admin/include/header_nav',$data);
		$this->load->view('admin/include/header_aside',$data);
		$this->load->view('admin/view_profile',$data);
		$this->load->view('admin/include/footer',$data);
	}
	/*End of  view Profile */
	
	/*Start  of  the preview  profile */
	  public function preview_profile($id=""){
	    if(!empty($this->session->userdata('profile'))){
            $userId = $this->session->userdata('profile')->id;
        }
        else{
            $userId = $id;
        }
		$data['profile'] = $this->Admin_Model->get_id('tbl_profile',$userId);
		$data['all_education'] = $this->Admin_Model->get_by_codition('add_education',array('uid'=>$userId));
		$data['all_experience'] = $this->Admin_Model->get_by_codition('add_experience',array('uid'=>$userId));
		$data['all_skill'] = $this->Admin_Model->get_by_codition('add_skill',array('uid'=>$userId));
		$this->load->view('admin/preview_profile',$data);
	}
	/* End of the preview profile */

   public function preview_resume($id=""){
	    if(!empty($this->session->userdata('user'))){
            $userId = $this->session->userdata('user')->id;
        }
        else{
            $userId = $id;
        }
		$data['user'] = $this->Admin_Model->get_id('tbl_resume',$userId);
		$this->load->view('admin/all_resume',$data);
	}

   public function preview_portfolio($id=""){
	    if(!empty($this->session->userdata('user_data'))){
            $userId = $this->session->userdata('user_data')->id;
        }
        else{
            $userId = $id;
        }
		$data['user_data'] = $this->Admin_Model->get_id('tbl_protfolio',$userId);
		$this->load->view('admin/preview_protfolio',$data);
	}
	
	public function add_social_media(){
	  $insert_data = $this->input->post();
	  $file = $_FILES['file']['name'];
	    $config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3000;
		$config['max_width']            = 3000;
		$config['max_height']           = 3000;
		$config['encrypt_name']         = true;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file'))
		{
			$fileData = $this->upload->data();  
            $insert_data['logo'] = $fileData['file_name'];
		}
      $this->Admin_Model->insert_data('tbl_social_icon',$insert_data);
	  echo '200';
	}
	
	// pdf file
	public function new_profile($id)
	{
		header("Cache-Control: no-cache, must-revalidate");
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        $userId = $id;
		$data['profile'] = $this->Admin_Model->get_id('tbl_profile',$userId);
		$data['all_education'] = $this->Admin_Model->get_by_codition('add_education',array('uid'=>$userId));
		$data['all_experience'] = $this->Admin_Model->get_by_codition('add_experience',array('uid'=>$userId));
		$data['all_skill'] = $this->Admin_Model->get_by_codition('add_skill',array('uid'=>$userId));
		$this->load->view('admin/pdf');
		//$this->load->view('admin/preview_profile',$data);
	     $html = $this->output->get_output();
        $this->load->library('pdf');
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper('A4', 'landscape');
        $this->dompdf->render();
        $this->dompdf->stream("profile.pdf", array("Attachment"=>0)); 
	}
	
	
	public function download_pdf()
	{
		$this->load->view('admin/pdf');
	 	$this->load->library('pdf');
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper('A4', 'landscape');
        $this->dompdf->render();
        $this->dompdf->stream("profile.pdf", array("Attachment"=>0));  
	}
	
	
}



