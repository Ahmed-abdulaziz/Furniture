<?php require "header.php";


      
?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Team</h2>
          <ol>
            <li><a href="<?php echo DOMAIN_NAME;?>maincontroller/home">Home</a></li>
            <li>Team</li>
            
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team ">
      <div class="container">

        <div class="row">

       
        <?php
            foreach($team as $t){
          ?>
          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="<?php echo DOMAIN_NAME;?>/back/uplode/<?php echo $t['image']?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?php echo $t['name']?></h4>
                <span><?php echo $t['job']?></span>
                <p><?php echo $t['details']?></p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
            <?php }?>
        

        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

<?php require "footer.php";?>