
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3">
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
                <ul class="list-group category_block">
                <?php foreach($all_category as $cat_row){?>
                    <li class="list-group-item"><a href="<?php echo base_url()?>category-list/<?php echo $cat_row->category_id;?>"><?php echo $cat_row->category_name; ?></a></li>
                <?php } ?>
                </ul>
            </div>
            <!-- <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase">Top Rated Book</div>
                <div class="card-body">
                    <img class="img-fluid" src="https://dummyimage.com/600x400/55595c/fff" />
                    <h5 class="card-title">Product title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="bloc_left_price">99.00 $</p>
                </div>
            </div> -->
        </div>
        <div class="col" id="myTable">
            <div class="row">

                <?php 
                

                if(isset($get_book_by_category)){
                    if(empty($get_book_by_category)){?>
                        <div class="alert alert-info" role="alert">
                            No Book Available ! 
                        </div>   
                    <?php }
                    foreach($get_book_by_category as $book_row){
                        if(isset($book_row->book_cover)){
                            $img = $book_row->book_cover;
                        }
                        if(empty($book_row->book_cover)){
                            $img = "front-end/images/user.jpg";
                        }
                ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top"  src="<?=base_url($img);?>"  alt="Card image cap" style="width: 100%; height: 300px">
                        <div class="card-body">
                            <h4 class="card-title"><a href="<?php echo $book_row->book_id?>" title="View Product"><?php echo $book_row->book_title; ?></a></h4>
                            <div class="row">
                                
                                <div class="col">
                                    <p>Author: <span> <?php echo $book_row->book_author; ?> </span></p>
                                    <p>Genre: <?php echo $book_row->category_name; ?> <span> </span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } 
                }

                else{
                    foreach($all_book as $book_row){?>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card">
                                <img class="card-img-top" src="<?php echo $book_row->book_cover; ?>" alt="Card image cap" style="width: 100%; height: 300px">
                                <div class="card-body">
                                    <h4 class="card-title"><a href="<?php echo $book_row->book_id?>" title="View Product"><?php echo $book_row->book_title; ?></a></h4>
                                    <div class="row">
                                        
                                        <div class="col">
                                            <p>Author: <span> <?php echo $book_row->book_author; ?> </span></p>
                                            <p>Genre: <?php echo $book_row->category_name; ?> <span> </span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php    }
                }
                ?>
               
                <!-- <div class="col-12">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div> -->
            </div>
        </div>

    </div>
</div>