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
                                                <th>Cheque Number</th>
                                                <th>Amount</th>
                                                <th>Cheque Date</th>
                                                <th>Name</th>
                                                <th>Received Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            include("layouts/database.php");
                                            $sql= "SELECT * FROM rec_chq ";
                                            $result = $db->query($sql);  
                                            while($row = $result->fetch_assoc()) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row['bank'] ?></td>
                                                <td><?php echo $row['chqNo'] ?></td>
                                                <td><?php echo $row['amount'] ?></td>
                                                <td><?php echo $row['chqDate'] ?></td>
                                                <td><?php echo $row['name'] ?></td>
                                                <td><?php echo $row['receivedDate'] ?></td>
                                            </tr>
                                            <?php  } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->

                        </div>
                    </div>        
                   
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






