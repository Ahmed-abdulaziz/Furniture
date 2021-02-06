
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
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Slider</a></li>
                                            <li class="breadcrumb-item active">Edit Slider</li>
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
                        <a href="<?php echo DOMAIN_NAME;?>slidercontroller/home"><button type="submit" class="btn btn-info m-2 ">Back</button></a>   

                        <div class="col-12">
                            <div class="card-columns">
                                <?php 
                                    foreach($data as $d){
                                ?>
                                <div class="card" style="max-height: 417px;overflow: overlay;">
                                    <img class="img-fluid bg-light-alt" src="<?php echo DOMAIN_NAME;?>back/uplode/<?php echo $d['image']?>" alt="Card image">
                                    
                                    <div class="card-body" >
                                    <table class="table  table-bordered table-sm" id="makeEditable">
                                            <thead>
                                                <tr>
                                                    <th>Update</th>
                                                    <th>Delete</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                                <tr>
                                                    <td>
                                                        <form method="post" action="<?php echo DOMAIN_NAME;?>slidercontroller/update/<?php echo $d['id']?>" enctype="multipart/form-data">
                                                        <input class="form-control" type="file" name="image"  id="example-month-input">
                                                        <button type="submit" class="btn btn-primary m-2">Submit</button>

                                                        </form>
                                                    </td>
                                                    <td>
                                                    <a href="<?php echo DOMAIN_NAME;?>slidercontroller/delete/<?php echo $d['id']?>"><i class="far fa-trash-alt h3"></i></a> 

                                                    </td>
                                                        
                                                </tr>
                                              
                                               
                                            </tbody>
                                        </table>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                              <?php }?>
                      

                              
                            </div><!--end card-columns-->

                        </div><!--end col-->
                    </div><!--end row-->

                    
<?php require_once "footer.php";?>