<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>CHQ Manage</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
         <!-- HEADER SECTION -->  
       <?php include("layouts/header.php");?>
        <div class="page-content-wrap">
            <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="POST">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Add</strong> Bank Accounts</h3>
                                    <ul class="panel-controls">
                                        <li></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            
                                           <div class="form-group">
                                                <label class="col-md-3 control-label">Full Name</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="fullname" class="form-control"/>
                                                    </div>                                            
                                                    <span class="help-block">User full name</span>
                                                </div>
                                            </div>
                                            

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Username</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="username" class="form-control"/>
                                                    </div>                                            
                                                    <span class="help-block">Account username</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Password</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="password" name="password" class="form-control"/>
                                                    </div>                                            
                                                    <span class="help-block">Account password</span>
                                                </div>
                                            </div>

                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <button class="btn btn-primary pull-right" name="submit">Submit</button>
                                </div>
                            </div>
                            </form>
                            <?php
                                if(isset($_POST["submit"])){

                                require ('layouts/database.php');

                                $fullname =$_POST['fullname'];
                                $username =$_POST['username'];
                                $password =$_POST['password'];

                                $sql="INSERT INTO user (fullname,username,password) VALUES ('$fullname','$username','$password')";
    

                                if (mysqli_query($db, $sql) === TRUE) {
                                        echo'<script>';
                                        echo"alert('SUCCESS | Bank information added')";
                                        echo'</script>';
                                    } else {

                                        echo'<script>';
                                        echo"alert('Error in Process')";
                                        echo'</script>';
                                        
                                    }

                                    mysqli_close($db);
                                }
                            ?>
                        </div>
                    </div> 
                     <div class="page-content-wrap">
                    <div class="page-content-wrap">
                        <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">User Accounts Informations</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Username</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            include("layouts/database.php");
                                            $sql= "SELECT * FROM user ";
                                            $result = $db->query($sql);  
                                            while($row = $result->fetch_assoc()) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row['fullname'] ?></td>
                                                <td><?php echo $row['username'] ?></td>
                                                <td><button class="btn btn-primary"><i class="fa fa-trash-o" aria-hidden="true" onclick="location.href='user.php?id=<?php echo $row['id'] ?>'"></i></button></td>
                                            </tr>
                                            <?php  } ?>
                                        </tbody>
                                    </table>
                                     <?php
                                    if(isset($_GET['id'])){
                                        $id = $_GET['id'];
                                        $sql= "delete from bank_account where id = '$id'";
                                        mysqli_query($db,$sql);

                                        echo'<script>';
                                        echo"alert('Success | New user added to the system!')";
                                        echo'</script>';

                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->

                        </div>
                    </div>        
                   
        </div>                   
                    
                </div>
         <!-- FOOTER SECTION -->           
                   
        </div>
         <!-- FOOTER SECTION --> 
          <?php include("layouts/footer.php"); ?>   

        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->                

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>    
        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>     
        
        
    </body>
</html>






