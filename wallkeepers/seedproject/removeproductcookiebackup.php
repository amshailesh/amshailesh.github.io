<?php

$productmodel=$_REQUEST["iproductmodel"];



if(isset($_COOKIE["productmodel"]))
{
    
    
    $arr=explode("-",$_COOKIE["productmodel"]);
    

    $newarr[]=array_shift($arr);
    $count=count($newarr);
    
    for($i=0;$i<$count;$i++)
    {
        $arrvalue=$newarr[$i];
        $firstvalue=$arrvalue;
        $new=$firstvalue."-".$arrvalue;
    
    }
    
    echo $new;
    setcookie("productmodel",$new);
}
else{
    setcookie("productmodel",$productmodel);
}
header("location:checkout.php");



?>