              <?php

$rambrand=$_REQUEST["irambrand"];
$rammodel=$_REQUEST["irammodel"];

$ramimage=$_FILES["iramimage"]['name'];
$tmp=$_FILES["iramimage"]['tmp_name'];
$type=$_FILES["iramimage"]['type'];
$fileformat=["image/jpeg","image/png"];

$rammemory=$_REQUEST["irammemory"];
$ramtype=$_REQUEST["iramtype"];
$rprice=$_REQUEST["irprice"];
$rqty=$_REQUEST["irqty"];


if(in_array($type,$fileformat)){
    
    $path="pimages/$ramimage";
    move_uploaded_file($tmp,$path);    
    
    
    
}
else{
    echo "Please upload jpg & png images only";
}

include("dbconnect.php");

$sql="INSERT INTO ram (rambrand,rammodel,ramimage,rammemory,ramtype,rprice,rqty) VALUES ('$rambrand','$rammodel','$path','$rammemory','$ramtype',$rprice,$rqty)";

mysqli_query($con,$sql) or die(mysqli_error($con));

echo "ram Added";


?>