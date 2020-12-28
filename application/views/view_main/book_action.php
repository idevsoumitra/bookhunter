<div style="width: 100%; padding: 0; height: 80px"></div>
<?php
    if(!empty($this->session->userdata('user_id'))){?>
<div class="container mb-2" style="margin: 0 auto; padding: 0">
    <div class="card cd" style="border: none">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    
                    <div class="preview-pic tab-content">
                    <?php foreach($book_action_by_id as $row){ 

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
                    <?php foreach($book_action_by_id as $row){ ?>
                        <h3 class="book-title"><?php echo $row->book_title ;?></h3>
                        <p>Author: <span><?php echo $row->book_author ;?></span></p>
                        <p>Cover Artist: <span><?php echo $row->book_cover_artist ;?></span></p>
                        <p>Subject: 
                            <span>
                                <?php echo $row->book_description ;?>
                            </span>
                        </p>
                        <p>Country: <span><?php echo $row->country ;?></span></p> 
                        <p>Genre: <span><?php echo $row->category_name?></span></p>
                        <p>Published Data or Year: <span><?php echo $row->book_publish_year ;?></span></p>
                        <p>Publisher: <span><?php echo $row->book_publisher ;?></span></p>
                        <p>Media Type: <span><?php echo $row->book_media_type ;?></span></p>
                        <p>Pages : <span><?php echo $row->book_pages ;?></span></p> 
                        <hr>
                        <div class="row">
                            <div class="col-md-">
                                <p><a href="<?php echo base_url()?>edit-book-info/<?php echo $row->book_id;?>" class='btn btn-outline-info btn-sm'><i class="fas fa-edit"></i></a></p>
                                
                            </div>
 
                        </div>
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
            <a href="<?php echo base_url()?>user_id/<?php echo $this->session->userdata('user_id')?>"><?php echo $r_row->user_fullname;?></a>
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

        <?php }
            else{
                echo "<h4><center> 404| Error </center><h4>";
            }
        ?>