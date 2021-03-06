
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
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Portfolio</a></li>
                                            <li class="breadcrumb-item active">Edit Portfolio</li>
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
                                <form method="post" action="<?php echo DOMAIN_NAME;?>portfoliocontroller/update/<?php echo $data['id']?>" enctype="multipart/form-data">
                                <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label text-right">Category</label>
                                                <div class="col-sm-10">
                                                <select class="form-control" name="category" required>
                                                        <option>Select Category</option>
                                                        <?php foreach ($allcat as $c ){?>
                                                        <option <?php if($data['categoryid'] == $c['id']){ echo "selected";}?> value="<?php echo $c['id'];?>"><?php echo $c['name'];?></option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="example-url-input" class="col-sm-2 col-form-label text-right">Client</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="client"  value="<?php echo $data['client'];?>" id="example-url-input" required>
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label text-right">Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="date" name="date"  id="example-date-input" >
                                                    <input class="form-control" type="text" disabled  value="<?php echo $data['date'];?>"  id="example-month-input" >
                                                    <input class="form-control" type="text" hidden  name="olddate" value="<?php echo $data['date'];?>"  id="example-month-input" >

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label text-right">Url</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="url" value="<?php echo $data['url'];?>"  id="example-date-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label text-right">Details</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="details" value="<?php echo $data['details'];?>"  id="example-date-input" required>
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