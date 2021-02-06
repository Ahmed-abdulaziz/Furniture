


<?php require "header.php";

   
?>

<!-- --- -->

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Update</h2>
      <ol>
        <li><a href="<?php echo DOMAIN_NAME;?>maincontroller/home">Home</a></li>
        <li>Update</li>
      </ol>
    </div>

    <div class="d-flex justify-content-between align-items-center">
     
      
    </div>
  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">
<!-- 
    <div>
      <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
    </div> -->

    <div class="row mt-5">

     
      <div class="col-lg-12 mt-5 mt-lg-0">

        <form action="<?php echo DOMAIN_NAME;?>homecontroller/updatedata" method="post" >
          <div class="form-row">
          <div class="col-md-6 form-group">
              <input type="text" name="name" value="<?php echo $data->name;?>"  class="form-control" id="name" placeholder="Your name" data-rule="minlen:4" required />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" name="email" class="form-control" value="<?php echo $data->email;?>" id="email" placeholder="Your email" data-rule="minlen:4" required />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="password" class="form-control" name="pass" value="<?php echo $data->password;?>" id="Password" placeholder="Your password" data-rule="password"  required />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="text" name="phone" value="<?php echo $data->phone;?>" class="form-control" id="phone" placeholder="Your phone" data-rule="minlen:4" required />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="text" name="address" class="form-control" value="<?php echo $data->address;?>" id="address" placeholder="Your address"  required />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="text" name="age" class="form-control" value="<?php echo $data->age;?>" id="age" placeholder="Your age"  required />
              <div class="validate"></div>
            </div>
          </div>
          
          
          
          <div class="text-center"><button class="btn get-started-btn" type="submit">Update</button></div>
        </form>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- --- -->

<?php require "footer.php";?>