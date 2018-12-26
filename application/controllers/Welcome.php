<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array();
		$data['publish_catagory'] = $this->welcome_model->publish_all_category();
		$data['publish_blog'] = $this->welcome_model->publish_all_blog();
		$data['recent_blog'] = $this->welcome_model->recent_blog_info();
		$data['populer_blog'] = $this->welcome_model->populer_blog_info();
		$data['title'] = 'Home';
		$data['slider'] = '1';
		$data['menu'] = '1';
		$data['sponser'] = '1';
		$this->load->view('master',$data);
	}
	
	public function support()
	{
		$data = array();
		$data['publish_catagory'] = $this->welcome_model->publish_all_category();
		$data['recent_blog'] = $this->welcome_model->recent_blog_info();
		$data['populer_blog'] = $this->welcome_model->populer_blog_info();
		$data['title'] = 'Support';
		$data['slider'] = '';
		$data['menu'] = '1';
		$data['sponser'] = '1';
		$this->load->view('support',$data);
	}
	public function contact()
	{
		$data = array();
		$data['publish_catagory'] = $this->welcome_model->publish_all_category();
		$data['recent_blog'] = $this->welcome_model->recent_blog_info();
		$data['populer_blog'] = $this->welcome_model->populer_blog_info();
		$data['title'] = 'Contact';
		$data['slider'] = '';
		$data['menu'] = '1';
		$data['sponser'] = '1';
		$this->load->view('contact',$data);
	}
	public function about()
	{
		$data = array();
		$data['publish_catagory'] = $this->welcome_model->publish_all_category();
		$data['recent_blog'] = $this->welcome_model->recent_blog_info();
		$data['populer_blog'] = $this->welcome_model->populer_blog_info();
		$data['title'] = 'About';
		$data['slider'] = '1';
		$data['menu'] = '1';
		$data['sponser'] = '1';
		$this->load->view('about',$data);
	}
	public function blog_detail($blog_id)
	{
		$data = array();
		$data['blog_info'] = $this->super_admin_model->select_blog_info_by_id($blog_id);
		$data['publish_catagory'] = $this->welcome_model->publish_all_category();
		$data['comment_info'] = $this->welcome_model->publish_comment_info($blog_id);
		$data['recent_blog'] = $this->welcome_model->recent_blog_info();
		$data['populer_blog'] = $this->welcome_model->populer_blog_info();

		$total_hit = $data['blog_info']->hit_count+1;

		$this->welcome_model->update_hitcount($total_hit,$blog_id);

		$data['title'] = 'Blog';
		$data['slider'] = '';
		$data['menu'] = '1';
		$data['sponser'] = '1';
		$this->load->view('blog_details',$data);

	}
	public function category_blog($category_id)
	{
		$data = array();
		$data['publish_catagory'] = $this->welcome_model->publish_all_category();
		$data['category_blog'] = $this->welcome_model->select_blog_info_by_category_id($category_id);
		$data['publish_blog'] = $this->welcome_model->publish_all_blog();
		$data['recent_blog'] = $this->welcome_model->recent_blog_info();
		$data['populer_blog'] = $this->welcome_model->populer_blog_info();
	
		$data['title'] = 'Home';
		$data['slider'] = '1';
		$data['menu'] = '1';
		$data['sponser'] = '1';
		$this->load->view('category_blog',$data);
	}

	public function sign_up()
	{
		$data = array();
		$data['publish_catagory'] = $this->welcome_model->publish_all_category();
		$data['recent_blog'] = $this->welcome_model->recent_blog_info();
		$data['populer_blog'] = $this->welcome_model->populer_blog_info();
		$data['title'] = 'Sign up';
		$data['slider'] = '';
		$data['menu'] = '1';
		$data['sponser'] = '';
		$this->load->view('sign_up',$data);
		$data['recent_blog'] = $this->welcome_model->recent_blog_info();

	}

	public function sign_in()
	{
		$data = array();
		$data['publish_catagory'] = $this->welcome_model->publish_all_category();
		$data['recent_blog'] = $this->welcome_model->recent_blog_info();
		$data['populer_blog'] = $this->welcome_model->populer_blog_info();
		$data['title'] = 'Sign in';
		$data['slider'] = '';
		$data['menu'] = '1';
		$data['sponser'] = '';
		$this->load->view('sign_in',$data);
		$data['recent_blog'] = $this->welcome_model->recent_blog_info();

	}

	public function save_user(){
		$data = array();
		$data['user_name'] = $this->input->post('user_name',true);
		$data['user_email'] = $this->input->post('user_email',true);
		$data['user_password'] = md5($this->input->post('user_password',true));
		$this->welcome_model->save_user_info($data);

		$sdata = array();
		$sdata['message'] = 'Register user successfully !';
		$this->session->set_userdata($sdata);
		redirect('welcome/sign_up',$sdata);
	}
	public function user_login(){
		$user_email = $this->input->post('user_email',true);
		$user_password = $this->input->post('user_password',true);
		$result = $this->welcome_model->user_login_info($user_email,$user_password);

		$sdata = array();
		if($result){

			$data = array();
			$sdata['user_name'] = $result->user_name;
			$sdata['user_id'] = $result->user_id;
			$this->session->set_userdata($sdata);
			redirect('welcome');

		
	}

	else{
		$sdata['exception'] = 'Youer user id and password invalid !';
		$this->session->set_userdata($sdata);
		redirect('welcome/sign_in');
	}

	}

	public function logout(){
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('user_name');
			$sdata = array();
			$this->session->set_userdata($sdata);
			redirect('welcome');
	} 

	public function post_comment(){

		$data = array();
		$data['blog_id'] = $this->input->post('blog_id',true);
		$data['comment'] = $this->input->post('comment',true);
		$data['author_name'] = $this->session->userdata('user_name');
		$this->welcome_model->save_comment_info($data);


		$sdata = array();
		$sdata['message'] = 'Comment post successfully and waiting for admin approval';
		$this->session->set_userdata($sdata);
		redirect('welcome/blog_detail/'.$data['blog_id'],$data);
	}

}

