<?php

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
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Portfolio</a></li>
            
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
                               <a href="<?php echo DOMAIN_NAME;?>portfoliocontroller/add"> <button id="but_add" class="btn btn-success ">Add</button></a>

                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table  table-bordered table-sm" id="makeEditable">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>category</th>
                                                    <th>Client </th>
                                                    <th>Date </th>
                                                    <th>URL </th>
                                                    <th>Details </th>
                                                    <th> </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($data as $d){
                                                    $c=new category();
                                                    $name=$c->select('id',$d['categoryid']);
                                                    ?>
                                                <tr>
                                                    <td><img style="width:80px" src="<?php echo DOMAIN_NAME;?>back/uplode/<?php echo $d['image'];?>"/></td>
                                                    <td><?php echo $name['name'];?></td>
                                                    <td><?php echo $d['client'];?></td>
                                                    <td><?php echo $d['date'];?></td>
                                                    <td><?php echo $d['url'];?></td>
                                                    <td><?php echo $d['details'];?></td>
                                                   
                                                        <td>
                                                      <a href="<?php echo DOMAIN_NAME;?>portfoliocontroller/edit/<?php echo $d['id']?>"> <i class="fas fa-edit mr-2 h3"></i></a> 
                                                       <a href="<?php echo DOMAIN_NAME;?>portfoliocontroller/delete/<?php echo $d['id']?>"><i class="far fa-trash-alt h3"></i></a> 
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