<?php

class Admin extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$admin_id = $this->session->userdata('id');
		if ($admin_id != NULL) {
			redirect('super_admin');
		}
	}
	public function index(){
		$this->load->view('admin/login');
	}
	public function admin_login_check(){
		$user_email = $this->input->post('email',true);
		$user_password = $this->input->post('password',true);
		//$this->load->model('admin_model','a_model');
		$result = $this->admin_model->login_from_check_info($user_email,$user_password);


		$sdata = array();
		if($result){

			$data = array();
			$sdata['name'] = $result->name;
			$sdata['id'] = $result->id;
			$this->session->set_userdata($sdata);
			redirect('super_admin');

		
	}

	else{
		$sdata['exception'] = 'Youer user id and password invalid !';
		$this->session->set_userdata($sdata);
		redirect('admin');
	}
	}

}






?> 