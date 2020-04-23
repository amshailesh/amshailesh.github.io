<?php


$username=$_REQUEST["iusername"];
$newpassword=$_REQUEST["inewpassword"];
$securityanswer=$_REQUEST["isecurityanswer"];




$con=mysqli_connect("localhost","root","","assembledcomputer") or die("Unable to connect");

$sql="select * from customers1 where username='$username'";

$result=mysqli_query($con,$sql) or die(mysqli_error($con));

while($res=mysqli_fetch_array($result))
{
    $usrname=$res["username"];
    $sanswer=$res["securityanswer"];
 
     
     
 }   

if($username==isset($usrname) && $securityanswer==$sanswer)
{
    $sql="update customers set password='$newpassword' where username='$usrname'";

    mysqli_query($con,$sql) or die(mysqli_error($con));
    echo "Password Changed";
}
else{
    
    echo "Username or Security answer does not match.";
}




?>