<?php

use projectmvc\model\users;

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
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Contact</a></li>
            
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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">

                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table  table-bordered table-sm" id="makeEditable">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>
                                                    <th>Subject</th>
                                                    <th>Msg </th>
                                                 
                                                    <th> </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($data as $d){
                                                   $user=new users(); 
                                                   $name=$user->select('id',$d['userid']);
                                                ?>
                                                <tr>
                                                    <td><?php echo $name['name'];?></td>
                                                    <td><?php echo $d['subject'];?></td>
                                                    <td><?php echo $d['msg'];?></td>
                                                   
                                                        <td>
                                                       <a href="<?php echo DOMAIN_NAME;?>contactcontroller/delete/<?php echo $d['id']?>"><i class="far fa-trash-alt h3"></i></a> 
                                                        </td>
                                                </tr>
                                                <?php }?>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

<?php require_once "footer.php";?>