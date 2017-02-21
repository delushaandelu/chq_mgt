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
            <div class="page-content-wrap" id="img">
            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">POST  Cheques</h3>
                                </div>
                                <div class="panel-body">
                                    <p>Today Dated Cheques - <?php echo date("Y/m/d") ?></p>
                                    <table class="table">
                                        <thead>
                                           <thead>
                                            <tr>
                                                <th>Bank</th>
                                                <th>Account Number</th>
                                                <th>Cheque Number</th>
                                                <th>Amount</th>
                                                <th>Name</th>
                                                <th>Cheque Date</th>
                                                <th>Today Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            include("layouts/database.php");
                                             $date = date("Y-m-d");
                                            $sql= "SELECT * FROM post_chq WHERE chqDate = '$date'  ";
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
                                            </tr>
                                            <?php  } ?>
                                        </tbody>
                                    </table>                                
                                </div>
                            </div>
                            </br></br>
                            <div class="page-content-wrap" id="img">
            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Received  Cheques</h3>
                                </div>
                                <div class="panel-body">
                                    <p>Today Dated Cheques - <?php echo date("Y/m/d") ?></p>
                                    <table class="table">
                                        <thead>
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
                                            $date = date("Y-m-d");
                                            $sql= "SELECT * FROM rec_chq WHERE chqDate = '$date' ";
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
            </div>
         <!-- FOOTER SECTION -->  
        <?php include("layouts/footer.php"); ?>    
    </body>
</html>






