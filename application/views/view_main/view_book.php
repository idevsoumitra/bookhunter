
<div style="width: 100%; height: 100px"></div>
<div class="container" style="padding: 0; margin: 0 auto">
    <div class="row">
        <?php 
            if(isset($wrong)){

                $wrong_msg = array();
                $wrong_msg['wrong'] = "Input Require";
                $this->session->set_userdata($wrong_msg);
                
                   redirect(base_url()); 
                  
            }
        ?>
    </div>
	<div class="row">
        <?php
            if(empty($all_records)){?>
                <div class="alert alert-info" role="alert">
                    No Data Found !
                </div>   
           <?php }
            if(isset($all_records)){
                foreach($all_records as $list_row){
                    if(isset($list_row->book_cover)){
                    $image = $list_row->book_cover;
            }
            if(empty($list_row->book_cover)){
                $image = "front-end/images/card_default.jpg";
            }
        ?>
            <div class="col-lg-4 load_more">
                <div class="our-team-main">
        
                    <div class="team-front">
                        <img src="<?php echo $image?>" class="img-fluid" />
                        <h3><?php echo $list_row->book_title; ?></h3>
                        <h6>--</h6>
                        <p>Author : <span><?php echo $list_row->book_author; ?></span></p>
                        <p>Rating : <span>***</span></p>
                    </div>
        
                    <div class="team-back">
                        <span>
                            <a href="<?php echo base_url();?>view-book/<?php echo $list_row->book_id?>" class="btn btn-info">View Details</a>
                        </span>
                    </div>
        
                </div>
            </div>
        <?php } 
        }
        ?>
       
    </div>
    <div class="row load_btn">
        <button class="btn loadMore">Load More</button>
    </div>
</div>