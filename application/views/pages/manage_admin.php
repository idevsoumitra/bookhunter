<div class="container mt-2">
    <div class="row mt-3">
    <?php
            $message = $this->session->userdata('message');
            if($message){?>
                <div class="form-group">  <?php      

                    echo "<span class='alert alert-success ml-3 mt-3'>$message</span>";
                    $this->session->unset_userdata('message');
            ?> </div> <?php
            }
         ?>
    </div>
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="card">
                <div class="card-header">
                    <!-- <h4>
                        <a href="<?php base_url()?>add-book" class="btn c_btn float-right">Create Book Information</a>
                    </h4> -->
                    
                </div>
                <div class="card-body">
                    <div class="table-responsive" >
                        <table class="table table-striped" style="width:100%" id="tbl">
                            <thead style="font-size: 12px;">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Image</th>
                                    
                                    <!-- <th scope="col">Edit</th>
                                    <th scope="col">Delete</th> -->
                                </tr>
                            </thead>
                            <tbody style="font-size: 12px;">
                                <?php
                                    foreach($all_admin_info as $row_admin){   
                                ?>

                                    <tr>
                                        <td><?php echo $row_admin->admin_id; ?></td>
                                        <th scope="row"><?php echo $row_admin->admin_name; ?></th>
                                        <td class="tbl"><a href=""><?php echo $row_admin->admin_username; ?></a></td>
                                        <td><?php echo $row_admin->admin_email; ?></td>
                                        <td><?php echo $row_admin->admin_phone; ?></td>
                                        <td> <img style="width: 30px; height:30px; border-radius: 50%" src="<?php echo $row_admin->admin_image; ?>" alt=""> </td>
  
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>