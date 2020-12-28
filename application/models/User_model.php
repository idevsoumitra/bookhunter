<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {


        public function save_review(){
                $data = array();
                $data['rating']=$this->input->post('rating',true);
                $data['userid']=$this->input->post('userid',true);
                $data['bookid']=$this->input->post('bookid',true);
                $data['comment']=$this->input->post('comment',true);
                $data['time']=$this->input->post('time',true);

                $this->db->insert('book_review',$data);
        }


        // Save User
        public function save_user(){
            $data = array();
            $data['user_fullname']=$this->input->post('user_fullname',true);
            $data['user_username']=$this->input->post('user_username',true);
            $data['user_email']=$this->input->post('user_email',true);
            $data['user_phone_code']=$this->input->post('user_phone_code',true);
            $data['user_phone']=$this->input->post('user_phone',true);
            $data['user_city']=$this->input->post('user_city',true);
            $data['user_password']=$this->input->post('user_password',true);
            $data['user_conf_password']=$this->input->post('user_conf_password',true);
        //$data['user_phone']=$this->input->post('user_phone',true);

                    $sdata = array();
                    $error = "";
                    $config['upload_path']                  =       'images/users/';
                    $config['allowed_types']                =       'gif|jpg|jpeg|png';
                    $config['max_size']                     =       '100000000';
                    $config['width']                        =       '5000';
                    $config['height']                       =       '5000';
                    $this->load->library('upload', $config);

                

                    if( ! $this->upload->do_upload('user_dp')){
                            $error = $this->upload->display_errors();
                    }
                    else{
                            $sdata = $this->upload->data();
                            $data['user_dp'] = $config['upload_path'].$sdata['file_name'];
                    }
                    // $this->db->where('admin_password',md5($password));
                    $this->db->insert('user_info',$data);
                        

        } 
        public function edit_user_info(){
                $data = array();
                $user_id = $this->input->post('user_id',true);
                $data['user_fullname']=$this->input->post('user_fullname',true);
                $data['user_username']=$this->input->post('user_username',true);
                $data['user_email']=$this->input->post('user_email',true);
                $data['user_phone_code']=$this->input->post('user_phone_code',true);
                $data['user_phone']=$this->input->post('user_phone',true);
                $data['user_city']=$this->input->post('user_city',true);
                $data['user_password']=$this->input->post('user_password',true);
                $data['user_conf_password']=$this->input->post('user_conf_password',true);

                $this->db->WHERE('user_id',$user_id);
                $this->db->update('user_info',$data);
        }
        public function edit_dp(){
                $data = array();
                $user_id = $this->input->post('user_id',true);

                $sdata = array();
                    $error = "";
                    $config['upload_path']                  =       'images/users/';
                    $config['allowed_types']                =       'gif|jpg|jpeg|png';
                    $config['max_size']                     =       '100000000';
                    $config['width']                        =       '5000';
                    $config['height']                       =       '5000';
                    $this->load->library('upload', $config);

                

                    if( ! $this->upload->do_upload('user_dp')){
                            $error = $this->upload->display_errors();
                    }
                    else{
                            $sdata = $this->upload->data();
                            $data['user_dp'] = $config['upload_path'].$sdata['file_name'];
                    }

                $this->db->WHERE('user_id',$user_id);
                $this->db->update('user_info',$data);
        }

            
        
        public function user_login_check($username,$password)
	{
                $this->db->SELECT('*');
                $this->db->FROM('user_info');
                $this->db->WHERE('user_username',$username);
                $this->db->WHERE('user_password',$password);
               // $this->db->WHERE('admin_password',md5($password));
                $query_result = $this->db->get();
                $result = $query_result->row();
                return $result;
        }


        public function upload_book_info(){
                $data = array();
                $data['book_title'] = $this->input->post('book_title', true);
                $data['book_author'] = $this->input->post('book_author', true);
                $data['book_type'] = $this->input->post('book_type', true);
                $data['book_cover_artist'] = $this->input->post('book_cover_artist', true);

                $data['book_publisher'] = $this->input->post('book_publisher', true);
                $data['book_publish_year'] = $this->input->post('book_publish_year', true);
                $data['book_media_type'] = $this->input->post('book_media_type', true);
                $data['book_pages'] = $this->input->post('book_pages', true);
                $data['book_description'] = $this->input->post('book_description', true);
                $data['country'] = $this->input->post('country', true);
                

                $data['post_by_id'] = $this->input->post('post_by_id', true);
                $data['post_feedback'] = $this->input->post('post_feedback', true);
                $data['status'] = $this->input->post('status', true);
                $data['create_at'] = $this->input->post('create_at', true);

                $sdata = array();
                        $error = "";
                        $config['upload_path']                  =       'images/upload_book_images/';
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

                $this->db->insert('book_info',$data);
                $this->db->WHERE('book_info'.'book_type'=='book_category'.'category_id');


        }

        public function profile_info_by_id($user_id){
                $this->db->SELECT('*');
                $this->db->FROM('user_info');
                $this->db->WHERE('user_id',$user_id);
                $query_result = $this->db->get();
                $result = $query_result->result();
                return $result;
        }

        public function upload_book_by_id($user_id){
                $this->db->SELECT('*');
                $this->db->FROM('book_info');
                
                $this->db->WHERE('post_by_id',$user_id);
                $query_result = $this->db->get();
                $result = $query_result->result();
                return $result;
        }

        public function update_book_info(){
                $data = array();
                $book_id = $this->input->post('book_id',true);
                $data['book_title'] = $this->input->post('book_title', true);
                $data['book_author'] = $this->input->post('book_author', true);
                $data['book_type'] = $this->input->post('book_type', true);
                $data['book_cover_artist'] = $this->input->post('book_cover_artist', true);

                $data['book_publisher'] = $this->input->post('book_publisher', true);
                $data['book_publish_year'] = $this->input->post('book_publish_year', true);
                $data['book_media_type'] = $this->input->post('book_media_type', true);
                $data['book_pages'] = $this->input->post('book_pages', true);
                $data['book_description'] = $this->input->post('book_description', true);
                $data['country'] = $this->input->post('country', true);
                $data['post_feedback'] = $this->input->post('post_feedback', true);

                $sdata = array();
                        $error = "";
                        $config['upload_path']                  =       'images/upload_book_images/';
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

                $this->db->WHERE('book_id',$book_id);
                $this->db->update('book_info',$data);      
 
        }


        public function delete_book_by_user($book_id){
                $this->db->WHERE('book_id', $book_id);
                $this->db->delete('book_info');
        }
        

}
