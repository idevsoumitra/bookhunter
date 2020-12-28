<div class="container mt-2">
    <div class="card mb-3">
        <img class="card-img dashboard_bannar" src="front-end/images/dashboard_bannar.jpg" alt="Card image cap">
        
        <div class="card-body">
            <h5 class="card-title">BOOKHUNTER</h5>
            <p class="card-text"><small class="text-muted">A New Experience!!</small></p>
        </div>
    </div>
    <div class="row d_row">
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <div class="card-counter primary">
                    <i class="fas fa-book-reader"></i>
                        <span class="count-numbers"><?php echo $count_book ;?></span>
                        <span class="count-name">All Books</span>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card-counter danger">
                    <i class="fas fa-user-tie"></i>
                        <span class="count-numbers"><?php echo $count_user ;?></span>
                        <span class="count-name">Our Member</span>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card-counter success">
                        <i class="fa fa-database"></i>
                        <span class="count-numbers"><?php echo $count_admin ;?></span>
                        <span class="count-name">Total Admin</span>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card-counter info">
                        <i class="fas fa-star-half-alt"></i>
                        <span class="count-numbers"><?php echo $count_review;?></span>
                        <span class="count-name">Reviews</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card-group">
    <?php
        foreach($all_admin_info as $admin_row){
            // $pass = $admin_row->admin_password;
            // echo $pass;
        
    ?>
        <div class="col-md-4 col-lg-4 cd">
            <div class="card ">
                <img class="card-img" src="<?php echo $admin_row->admin_image ; ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $admin_row->admin_name ; ?></h5>
                    <p class="card-text">Username: <span><?php echo $admin_row->admin_username ; ?></span></p>
                    <p class="card-text">Email: <span><?php echo $admin_row->admin_email ; ?></span></p>
                    <p class="card-text">Phone: <span><?php echo $admin_row->admin_phone ; ?></span></p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-outline-dark btn-sm">View Profile</a>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- <div class="col-md-4 col-lg-4 cd">
        <div class="card ">
            <img class="card-img" src="images/small_bannar.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Soumitra</h5>
                <p class="card-text">Username: <span>Soumitra.jr</span></p>
                <p class="card-text">Email: <span>Soumitra.jr@gmail.com</span></p>
                <p class="card-text">Phone: <span>01745696945</span></p>
                
            </div>
            <div class="card-footer">
                ADMIN
            </div>
        </div>
    </div>
    <div class="col-md-4 col-lg-4 cd">
        <div class="card ">
            <img class="card-img" src="images/small_bannar.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Soumitra</h5>
                <p class="card-text">Username: <span>Soumitra.jr</span></p>
                <p class="card-text">Email: <span>Soumitra.jr@gmail.com</span></p>
                <p class="card-text">Phone: <span>01745696945</span></p>
                
            </div>
            <div class="card-footer">
                ADMIN
            </div>
        </div>
    </div> -->
</div>