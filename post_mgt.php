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
            <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">POST CHEQUES INFORMATIONS</h3>
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
                                                <th>Bank</th>
                                                <th>Account Number</th>
                                                <th>Cheque Number</th>
                                                <th>Amount</th>
                                                <th>Name</th>
                                                <th>Cheque Date</th>
                                                <th>Today Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            include("layouts/database.php");
                                            $sql= "SELECT * FROM post_chq ";
                                            $result = $db->query($sql);  
                                            while($row = $result->fetch_assoc()) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row['bank'] ?></td>
                                                <td><?php echo $row['accNo'] ?></td>
                                                <td><?php echo $row['chqNo'] ?></td>
                                                <td><?php echo $row['amount'] ?></td>
                                                <td><?php echo $row['name'] ?></td>
                                                <td><?php echo $row['chqDate'] ?></td>
                                                <td><?php echo $row['todayDate'] ?></td>
                                                <td><button class="btn btn-primary"><i class="fa fa-trash-o" aria-hidden="true" onclick="location.href='post_mgt.php?id=<?php echo $row['id'] ?>'"></i></button></td>
                                            </tr>
                                            <?php  } ?>
                                        </tbody>
                                    </table>
                                    <?php
                                    if(isset($_GET['id'])){
                                        $id = $_GET['id'];
                                        $sql= "delete from post_chq where id = '$id'";
                                        mysqli_query($db,$sql);

                                        echo'<script>';
                                        echo"alert('Success | Record Deleted Successfully!')";
                                        echo'</script>';

                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->

                        </div>
                    </div>                                
                    
                </div>
                <!-- PAGE CONTENT WRAPPER -->    
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






