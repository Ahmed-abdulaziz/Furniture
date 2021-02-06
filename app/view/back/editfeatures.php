
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
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Features</a></li>
                                            <li class="breadcrumb-item active">Edit Features</li>
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
                                <form method="post" action="<?php echo DOMAIN_NAME;?>featurescontroller/update/<?php echo $data['id']?>" enctype="multipart/form-data">
                    
                                            <div class="form-group row">
                                                <label for="example-url-input" class="col-sm-2 col-form-label text-right">Subject</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="subject"  value="<?php echo $data['subject'];?>" id="example-url-input" required>
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label text-right">Type</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="type" value="<?php echo $data['type'];?>"  id="example-date-input" >

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label text-right">Description</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="text" value="<?php echo $data['text'];?>"  id="example-date-input" required>
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