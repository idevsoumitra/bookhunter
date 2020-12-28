<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function admin_model_info($username,$password)
	{
                $this->db->SELECT('*');
                $this->db->FROM('admin_info');
                $this->db->WHERE('admin_username',$username);
                $this->db->WHERE('admin_password',$password);
               // $this->db->WHERE('admin_password',md5($password));
                $query_result = $this->db->get();
                $result = $query_result->row();
                return $result;
        }
        
        public function all_book_category(){
                $this->db->SELECT('*');
                $this->db->FROM('book_category');
                $query_result = $this->db->get();
                $cate_info = $query_result->result();
                return $cate_info;
        }

        public function save_b_book_info(){
                $data = array();
                $data['book_title'] = $this->input->post('book_title', true);
                $data['book_type'] = $this->input->post('book_type', true);
                $data['book_author'] = $this->input->post('book_author', true);
                $data['book_publisher'] = $this->input->post('book_publisher', true);
                $data['book_purpose'] = $this->input->post('book_purpose', true);
                $data['book_description'] = $this->input->post('book_description', true);

                $sdata = array();
                        $error = "";
                        $config['upload_path']                  =       'book_images/';
                        $config['allowed_types']                =       'gif|jpg|jpeg|png';
                        $config['max_size']                     =       '100000000';
                        $config['width']                        =       '5048';
                        $config['height']                       =       '4080';
                        $this->load->library('upload', $config);

                        if( ! $this->upload->do_upload('book_cover')){
                                $error = $this->upload->display_errors();
                        }
                        else{
                                $sdata = $this->upload->data();
                                $data['book_cover'] = $config['upload_path'].$sdata['file_name'];
                        }
                        // $this->db->where('admin_password',md5($password));
                        // $this->db->insert('admin_info',$data);

                        $this->db->insert('book_info',$data);
                        $this->db->WHERE('book_info'.'book_type'=='book_category'.'category_id');

        }
        public function save_s_book_info(){
                $data = array();
                $data['book_title'] = $this->input->post('book_title', true);
                $data['book_type'] = $this->input->post('book_type', true);
                $data['book_author'] = $this->input->post('book_author', true);
                $data['book_publisher'] = $this->input->post('book_publisher', true);
                $data['book_purpose'] = $this->input->post('book_purpose', true);
                $data['book_price'] = $this->input->post('book_price', true);
                $data['book_description'] = $this->input->post('book_description', true);
                $this->db->insert('book_info',$data);
                $this->db->WHERE('book_info'.'book_type'=='book_category'.'category_id');
        }

        public function all_book_info(){
                $this->db->SELECT('*');
                $this->db->FROM('book_info');
                $this->db->join('book_category', 'category_id = book_type');
                $query_result = $this->db->get();
                $book_info = $query_result->result();
                return $book_info;
        }
                public function all_book_info_by_id($book_id){
                        $this->db->SELECT('*');
                        $this->db->FROM('book_info');
                        $this->db->join('book_category', 'category_id = book_type');
                        $this->db->WHERE('book_id',$book_id);
                        $query_result = $this->db->get();
                        $result = $query_result->row();
                        return $result;
                }

                        public function update_book_info(){
                                $data = array();
                                $book_id = $this->input->post('book_id',true);
                                 $data['book_title'] = $this->input->post('book_title',true);
                                $data['book_type'] = $this->input->post('book_type',true);
                                $data['book_author'] = $this->input->post('book_author',true);
                                $data['book_publisher'] = $this->input->post('book_publisher',true);
                                $data['book_description'] = $this->input->post('book_description',true);
                                $data['book_price'] = $this->input->post('book_price',true);

                                $this->db->WHERE('book_id',$book_id);
                                $this->db->update('book_info',$data);
                        }
                        // DELETE

                                public function delete_book_by_id($book_id){
                                        $this->db->WHERE('book_id', $book_id);
                                        $this->db->delete('book_info');
                                }


        public function all_user_info(){
                $this->db->SELECT('*');
                $this->db->FROM('user_info');
                
                $query_result = $this->db->get();
                $user_info = $query_result->result();
                return $user_info;
        }
        public function all_admin_info(){
                $this->db->SELECT('*');
                $this->db->FROM('admin_info');
                
                $query_result = $this->db->get();
                $admin_result =$query_result->result();
                return $admin_result;
        }


        // Dashboard Index Count

        public function count_admin(){
                $this->db->SELECT('*');
                $this->db->FROM('admin_info');
                $query_result = $this->db->get();
                $admin_count =$query_result->num_rows();
                return $admin_count;
        }
        public function count_user(){
                $this->db->SELECT('*');
                $this->db->FROM('user_info');
                $query_result = $this->db->get();
                $admin_count =$query_result->num_rows();
                return $admin_count;
        }
        public function count_book(){
                $this->db->SELECT('*');
                $this->db->FROM('book_info');
                $query_result = $this->db->get();
                $admin_count =$query_result->num_rows();
                return $admin_count;
        }
        public function count_review(){
                $this->db->SELECT('*');
                $this->db->FROM('book_review');
                $query_result = $this->db->get();
                $review =$query_result->num_rows();
                return $review;
        }



        // Save Admin
        public function save_admin(){
                $data = array();
                $data['admin_name']=$this->input->post('admin_name',true);
                $data['admin_username']=$this->input->post('admin_username',true);
                $data['admin_email']=$this->input->post('admin_email',true);
                $data['admin_phone']=$this->input->post('admin_phone',true);
                $data['admin_password']=$this->input->post('admin_password',true);

                        $sdata = array();
                        $error = "";
                        $config['upload_path']                  =       'images/';
                        $config['allowed_types']                =       'gif|jpg|jpeg|png';
                        $config['max_size']                     =       '10000000';
                        $config['width']                        =       '2048';
                        $config['height']                       =       '1020';
                        $this->load->library('upload', $config);

                        if( ! $this->upload->do_upload('admin_image')){
                                $error = $this->upload->display_errors();
                        }
                        else{
                                $sdata = $this->upload->data();
                                $data['admin_image'] = $config['upload_path'].$sdata['file_name'];
                        }
                        // $this->db->where('admin_password',md5($password));
                        $this->db->insert('admin_info',$data);
                        


        }


        public function update_status()
        {
                $id = $_REQUEST['sid'];
                $saval = $_REQUEST['sval'];
                if($saval == 1){
                        $status = 0;
                }
                else{
                        $status = 1;
                }
                $data = array('status' => $status);
                $this->db->where('book_id',$id);
                return $this->db->update('book_info',$data);

        }

        public function all_messages(){
                $this->db->SELECT('*');
                $this->db->FROM('contact_info');
                $query = $this->db->get();
                $result = $query->result();
                return $result;
        }
        



        
	
}
