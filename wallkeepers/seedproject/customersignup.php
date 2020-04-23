<?php

$cust_name=$_REQUEST["icust_name"];
$username=$_REQUEST["iusername"];
$password=$_REQUEST["ipassword"];
$securityanswer=$_REQUEST["isecurityanswer"];
$address=$_REQUEST["iaddress"];



include("dbconnect.php");

$sql="insert into customers1 (cust_name,username,password,securityanswer,address) values ('$cust_name','$username','$password','$securityanswer','$address')";

mysqli_query($con,$sql) or die(mysqli_error($con));

echo "User Signup";


?>