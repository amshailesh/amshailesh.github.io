<?php
session_start();
$productmodel=$_REQUEST["iproductmodel"];
$cpusocket=$_REQUEST["icpusocket"];
$cputdp=$_REQUEST["icputdp"];
$cpubrand=$_REQUEST["icpubrand"];

$gpuinterface=$_REQUEST["igpuinterface"];
$ramtype=$_REQUEST["iramtype"];



if(isset($_COOKIE["productmodel"]))
{
    $existing=$_COOKIE["productmodel"];
    if($productmodel!==$existing)
    {
    $new=$productmodel."-".$existing;    
    }
    else{
        $new=$existing;
    }
    
    
    
    setcookie("productmodel",$new);
    
    
    
    $_SESSION["ramtype"]=$ramtype;
    $_SESSION["gpuinterface"]=$gpuinterface;
    
}
else{
    setcookie("productmodel",$productmodel);
    $_SESSION["cpubrand"]=$cpubrand;
    $_SESSION["cpuproductmodel"]=$productmodel;
    $_SESSION["cpusocket"]=$cpusocket;
    $_SESSION["cputdp"]=$cputdp;
    $_SESSION["ramtype"]=$ramtype;
    
    
    
    
}
header("location:indexmain.php");
?>