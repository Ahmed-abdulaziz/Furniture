<?php
            include "header.php";
          
            include "slidebare.php";
            include "navbare.php";
   ?>

<div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Dashboard</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Web Setting</a></li>
                                            <li class="breadcrumb-item active">slidebare</li>
                                        </ol>
                                    </div><!--end col-->
                                   
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                <a href="<?php echo DOMAIN_NAME;?>slidercontroller/add"> <button id="but_add" class="btn btn-success ">Add</button></a>
                                <a href="<?php echo DOMAIN_NAME;?>slidercontroller/edit"> <button id="but_add" class="btn btn-success ">Edit</button></a>

                                     <?php if(!empty($data)){?>
                                    <div class="row">
                                        <div class="col-lg-12 text-center mt-5">
                                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <?php 

                                                        $x=0;
                                                        foreach($data as $d){
                                                    ?>

                                                    <div class="carousel-item <?php if($x == 0){ echo "active";}?>">
                                                        <img src="<?php echo DOMAIN_NAME;?>back/uplode/<?php echo $d['image']?>" class="d-block w-100" alt="...">
                                                    </div>
                                                    <?php $x++;}?>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div><!--end col-->
                                        <!-- <div class="col-lg-5 offset-lg-1 align-self-center">
                                            <div class="p-5">
                                                <span class="bg-soft-pink p-2 rounded">Text Slider</span>
                                                <h1 class="my-4 font-weight-bold">Manage Your Work With <span class="text-primary">Dastone</span>.</h1>
                                                <p class="font-14 text-muted">Dastone is a Bootstrap 4 admin dashboard, 
                                                    It is fully responsive and included awesome features 
                                                    to help build web applications fast and easy.
                                                </p>
                                            </div>
                                        </div>end col -->
                                        
                                    </div><!--end row-->
                                    <?php }?>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
  <?php require_once "footer.php";?>
           
    

