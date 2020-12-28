<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="front-end/images/logo/23012019-36.png">
        <title>BOOKHUNTER</title>
    
        <!-- bootstrap link -->
        <link rel="stylesheet" href="front-end/css/bootstrap.min.css">
    
        <!-- Custom Css -->
        <link rel="stylesheet" href="front-end/style/header.css">
        <link rel="stylesheet" href="front-end/style/footer_style.css">
        <link rel="stylesheet" href="front-end/style/admin_login.css">
        
    
        <!-- Awesome Font -->
        <link rel="stylesheet" href="front-end/font-awesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="front-end/font-awesome/css/solid.css">
        <link rel="stylesheet" href="front-end/font-awesome/css/brands.css">
        <!-- <link rel="stylesheet" href="font-awesome/css/solid.min.css"> -->
    
        <script src="front-end/font-awesome/js/fontawesome.min.js"></script>
        <script src="front-end/font-awesome/js/solid.js"></script>
        <script src="front-end/font-awesome/js/brands.js"></script>
    </head>
    <body>
        <div class="container-fluid header" style="height: 80px; background-color: aqua;">
            <header>
                <a class="navbar-brand" href="<?php echo base_url();?>"><img src="front-end/images/logo/23012019-36.png"  alt="Logo"></a>
                <div class="toggle" onclick="toggleMenu();"></div>
                <ul class="menu">
                    <li><a class="nav-link" href="<?php echo base_url();?>">Go to Site</a></li>
                    <!-- <li><a class="nav-link" href="#about">About</a></li>
                    <li><a class="nav-link" href="#services">Services</a></li>
                    <li><a class="nav-link" href="#work">Work</a></li>
                    <li><a class="nav-link" href="#contact">Contact</a></li> -->
                    
                </ul>
            </header>
        </div>
        <!-- Main Content -->
        <div class="container-fluid">
            <div class="row main-content bg-success text-center">
                <div class="col-md-4 text-center company__info">
                    <span class="company__logo">
                        <h2><span class="fa fa-user-lock"></span></h2>
                        <!-- <img src="images/logo/23012019-36.png" alt=""> -->
                    </span>
                    <h4 class="company_title">Book Hunter</h4>
                </div>
                <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
                    <div class="container-fluid">
                        <div class="row">
                            <h2 class="ad_log_text">Admin Login</h2>
                        </div>
                        <hr style="margin: 0; padding: 0;">
                        <div class="row">
                            <?php
                                $message = $this->session->userdata('message');
                                if($message){
                                    echo "<span class='alert alert-danger mt-2'>$message</span>";
                                    $this->session->unset_userdata('message');
                                }
                                else{
                                    $logout_message = $this->session->userdata('logout_message');
                                }
                                
                                
                                if(isset($logout_message)){
                                    echo "<span class='alert alert-warning mt-2 ' >$logout_message</span>";
                                    $this->session->unset_userdata('logout_message');
                                }
                                else
                            ?>
                        </div>
                        
                        <div class="row">
                            <form control="" action="<?php echo base_url() ?>admin-login" method="post" class="form-group">
                                <div class="row">
                                    <input type="text" name="username" id="username" class="form__input" placeholder="Username" autocomplete="on" required>
                                </div>
                                <div class="row">
                                <!-- <span class="fa fa-lock"></span> -->
                                    <input type="password" name="password" id="password" class="form__input" placeholder="Password" required>
                                </div>
                                <!-- <div class="row">
                                    <input type="checkbox" name="remember_me" id="remember_me" class="remember_me">
                                    <label for="remember_me">Remember Me!</label>
                                </div> -->
                                <div class="row">
                                    <input type="submit" value="LOGIN" class="ad_btn">
                                </div>
                            </form>
                        </div>
                        <div class="row reg_sug">
                            <p>Don't have an account? <a href="#">Register Here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="container-fluid" style="padding: 0; margin: 0;">
            <div class="row" style="padding: 0; margin: 0;" >
                <div class="col-sm-4 f_part1">
                    <img src="front-end/images/logo/23012019-36.png" class="icon" alt="">
                    <p>To Hire a Books From Friends</p>
                </div>
                <div class="col-sm-4 f_part2">
                    <h3>Contact</h3> <hr>
                    <a href="#" > <i class="fab fa-facebook ff" ></i></a>
                    <a href="#" > <i class="fab fa-google ff"></i></a>
                    <a href="#" > <i class="fab fa-twitter ff"></i></a>
                    <a href="#" > <i class="fab fa-linkedin ff"></i></a>
                    <a href="#" ></a> <i class="fab fa-youtube ff"></i></a>
                  
                </div> 
                <div class="col-sm-4 f_part3">
                    <h3>Elegant Contact</h3>
                    <hr>
                    <form action="">
                      <input type="text" class="form-control" name="que_email" placeholder="Type Your Email">
                      <textarea name="que_des" class="form-control" id="" cols="30" rows="3" placeholder="Type Message"></textarea>
                      <button class="btn btn-dark btn-sm">Send</button>
                    </form>
                </div>
            </div>
            <!-- Copyright -->
              <div class="footer-copyright text-center py-2">
                  <p>2020_Copyright@<span>Soumitra</span></p>
              </div>
            <!-- Copyright -->
      
          </footer>


    <script src="front-end/js/jquery-3.5.1.slim.min.js"></script>
    <script src="front-end/js/popper.min.js"></script>
    <script src="front-end/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        // window.addEventListener('scroll',function(){
        //     var header = document.querySelector('header');
        //     header.classList.toggle('sticky',window.scrollY > 0);
        // });

        function toggleMenu() {
            var menuToggle = document.querySelector('.toggle');
            var menu = document.querySelector('.menu');
            menuToggle.classList.toggle('active');
            menu.classList.toggle('active');
        }
    </script>
        
    </body>
</html>