              <?php

$psubrand=$_REQUEST["ipsubrand"];
$psumodel=$_REQUEST["ipsumodel"];

$psuimage=$_FILES["ipsuimage"]['name'];
$tmp=$_FILES["ipsuimage"]['tmp_name'];
$type=$_FILES["ipsuimage"]['type'];
$fileformat=["image/jpeg","image/png"];

$psutdp=$_REQUEST["ipsutdp"];
$psuformfactor=$_REQUEST["ipsuformfactor"];
$pprice=$_REQUEST["ipprice"];
$pqty=$_REQUEST["ipqty"];


if(in_array($type,$fileformat)){
    
    $path="pimages/$psuimage";
    move_uploaded_file($tmp,$path);    
    
    
    
}
else{
    echo "Please upload jpg & png images only";
}

include("dbconnect.php");

$sql="INSERT INTO psu (psubrand,psumodel,psuimage,psutdp,psuformfactor,pprice,pqty) VALUES ('$psubrand','$psumodel','$path','$psutdp','$psuformfactor',$pprice,$pqty)";

mysqli_query($con,$sql) or die(mysqli_error($con));

echo "psu Added";


?>