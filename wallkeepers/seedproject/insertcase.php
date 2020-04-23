              <?php

$casebrand=$_REQUEST["icasebrand"];
$casemodel=$_REQUEST["icasemodel"];

$caseimage=$_FILES["icaseimage"]['name'];
$tmp=$_FILES["icaseimage"]['tmp_name'];
$type=$_FILES["icaseimage"]['type'];
$fileformat=["image/jpeg","image/png"];
$casetype=$_REQUEST["icasetype"];


$caprice=$_REQUEST["icaprice"];
$caqty=$_REQUEST["icaqty"];


if(in_array($type,$fileformat)){
    
    $path="pimages/$caseimage";
    move_uploaded_file($tmp,$path);    
    
    
    
}
else{
    echo "Please upload jpg & png images only";
}


include("dbconnect.php");

$sql="INSERT INTO case1 (casebrand,casemodel,caseimage,casetype,caprice,caqty) VALUES ('$casebrand','$casemodel','$path','$casetype',$caprice,$caqty)";

mysqli_query($con,$sql) or die(mysqli_error($con));

echo "case Added";


?>