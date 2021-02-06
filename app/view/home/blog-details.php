<?php

use projectmvc\core\model;
use projectmvc\model\users;

require "header.php";?>

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2><?php echo $data['subject']?></h2>
      <ol>
        <li><a href="<?php echo DOMAIN_NAME;?>maincontroller/home">Home</a></li>
        <li><a href="<?php echo DOMAIN_NAME;?>maincontroller/blog">Blog</a></li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
  <div class="container">

    <div class="row">

      <div class="col-lg-12  entries">

        <article class="entry entry-single">

          <div class="entry-img text-center">
            <img src="<?php echo DOMAIN_NAME;?>back/uplode/<?php echo $data['image']?>" alt="" class="img-fluid">
          </div>

          <h2 class="entry-title">
          <?php echo $data['subject']?>
          </h2>

          <div class="entry-meta">
            <ul>
              <li class="d-flex align-items-center"><i class="icofont-user"></i><?php echo $data['employee']?></li>
              <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <time datetime="<?php echo $data['date']?>"><?php echo $data['date']?></time></li>
              <li class="d-flex align-items-center"><i class="icofont-comment"></i> <?php echo $count;?> Comments</li>
            </ul>
          </div>

       


        </article><!-- End blog entry -->

       

        <div class="blog-comments">

          <h4 class="comments-count"><?php echo $count;?> Comments</h4>
            <?php 
                  foreach($comments as $com){
              ?>
          <div id="comment-1" class="comment clearfix">
            <h3>

                    <?php
                     $user= new users();
                     $name=$user->select('id', $com['userid']);
                     echo $name['name'];
                    
                    ?>
            </h3>
            <time datetime="2020-01-01"><?php echo $com['date']?></time>
            <p>
                    <?php echo $com['comment']?>
            </p>

          </div><!-- End comment #1 -->
                <?php }?>

          <div class="reply-form">
            <h4>Leave a Reply</h4>
            <form method="post" action="<?php echo DOMAIN_NAME;?>blogcontroller/insertcomment/">
             
              <div class="row">
                <div class="col form-group">
                  <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                  <input  type="text" hidden name="userid"  value="<?php echo $_SESSION['id']?>">
                  <input type="text" hidden name="blogid"  value="<?php echo $data['id']?>">
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Post Comment</button>

            </form>

          </div>

        </div><!-- End blog comments -->

      </div><!-- End blog entries list -->

      <!-- <div class="col-lg-4">

        <div class="sidebar">

          <h3 class="sidebar-title">Search</h3>
          <div class="sidebar-item search-form">
            <form action="">
              <input type="text">
              <button type="submit"><i class="icofont-search"></i></button>
            </form>

          </div>

        </div>

      </div> -->
      <!-- End blog sidebar -->

    </div>

  </div>
</section><!-- End Blog Section -->

</main><!-- End #main -->

<?php require "footer.php";?>