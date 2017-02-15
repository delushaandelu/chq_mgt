<!DOCTYPE html>
<html lang="en" class="body-full-height">
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
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
               
                <div class="login-body">
                    <div class="login-title"><strong><center>Cheque Management System</center></div>
                    <div class="login-title"><strong>Welcome</strong>, Please login</div>
                    <form action="index.php" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="username" placeholder="Username"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="password" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block" name="signin">Log In</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2014 Cheque Management
                    </div>
                    <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>
                    </div>
                </div>
            </div>
            <?php
                session_start();
                require ('layouts/database.php');
                if(isset($_POST['signin'])){

                $username = $_POST['username'];
                $password = $_POST['password'];
                //$password = sha1($password); 
                
                $res1 =  mysqli_fetch_assoc(mysqli_query($db,"select fullname from user where username = '$username' "));
                $_SESSION['fname']= $res1['fullname'];
            
                $result = mysqli_query($db, 'select * from user where username="'.$username.'" and password="'.$password.'" ');
                if (mysqli_num_rows($result)==1){
                    header('location: home.php');
                }else{
                    echo "<script>";
                    echo "alert('ERROR| Your are not an authoriezed user! Check your information again')";
                    echo "</script>";
                    }   
                }
            ?>
        </div>
        
    </body>
</html>






