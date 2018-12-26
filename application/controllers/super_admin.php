<?php

class Super_admin extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$admin_id = $this->session->userdata('id');
		if ($admin_id == NULL) {
			redirect('admin');
		}
		//$this->load->model('super_admin_model','sa_model');
	}
	
	public function index()
	{
		$data = array();
		$data['title'] = 'Home';
		$this->load->view('admin/admin_master',$data);
	}

	public function add_category(){
		$data = array();
		$data['title'] = 'Add category';
		$this->load->view('admin/add_category_from',$data);
	}

	public function save_category(){
		$data = array();
		$data['category_name'] = $this->input->post('category_name',true);
		$data['category_desc'] = $this->input->post('category_desc',true);
		$data['category_status'] = $this->input->post('category_status',true);
		$this->super_admin_model->save_category_info($data);

		$sdata = array();
		$sdata['message'] = 'Category Information save successfully !';
		$this->session->set_userdata($sdata);

		redirect('super_admin/add_category');
	}

	public function manage_category(){
		$data = array();
		$data['title'] = 'Manage category';
		$data['manage_category'] = $this->super_admin_model->manage_category_info();
		$this->load->view('admin/manage_category',$data);
	}

	public function unpublished_category($category_id){
		$this->super_admin_model->update_unpublished_category($category_id);
		redirect('super_admin/manage_category');
	}

	public function published_category($category_id){
		$this->super_admin_model->update_published_category($category_id);
		redirect('super_admin/manage_category');
	}


	public function delete_category($category_id){
		$this->super_admin_model->delete_category_info($category_id);
		redirect('super_admin/manage_category');
	}


	public function edit_category($category_id){
		$data = array();
		$data['title'] = 'Edit_category';
		$data['category_info'] = $this->super_admin_model->select_category_info_by_id($category_id);
		$this->load->view('admin/edit_category_form',$data);
	}



	public function update_category(){
		
		$data = array();
		$data['category_name'] = $this->input->post('category_name',true);
		$data['category_desc'] = $this->input->post('category_desc',true);
		$data['category_status'] = $this->input->post('category_status',true);
		$this->super_admin_model->update_category_info($data,$category_id);


		$sdata = array();
		$sdata['message'] = 'Category Information update successfully !';
		$this->session->set_userdata($sdata);

		redirect('super_admin/manage_category');
	}

	public function add_blog(){
		$data = array();
		$data['title'] = 'Add blog';
		$data['publish_catagory'] = $this->welcome_model->publish_all_category();
		$this->load->view('admin/add_blog',$data);
	}

	public function save_blog(){

		$data = array();
		$data['category_id'] = $this->input->post('blog_category',true);
		$data['blog_title'] = $this->input->post('blog_title',true);
		$data['blog_short_discription'] = $this->input->post('blog_short_discription',true);
		$data['blog_long_discription'] = $this->input->post('blog_long_discription',true);
		$data['publication_status'] = $this->input->post('publication_status',true);
		$data['author_name'] = $this->session->userdata('name');

		$this->super_admin_model->save_blog_info($data);

		$sdata = array();
		$sdata['message'] = 'Blog data save successfully !';
		$this->session->set_userdata($sdata);
		redirect('super_admin/add_blog');

	}


	public function manage_blog(){
		$data = array();
		$data['title'] = 'Manage blog';
		$data['manage_blog'] = $this->super_admin_model->manage_blog_info();
		$this->load->view('admin/manage_blog',$data);
	}


	public function unpublished_blog($blog_id){
		$this->super_admin_model->update_unpublished_blog($blog_id);
		redirect('super_admin/manage_blog');
	}

	public function published_blog($blog_id){
		$this->super_admin_model->update_published_blog($blog_id);
		redirect('super_admin/manage_blog');
	}


	public function delete_blog($blog_id){
		$this->super_admin_model->delete_blog_info($blog_id);
		redirect('super_admin/manage_blog');
	}


	public function edit_blog($blog_id){
		$data = array();
		$data['title'] = 'Edit blog';
		$data['blog_info'] = $this->super_admin_model->select_blog_info_by_id($blog_id);
		$data['publish_category'] = $this->welcome_model->publish_all_category();
		$this->load->view('admin/edit_blog_form',$data);
	}


	public function update_blog(){
		$blog_id= $this->input->post('blog_id',true);
		$data = array();
		$data['blog_title'] = $this->input->post('blog_title',true);
		$data['blog_short_discription'] = $this->input->post('blog_short_discription',true);
		$data['blog_long_discription'] = $this->input->post('blog_long_discription',true);
		$data['publication_status'] = $this->input->post('publication_status',true);
		$data['author_name'] = $this->session->userdata('name');
		$this->super_admin_model->update_blog_info($data,$blog_id);
		redirect('super_admin/manage_blog');
	}


	public function logout(){
			$this->session->unset_userdata('id');
			$this->session->unset_userdata('name');

			$sdata = array();
			$sdata['meassage'] = 'You are successfully logged out !';
			$this->session->set_userdata($sdata);
			redirect('admin');
	} 
}



?>