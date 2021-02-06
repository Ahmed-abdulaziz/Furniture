<?php require "header.php";?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li><a href="<?php echo DOMAIN_NAME;?>maincontroller/home">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>
       
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">
      <?php foreach($data as $d){?>
          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="<?php echo DOMAIN_NAME;?>back/uplode/<?php echo  $d['image']?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href=" <?php echo DOMAIN_NAME;?>maincontroller/blogdetelis/<?php echo  $d['id']?>"><?php echo  $d['subject']?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href=" <?php echo DOMAIN_NAME;?>maincontroller/blogdetelis/<?php echo  $d['id']?>"><?php echo  $d['employee']?></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href=" <?php echo DOMAIN_NAME;?>maincontroller/blogdetelis/<?php echo  $d['id']?>"><time datetime="<?php echo  $d['date']?>"><?php echo  $d['date']?></time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                <?php echo  $d['text']?>
                </p>
                <div class="read-more">
                  <a href="<?php echo DOMAIN_NAME;?>maincontroller/blogdetelis/<?php echo  $d['id']?>">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>
        <?php }?>

        </div>

     

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

<?php require "footer.php";?>