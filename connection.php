<?php
$server_username = "admin";
$server_password = "Thinh1406";
$server_host = "mysql.cjaouzbnl54e.us-east-1.rds.amazonaws.com";
$database = 'myDb';
 
$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
mysqli_query($conn,"SET NAMES 'UTF8'");
