<?php

session_start();

if(isset($_SESSION["cusername"]))
{
    

$custusername=$_SESSION["cusername"];
$date=$_REQUEST["idate"];
$prd0=$_REQUEST["ip0"];
$prd1=$_REQUEST["ip1"];
$prd2=$_REQUEST["ip2"];
$prd3=$_REQUEST["ip3"];
$prd4=$_REQUEST["ip4"];
$prd5=$_REQUEST["ip5"];
$prd6=$_REQUEST["ip6"];
$prd7=$_REQUEST["ip7"];
$total=$_REQUEST["itotal"];
include("dbconnect.php");

$sql="INSERT INTO orders (proid,moid,coolid,gpuid,ramid,psuid,hddid,caseid,total,cusername,odate) VALUE ('$prd0','$prd1','$prd2','$prd3','$prd4','$prd5','$prd6','$prd7',$total,'$custusername','$date')";

mysqli_query($con,$sql) or die(mysqli_error($con));
    
$sqlpro="update processor SET qty=''";

echo "Order Placed";

header("location:thanksfororder.php");
}
else{
    
    header("location:checkout.php");
}

?>