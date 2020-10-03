<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {


     public function select_admin_data($email,$pass){
	    $this->db->where('email', $email);
        $this->db->where('password', $pass);
        $res = $this->db->get('tbl_admin');
	    return  $res->row(); 
	}

	public function insert_data($table,$data)
	{
	  return  $result = $this->db->insert($table,$data);	 
	}
	
	public function select_all_data($table){
	   return  $query = $this->db->get($table)->result_array(); 
	}
	
	public function get_id($table,$id){
	  return  $query = $this->db->get_where($table, array('id' => $id))->row_array();
	}
	public function delete_data($id,$table){
	  $this->db->where('id', $id);
      $this->db->delete($table); 
   }
   public function update_data($id,$data,$table){
	 $this->db->where('id', $id);
     $this->db->update($table, $data);  
   }
   
   public function select_page_data($table,$slug){
	 return $this->db->query("select * from $table where menu_id=(select id  from tbl_menu where slug='$slug')")->result_array();
   }
   
   public function get_by_codition($table,$condition){ 
	 $this->db->where($condition);   
     return $this->db->get($table)->result_array();  
   }
   
   public function select_by_codition($table,$condition){
	 $this->db->where($condition);
     return $this->db->get($table)->row();  
   }
   
	
}




