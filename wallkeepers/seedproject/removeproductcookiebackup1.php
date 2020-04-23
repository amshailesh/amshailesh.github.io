<?php

$productmodel=$_REQUEST["iproductmodel"];

if(isset($_COOKIE["productmodel"]))
{
    
    
    $arr=explode("-",$_COOKIE["productmodel"]);
    
    $arrsearch=array_search("$productmodel",$arr);
    unset($arr[$arrsearch]);
    
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