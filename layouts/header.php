<div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="home.php">Admin</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="assets/images/users/avatar.jpg" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="assets/images/users/avatar.jpg" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">
                                    <?php
                                        session_start();
                                        echo $_SESSION['fname'];
                                    ?>

                                </div>
                            </div>
                            <div class="profile-controls">
                                <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="#" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Process</li>
                    <li class="active">
                        <a href="home.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Post CHQ</span></a>
                        <ul>
                            <li><a href="post_add.php"><span class="fa fa-image"></span> Add CHQ info</a></li>
                            <li><a href="post_mgt.php"><span class="fa fa-user"></span> Mange CHQ Info</a></li>
                            <!-- adsa <li><a href="pages-address-book.html"><span class="fa fa-users"></span></a></li>  -->           
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Recived CHQ</span></a>
                        <ul>
                            <li><a href="rec_add.php"><span class="fa fa-image"></span> Add CHQ info</a></li>
                            <li><a href="rec_mgt.php"><span class="fa fa-user"></span> Mange CHQ Info</a></li>
                            <!-- adsa <li><a href="pages-address-book.html"><span class="fa fa-users"></span></a></li>  -->           
                        </ul>
                    </li>
                    <li class="xn-title">Components</li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">Bank</span></a>                        
                        <ul>
                            <li><a href="bankac.php"><span class="fa fa-list-alt"></span> Manage Bank Accounts</a></li>                            
                            <li><a href="bank_mgt.php"><span class="fa fa-cogs"></span> Manage Banks</a></li>                        
                            </ul>
                    </li>                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Setting</span></a>
                        <ul>
                            <li><a href="form-wizards.html"><span class="fa fa-arrow-right"></span> Take Backup</a></li>
                            <li><a href="user.php"><span class="fa fa-file-text-o"></span> Manager User</a></li>
                            <li><a href="form-validation.html"><span class="fa fa-list-alt"></span> Change Password</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li> 
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li>Home</li>                    
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                                
                                              
            