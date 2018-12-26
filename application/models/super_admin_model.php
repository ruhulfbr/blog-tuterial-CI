<?php
/**
* 
*/
class Super_admin_model extends CI_Model
{
	
	/*public function __construct(){
		parent::__construct();
	}*/
	public function save_category_info($data){
		
		$this->db->insert('category',$data);

	}

 	public function manage_category_info(){
 		$this->db->select('*');
 		$this->db->from('category')->order_by("category_id","desc");
 		$query_result = $this->db->get();
 		$result = $query_result->result();
 		return $result;

 	}


 	public function update_unpublished_category($category_id){

 		$this->db->set('category_status',0);
 		$this->db->where('category_id',$category_id);
 		$this->db->update('category');

 	}

 	public function update_published_category($category_id){

 		$this->db->set('category_status',1);
 		$this->db->where('category_id',$category_id);
 		$this->db->update('category');

 	}

 	public function delete_category_info($category_id){

 		
 		$this->db->where('category_id',$category_id);
 		$this->db->delete('category');
 		

 	}

 	public function select_category_info_by_id($category_id){

 		$this->db->select('*');
 		$this->db->from('category');
 		$this->db->where('category_id',$category_id);
 		$query_result = $this->db->get();
 		$result = $query_result->row();
 		return $result;

 	}


 	public function update_category_info($data,$category_id){

		
		$this->db->where('category_id',$category_id);
		$this->db->update('category',$data);


	}


	public function save_blog_info($data){
		
		$this->db->insert('add_blog',$data);

	}

	public function manage_blog_info(){
 		$this->db->select('*');
 		$this->db->from('add_blog');
 		$query_result = $this->db->get();
 		$result = $query_result->result();
 		return $result;

 	}

 	public function update_unpublished_blog($blog_id){

 		$this->db->set('publication_status',0);
 		$this->db->where('blog_id',$blog_id);
 		$this->db->update('add_blog');

 	}

 	public function update_published_blog($blog_id){

 		$this->db->set('publication_status',1);
 		$this->db->where('blog_id',$blog_id);
 		$this->db->update('add_blog');

 	}

 	public function delete_blog_info($blog_id){

 		
 		$this->db->where('blog_id',$blog_id);
 		$this->db->delete('add_blog');
 		

 	}

 	public function select_blog_info_by_id($blog_id){

 		$this->db->select('*');
 		$this->db->from('add_blog');
 		$this->db->where('blog_id',$blog_id);
 		$query_result = $this->db->get();
 		$result = $query_result->row();
 		return $result;

 	}


 	public function update_blog_info($data,$blog_id){

		
		$this->db->where('blog_id',$blog_id);
		$this->db->update('add_blog',$data);


	}


}


?>