<div class="page-wrapper">
            <!-- Top Bar Start -->
<div class="page-content">
<div class="topbar">            
                <!-- Navbar -->
                <nav class="navbar-custom">    
                    <ul class="list-unstyled topbar-nav float-right mb-0">  
                        
 <?php

use projectmvc\core\session;
?>
                                          

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <span class="ml-1 nav-user-name hidden-sm"><?php echo session::get('backuser');?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- <a class="dropdown-item" href="#"><i data-feather="user" class="align-self-center icon-xs icon-dual mr-1"></i> Profile</a> -->
                                <a class="dropdown-item" href="<?php echo DOMAIN_NAME;?>backcontroller/edituser/<?php echo  session::get('backid');?>"><i data-feather="settings" class="align-self-center icon-xs icon-dual mr-1"></i> Settings</a>
                                <div class="dropdown-divider mb-0"></div>
                                <a class="dropdown-item " href="<?php echo DOMAIN_NAME;?>authcontroller/logout"><i data-feather="power" class="align-self-center icon-xs icon-dual mr-1 h3"></i> Logout</a>
                            </div>
                        </li>
                    </ul><!--end topbar-nav-->
        
                    <ul class="list-unstyled topbar-nav mb-0">                        
                        <li>
                            <button class="nav-link button-menu-mobile">
                                <i data-feather="menu" class="align-self-center topbar-icon"></i>
                            </button>
                        </li> 
                                                 
                    </ul>
                </nav>
                <!-- end navbar-->
            </div>






      