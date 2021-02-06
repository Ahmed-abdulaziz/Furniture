<?php

use projectmvc\model\portfolio;

require "header.php";?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <?php
          $x=0;
          foreach($sliders as $slider){
        ?>
        <div class="carousel-item <?php if($x == 0){ echo 'active';} ?>" style="background-image: url(<?php echo DOMAIN_NAME;?>/back/uplode/<?php echo $slider['image'];?>)">
          <div class="carousel-container">
            <!-- <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Sailor</span></h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div> -->
          </div>
        </div>
        <?php $x++; }?>
   

        

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>Eum ipsam laborum deleniti velitena</h2>
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
            </ul>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">

            <?php 
              foreach($brand as $b){
            ?>
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo DOMAIN_NAME;?>/back/uplode/<?php echo $b['image']?>" class="img-fluid" alt="">
          </div>
            <?php }?>
          

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Service</h2>
          <p>The Services We Offer</p>
        </div>

        <div class="row">
          <?php foreach($services as $s){?>
          <div class="col-md-6">
            <div class="icon-box">
              <?php echo $s['icone'];?>
              <h4><a href="#"> <?php echo $s['name'];?></a></h4>
              <p> <?php echo $s['text'];?></p>
            </div>
          </div>
          <?php }?>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Recent Works</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <?php foreach($category as $c){?>
              <li data-filter=".filter-<?php echo $c['name']?>"><?php echo $c['name']?></li>
              <?php }?>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
        <?php foreach($category as $c){
            $protfilo=new portfolio();
            $ps=$protfilo->selectwhere('categoryid',$c['id']);
            foreach($ps as $p){
          ?>
          <div  class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $c['name']?>">
            <div class="portfolio-wrap" style= "object-fit: cover;height: 200px;" >
              <img src="<?php echo DOMAIN_NAME;?>/back/uplode/<?php echo $p['image']?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?php echo $c['name']?></h4>
                <div class="portfolio-links">
                  <a href="<?php echo DOMAIN_NAME;?>/back/uplode/<?php echo $p['image']?>" data-gall="portfolioGallery" class="venobox" title="<?php echo $c['name']?>"><i class="bx bx-plus"></i></a>
                  <a href="<?php echo DOMAIN_NAME?>maincontroller/portfoliodetails/<?php echo $p['id']?>" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php } }?>
         

         


        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <?php require "footer.php";?>