
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
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Users</a></li>
                                            <li class="breadcrumb-item active">Add User</li>
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
                                <form method="post" action="<?php echo DOMAIN_NAME;?>backcontroller/insertuser">
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label text-right">Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="name"  id="example-search-input" required>
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="example-url-input" class="col-sm-2 col-form-label text-right">Email</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="email" name="email"  id="example-url-input" required>
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label text-right">Password</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="password" name="password"  id="example-date-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-month-input" class="col-sm-2 col-form-label text-right">Phone</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="number" name="phone" maxlength="11"  id="example-month-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-week-input" class="col-sm-2 col-form-label text-right">Address</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="address"  id="example-week-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-week-input" class="col-sm-2 col-form-label text-right">Age</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="number" name="age"  id="example-week-input" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label text-right">Type</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="type" required>
                                                        <option>Select</option>
                                                        <option value="1">Admin</option>
                                                        <option value="0">User</option>
                                                    </select>
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