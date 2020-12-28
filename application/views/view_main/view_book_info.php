<div style="width: 100%; padding: 0; height: 80px"></div>

<div class="container mb-2" style="margin: 0 auto; padding: 0">
    <div class="card cd" style="border: none">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    
                    <div class="preview-pic tab-content">
                    <?php foreach($book_info_by_id as $row){ 

                        if(isset($row->book_cover)){
                            $image = $row->book_cover;
                        }
                        if(empty($row->book_cover)){
                            $image = "front-end/images/card_default.jpg";
                        }
                    ?>
                        <div class="tab-pane active" id="pic-1"><img src="<?=base_url($image) ; ?>" /></div>
                    <?php } ?>
                    </div> 
                </div>
                
                    
                <div class="details col-md-6">
                    <?php foreach($book_info_by_id as $row){ ?>
                        <h3 class="book-title"><?php echo $row->book_title ;?></h3>

                        <p>Author: <span><?php echo $row->book_author ;?></span></p>
                        <p>Cover Artist: <span><?php echo $row->book_cover_artist ;?></span></p>
                        <p>Subject: 
                            <span>
                                <?php echo $row->book_description ;?>
                            </span>
                        </p>
                        <p>Country: <span><?php echo $row->country ;?></span></p> 
                        <p>Genre: <span><a href="<?php echo base_url()?>category-list/<?php echo $row->category_id;?>"><?php echo $row->category_name?></a></span></p>
                        <p>Published Data or Year: <span><?php echo $row->book_publish_year ;?></span></p>
                        <p>Publisher: <span><?php echo $row->book_publisher ;?></span></p>
                        <p>Media Type: <span><?php echo $row->book_media_type ;?></span></p>
                        <p>Pages : <span><?php echo $row->book_pages ;?></span></p> 
                        

                        

                        <hr>

                        <?php 
                            if(!empty($this->session->userdata('user_id'))){ ?>
                            <form action="<?php echo base_url()?>save-review" method="post">
                                <div class="rateyo" id= "rating"></div>
                                <input type="hidden" name="rating">



                                <input type="hidden" value="<?php echo $row->book_id; ?>" name="bookid">
                                <input type="hidden" value="<?php echo $this->session->userdata('user_id')?>" name="userid">
                                <input type="hidden" value="<?php date_default_timezone_set("Asia/Dhaka"); echo date("Y-m-d h:i:sa");?>" name="time"> 
                                

                                <div class="form-froup mt-3">
                                    <textarea name="comment" id="" class="form-control" placeholder="Say Something...." rows="3"></textarea>
                                </div>
                                <div class="form-group mt-2">
                                    <input type="submit" class="btn btn-info btn-sm" value="Post">
                                </div>
                            </form>
                        <?php }
                            else{ ?>
                                    <p>You must <a href="#my_login" class=" trigger-btn" data-toggle="modal">Log in</a> 
                                or 
                                
                                    <a href="<?php echo base_url()?>user-register">create an account</a> to review.</p>
                        <?php    }
                        ?>


                        <hr>
                        <h6>Post by : <span><?php echo $row->user_fullname ;?></span></h6>
                        <p style="font-size: 10px"><?php echo $row->create_at?></p>
                        <p class="post_form">
                            feedback :
                                <span>
                                    <?php echo $row->post_feedback ;?>
                                </span>
                        </p>
                    <?php  } ?>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="container" style="margin:0 auto; padding: 0">
    <ul class="list-group list-group-flush">
        <?php foreach($book_review_by_id as $r_row){
            if(isset($r_row->user_dp)){
                $img = $r_row->user_dp;
            }
            if(empty($r_row->user_dp)){
                $img = "front-end/images/user.jpg";
            }
        ?>
        <li class="list-group-item">
            <img class="mt-2 mr-2" src="<?=base_url($img);?>" style="width: 30px; height: 30px; border-radius: 10px" alt="">
            <a ><?php echo $r_row->user_fullname;?></a>
            <p style="font-size: 10px; margin-left: 43px"><?php echo $r_row->time;?></p>
            <br>
            <div class="rateyo ml-4" id= "rateYo_view"
                data-rateyo-rating="<?php echo $r_row->rating?>">
            </div>
            <p class="mt-1 pl-2 ml-4"><?php echo $r_row->comment?></p>
        </li>
        <?php } ?>
       
    </ul>
</div>


<div id="my_login" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="avatar">
                        <!-- <img src="images/admin.jpeg" alt="Avatar"> -->
                        <center>
                            <i class="fa fa-lock mt-3"></i>
                        </center>
                    </div>				
                    <h4 class="modal-title">Login</h4>	
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url()?>user-login" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="user_username" placeholder="Username" required="required" autocomplete="on">		
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="user_password" placeholder="Password" required="required">	
                        </div>        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">SIGN IN</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="tag">
                        <a href="#">Forgot Password?</a>
                    </div> <br>
                    <div class="tag">
                        <span>Don't have an account? <a href="<?php echo base_url()?>user-register"> SIGN UP</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>