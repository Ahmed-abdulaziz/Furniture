<?php

use projectmvc\model\portfolio;

require "header.php"; ?>



<!-- MAain -->

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Portolio</h2>
      <ol>
        <li><a href="<?php echo DOMAIN_NAME;?>maincontroller/home">Home</a></li>
        <li>Portolio</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Section ======= -->
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
<?php require "footer.php"; ?>