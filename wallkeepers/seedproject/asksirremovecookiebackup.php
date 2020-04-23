<?php

$productmodel=$_REQUEST["iproductmodel"];

if(isset($_COOKIE["productmodel"]))
{
    
    
    $arr=explode("-",$_COOKIE["productmodel"]);
    
    if(($key=array_search("$productmodel",$arr))!==false)
       {
         unset($arr[$key]);  
       }
     
    echo "Arr value after unset";
    print_r($arr);
    
    $newarr=array_values($arr);
    echo "<br>arr value after array values";
    print_r($newarr);
    
    $count=count($newarr);
    
    
    for($i=0;$i<$count;$i++)
    {
        $arrvalue=$newarr[$i];
        echo $arrvalue;
    
        $new=$arrvalue."-".$newarr[$i];    
        
        echo "<br> ".$new;
    
    setcookie("productmodel",$new);
    }
        

    
}
else{
    setcookie("productmodel",$productmodel);
}
//header("location:checkout.php");


?>