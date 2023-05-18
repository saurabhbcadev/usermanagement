<?php
$dbHost = "localhost";
$dbName = "test";
$dbUser = "root";      
$dbPassword = "";  
$conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
//Set the PDO error mode to exception.  
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
?>