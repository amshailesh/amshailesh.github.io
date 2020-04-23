<?php

$productmodel=$_REQUEST["icpumodel"];
if(isset($_COOKIE["productmodel"]))
{
   $arr=explode("-",$_COOKIE["productmodel"]);
    $count=count($arr);
}
else{
    $count=0;
}

?>