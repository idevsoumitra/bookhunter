<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?=base_url('front-end/images/logo/23012019-36.png');?>" rel="icon">
    <title>BOOKHUNTER</title>

    <!-- bootstrap link -->
    <link href="<?=base_url('front-end/css/bootstrap.min.css');?>" rel="stylesheet">
     <!-- ui jquery -->
     <link href="<?=base_url('front-end/css/jquery-ui.css');?>" rel="stylesheet">
    <!---rateyo---->
     <link href="<?=base_url('front-end/css/jquery.rateyo.min.css');?>" rel="stylesheet">
     <link href="<?=base_url('front-end/css/flickity.css');?>" rel="stylesheet">
     

    <!-- Custom Css -->

    <link href="<?=base_url('front-end/style/style.css');?>" rel="stylesheet">
    <link href="<?=base_url('front-end/style/footer_style.css');?>" rel="stylesheet">
    <link href="<?=base_url('front-end/css/jquery.adminlte.min.css');?>" rel="stylesheet">
    

    <link href="<?=base_url('front-end/style/search_filter.css');?>" rel="stylesheet">

    <link href="<?=base_url('front-end/style/view_book_info_style.css');?>" rel="stylesheet">

    <link href="<?=base_url('front-end/style/upload_book_style.css');?>" rel="stylesheet">

    <link href="<?=base_url('front-end/style/view_profile_style.css');?>" rel="stylesheet">

    <link href="<?=base_url('front-end/style/about_section.css');?>" rel="stylesheet">
    <link href="<?=base_url('front-end/style/upcoming.css');?>" rel="stylesheet">
    <link href="<?=base_url('front-end/style/category.css');?>" rel="stylesheet">

   



   
    <!-- Font Awesome CSS -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- animated link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <!-- Awesome Font -->
    <link rel="stylesheet" href="<?=base_url('front-end/font-awesome/css/fontawesome.min.css');?>">
    <link rel="stylesheet" href="<?=base_url('front-end/font-awesome/css/solid.css');?>">
    <link rel="stylesheet" href="<?=base_url('front-end/font-awesome/css/brands.css');?>">
    <!-- <link rel="stylesheet" href="font-awesome/css/solid.min.css"> -->

    <script src="<?=base_url('front-end/font-awesome/js/fontawesome.min.js');?>"></script>
    <script src="<?=base_url('front-end/font-awesome/js/solid.js');?>"></script>
    <script src="<?=base_url('front-end/font-awesome/js/brands.js');?>"></script>

    <style>
        .ui-menu-item{
            width: 100%;
            font-size: 12px;
        }

        .format-pre{
            font-size: 8px;
            text-transform: uppercase;
        }
        #load{
            width: 100%;
            height: 100%;
            position: fixed;
            overflow: hidden;
            text-indent: 100%;
            background: #e0e0e0 url('front-end/images/loading.gif') no-repeat center;
            z-index: 100;
            opacity: 0.4;
            background-size: 8%;
        }
        .load_more{
            display: none;
        }
        
    </style>
</head>

<body>
        
    <div id="load">Loading...</div>
    <!-- <div id="load">Loading....</div> -->
    <?php $this->load->library('form_validation'); ?>
    <header>
        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?=base_url('front-end/images/logo/23012019-36.png');?>" class="animated swing delay-4s img-responsive" alt="Logo"></a>
        
        
        <div class="toggle" onclick="toggleMenu();"></div>
        <ul class="menu header_menu">
            
            <li><a class="nav-link <?php if($this->uri->segment(1)==""){echo "active";}?>" href="<?php echo base_url(); ?>">Home</a></li>
            <li><a class="nav-link <?php if($this->uri->segment(1)=="category"){echo "active";}?>" href="<?php echo base_url()?>category">Book Category</a></li>
            <li><a class="nav-link <?php if($this->uri->segment(1)=="blog"){echo "active";}?>" href="<?php echo base_url()?>blog">Blog</a></li>
            <li><a class="nav-link <?php if($this->uri->segment(1)=="upcoming"){echo "active";}?>" href="<?php echo base_url();?>upcoming">Book Shop</a></li>
            <li><a class="nav-link <?php if($this->uri->segment(1)=="contact"){echo "active";}?>" href="<?php echo base_url();?>contact">Contact</a></li>
                            
            <?php
                if(!empty($this->session->userdata('user_id'))){
                    ?>
                    <li>
                        <!--Dropdown primary-->
                        <div class="dropdown">

                            <!--Trigger-->
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    
                                    <img src="<?=base_url($this->session->userdata('user_dp'));?>" style="width: 30px; height: 30px;margin-right:10px "  alt="">
                                    <?php echo $this->session->userdata('user_username')?>
                            </button>

                            <!--Menu-->
                            <div class="dropdown-menu dropdown-primary">
                                <a class="dropdown-item di" href="<?php echo base_url()?>user_id/<?php echo $this->session->userdata('user_id')?>">View Profile</a>
                                <a class="dropdown-item di" href="<?php echo base_url()?>add-book">Upload Book</a>
                               
                                <a class="dropdown-item di" href="<?php echo base_url();?>user-logout">Logout</a>
                            </div>
                        </div>
                        <!--/Dropdown primary-->

                    </li>
                <?php }
                else{ ?>
                    <li >
                        <a href="#myModal" class="btn btn-info login_btn trigger-btn" data-toggle="modal">
                        LOGIN
                        </a> 
                    </li>
                <?php }
            ?> 
               
        </ul>
    </header>
    
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="avatar">
                        <!-- <img src="images/admin.jpeg" alt="Avatar"> -->
                        <center>
                            <i class="fa fa-lock mt-3"></i>
                        </center>
                    </div>				
                    <h4 class="modal-title">Login</h4>	
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url()?>user-login" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="user_username" placeholder="Username" required="required" autocomplete="on">		
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="user_password" placeholder="Password" required="required">	
                        </div>        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">SIGN IN</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="tag">
                        <a href="#">Forgot Password?</a>
                    </div> <br>
                    <div class="tag">
                        <span>Don't have an account? <a href="<?php echo base_url()?>user-register"> SIGN UP</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- <div class="container-fluid" style="height:100px; width: 100%;"></div> -->
    <?php
        if(isset($index_main_content)){
            echo $index_main_content;
        }
    ?>
    <footer class="container-fluid" style="padding: 0; margin: 0;">
        <div class="row" style="padding: 0; margin: 0;" >
            <div class="col-sm-4 f_part1" style="margin-top: 100px">
                <img src="<?=base_url('front-end/images/logo/23012019-36.png');?>" class="icon" alt="">
                <p>A Platform to store Book Information</p>
          </div>
          
            <div class="col-sm-4 f_part3">
                <center>
                <a href="<?php echo base_url()?>blog">Introduction</a> <br> <hr>
                <a href="<?php echo base_url()?>blog">Term & Policy</a> <br> <hr>
                <a href="<?php echo base_url()?>blog">User Conduct</a> <br> <hr>
                <a href="<?php echo base_url()?>blog">Privacy</a>
                </center>
            </div>
          <div class="col-sm-4 f_part2">
              <h3>Contact</h3> <hr>
              <a href="#" > <i class="fab fa-facebook ff" ></i></a>
              <a href="#" > <i class="fab fa-google ff"></i></a>
              <a href="#" > <i class="fab fa-twitter ff"></i></a>
              <a href="#" > <i class="fab fa-linkedin ff"></i></a>
              <a href="#" ></a> <i class="fab fa-youtube ff"></i></a>
              <div style="width: 100%; height: 150px; margin-top: 10px">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57903.12952437052!2d91.825962218947!3d24.899837316894484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375054d3d270329f%3A0xf58ef93431f67382!2sSylhet!5e0!3m2!1sen!2sbd!4v1608971559230!5m2!1sen!2sbd" width="100%" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
            
          </div> 
      </div>
      <!-- Copyright -->
        <div class="footer-copyright text-center py-2">
            <p>2020_Copyright@<span>Soumitra</span></p>
        </div>
      <!-- Copyright -->

    </footer>


    <!--Core javascript -->

    <script src="<?=base_url('front-end/js/jquery-3.5.1.slim.min.js');?>"></script>
    <script src="<?=base_url('front-end/js/popper.min.js');?>"></script>
    <script src="<?=base_url('front-end/js/bootstrap.min.js');?>"></script>

    <script src="<?=base_url('front-end/js/bootbox.min.js');?>"></script>
    
    <script src="<?=base_url('front-end/js/sweetalert2@10.js');?>"></script>

    
    <script src="<?=base_url('front-end/js/jquery.min.js');?>"></script>
    
    
    <script src="<?=base_url('front-end/js/jquery-ui.min.js');?>"></script>
    <script src="<?=base_url('front-end/js/flickity.pkgd.min.js');?>"></script>
 
    <script src="<?=base_url('front-end/js/jquery.rateyo.min.js');?>"></script>  
    

    <!-- Delete Book -->


    <script>
        $(document).on("click","#dlt", function(e){
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
        function readURL(input) {
            if (input.files && input.files[0]) {
                
                    var reader = new FileReader();
                    reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
            }

            $("#imgInp").change(function() {
                
                readURL(this);
                
            });
    </script>


    <script>
        $(".load_more").slice(0, 9).show(); 
        $(".loadMore").on("click",function(){
            
            $(".load_more:hidden").slice(0, 3).fadeIn(); 

            if($(".load_more:hidden").length ==0)
            {
                $(".loadMore").fadeOut(); 
            }
        });
    </script>

    <script>
        $('#blogCarousel').carousel({
				interval: 5000
		});
    </script>

    <script>
        setTimeout(function() {
            $('#dismiss').fadeOut();
        }, 5000);
    </script>

    <script>
        $(document).ready(function() {
            $('#load').fadeOut();
        });
    </script>


    <script>      
        $(function () {
            $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
                var rating = data.rating;
                $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
                $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
            });
        });
    </script>


    <!-- Scrollspy -->
    <script type="text/javascript">
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
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->

    <?php 
    
        $wrong =  $this->session->userdata('wrong');
        if(isset($wrong)){ ?>

            <script>
                const Toast = Swal.mixin({
                        toast: true,
                        position: 'top',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                    icon: 'warning',
                    title: 'Provide information for search '
                })
            </script>

        <?php $this->session->unset_userdata('wrong'); }
    ?>
    <?php 
    
        $contact_msg =  $this->session->userdata('contact_message');
        if(isset($contact_msg)){ ?>

            <script>
                const Toast = Swal.mixin({
                        toast: true,
                        position: 'top',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                    icon: 'success',
                    title: 'Message sent successfully ! '
                })
            </script>

        <?php $this->session->unset_userdata('contact_message'); }
    ?>

    <!-- //Invalid Pass -->
    <?php 
    
        $wrong =  $this->session->userdata('error_message');
        if(isset($wrong)){ ?>

            <script>
                const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                    icon: 'error',
                    title: '<?php echo $this->session->userdata('error_message'); ?>'
                })
            </script>

        <?php $this->session->unset_userdata('error_message'); }
    ?>

    <!-- invalid pass  -->


    <?php
        $message = $this->session->userdata('message');
        if($message){?>

            <script>
                var str = "<?php echo $this->session->userdata('message');?>" ;
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    html:  str ,
                    showConfirmButton: false,
                    timer: 10000,

                    customClass: {
                        popup: 'format-pre'
                    }
                })
            </script>
        <?php       
            $this->session->unset_userdata('message');
        }
    ?>

<script type='text/javascript'>
  $(document).ready(function(){
  
     $( "#book_name" ).autocomplete({
      source: function( request, response ) {
       // Fetch data
       $.ajax({
        url: "<?=base_url()?>fetch_name",
        type: 'post',
        dataType: "json",
        data: {
         search: request.term
        },
        success: function( data ) {
         response( data );
        }
       });
      },
      select: function (event, ui) {
       // Set selection
       $('#book_name').val(ui.item.label); // display the selected text
       
       return false;
      }
     });

  });

  $(document).ready(function(){
  
    $( "#author_name" ).autocomplete({
    source: function( request, response ) {
        // Fetch data
        $.ajax({
        url: "<?=base_url()?>fetch_author",
        type: 'post',
        dataType: "json",
        data: {
        search: request.term
        },
        success: function( data ) {
        response( data );
        }
        });
    },
    select: function (event, ui) {
        // Set selection
        $('#author_name').val(ui.item.label); // display the selected text
        return false;
    }
    });

    });
</script>

<!-- button disable  -->
<script>
    function success() {
	 if(document.getElementById("textsend").value==="") { 
            document.getElementById('src_btn').disabled = true; 
        } else { 
            document.getElementById('src_btn').disabled = false;
        }
    }
</script>
<!-- button disable  -->

<!-- Counter Section  -->
<script>
    $(document).ready(function() {

        $('.counter').each(function () {
            $(this).prop('Counter',0).animate({
            Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });

    });
</script>
<!-- Counter Section  -->




    

       
    
</body>
</html>