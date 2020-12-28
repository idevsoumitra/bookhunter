<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="card">
                <div class="card-header">
                    <h5 style="font-size: 15px; text-transform: uppercase;">User Module</h5> <hr>
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
                                    <th scope="col">Address</th>
                                    
                                    
                                    <!-- <th scope="col">Edit</th>
                                    <th scope="col">Delete</th> -->
                                </tr>
                            </thead>

                            <tbody style="font-size: 12px;">
                            <?php
                                foreach($all_user_info as $row_user){

                                
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $row_user->user_id ;?></th>
                                    <td class="tbl"><a href=""><?php echo $row_user->user_fullname ;?></a></td>
                                    <td><?php echo $row_user->user_username ;?></td>
                                    
                                    <td><?php echo $row_user->user_email ;?></td>
                                    <td><?php echo $row_user->user_phone_code.' '.$row_user->user_phone ;?></td>
                                    <td><?php echo $row_user->user_city ;?></td>
                                    <!-- <td>
                                        <a href="" class="btn btn-info " title="Update"><i class="fa fa-edit" ></i></a>
                                    </td>
                                    <td>
                                        <form action="code.php" method="POST">
                                            <input type="hidden" name="delete_id" value="">
                                            <button type="submit" name="register_delete_btn" class="btn btn-danger" title="Delete"><i class="fa fa-eraser"></i></button>
                                        </form>
                                    </td> -->
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