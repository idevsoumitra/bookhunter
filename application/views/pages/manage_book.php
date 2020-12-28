<div class="container mt-2" style="padding: 0; margin: 0">
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
    <div class="row" style="padding: 0; margin: 0">
        <div class="col-md-12 mb-5">
            <div class="card">
                
                <div class="card-body">
                    <div class="table-responsive" >
                        <table class="table table-striped" style="width:100%" id="tbl">
                            <thead style="font-size: 12px;">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Book Title</th>
                                    <th scope="col">Book Author</th>
                                    <th scope="col">Book Type</th>
                
                                    <th scope="col">Status</th>
                                    
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 12px;">
                                <?php
                                    foreach($all_book_info as $row_book){   
                                ?>

                                    <tr>
                                        <th scope="row"><?php echo $row_book->book_id; ?></th>
                                        <td class="tbl"><a href=""><?php echo $row_book->book_title; ?></a></td>
                                        <td><?php echo $row_book->book_author; ?></td>
                                        <td><?php echo $row_book->category_name; ?></td>
                                        
                                        <td> 
                                            <?php
                                                
                                                $status = $row_book->status;
                                                if($status == 1)
                                                { ?>
                                                    <a href="admin/update_status?sid=<?php echo $row_book->book_id;?>&sval=<?php echo $row_book->status; ?>" class="btn btn-success">Active</a>
                                                <?php }
                                                else
                                                { ?>
                                                    <a href="admin/update_status?sid=<?php echo $row_book->book_id;?>&sval=<?php echo $row_book->status; ?>" class="btn btn-danger">Inactive</a>
                                                <?php }
                                            ?>
                                            
                                        </td>

                                        
                                        <td>
                                            <a href="<?php echo base_url();?>delete-book/<?php echo $row_book->book_id;?>" class="btn btn-danger t_btn " title="Delete" id="delete"><i class="fa fa-eraser" ></i></a>
                                        </td>
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