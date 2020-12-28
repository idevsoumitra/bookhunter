<div style="width: 100%; height: 50px" class="mb-5"></div>
<?php
    if(!empty($this->session->userdata('user_id'))){?>

<div class="container emp-profile mt-5">
    <form action="<?php echo base_url()?>user-dp-edit" method="post" enctype="multipart/form-data">
        <div class="row">
            <?php foreach($profile_info_by_id as $row){
                if(isset($row->user_dp)){
                    $img = $row->user_dp;
                }
                if(empty($row->user_dp)){
                    $img = "front-end/images/user.jpg";
                }
            ?>
            
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="<?=base_url($img);?>" id="blah" alt=""/>
                        <div class="file btn btn-lg btn-primary">
                                
                            <input type="file" value="<?php echo $row->user_dp?>" id="imgInp" name="user_dp"/>
                            Change Photo

                        </div>
                    </div>
                    <input type="hidden" name="user_id" value="<?php echo $row->user_id;?>">
                    <input type="submit" value="Upload" class="btn btn-primary ml-5" style=" width: auto;padding: 0px 5px;">
                </div>
            <?php } ?>
            <div class="col-md-6">
                <?php foreach($profile_info_by_id as $row){?>
                
                    <div class="profile-head">
                                <h5>
                                    <?php echo $row->user_fullname; ?>
                                </h5>
                                <h6>
                                    <?php echo $row->user_username; ?>
                                </h6>

                                <?php
                                    $message = $this->session->userdata('edit_user_message');
                                    if($message){?>
                                        <div class="alert alert-success alert-dismissible fade show">
                                            <strong><?php echo $message?></strong> 
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        </div>
                                        
                                    <?php  
                                        $this->session->unset_userdata('edit_user_message');
                                    }
                                ?>
                                <!-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">My Books</a>
                            </li>
                        </ul>
                    </div>
                <?php }?>
            </div>
            <div class="col-md-2">
                <bitton type="submit" class="profile-edit-btn" data-toggle="modal" data-target="#exampleModal" name="btnAddMore" data-whatever="@mdo" value="Edit Profile" />EDIT PROFILE</button>
               
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                        <!-- Dark Alert -->
                       
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <?php foreach($profile_info_by_id as $row){?>
                    
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Username: </label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $row->user_username; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email: </label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $row->user_email; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone: </label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $row->user_phone_code.$row->user_phone ; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Address: </label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $row->user_city; ?></p>
                                </div>
                            </div>
                                
                        </div>
                    <?php } ?>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-sm-5 col-5 col-md-5">
                                <label>Book Name</label>
                            </div>
                            <div class="col-sm-5 col-5 col-md-5">
                                <p style="color: black">Author Name</p>
                            </div>
                            
                            <div class="col-sm-2 col-2 col-md-2">
                                <p style="color: black"></p>
                            </div>
                        </div> <hr>
                        <?php foreach($upload_book_by_id as $row){?>
                            <div class="row">
                                <div class="col-sm-5 col-5 col-md-5">
                                    <label><a href="<?php echo base_url();?>view-book/<?php echo $row->book_id?>"><?php echo $row->book_title; ?></a></label>
                                </div>
                                <div class="col-sm-4 col-4 col-md-4">
                                    <p><?php echo $row->book_author; ?></p>
                                </div>
                                <div class="col-sm-1 col-1 col-md-1">
                                     <a href="<?php echo base_url();?>view-book-action/<?php echo $row->book_id?>"><i class="fas fa-list-ul"></i></a>
                                     
                                </div>
                                <div class="col-sm-1 col-1 col-md-1">
                                
                                <a href="<?php echo base_url();?>delete-book-user/<?php echo $row->book_id;?>" id="dlt"><i class="fa fa-eraser" ></i></a>
                                     
                                    
                                </div>
                               
                            </div>
                        <?php } ?>
                                
                    </div>
                </div>
            </div>
        </div>
    </form>           
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="<?php echo base_url()?>edit-user-profile" method="post">                      
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>



                <div class="modal-body p-0 m-auto">
                <?php foreach($profile_info_by_id as $e_row){?>

                    <input type="hidden" name="user_id" value="<?php echo $e_row->user_id?>">
                    
                    <div class="form-group" style="width: 49%; float: left">
                        <label class="col-form-label">Name</label>
                        <input type="text" value="<?php echo $e_row->user_fullname; ?>" placeholder="Enter Your Name" class="form-control" name="user_fullname" required>
                    </div>
                    <div class="form-group ml-1" style="width: 49%; float: right">
                        <label for="recipient-name" class="col-form-label">Username</label>
                        <input type="text" value="<?php echo $e_row->user_username; ?>" placeholder="Enter Your Name" class="form-control" name="user_username" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <input type="text" value="<?php echo $e_row->user_email; ?>" placeholder="E-mail" class="form-control" name="user_email" required>
                    </div>

                    <label for="recipient-name" class="col-form-label">Phone</label>
                    <div class="form-group input-group">
                        
                        <select name="user_phone_code" class="custom-select" style="max-width: 80px;">

                            <option  value="<?php echo $e_row->user_phone_code;?>" selected><?php echo $e_row->user_phone_code; ?></option>
                            <option value="">+CC</option>
                            <option value="+88 ">+88 </option>
                            <option value="+91 ">+91</option>
                            <option value="+99 ">+99</option>
                            <option value="+09 ">+09</option>
                        </select>
                        <input type="text" value="<?php echo $e_row->user_phone; ?>" placeholder="Enter Phone Number" name="user_phone" class="form-control" placeholder="Phone number" >
                    </div> 

                    <div class="form-group">
                        <label  class="col-form-label">Address</label>
                        <input type="text" value="<?php echo $e_row->user_city; ?>" placeholder="E-mail" class="form-control" name="user_city">
                    </div>
                    
                    
                    <div class="form-group" style="width: 49%; float: left">
                        <label for="recipient-name" class="col-form-label">Password</label>
                        <input type="password" value="<?php echo $e_row->user_password; ?>" placeholder="Password" class="form-control" name="user_password" required>
                    </div>
                    <div class="form-group ml-1" style="width: 49%; float: right">
                        <label for="recipient-name" class="col-form-label">Confirm Password</label>
                        <input type="password" value="<?php echo $e_row->user_conf_password; ?>" placeholder="Confirm Password" name="user_conf_password"class="form-control" id="recipient-name" required>
                    </div>
                
                    <?php } ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Update">
                </div>
            </div>
        </form>
    </div>
</div>
<?php }
 else{
    echo "<h4><center> 404| Error - Session Out </center><h4>";
} ?>