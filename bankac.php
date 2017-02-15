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
                                                <label class="col-md-3 control-label">Bank Name</label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control select" name="bank">
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                        <option>Option 4</option>
                                                        <option>Option 5</option>
                                                    </select>
                                                    <span class="help-block">Select the bank here</span>
                                                </div>
                                            </div>

                                            

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Account Number</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="account" class="form-control"/>
                                                    </div>                                            
                                                    <span class="help-block">Post cheque number</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Holder Name</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="holderName" class="form-control"/>
                                                    </div>                                            
                                                    <span class="help-block">Post cheque amount</span>
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

                                $bank =$_POST['bank'];
                                $account =$_POST['account'];
                                $holderName =$_POST['holderName'];

                                $sql="INSERT INTO bank_account (bank,account,holderName) VALUES ('$bank','$account','$holderName')";
    

                                if (mysqli_query($db, $sql) === TRUE) {
                                        echo'<script>';
                                        echo"alert('SUCCESS | Cheque information added')";
                                        echo'</script>';
                                    } else {

                                        echo'<script>';
                                        echo"alert('Error in Submition')";
                                        echo'</script>';
                                        
                                    }

                                    mysqli_close($db);
                                }
                            ?>
                        </div>
                    </div>                    
                    
                </div>
         <!-- FOOTER SECTION -->           
                   
        </div>
         <!-- FOOTER SECTION --> 
        <?php include("layouts/footer.php"); ?>    
    </body>
</html>






