<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="front-end/images/logo/23012019-36.png">
        <title>BOOKHUNTER</title>
    
        <!-- bootstrap link -->
        <link rel="stylesheet" href="front-end/css/bootstrap.min.css">

        <!-- Databales -->
        <link rel="stylesheet" href="front-end/datatable/dataTables.bootstrap4.min.css">
    
        <!-- Custom Css -->
        <!-- <link rel="stylesheet" href="style/addBook_style.css"> -->
        <link rel="stylesheet" href="front-end/style/header.css">
        <link rel="stylesheet" href="front-end/style/footer_style.css">
        
        
        <!-- Font Awesome CSS -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
        <!-- animated link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    
        <!-- Awesome Font -->
        <link rel="stylesheet" href="front-end/font-awesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="front-end/font-awesome/css/solid.css">
        <link rel="stylesheet" href="front-end/font-awesome/css/brands.css">
        <!-- <link rel="stylesheet" href="font-awesome/css/solid.min.css"> -->
    
        <script src="front-end/font-awesome/js/fontawesome.min.js"></script>
        <script src="front-end/font-awesome/js/solid.js"></script>
        <script src="front-end/font-awesome/js/brands.js"></script>

        <link rel="stylesheet" href="front-end/style/dashboard_style.css">
    </head>
<body>
    <div class="container-fluid header" style="height: 80px;">
        <header>
            <a class="navbar-brand" href="<?php echo base_url();?>"><img src="front-end/images/logo/23012019-36.png"  alt="Logo"></a>
            <div class="toggle" onclick="toggleMenu();"></div>
            <ul class="menu">
                <li><a class="nav-link" href="<?php echo base_url();?>">Go to Site</a></li>    
            </ul>
        </header>
    </div>

    <div class="container-fluid main_cont">
        <div class="row">
            <aside class="col-md-3 fixed" style="padding: 0">
                <div class="col-md-12">
                    <div class="admin_log">
                        <h4><p class="<?php if($this->uri->segment(1)=="dashboard"){echo "active";}?>" style="background: #252b2e"><a href="<?php echo base_url();?>dashboard" class="nav-link" style="color: white">Dashboard</a></p></h4> <hr>
                        <!-- <img src="front-end/images/logo/23012019-36.png" alt=""> -->
                        <img src="<?php echo $this->session->userdata('admin_image');?>" alt="">
                        <h5><a href=""><?php echo $this->session->userdata('admin_name');?></a></h5>
                        <a href="<?php echo base_url();?>logout" class="btn btn-outline-warning btn-sm">Logout</a>
                        
                    </div>
                </div>
                <div class="col-md-12">
                    <div class=" side_nav" id="side">
                        <ul class="nav md-column  justify-content-between" id=>
                            <div class="col-md-12">
                                <center>
                                <img src="<?=base_url("front-end/images/online.gif"); ?>" style="width: 50%; height: 25px" alt="">
                                </center>
                                
                            </div>
                            <div class="col-md-12">
                                
                                <li class="nav-item <?php if($this->uri->segment(1)=="manage-book"){echo " active";}?>"><a href="<?php echo base_url();?>manage-book" class="nav-link ">Manage Books</a></li>
                                
                            </div>
                            <div class="col-md-12">
                                
                                <li class="nav-item <?php if($this->uri->segment(1)=="manage-user"){echo "active";}?>"><a href="<?php echo base_url();?>manage-user" class="nav-link">User Module</a></li>
                                
                            </div>
                            <div class="col-md-12">  
                                <li class="nav-item <?php if($this->uri->segment(1)=="add-admin"){echo "active";}?>"><a href="<?php echo base_url();?>add-admin" class="nav-link ">Add Admin</a></li>
                            </div>
                            <div class="col-md-12">  
                                <li class="nav-item <?php if($this->uri->segment(1)=="manage-admin"){echo "active";}?>"><a href="<?php echo base_url();?>manage-admin" class="nav-link">Admin Module</a></li>
                            </div>
                            <div class="col-md-12">  
                                <li class="nav-item <?php if($this->uri->segment(1)=="message-box"){echo "active";}?>"><a href="<?php echo base_url();?>message-box" class="nav-link ">Messages</a></li>
                            </div>
                        </ul>
                    </div>
                </div>
            </aside>
            <main class="col-md-9 tab-pane fade show active"  role="tabpanel" aria-labelledby="home-tab">
                <?php
                    if(isset($dashboard_main_content)){
                        echo $dashboard_main_content;
                    }
                ?>
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
    <script src="front-end/js/jquery-3.5.1.slim.min.js"></script>
    <script src="front-end/js/popper.min.js"></script>
    <script src="front-end/js/bootstrap.min.js"></script>
    <script src="front-end/datatable/jquery.dataTables.min.js"></script>
    <script src="front-end/datatable/dataTables.bootstrap4.min.js"></script>
    <!-- <script type="text/javascript" scr="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script> -->
    <script src="front-end/js/bootbox.min.js"></script>

    <script>
        $(document).on("click","#delete", function(e){
            e.preventDefault();
            var link = $(this).attr("href");
            bootbox.confirm("Are you want to delete!! ", function(confirmed){
               
                if(confirmed){
                    window.location.href = link;
                };
            });
        });
    </script>

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