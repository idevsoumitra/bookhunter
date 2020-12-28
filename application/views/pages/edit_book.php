<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../front-end/images/logo/23012019-36.png">
        <title>BOOKHUNTER</title>
    
        <!-- bootstrap link -->
        <link rel="stylesheet" href="../front-end/css/bootstrap.min.css">

        <!-- Databales -->
        <link rel="stylesheet" href="../front-end/datatable/dataTables.bootstrap4.min.css">
    
        <!-- Custom Css -->
        <!-- <link rel="stylesheet" href="style/addBook_style.css"> -->
        <link rel="stylesheet" href="../front-end/style/header.css">
        <link rel="stylesheet" href="../front-end/style/footer_style.css">
        <link rel="stylesheet" href="../front-end/style/dashboard_style.css">
        
        <!-- Font Awesome CSS -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
        <!-- animated link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    
        <!-- Awesome Font -->
        <link rel="stylesheet" href="../front-end/font-awesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="../front-end/font-awesome/css/solid.css">
        <link rel="stylesheet" href="../front-end/font-awesome/css/brands.css">
        <!-- <link rel="stylesheet" href="font-awesome/css/solid.min.css"> -->
    
        <script src="../front-end/font-awesome/js/fontawesome.min.js"></script>
        <script src="../front-end/font-awesome/js/solid.js"></script>
        <script src="../front-end/font-awesome/js/brands.js"></script>
    </head>
<body>
    <div class="container-fluid header" style="height: 80px;">
        <header>
            <a class="navbar-brand" href="#"><img src="../front-end/images/logo/23012019-36.png"  alt="Logo"></a>
            <div class="toggle" onclick="toggleMenu();"></div>
            <ul class="menu">
                <li><a class="nav-link" href="#home">Go to Site</a></li>
            </ul>
        </header>
    </div>

    <div class="container main_cont">
        <div class="row">
            <aside class="col-md-3 fixed">
                <div class="col-md-12">
                    <div class="admin_log">
                        <h4>Admin Dashboard</h4><hr>
                        <img src="../front-end/images/logo/23012019-36.png" alt="">
                        <h5><a href=""><?php echo $this->session->userdata('admin_name');?></a></h5>
                        <p><a href="<?php echo base_url();?>logout" class="btn btn-outline-warning">Logout</a></p>
                        <hr>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class=" side_nav" id="side">
                        <ul class="nav md-column  justify-content-between" id=>
                            <div class="col-md-12">
                                <li class="nav-item"><a href="<?php echo base_url();?>dashboard" class="nav-link pl-0 ">Dashboard</a></li> <hr>
                                
                            </div>
                            <div class="col-md-12">
                                
                                <li class="nav-item"><a href="<?php echo base_url();?>manage-book" class="nav-link pl-0">Manage Books</a></li>
                                
                            </div>
                            <div class="col-md-12">
                                
                                <li class="nav-item"><a href="<?php echo base_url();?>manage-user" class="nav-link pl-0">Manage Member</a></li>
                                
                            </div>
                            <div class="col-md-12">
                                
                                <li class="nav-item"><a href="dashboard_approve.html" class="nav-link pl-0">Approval Request</a></li>
                                
                            </div>
                            <div class="col-md-12">
                                
                                <li class="nav-item"><a href="<?php echo base_url();?>add-book" class="nav-link pl-0">Add Book</a></li>
                            </div>
                            <div class="col-md-12">  
                                <li class="nav-item"><a href="dashboard_message.html" class="nav-link pl-0">Suggest Box</a></li>
                            </div>
                            <div class="col-md-12">  
                                <li class="nav-item"><a href="<?php echo base_url();?>edit-admin" class="nav-link pl-0">Admin</a></li>
                            </div>
                        </ul>
                    </div>
                </div>
            </aside>
            <main class="col-md-9 tab-pane fade show active"  role="tabpanel" aria-labelledby="home-tab">
                <div class="container mt-5">
                    <div class="row" style="padding: 0; margin: 0;">

                        <?php
                            $message = $this->session->userdata('message');
                            if($message){?>
                                <div class="form-group">  <?php      

                                    echo "<span class='alert alert-success ml-3 mt-3'>$message</span>";
                                    $this->session->unset_userdata('message');
                            ?> </div> <?php
                            }
                        ?>
                        
                        <div class="col-md-12 register-right">
                            
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="borrow" role="tabpanel" aria-labelledby="profile-tab">
                                    <h3 class="register-heading mb-3">Edit Book Information</h3>
                    
                                    <form class="form-horizontal" action="<?php echo base_url() ?>update-book" method="post">
                                        <div class="row register-form">
                                            
                                            <div class="col-md-12">
                                            
                                                
                                                <div class="form-group">
                                                    <p style ="font-size : 12px; color: green; text-transform: uppercase; font-weight:600"> For - <?php echo $all_book_info_by_id->book_purpose; ?></p>  
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" value="<?php echo $all_book_info_by_id->book_title ; ?>" placeholder="Book Title*" name="book_title" required />
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" value="<?php echo $all_book_info_by_id->book_id ; ?>" name="book_id"/>
                                                </div>
                                                <div class="form-group">
                                                    <select id="" class="custom-select" name="book_type" required >
                                                        <option value="<?php echo $all_book_info_by_id->category_id ; ?>"><?php echo $all_book_info_by_id->category_name ; ?></option>
                                                        <option value="">Choose One</option>
                                                    <?php
                                                        foreach( $all_book_category as $row){
                                                    ?>
                                                        <option value="<?php echo $row->category_id ; ?>"><?php echo $row->category_name ; ?></option>
                                                        
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text"  class="form-control" placeholder="Author Name *" value="<?php echo $all_book_info_by_id->book_author ; ?>" name="book_author" required/>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text"  class="form-control" placeholder="Publisher *" value="<?php echo $all_book_info_by_id->book_publisher ; ?>" name="book_publisher"/>
                                                    <!-- <input type="text" style="display:none" name="book_purpose" value="borrow"> -->
                                                </div>
                                                <div class="form-group">
                                                    <pre><textarea id="" cols="30" rows="3" class="form-control" placeholder="Description" name="book_description"><?php echo $all_book_info_by_id->book_description ; ?></textarea></pre>
                                                </div> 
                                                <?php 
                                                    if($all_book_info_by_id->book_purpose == "sell"){
                                                        echo '<div class = "form-group">
                                                                <input placeholder="Enter Price" value="'.$all_book_info_by_id->book_price.'" class="form-control" type="text" name="book_price" id="price_text"/>
                                                              </div>';
                                                    }
                                                
                                                ?>
                                                
                                                <div class="form-group">
                                                    <input type="file" class="form-control" value="Upload Cover" title="Upload Cover" >
                                                </div>
                                                
                                                <input type="submit" class="btn btn-info btn-sm"  value="Update"/>
                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                               
                                <!---!!---->
                            </div>
                            
                        </div>
                    </div>
                </div>
            
            
            </main>
        </div>
        
    </div>
    <footer class="container-fluid" style="padding: 0; margin: 0;">
        <!-- Copyright -->
          <div class="footer-copyright text-center py-2">
              <p>2020_Copyright@<span>Soumitra</span></p>
          </div>
        <!-- Copyright -->
  
    </footer>
    <script src="../front-end/js/jquery-3.5.1.slim.min.js"></script>
    <script src="../front-end/js/popper.min.js"></script>
    <script src="../front-end/js/bootstrap.min.js"></script>
    <script src="../front-end/datatable/jquery.dataTables.min.js"></script>
    <script src="../front-end/datatable/dataTables.bootstrap4.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script>
    // $(document).ready(function(){
    // $("input[type='radio']").(function(){
    // if($(this).val()=="sell")
    // {
    //     $("#price_text").show();
        
    // }
    // else
    // {
    // $("#price_text").hide();
    // }
    // });
    // });
    // </script>

    <!-- <script>
        $(document).ready(function() {
            $('#tbl').DataTable();
        } );
    </script> -->

    <script>
        $(document).ready(function() {
            $('#tbl').DataTable();
        } );
    </script>
    <script>
        window.addEventListener('scroll',function(){
           var header = document.querySelector('header');
           header.classList.toggle('sticky',window.scrollY > 0);
       });
       function toggleMenu() {
           var menuToggle = document.querySelector('.toggle');
           var menu = document.querySelector('.menu');
           menuToggle.classList.toggle('active');
           menu.classList.toggle('active');
       }

   </script>
</body>
</html>