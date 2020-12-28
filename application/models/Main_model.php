<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {    
        public function all_book()
        {
            $this->db->SELECT('*');
            $this->db->FROM('book_info');
            
            $this->db->join('book_category', 'category_id = book_type','left');
            $this->db->join('user_info', 'user_id = post_by_id');
            $this->db->WHERE('status', 1);
            $query_result = $this->db->get();
            $book_info = $query_result->result();
            return $book_info;
        }       
        // public function all_user($save_data)
        // {
        //     $this->db->SELECT('user_dp');
        //     $this->db->FROM('user_info');
        //     $user = $this->db->get();
        //     $user_res = $user->result();
        //     return $user_res;
        // }       

        public function all_category(){
            $this->db->SELECT('*');
            $this->db->FROM('book_category');
            $query_result = $this->db->get();
            $all_category = $query_result->result();
            return $all_category;
        }
        public function book_by_top_rating(){
            $this->db->SELECT('*');
            $this->db->FROM('book_review');
            $this->db->join('book_info', 'book_id = bookid');

            $query_result = $this->db->get();
            $book_info_by_rating = $query_result->result();
            return $book_info_by_rating;
           
        }

       

        public function getBooks($postData){
            $response = array();
  
            $this->db->select('*');
        
            if($postData['search'] ){
         
              // Select record
              $this->db->where('status', 1);
              $this->db->where("book_title like '%".$postData['search']."%' ");
              $records = $this->db->get('book_info')->result();
        
              foreach($records as $row ){
                $response[] = array("value"=>$row->book_id,"label"=>$row->book_title);
              }
         
            }
            
            return $response;
        }
        public function getAuthors($authorData){
            $response = array();
  
            $this->db->select('*');
        
            if($authorData['search'] ){
         
              // Select record
              $this->db->where("book_author like '%".$authorData['search']."%' ");
              $records = $this->db->get('book_info')->result();
        
              foreach($records as $row ){
                $response[] = array("value"=>$row->book_id,"label"=>$row->book_author);
              }
         
            }
            
            return $response;
        }

        public function getBookFilter($book_title , $book_author, $book_type){
            if(empty($book_type)){
              $sql = "SELECT * FROM `book_info`
                      WHERE `book_title` LIKE '%$book_title%' AND `book_author` LIKE '%$book_author%' AND `status` = 1
                      
                      ORDER BY `book_info`.`book_id`";
            }
            if(!empty($book_type)){
              $sql = "SELECT * FROM `book_info`
                      WHERE `book_title` LIKE '%$book_title%' AND `book_author` LIKE '%$book_author%' AND `book_type`='$book_type'
                      ORDER BY `book_info`.`book_id`";
            }

            $query = $this->db->query($sql);
            return $query->result();
        }

        public function book_info_by_id($book_id){
            $this->db->SELECT('*');
            $this->db->FROM('book_info');
            // $this->db->FROM('book_category');
            // $this->db->FROM('user_info');
            $this->db->join('book_category', 'category_id = book_type','left');
            $this->db->join('user_info', 'user_id = post_by_id');
            $this->db->WHERE('book_id',$book_id);
            $query_result = $this->db->get();
            $result = $query_result->result();
            return $result;
        }
        public function book_action_by_id($book_id){
            $this->db->SELECT('*');
            $this->db->FROM('book_info');

            $this->db->join('book_category', 'category_id = book_type','left');
            
            $this->db->WHERE('book_id',$book_id);
            $query_result = $this->db->get();
            $result = $query_result->result();
            return $result;
        }

        //category_list
        public function get_book_by_category($category_id){
            $this->db->SELECT('*');
            $this->db->FROM('book_info');
            $this->db->join('book_category', 'category_id = book_type', 'left');
            $this->db->where('book_type', $category_id);

            $query_result = $this->db->get();
            $result = $query_result->result();
            return $result;
        }

        public function book_review_by_id($book_id){

            $sql="SELECT * FROM `book_review`,`user_info` WHERE `bookid`='$book_id' AND user_info.user_id = book_review.userid  ";
            $query = $this->db->query($sql);
            return $query->result();
        }
         public function avg_review($book_id){
            $sql = "SELECT avg(`rating`) FROM `book_review` WHERE `bookid` = '$book_id'";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function get_all_testimonials($limit, $start)
        {
            $this->db->limit($limit, $start);
            $this->db->select('T.*');
            $this->db->from('book_info AS T');
            $this->db->where(array('T.status'=>1));
            $q = $this->db->get();
            if($q->num_rows()>0)
            {
                return $q->result();
            }
            else 
            {
                return false;
            }
        }




        // Count Function
        public function count_book(){
            $this->db->SELECT('*');
            $this->db->FROM('book_info');
            $query_result = $this->db->get();
            $admin_count =$query_result->num_rows();
            return $admin_count;
        }
        public function count_member(){
            $this->db->SELECT('*');
            $this->db->FROM('user_info');
            $query_result = $this->db->get();
            $admin_count =$query_result->num_rows();
            return $admin_count;
        }
        // Count Function




        // Contact 
        public function send_contact(){
            $data = array();
            
            $data['contact_sender']= $this->input->post('contact_sender');
            $data['contact_sender_email']= $this->input->post('contact_sender_email');
            $data['contact_sender_phone']= $this->input->post('contact_sender_phone');
            $data['contact_message']= $this->input->post('contact_message');

            $this->db->insert('contact_info',$data);
        }


        
        

}
