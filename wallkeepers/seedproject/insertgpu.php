              <?php

$gpubrand=$_REQUEST["igpubrand"];
$gpumodel=$_REQUEST["igpumodel"];

$gpuimage=$_FILES["igpuimage"]['name'];
$tmp=$_FILES["igpuimage"]['tmp_name'];
$type=$_FILES["igpuimage"]['type'];
$fileformat=["image/jpeg","image/png"];

$gpumemory=$_REQUEST["igpumemory"];
$coreclock=$_REQUEST["icoreclock"];
$boostclock=$_REQUEST["iboostclock"];
$gpuinterface=$_REQUEST["igpuinterface"];
$gprice=$_REQUEST["igprice"];
$gqty=$_REQUEST["igqty"];


if(in_array($type,$fileformat)){
    
    $path="pimages/$gpuimage";
    move_uploaded_file($tmp,$path);    
    
    
    
}
else{
    echo "Please upload jpg & png images only";
}

include("dbconnect.php");

$sql="INSERT INTO gpu (gpubrand,gpumodel,gpuimage,gpumemory,coreclock,boostclock,gpuinterface,gprice,qty) VALUES ('$gpubrand','$gpumodel','$path','$gpumemory','$coreclock','$boostclock','$gpuinterface',$gprice,$gqty)";

mysqli_query($con,$sql) or die(mysqli_error($con));

echo "gpu Added";


?>