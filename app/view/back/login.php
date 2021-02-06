
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>AMAN | <?= $title;?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo DOMAIN_NAME;?>back/assets/images/favicon.ico">

        <!-- App css -->
        <link href="<?php echo DOMAIN_NAME;?>back/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo DOMAIN_NAME;?>back/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo DOMAIN_NAME;?>back/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-body accountbg">
   
        <!-- Log In page -->
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center">
             
                <div class="col-12 align-self-center">
                    <div class="row">
                   
                        <div class="col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3" >
                                        <a href="index.html" class="logo logo-admin">
                                            <h2 style="color:#e9ebef;">AMAN</h2>
                                        </a>
                                        <h4 style="color:#e9ebef;" class="mt-3 mb-1 font-weight-semibold text-white font-18">Let's Get Started AMAN</h4>   
                                        <?php if(!empty($msg)){?>
                        <div class="col-lg-12 alert alert-primary" role="alert">
                       <?php echo  $msg;?>
                        </div>
                        <?php }?>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="nav-border nav nav-pills" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active font-weight-semibold" data-toggle="tab" href="#LogIn_Tab" role="tab">Log In</a>
                                        </li>
                                      
                                    </ul>
                                     <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active p-3" id="LogIn_Tab" role="tabpanel">                                        
                                            <form class="form-horizontal auth-form" method="post" action="<?php echo DOMAIN_NAME;?>authcontroller/vrefiy">
                
                                                <div class="form-group mb-2">
                                                    <label for="username">Email</label>
                                                    <div class="input-group">                                                                                         
                                                        <input type="email" class="form-control" name="email" id="username" placeholder="Enter Email" required>
                                                    </div>                                    
                                                </div><!--end form-group--> 
                    
                                                <div class="form-group mb-2">
                                                    <label for="userpassword">Password</label>                                            
                                                    <div class="input-group">                                  
                                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password" equired>
                                                    </div>                               
                                                </div><!--end form-group--> 
                    
                                            
                    
                                                <div class="form-group mb-0 row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary btn-block waves-effect waves-light" type="button">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                                    </div><!--end col--> 
                                                </div> <!--end form-group-->                           
                                            </form><!--end form-->
                                           
                                            
                                        </div>
                                  
                                    </div>
                                </div><!--end card-body-->
                                <div class="card-body bg-light-alt text-center">
                                    <span class="text-muted d-none d-sm-inline-block">Mannatthemes © 2020</span>                                            
                                </div>
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Log In page -->

        


        <!-- jQuery  -->
        <script src="<?php echo DOMAIN_NAME;?>back/assets/js/jquery.min.js"></script>
        <script src="<?php echo DOMAIN_NAME;?>back/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo DOMAIN_NAME;?>back/assets/js/waves.js"></script>
        <script src="<?php echo DOMAIN_NAME;?>back/assets/js/feather.min.js"></script>
        <script src="<?php echo DOMAIN_NAME;?>back/assets/js/simplebar.min.js"></script>

        
    </body>

</html>