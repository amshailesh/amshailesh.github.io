<?php

$username=$_REQUEST["iusername"];
$password=$_REQUEST["ipassword"];

include("dbconnect.php");

$sql="select * from customers where username='$username'";

$result=mysqli_query($con,$sql) or die(mysqli_error($con));

while($res=mysqli_fetch_array($result)){

    $usrname=$res["username"];
    $pssword=$res["password"];
    $cname=$res["cust_name"];
    
if($username==$usrname && $password==$pssword){
    
echo "<h1>Login Successful, Welcome ".$res["cust_name"] ."</h1>";
    
    session_start();
    
    $_SESSION["username"]=$res["cust_name"];
    
    header("location:admin.php");
}
    else{
        
        echo "Wrong Credentials";
    }
  
}
?>