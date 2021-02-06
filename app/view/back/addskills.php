
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
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Skills</a></li>
                                            <li class="breadcrumb-item active">Add Skills</li>
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
                                <form method="post" action="<?php echo DOMAIN_NAME;?>skillscontroller/insert" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label text-right">Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="name"  id="example-search-input" required>
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="example-url-input" class="col-sm-2 col-form-label text-right">Percentage</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="percentage"  id="example-url-input" required>
                                                </div>
                                            </div> 
                                                 <input type="text" value="<?php echo $id?>" hidden name="teamid">
                                           
                                            
                                            <div class="row">
                                                <div class="col-sm-12 ml-auto text-center">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>                                            
                                        </div>
                                         
                                        </form>

</div>
 
                    
<?php require_once "footer.php";?>