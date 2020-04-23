<?php
session_start();
$productmodel=$_REQUEST["iproductmodel"];
unset($_SESSION["cpusocket"]);
unset($_SESSION["relationname"]);
unset($_SESSION["cpuproductmodel"]);

if(isset($_COOKIE["productmodel"]))
{
    
    
    $arr=explode("-",$_COOKIE["productmodel"]);
    
    if(($key=$arrsearch=array_search("$productmodel",$arr))!==false)
       {
         unset($arr[$key]);  
       }
    
    
    //$newarr=array_values($arr);
    print_r($newarr);
    $count=count($newarr);
    
    
    for($i=0;$i<$count;$i++)
    {
        $arrvalue=$newarr[$i];
    
        $new=$arrvalue."-".$newarr[$i];    
    
    }
        
    
echo "<br>".$new;
    
    setcookie("productmodel",$new);
    
}
else{
    setcookie("productmodel",$productmodel);
}
header("location:checkout.php");


?>