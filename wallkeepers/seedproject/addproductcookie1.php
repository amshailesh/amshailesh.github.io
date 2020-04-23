<?php
session_start();
$cpuproductmodel=$_REQUEST["iproductmodel"];
$cpusocket=$_REQUEST["icpusocket"];
$relationname=$_REQUEST["irelationname"];
$cputdp=$_REQUEST["icputdp"];
if(isset($_COOKIE["cookie"]))
{
    $existing=$_COOKIE["cookie"];
    if($_COOKIE["cookie"]!==$existing)
    {
    $new=$existing."-".$new;    
    }
    else{
        $new=$existing;
    }
    
    
    
    setcookie("cookie",$new);
    
    $_SESSION["productmodel"]=$productmodel;
    
}
else{
    setcookie("cookie",$cookieadd);
    $_SESSION["cpuproductmodel"]=$cpuproductmodel;
    $_SESSION["cpusocket"]=$cpusocket;
    $_SESSION["relationname"]=$relationname;
    $_SESSION["cputdp"]=$cputdp;
}
header("location:indexmain.php");
?>