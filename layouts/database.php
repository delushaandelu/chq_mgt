<?php
//DB details
$dbHost = 'us-cdbr-azure-southcentral-f.cloudapp.net';
$dbUsername = 'b52096aa77cd92';
$dbPassword = '7770cd2f';
$dbName = 'base_b';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
} 
?>
