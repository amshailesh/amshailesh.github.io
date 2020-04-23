              <?php

$hddbrand=$_REQUEST["ihddbrand"];
$hddmodel=$_REQUEST["ihddmodel"];

$hddimage=$_FILES["ihddimage"]['name'];
$tmp=$_FILES["ihddimage"]['tmp_name'];
$type=$_FILES["ihddimage"]['type'];
$fileformat=["image/jpeg","image/png"];

$hddtype=$_REQUEST["ihddtype"];
$hddcapacity=$_REQUEST["ihddcapacity"];
$hprice=$_REQUEST["ihprice"];
$hqty=$_REQUEST["ihqty"];


if(in_array($type,$fileformat)){
    
    $path="pimages/$hddimage";
    move_uploaded_file($tmp,$path);    
    
    
    
}
else{
    echo "Please upload jpg & png images only";
}

include("dbconnect.php");

$sql="INSERT INTO hdd (hddbrand,hddmodel,hddimage,hddtype,hddcapacity,hprice,hqty) VALUES ('$hddbrand','$hddmodel','$path','$hddtype','$hddcapacity',$hprice,$hqty)";

mysqli_query($con,$sql) or die(mysqli_error($con));

echo "hdd Added";


?>