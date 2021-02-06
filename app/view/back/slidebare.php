<body>
        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="<?php echo DOMAIN_NAME;?>backcontroller/home" class="logo">
                    <span>
                       <h1>AMAN</h1>
                    </span>
                    
                </a>
            </div>
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu">
                    <li class="menu-label mt-0">Main</li>
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="index.html"><i class="ti-control-record"></i>Analytics</a></li>
                            <li class="nav-item"><a class="nav-link" href="sales-index.html"><i class="ti-control-record"></i>Sales</a></li> 
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Users</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="<?php echo DOMAIN_NAME;?>backcontroller/users/all"><i class="ti-control-record"></i>All</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo DOMAIN_NAME;?>backcontroller/users/admin"><i class="ti-control-record"></i>Admin</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo DOMAIN_NAME;?>backcontroller/users/user"><i class="ti-control-record"></i>Users</a></li> 
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo DOMAIN_NAME;?>backcontroller/testimonials"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Testimonials</span></a>
                    </li>
                    <li>
                        <a href="<?php echo DOMAIN_NAME;?>teamcontroller/home"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Team</span></a>
                    </li>
                    <li>
                        <a href="<?php echo DOMAIN_NAME;?>servicescontroller/home"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Services</span></a>
                    </li>
                    <li>
                        <a href="<?php echo DOMAIN_NAME;?>categorycontroller/home"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Category</span></a>
                    </li>
                    <li>
                        <a href="<?php echo DOMAIN_NAME;?>portfoliocontroller/home"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Protfolio</span></a>
                    </li>
                    <li>
                        <a href="<?php echo DOMAIN_NAME;?>infocontroller/home"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Inforamtion</span></a>
                    </li>
                    <li>
                        <a href="<?php echo DOMAIN_NAME;?>featurescontroller/home"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Features</span></a>
                    </li>
                    <li>
                        <a href="<?php echo DOMAIN_NAME;?>contactcontroller/home"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Contact US</span></a>
                    </li>
                    <li>
                        <a href="<?php echo DOMAIN_NAME;?>brandcontroller/home"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Brands</span></a>
                    </li>
                    <li>
                        <a href="<?php echo DOMAIN_NAME;?>blogcontroller/home"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Blogs</span></a>
                    </li>
                    <!-- <li>
                        <a href="javascript: void(0);"><i data-feather="grid" class="align-self-center menu-icon"></i><span>Apps</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Email <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="apps-email-inbox.html">Inbox</a></li>
                                    <li><a href="apps-email-read.html">Read Email</a></li>
                                </ul>
                            </li>  
                            <li class="nav-item"><a class="nav-link" href="apps-chat.html"><i class="ti-control-record"></i>Chat</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-contact-list.html"><i class="ti-control-record"></i>Contact List</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-calendar.html"><i class="ti-control-record"></i>Calendar</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-files.html"><i class="ti-control-record"></i>File Manager</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-invoice.html"><i class="ti-control-record"></i>Invoice</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-tasks.html"><i class="ti-control-record"></i>Tasks</a></li>
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Projects <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="apps-project-overview.html">Overview</a></li>                                    
                                    <li><a href="apps-project-projects.html">Projects</a></li>
                                    <li><a href="apps-project-board.html">Board</a></li>
                                    <li><a href="apps-project-teams.html">Teams</a></li>
                                    <li><a href="apps-project-files.html">Files</a></li>
                                    <li><a href="apps-new-project.html">New Project</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Ecommerce <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="apps-ecommerce-products.html">Products</a></li>                                    
                                    <li><a href="apps-ecommerce-product-list.html">Product List</a></li>
                                    <li><a href="apps-ecommerce-product-detail.html">Product Detail</a></li>
                                    <li><a href="apps-ecommerce-cart.html">Cart</a></li>
                                    <li><a href="apps-ecommerce-checkout.html">Checkout</a></li>                                    
                                </ul>
                            </li>
                        </ul>
                    </li> -->
    
               
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Website Setting</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="<?php echo DOMAIN_NAME;?>slidercontroller/home"><i class="ti-control-record"></i>slidebare</a></li>
                        </ul>
                    </li>
                    
                    <hr class="hr-dashed hr-menu">
                    <li class="menu-label my-2">Components & Extra</li>
    
                   
    
                  
    
                             
                </ul>
    
                <div class="update-msg text-center">
                    <a href="javascript: void(0);" class="float-right close-btn text-muted" data-dismiss="update-msg" aria-label="Close" aria-hidden="true">
                        <i class="mdi mdi-close"></i>
                    </a>
                    <h5 class="mt-3">AMAN</h5>
                    <p class="mb-3">We Design and Develop Clean and High Quality Web Applications</p>
                </div>
            </div>
        </div>