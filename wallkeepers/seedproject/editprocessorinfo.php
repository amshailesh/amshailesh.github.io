              <?php

$cpuid=$_REQUEST["icpuid"];
$cpumodel=$_REQUEST["icpumodel"];

$cpuimage=$_FILES["icpuimage"]['name'];
$tmp=$_FILES["icpuimage"]['tmp_name'];
$type=$_FILES["icpuimage"]['type'];
$fileformat=["image/jpeg","image/png"];
$corecount=$_REQUEST["icorecount"];
$coreclock=$_REQUEST["icoreclock"];
$boostclock=$_REQUEST["iboostclock"];
$tdp=$_REQUEST["itdp"];
$sthreading=$_REQUEST["isthreading"];
$integratedgraphics=$_REQUEST["iintegratedgraphics"];
$price=$_REQUEST["iprice"];
$pqty=$_REQUEST["ipqty"];
$relationname=$_REQUEST["irelationname"];
$cpusocket=$_REQUEST["icpusocket"];
$cpubrand=$_REQUEST["icpubrand"];
$ramtype=$_REQUEST["iramtype"];
$img="p";
if(in_array($type,$fileformat)){
    
    $path="pimages/$img$cpuimage";
    move_uploaded_file($tmp,$path);    
    
    
    
}
else{
    echo "Please upload jpg & png images only";
}


include("dbconnect.php");

$sql="UPDATE `processor` SET `cpumodel`='$cpumodel',`cpuimage`='$path',`cpusocket`='$cpusocket',`corecount`='$corecount',`coreclock`='$coreclock',`boostclock`='$boostclock',`tdp`='$tdp',`sthreading`='$sthreading',`integratedgraphics`='$integratedgraphics',`price`='$price',`qty`='$pqty',`relationname`='$relationname',`cpubrand`='$cpubrand',`ramtype`='$ramtype' WHERE cpuid='$cpuid'";

mysqli_query($con,$sql) or die(mysqli_error($con));

echo "Processor Edited";




?>