
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $title;?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo DOMAIN_NAME;?>/front/assets/img/favicon.png" rel="icon">
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

<main id="main">

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container">

    <div class="row">

      <div class="col-lg-8">
        
        <div class="owl-carousel portfolio-details-carousel">
          
          <img src="<?php echo DOMAIN_NAME?>back/uplode/<?php echo $data['image']?>" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-4 portfolio-info">
        <h3>Project information</h3>
        <ul>
          <li><strong>Category</strong>: <?php echo $cat['name']?></li>
          <li><strong>Client</strong>: <?php echo $data['client']?></li>
          <li><strong>Project date</strong>: <?php echo $data['date']?></li>
          <li><strong>Project URL</strong>: <a href="<?php echo $data['url']?>"><?php echo $data['url']?></a></li>
        </ul>

        <p>
        <?php echo $data['details']?>
        </p>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
<!-- --- -->
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo DOMAIN_NAME;?>/front/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo DOMAIN_NAME;?>/front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo DOMAIN_NAME;?>/front/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?php echo DOMAIN_NAME;?>/front/assets/vendor/php-email-form/validate.js"></script>
<script src="<?php echo DOMAIN_NAME;?>front/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo DOMAIN_NAME;?>/front/assets/vendor/venobox/venobox.min.js"></script>
<script src="<?php echo DOMAIN_NAME;?>/front/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="<?php echo DOMAIN_NAME;?>/front/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo DOMAIN_NAME;?>/front/assets/js/main.js"></script>

</body>

</html>