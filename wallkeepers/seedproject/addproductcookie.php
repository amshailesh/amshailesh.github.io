<?php
session_start();

$productprice=$_REQUEST["iprice"];
$productqty=$_REQUEST["iqty"];
$productmodel=$_REQUEST["iproductmodel"];
$cpusocket=$_REQUEST["icpusocket"];
$cputdp=$_REQUEST["icputdp"];
$cpubrand=$_REQUEST["icpubrand"];

$gpuinterface=$_REQUEST["igpuinterface"];
$ramtype=$_REQUEST["iramtype"];



if((isset($_COOKIE["productmodel"])) && (isset($_COOKIE["productprice"])))
{
    $existing=$_COOKIE["productmodel"];
    
    if($productmodel!==$existing)
    {
    $new=$existing."-".$productmodel;    
    }
    else{
        $new=$existing;
    }
    
    
    
    setcookie("productmodel",$new);
    $existingp=$_COOKIE["productprice"];
    $newp=$existingp."-".$productprice;
    setcookie("productprice",$newp);
    
    $existingq=$_COOKIE["productqty"];
    $newq=$existingq."-".$productqty;
    setcookie("productqty",$newq);
    
    
    
    $_SESSION["ramtype"]=$ramtype;
    $_SESSION["gpuinterface"]=$gpuinterface;
    
}
else{
    setcookie("productmodel",$productmodel);
    setcookie("productprice",$productprice);
    setcookie("productqty",$productqty);
    $_SESSION["cpubrand"]=$cpubrand;
    $_SESSION["cpuproductmodel"]=$productmodel;
    $_SESSION["cpusocket"]=$cpusocket;
    $_SESSION["cputdp"]=$cputdp;
    $_SESSION["ramtype"]=$ramtype;
    
    
    
    
}
header("location:indexmain.php");
?>