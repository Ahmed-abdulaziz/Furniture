
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php

use projectmvc\core\session;

echo "AMAN | ". $title;?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo DOMAIN_NAME;?>back/assets/images/favicon.ico" rel="icon">
  <link href="<?php echo DOMAIN_NAME;?>front/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo DOMAIN_NAME;?>/front/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo DOMAIN_NAME;?>/front/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo DOMAIN_NAME;?>/front/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo DOMAIN_NAME;?>/front/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo DOMAIN_NAME;?>/front/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo DOMAIN_NAME;?>/front/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo DOMAIN_NAME;?>front/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/brands.min.css" integrity="sha512-dBL5cY4qTt42J1cfabCHTYR7KMztyd+n4t2GhD6EH/MKWJIIHuEYckJ1nHEpTwIaiDkrjzbc6WyiSkdLP+3INQ==" crossorigin="anonymous" />
  <!-- Template Main CSS File -->
  <link href="<?php echo DOMAIN_NAME;?>/front/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sailor - v2.3.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo"><a href="<?php echo DOMAIN_NAME?>maincontroller/home">AMAN</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">

        <ul>
          <li class="active"><a href="<?php echo DOMAIN_NAME?>maincontroller/home">Home</a></li>

          <li class="drop-down"><a href="#">About</a>
            <ul>
              <li><a href="<?php echo DOMAIN_NAME?>maincontroller/about">About Us</a></li>
              <li><a href="<?php echo DOMAIN_NAME?>maincontroller/team">Team</a></li>
              <li><a href="<?php echo DOMAIN_NAME?>maincontroller/testimonials">Testimonials</a></li>

              <!-- <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
            </ul>
          </li>

          <li><a href="<?php echo DOMAIN_NAME?>maincontroller/services">Services</a></li>
          <li><a href="<?php echo DOMAIN_NAME?>maincontroller/portfolio">Portfolio</a></li>
          <li><a href="<?php echo DOMAIN_NAME;?>maincontroller/pricing">Pricing</a></li>
          <li><a href="<?php echo DOMAIN_NAME;?>maincontroller/blog">Blog</a></li>
          <li><a href="<?php echo DOMAIN_NAME;?>maincontroller/contact">Contact</a></li>
      <?php    if(!empty(session::get('user'))){
      ?>
     
          <li class="drop-down"><a href="#"><?php echo session::get('user');?></a>
          <ul>
          <li><a href="<?php echo DOMAIN_NAME;?>homecontroller/update">Update account</a></li>
          <li><a href="<?php echo DOMAIN_NAME;?>homecontroller/logout" class=" ml-auto">Log Out</a></li>

          </ul>
          </li>
      
                <?php }?>
        </ul>

      </nav><!-- .nav-menu -->
          <?php 

          if(empty(session::get('user'))){
          ?>
      <a href="<?php echo DOMAIN_NAME;?>homecontroller/login" class="get-started-btn ml-auto">Get Started</a>
      <?php 
            }?>
      
    </div>
  </header><!-- End Header -->