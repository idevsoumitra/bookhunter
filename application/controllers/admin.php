<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index(){
		$this->load->view('admin_login');
	}
	
	public function admin_login(){

		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);
		$this->load->model('admin_model');
		$result = $this->admin_model->admin_model_info($username,$password);

		$sdata = array();
		if($result){
			$sdata['admin_id']=$result->admin_id;
			$sdata['admin_name']=$result->admin_name;
			$sdata['admin_image']=$result->admin_image;
			$this->session->set_userdata($sdata);
			redirect('dashboard');
		}
		else{
			$sdata['message']="Your Email or Password Invalid";
			$this->session->set_userdata($sdata);
			redirect('admin');
		}
	}

	public function logout(){
		$this->session->unset_userdata('admin_id');
		$this->session->unset_userdata('admin_name');
		$sdata['logout_message'] = "Logout Successfully!";
		$this->session->set_userdata($sdata);
		redirect('admin');
	}
	
	
	public function dashboard(){
		$data_=array();
		$this->load->model('admin_model');
		$data['all_admin_info'] = $this->admin_model->all_admin_info();
		$data['count_admin'] = $this->admin_model->count_admin();
		$data['count_user'] = $this->admin_model->count_user();
		$data['count_book'] = $this->admin_model->count_book();
		$data['count_review'] = $this->admin_model->count_review();
		$data['dashboard_main_content'] =$this->load->view('pages/admin_index',$data,true);
		$this->load->view('dashboard',$data);
	}

	public function manage_book(){

		$data_=array();
		$this->load->model('admin_model');
		$data['all_book_info'] = $this->admin_model->all_book_info();
		$data['dashboard_main_content'] =$this->load->view('pages/manage_book',$data,true);
		$this->load->view('dashboard',$data);
	}
	public function manage_user(){

		$data_=array();
		$this->load->model('admin_model');
		$data['all_user_info'] = $this->admin_model->all_user_info();
		$data['dashboard_main_content'] =$this->load->view('pages/manage_user',$data,true);
		$this->load->view('dashboard',$data);
	}

	public function edit_book($book_id){
		$data_=array();
		$this->load->model('admin_model');
		$data['all_book_category'] = $this->admin_model->all_book_category(); //category select
		$data['all_book_info_by_id'] = $this->admin_model->all_book_info_by_id($book_id); // all data view
		$data['dashboard_main_content'] =$this->load->view('pages/edit_book',$data,true);
		$this->load->view('pages/edit_book',$data);
	}
	public function update_book()
	{
		$this->load->model('admin_model');
		$this->admin_model->update_book_info();

		$sdata = array();
		$sdata['message']="Updated Successfully";
		$this->session->set_userdata($sdata);
		redirect('manage-book');
	}


	public function delete_book($book_id){

		$this->load->model('admin_model');
		$this->admin_model->delete_book_by_id($book_id); // all data view
		$sdata_=array();
		$sdata['message']= "Book Information Delete Suceessfully !!";
		$this->session->set_userdata($sdata);
		redirect('manage-book');
	}




	public function add_admin(){
		$data_=array();
		$data['dashboard_main_content'] =$this->load->view('pages/add_admin','',true);
		$this->load->view('dashboard',$data);
	}

	public function save_admin(){
		$this->load->model('admin_model');
		$this->admin_model->save_admin();
		$save_data = array();
		$save_data['message'] = "Admin Added Successfully";
		$this->session->set_userdata($save_data);
		redirect('add-admin');
	}
	public function manage_admin(){
		$data_=array();
		$this->load->model('admin_model');
		$data['all_admin_info'] = $this->admin_model->all_admin_info();
		$data['dashboard_main_content'] =$this->load->view('pages/manage_admin',$data,true);
		$this->load->view('dashboard',$data);
	}
	public function update_status(){
		if(isset($_REQUEST['sval'])){
			$this->load->model('admin_model');
			$this->admin_model->update_status();
			$save_data = array();
			$save_data['message'] = "Book Status Updated Successfully";
			$this->session->set_userdata($save_data);
			redirect('manage-book');
			
		}
	}

	public function message_box(){
		$data = array();
		$this->load->model('admin_model');
		$data['all_messages'] =  $this->admin_model->all_messages();
		$data['dashboard_main_content'] =$this->load->view('pages/message_box',$data,true);
		$this->load->view('dashboard',$data);
	}
}

