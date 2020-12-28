<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User_controller extends CI_Controller {
	public function user_register(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user_fullname','Name','required');
		$this->form_validation->set_rules('user_username','Username','required');
		$this->form_validation->set_rules('user_email','Email','required');
		$this->form_validation->set_rules('user_phone','Phone Number','numeric');
		$this->form_validation->set_rules('user_password', 'Password', 'required');
		$this->form_validation->set_rules('user_conf_password', 'Confirm Password', 'required|matches[user_password]');

		if($this->form_validation->run() == TRUE){
			$this->load->model('User_model');
			$this->User_model->save_user();
			$save_data = array();
			$save_data['message'] = "Success";
			$this->session->set_userdata($save_data);
			
			redirect(base_url());
		}
		$data_=array();
		$this->load->model('User_model');
		$data['index_main_content'] =$this->load->view('view_main/user_register','',true);
		$this->load->view('main_index',$data);
	}
	
	public function user_login(){
		$username = $this->input->post('user_username',true);
		$password = $this->input->post('user_password',true);

		$this->load->model('User_model');
		$result = $this->User_model->user_login_check($username,$password);
		$sdata = array();

		if($result){
			$saveData['user_id']=$result->user_id;
			$saveData['user_username']=$result->user_username;
			$saveData['user_dp']=$result->user_dp;
			$this->session->set_userdata($saveData);
			redirect(base_url());
			// echo 'login sucess';
		}
		else{
			$sdata['error_message']="Your Email or Password Invalid";
			$this->session->set_userdata($sdata);
			redirect(base_url());
		
		}
	}
	public function user_logout(){
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('user_username');
		$this->session->unset_userdata('user_dp');
		$sdata['error_message'] = "Logout Successfully!";
		$this->session->set_userdata($sdata);
		redirect(base_url());
		redirect($_SERVER['HTTP_REFERER'],'refresh');
	}
	

	public function add_book(){
		$data = array();
		$this->load->model('Main_model');
		$data['all_category'] = $this->Main_model->all_category();
		$data['index_main_content'] =$this->load->view('view_main/upload_book_form',$data,true);
		$this->load->view('main_index',$data);
	}


	public function view_profile($user_id){
		$data = array();

		$this->load->model('User_model');
		$sdata['profile_info_by_id'] = $this->User_model->profile_info_by_id($user_id);
		$sdata['upload_book_by_id'] = $this->User_model->upload_book_by_id($user_id);
		$sdata['all_category'] = $this->Main_model->all_category();
		$data['index_main_content'] =$this->load->view('view_main/view_user_profile',$sdata,true);
		$this->load->view('main_index',$data);
	}




	public function upload_book(){
		$this->load->model('User_model');
		$this->User_model->upload_book_info();
		$save_data = array();
		$save_data['message'] = "Book Added Successfully. Try Another. <br> Thank You!";
		$this->session->set_userdata($save_data);
		redirect('add-book');
	}


	public function save_review(){
		$this->load->model('User_model');
		$this->User_model->save_review();
		// redirect('view_book_info');
		redirect($_SERVER['HTTP_REFERER'],'refresh');
	}
	public function edit_book_info($book_id){
		$data_=array();
		$this->load->model('Main_model');
		// $this->load->model('User_model');
	
		$data['book_info_by_id'] = $this->Main_model->book_info_by_id($book_id);
		$data['all_category'] = $this->Main_model->all_category();
		$data['index_main_content'] =$this->load->view('view_main/update_book',$data,true);
		$this->load->view('main_index',$data);
	}

	public function update_book_info()
	{
		$this->load->model('User_model');
		$this->User_model->update_book_info();

		$save_data = array();
		$save_data['message'] = "Information Updated";
		$this->session->set_userdata($save_data);

		redirect($_SERVER['HTTP_REFERER'],'refresh');

	}
	public function edit_user_profile(){
		
			$this->load->model('User_model');
			$this->User_model->edit_user_info();
			$save_data = array();
			$save_data['edit_user_message'] = "Profile Updated";
			$this->session->set_userdata($save_data);

			redirect($_SERVER['HTTP_REFERER'],'refresh');
		
	}
	public function edit_user_dp(){
			$this->load->model('User_model');
			$this->User_model->edit_dp();
			redirect($_SERVER['HTTP_REFERER'],'refresh');
	}
	public function delete_book_user($book_id){

		$this->load->model('User_model');
		$this->User_model->delete_book_by_user($book_id); // all data view
		$sdata_=array();
		redirect($_SERVER['HTTP_REFERER'],'refresh');
		
	}


}

	
	

