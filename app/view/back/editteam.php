
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
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Testimonials</a></li>
                                            <li class="breadcrumb-item active">Edit Testimonials</li>
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
<div class="row">


                            <div class="col-lg-12">
                                <form method="post" action="<?php echo DOMAIN_NAME;?>teamcontroller/update/<?php echo $data['id']?>" enctype="multipart/form-data">
                                <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label text-right">Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="name"  value="<?php echo $data['name'];?>" id="example-search-input" required>
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="example-url-input" class="col-sm-2 col-form-label text-right">Job</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="job"  value="<?php echo $data['job'];?>" id="example-url-input" required>
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label text-right">Description</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="description" value="<?php echo $data['details'];?>"  id="example-date-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-month-input" class="col-sm-2 col-form-label text-right">Image</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="file" name="image"  id="example-month-input" >
                                                    <input class="form-control" type="text" hidden name="oldimage" value="<?php echo $data['image'];?>"  id="example-month-input" >
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-month-input" class="col-sm-2 col-form-label text-right">Current Image</label>
                                                <div class="col-sm-10">
                                                <img style="width:150px" src="<?php echo DOMAIN_NAME;?>back/uplode/<?php echo $data['image'];?>"/>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 ml-auto text-center">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>                                            
                                        </div>
                                         
                                        </form>

</div>
 
                    
<?php require_once "footer.php";?>