<?php

class Admin_model extends CI_Model{
	public function login_from_check_info($user_email,$user_password){
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('email',$user_email);
		$this->db->where('password',md5($user_password));
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;


	}

}

?>