<div>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="front-end/images/bannar3.jpg" class="d-block w-100" alt="bannar">
                <div class="carousel-caption">
                    <h2 class="animated bounceInRight" style="animation-delay: 1s;">Book <span>Hunter</span></h2>
                    <h3 class="animated bounceInLeft" style="animation-delay: 2s;">Here you can keep with the information of your saved book.</h3>
                    <p class="animated bounceInRight" style="animation-delay: 3s;"><a href="" style="visibility: hidden;" >Contact us</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="front-end/images/bannar5.jpg" class="d-block w-100" alt="bannar">
                <div class="carousel-caption">
                    <h2 class="animated zoomIn" style="animation-delay: 1s;">Book <span>Hunter</span></h2>
                        <h3 class="animated fadeInUp" style="animation-delay: 2s;">Through it a book lover will be able to see book reviews.</h3>
                        <p class="animated zoomIn" style="animation-delay: 3s;"><a href="#" style="visibility: hidden;">Contact us</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="front-end/images/bannar6.jpg" class="d-block w-100" alt="bannar">
                <div class="carousel-caption">
                    <h2 class="animated zoomIn" style="animation-delay: 1s;">Book <span>Hunter</span></h2>
                    <h3 class="animated fadeInLeft" style="animation-delay: 2s;">To learn more about this site visit the BLOG</h3>
                    <p class="animated zoomIn" style="animation-delay: 3s;"><a href="#">Click here</a></p>
                </div>
            </div>
        </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    <div class="container-fluid search_form" >
        
        <form action="<?php echo base_url()?>search-filter" method="post">
            <div class="row">

                <div class="col-12 col-sm-12 col-md-4 grp">
                    <span class="src_label">Search By name</span>
                    <input name="book_title" type="text" class="form-control" placeholder="Book Name" id="book_name">
                </div>


                <div class="col-12 col-sm-12 col-md-3 grp">
                    <span class="src_label">Search by Author</span>
                    <input name="book_author" type="text" class="form-control" placeholder="Author Name" id="author_name">
                </div>


                <div class="col-12 col-sm-12 col-md-3 grp">
                    <span class="src_label">Find by Category</span>
                    <center>
                        <select name="book_type" class="custom-select custom-select-sm">
                            <option class="opt" value="" selected>Choose Publisher</option>
                            <?php
                                foreach($all_category as $category_row){
                                    ?>
                                
                                <option value="<?php echo $category_row->category_id ; ?>"> <?php echo $category_row->category_name; ?> </option>
                            
                            <?php }
                            ?>
                        </select>
                    </center>
                </div>
                <div class="col-12 col-sm-12 col-md-2 grp">
                <center>
                    <input type="submit" name="filter" class="btn btn-info src_btn" onkeyup="success()" id="src_btn" value="Find">
                    <!-- <button type="submit" class="btn btn-info src_btn">Find</button> -->
                </center>
                </div>
            </div>
        </form>
        
    </div>
    
    <div class="container mt-5 mb-5" style="margin : 0 auto">
        <div class="row">  
            <?php foreach($all_book as $row) { 
                    if(isset($row->book_cover)){
                        $image = $row->book_cover;
                    }
                if(empty($row->book_cover)){
                        $image = "front-end/images/book_sample.gif";
                    }
            ?>
            
                <div class="col-md-4 load_more">
                    <div class="card card-cascade card-ecommerce wider mt-2">
                        <div class="view view-cascade overlay">
                            <img class="card-img-top" style="height: 300px" src="<?=base_url($image) ;?>"alt="">
                            <a href="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        
                        <div class="card-body view-cascade overlay index_card">
                    
                            <h4 class="card-title"><strong><?php echo $row->book_title  ;?></strong></h4>
                            <p class="card-text">Author: <span><?php echo $row->book_author  ;?> </span></p>
                            <p class="card-text">Genre : <span><?php echo $row->category_name;?></span></p>

                            <!-- <?php echo base_url();?>edit-book/<?php echo $row_book->book_id;?> -->
                            
                            <a href="<?php echo base_url();?>view-book/<?php echo $row->book_id?>" class="btn btn-outline-info btn-sm text-center">View More</a>
 
                        </div>
                        
                    </div> <!---Card---->
                </div> <!---Column----->
                
            <?php  } ?>
        </div> <!---Row---->
        <div class="row load_btn">
            
                <button class="btn loadMore">Load More</button>
            
        </div>
         
    </div> <!---Container---->

    <div class="container">
        <div class="row aim_section p-3">
            <div class="col-md-6">
                    <img src="front-end/images/aim_banner.jpg" alt="">
            </div>
            <div class="col-md-6">
                    <h2><span>Our Aim</span></h2>
                    <p> Our aim is to make the information of a book available to everyone. 
                        So that everyone can easily know the information of a book, and above all the information 
                        of the book shows interest in reading the book. <br><br><br>
                    </p>
                    <a href="<?php echo base_url()?>blog" class="aim_btn">View More</a>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row aim_section2">
            <h2>The Top Rated Books</h2>
        </div>
        <div class="row blog">
            <div class="col-md-12">
                <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#blogCarousel" data-slide-to="1"></li>
                    </ol>

                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        
                        <div class="carousel-item active">
                            <div class="row">
                                <?php foreach($book_by_top_rating as $rate_row){
                                    if(isset($rate_row->book_cover)){
                                        $image = $rate_row->book_cover;
                                    }
                                    if(empty($rate_row->book_cover)){
                                        $image = "front-end/images/book_sample.gif";
                                    }  
                                ?>

                                    
                                <div class="col-md-3">
                                    <p></p>
                                        <a href="<?php echo base_url();?>view-book/<?php echo $rate_row->book_id?>">
                                            <img src="<?=base_url($image) ;?>" style="max-width: 100%" alt="Image">
                                            <div class="blog_text">
                                                <p><?php echo $rate_row->book_title;?></p>
                                            </div>
                                        </a>
                                </div>
                                <?php } ?>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!---Row --->
    </div> <!---Container---->
    

    <!---Counter Section--->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="four col-md-4">
                <div class="counter-box colored"> <i class="fas fa-book"></i> <span class="counter"><?php echo $count_book; ?></span>
                    <p>Total Books</p>
                </div>
            </div>
            <div class="four col-md-4">
                <div class="counter-box colored"> <i class="fab fa-soundcloud"></i> <span class="counter">3275</span>
                    <p>Visit Site</p>
                </div>
            </div>
            <div class="four col-md-4">
                <div class="counter-box colored"> <i class="fas fa-user"></i> <span class="counter"><?php echo $count_member; ?></span>
                    <p>Total Member</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Counter Section -->
</div>




<!-- javascript -->


