<div class="container mt-5">
    <div class="row" style="padding: 0; margin: 0;">
        
        <div class="col-md-12 register-right">
            <?php
                $message = $this->session->userdata('message');
                if($message){?>
                    <div class="form-group">  <?php      

                        echo "<span class='alert alert-success ml-3 mt-3'>$message</span>";
                        $this->session->unset_userdata('message');
                ?> </div> <?php
                }
            ?>

            <form class="form-horizontal" action="<?php base_url()?>save-admin" method="post" enctype="multipart/form-data">

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="borrow" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading mb-3">Add Admin!</h3>
                        <div class="row register-form">
                            <div class="col-md-12">
                                
                                <div class="form-group">
                                    <label for="fileInput" class="control-label">Name</label>
                                    <input type="text" placeholder="Enter Name" class="form-control" name="admin_name" required >
                                </div>

                                <div class="form-group">
                                <label for="fileInput" class="control-label">Username</label>
                                    <input type="text" placeholder="Enter Username" class="form-control" name="admin_username" required >
                                </div>

                                <div class="form-group">
                                <label for="fileInput" class="control-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Enter Email" name="admin_email" required>
                                </div>

                                <div class="form-group">
                                <label for="fileInput" class="control-label">Cell</label>
                                    <input type="number" class="form-control" placeholder="Enter Cell Number" name="admin_phone" >
                                </div>

                                <div class="form-group"> 
                                <label for="fileInput" class="control-label">Password</label>
                                    <input type="password" class="form-control" placeholder="Enter Password" name="admin_password" required>
                                </div>
                                <div class="form-group">
                                    <label for="fileInput" class="control-label">Admin Photo</label>
                                    <input type="file" class="form-control" name="admin_image">
                                </div>
                                <!-- <input type="submit" class="btn btn-dark btn-sm"  value="Edit"/> -->
                                <button type="submit" class="btn btn-primary">Create</button>
                                
                            </div>
                            
                        </div>
                    </div>
                    <!---!!---->
                </div>
            </form>
        </div>
    </div>
</div>