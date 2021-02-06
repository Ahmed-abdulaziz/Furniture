<?php require "header.php";?>

<!-- Main -->

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Services</h2>
      <ol>
        <li><a href="<?php echo DOMAIN_NAME?>maincontroller/home">Home</a></li>
        <li>Services</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

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

<!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container">

    <div class="section-title">
      <h2>Features</h2>
      <p>Check our Features</p>
    </div>

    <div class="row">
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column">

            <?php 
              $x=0;
              foreach($features as $f){
            ?>
          <li class="nav-item">
            <a class="nav-link  <?php if($x == 0){ echo " active ".""."show";}?>" data-toggle="tab" href="#tab-<?php echo $f['type']."".$f['id'];?>"><?php echo $f['type']?></a>
          </li>
          <?php $x++ ; }?>
        </ul>
      </div>
      <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="tab-content">
        <?php 
              $t=0;
              foreach($features as $f){
            ?>
          <div class="tab-pane <?php if($t == 0){ echo " active ".""."show";}?>" id="tab-<?php echo  $f['type']."".$f['id'];?>">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3><?php echo  $f['subject']?></h3>
                <!-- <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> -->
                <p><?php echo  $f['text']?></p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="<?php echo DOMAIN_NAME;?>/back/uplode/<?php echo  $f['image']?>" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <?php $t++ ;}?>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Features Section -->

</main><!-- End #main -->


<!-- End Main -->
<?php require "footer.php";?>