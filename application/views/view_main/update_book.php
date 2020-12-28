<div style="width: 100%; height: 90px"></div>
<?php if(!empty($this->session->userdata('user_id'))){ ?>
<div class="container register mb-2" style="margin: 0 auto">
    <div class="row">
        <!-- <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <p>Create Your Book Information</p>
            
        </div> -->
        <div class="col-md-12 register-right">
            
            <div class="tab-content" id="myTabContent">
                <form action="<?php echo base_url()?>update-book-info" method="post" enctype="multipart/form-data">
                    <?php foreach($book_info_by_id as $row){?>
                        <div class="row register-form">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php {
                                        if(isset($row->book_cover)){
                                            $img = $row->book_cover;
                                        }
                                        if(empty($row->book_cover)){
                                            $img = "front-end/images/user.jpg";
                                        }
                                    ?>
                                    <div class="col-md-12">
                                        <div class="profile-img">
                                            <img src="<?=base_url($img);?>" alt=""  style="width: 120px;height: 120px"/>
                                        </div>
                
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            
                            <?php
                                $message = $this->session->userdata('message');
                                if($message){?>
                                    <div class="form-group" id="dismiss">  <?php      

                                        echo "<span class='alert alert-success ml-3 mt-3'>$message</span>";
                                        $this->session->unset_userdata('message');
                                ?> </div> <?php
                                }
                            ?>
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                <input type="file" class="form-control mt-3" style="height: 40px;font-size:15px" title="Update Cover" name="book_cover" >
                                </div>
                            </div>
                            <div class="col-md-6"> 
                                <input type="hidden" value="<?php echo $row->book_id;?>" name="book_id">
                                <div class="form-group">
                                    <input type="text" value="<?php echo $row->book_title;?>" placeholder="Book Title *" class="form-control" name="book_title" required />
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Book Author *" name="book_author" value="<?php echo $row->book_author ;?>"  required/>
                                </div>
                                <div class="form-group">
                                    <select name="book_type" id="" class="form-control" required>
                                        <option value="">Choose Book Genre</option>
                                        <option value="<?php echo $row->category_id ;?>" selected="selected"><?php echo $row->category_name ;?></option>
                                        
                                        <?php foreach($all_category as $cat_row){
                                        ?>
                                            <option value="<?php echo $cat_row->category_id ; ?>"><?php echo $cat_row->category_name;?></option>

                                        <?php } ?>
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Cover Artist" value="<?php echo $row->book_cover_artist;?>" name="book_cover_artist"/>
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Book Publisher " value="<?php echo $row->book_publisher ;?>" name="book_publisher"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Publish Year " value="<?php echo $row->book_publish_year ;?>" name="book_publish_year"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Book Media Type " value="<?php echo $row->book_media_type ;?>" name="book_media_type"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Pages" value="<?php echo $row->book_pages ;?>" name="book_pages"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Country" value="<?php echo $row->country ;?>" name="country"/>
                                </div>
                                
                                
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="book_description" class="form-control" placeholder="Book Subject" id="" rows="3"><?php echo $row->book_description ;?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="post_feedback" class="form-control" placeholder="Your Feedback" id="" cols="10" minrows="2" rows="3"><?php echo $row->post_feedback ;?></textarea>
                                </div>
                            </div>
                            <input type="submit" class="btnRegister"  value="Update"/>
                        </div>
                    <?php } ?>
                </form>
                
            </div>
        </div>
    </div>

</div>

<?php }
    else{ ?>
        <div class="page-wrap d-flex flex-row align-items-center">
            <div class="container mb-5 pb-5">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <span class="display-1 d-block">404</span>
                        <div class="mb-4 lead">Oops! We can't seem to find the page you are looking for.</div>
                        <a href="<?php echo base_url(); ?>" class="btn btn-link">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
   <?php }
?>