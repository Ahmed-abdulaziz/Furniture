<?php

use projectmvc\core\model;
use projectmvc\model\category;

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
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Blogs</a></li>
            
                                        </ol>
                                    </div><!--end col-->
                                    
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                   <?php if(!empty($msg)){?>
                        <div class="alert alert-primary" role="alert">
                       <?php echo  $msg;?>
                        </div>
                        <?php }?>
                        <a href="<?php echo DOMAIN_NAME;?>blogcontroller/add"> <button id="but_add" class="btn btn-success mb-5 ">Add</button></a>

                        <div class="row">

                            <?php foreach($data as $d){?>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="blog-card">
                                        <img src="<?php echo DOMAIN_NAME;?>back/uplode/<?php echo $d['image']?>" alt="" class="img-fluid rounded"/>
                                        <h4 class="my-3">
                                            <a href="" class=""><?php echo $d['subject']?></a>
                                        </h4>
                                        <p class="text-muted"><?php echo $d['text']?></p>
                                        <hr class="hr-dashed">
                                        <div class="d-flex justify-content-between">
                                            <div class="meta-box">
                                                <div class="media">
                                                    <!-- <img src="assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle mr-2">                                        -->
                                                    <div class="media-body align-self-center text-truncate">
                                                        <h6 class="m-0 text-dark"><?php echo $d['employee']?></h6>
                                                        <ul class="p-0 list-inline mb-0">
                                                            <li class="list-inline-item"><?php echo $d['date']?></li>
                                                            <li class="list-inline-item">by <a href="">admin</a></li>
                                                            <li class="list-inline-item">Comments <a href=""><?php 
                                                                $count=model::db()->count("SELECT id FROM blog_comments WHERE blogid  = ?", [$d['id']]);
                                                                echo $count;
                                                            ?></a></li>
                                                        </ul>
                                                    </div><!--end media-body-->
                                                </div>                                            
                                            </div><!--end meta-box-->
                                            <div class="align-self-center">
                                            <a href="<?php echo DOMAIN_NAME;?>blogcontroller/edit/<?php echo $d['id']?>"> <i class="fas fa-edit mr-2 h3"></i></a> 
                                             <a href="<?php echo DOMAIN_NAME;?>blogcontroller/delete/<?php echo $d['id']?>"><i class="far fa-trash-alt h3"></i></a> 
                                            </div>
                                        </div>                                        
                                    </div><!--end blog-card--> 
                                                               
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->
                        <?php }?>
                        
                                               
                    </div><!--end row-->
<?php require_once "footer.php";?>