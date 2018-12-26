<?php

/**
* 
*/
class Welcome_model extends CI_Model
{
	
	public function publish_all_category(){

		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_status',1);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}

	public function publish_all_blog(){
		$sql = "SELECT * FROM add_blog WHERE publication_status=1 ORDER BY blog_id DESC";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;

		/*$this->db->select('*');
		$this->db->from('add_blog');
		$this->db->where('publication_status',1);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;*/
	}

	public function recent_blog_info(){
		$sql = "SELECT * FROM add_blog ORDER BY blog_id DESC LIMIT 0,3";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;
	}

	public function select_blog_info_by_id($blog_id){

		$this->db->select('*');
		$this->db->from('add_blog');
		$this->db->where('blog_id',$blog_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;

	}
	public function select_blog_info_by_category_id($category_id){
		$this->db->select('*');
		$this->db->from('add_blog');
		$this->db->where('category_id',$category_id);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}

	public function save_user_info($data){
		$this->db->insert('user',$data);
	}

	public function user_login_info($user_email,$user_password){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_email',$user_email);
		$this->db->where('user_password',md5($user_password));
		
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}

	public function save_comment_info($data){
		$this->db->insert('comments',$data);
	}


	public function publish_comment_info($blog_id){
		$this->db->select('*');
		$this->db->from('comments');
		$this->db->where('blog_id',$blog_id);
		$this->db->where('publication_status',1);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}

	public function update_hitcount($total_hit,$blog_id){
		$this->db->set('hit_count',$total_hit);
		$this->db->where('blog_id',$blog_id);
		$this->db->update('add_blog');
	}
	public function populer_blog_info(){
		$sql = "SELECT * FROM add_blog ORDER BY hit_count DESC LIMIT 0,3";
		$query_result = $this->db->query($sql);
		$result = $query_result->result();
		return $result;

	}
}


?>