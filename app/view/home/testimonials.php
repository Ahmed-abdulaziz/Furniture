<?php require "header.php";?>

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Testimonials</h2>
      <ol>
        <li><a href="<?php echo DOMAIN_NAME?>maincontroller/home">Home</a></li>
        <li>Testimonials</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
  <div class="container">

    <div class="row">

      <?php
        foreach($testimonial as $t){
      ?>
      <div class="col-lg-6">
        <div class="testimonial-item">
          <img src="<?php echo DOMAIN_NAME;?>/back/uplode/<?php echo $t['image']?>" class="testimonial-img" alt="">
          <h3><?php echo $t['name']?></h3>
          <h4><?php echo $t['job']?></h4>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            <?php echo $t['text']?>
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
        </div>
      </div>

        <?php }?>
    </div>

  </div>
</section><!-- End Testimonials Section -->

</main><!-- End #main -->

<?php require "footer.php";?>