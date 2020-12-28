<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$data_=array();
		$this->load->model('Main_model');
		$data['all_book'] = $this->Main_model->all_book();
		$data['all_category'] = $this->Main_model->all_category();
		$data['book_by_top_rating'] = $this->Main_model->book_by_top_rating();
		// $data['all_user'] = $this->Main_model->all_user();



		$data['count_book'] = $this->Main_model->count_book();
		$data['count_member'] = $this->Main_model->count_member();
		

		$data['index_main_content'] = $this->load->view('view_main/view_index',$data,true);
		$this->load->view('main_index',$data);

	}
	public function fetch_book(){

		$postData = $this->input->post();

		$this->load->model('Main_model');
		$data = $this->Main_model->getBooks($postData);
	
		echo json_encode($data);
	}

	public function fetch_author(){

		$authorData = $this->input->post();

		$this->load->model('Main_model');
		$data = $this->Main_model->getAuthors($authorData);
	
		echo json_encode($data);
	}


	public function getSearch(){
		$data_=array();
		$filter = $this->input->post('filter');

		$book_title = $this->input->post('book_title');
		$book_author = $this->input->post('book_author');
		$book_type = $this->input->post('book_type');

		if(isset($filter)) {
			$this ->load->model('Main_model');
			$data['all_records'] = $this->Main_model->getBookFilter($book_title,$book_author,$book_type);
		}
		if(empty($book_title) && empty($book_author) && $book_type==""){
			$data['wrong'] = "Wrong";
		}
		
		
		$data['index_main_content'] = $this->load->view('view_main/view_book',$data,true);
		$this->load->view('main_index',$data);

	}


	public function view_book_info($book_id){
		// $book_id = $this->input->get('book_id');
		$data = array();
		$this->load->model('Main_model');
		$sdata['book_info_by_id'] = $this->Main_model->book_info_by_id($book_id);
		$sdata['book_review_by_id'] = $this->Main_model->book_review_by_id($book_id);
		
		$data['index_main_content'] = $this->load->view('view_main/view_book_info',$sdata,true);
		$this->load->view('main_index',$data);
	}

	public function view_book_action($book_id){
		// $book_id = $this->input->get('book_id');
		$data = array();
		$this->load->model('Main_model');
		$sdata['book_action_by_id'] = $this->Main_model->book_action_by_id($book_id);
		$sdata['book_review_by_id'] = $this->Main_model->book_review_by_id($book_id);
		// $sdata['book_review_by_id'] = $this->Main_model->book_review_by_id($book_id);

		$data['index_main_content'] = $this->load->view('view_main/book_action',$sdata,true);
		$this->load->view('main_index',$data);
	}

	public function blog(){
		$data = array();
		$data['index_main_content'] = $this->load->view('view_main/blog','',true);
		$this->load->view('main_index',$data);
	}
	public function upcoming(){
		$data = array();
		$data['index_main_content'] = $this->load->view('view_main/upcoming','',true);
		$this->load->view('main_index',$data);
	}


	public function category(){
		$data = array();
		$this->load->model('Main_model');
		$data['all_book'] = $this->Main_model->all_book();
		$data['all_category'] = $this->Main_model->all_category();
		$data['index_main_content'] = $this->load->view('view_main/category_list',$data,true);
		$this->load->view('main_index',$data);
	}
	public function category_by_book($category_id){
		$data = array();
		$this->load->model('Main_model');
		$data['all_category'] = $this->Main_model->all_category();
		$data['get_book_by_category'] = $this->Main_model->get_book_by_category($category_id);
		$data['index_main_content'] = $this->load->view('view_main/category_list',$data,true);
		$this->load->view('main_index',$data);
	}
	

	public function contact_form(){
		$data = array();
		$data['index_main_content'] = $this->load->view('view_main/contact','',true);
		$this->load->view('main_index',$data);
	}
	public function send_contact(){
		$this->load->model('Main_model');
		$this->Main_model->send_contact();

		$sdata = array();
		$sdata['contact_message'] = "Message sucessfully send to Authority!";
		$this->session->set_userdata($sdata);
		redirect(base_url());
	}


	

}
