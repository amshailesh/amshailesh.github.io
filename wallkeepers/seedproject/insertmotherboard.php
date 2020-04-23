              <?php


$motherboardmodel=$_REQUEST["imotherboardmodel"];

$motherboardimage=$_FILES["imotherboardimage"]['name'];
$tmp=$_FILES["imotherboardimage"]['tmp_name'];
$type=$_FILES["imotherboardimage"]['type'];
$fileformat=["image/jpeg","image/png"];
$motherboardtype=$_REQUEST["imotherboardtype"];
$cpusocket=$_REQUEST["icpusocket"];
$motherboardmemorymax=$_REQUEST["imotherboardmemorymax"];
$motherboardmemoryslots=$_REQUEST["imotherboardmemoryslots"];
$motherboardpcislots=$_REQUEST["imotherboardpcislots"];
$motherboardbrand=$_REQUEST["imotherboardbrand"];


$mprice=$_REQUEST["imprice"];
$mqty=$_REQUEST["imqty"];
$ramtype=$_REQUEST["iramtype"];

if(in_array($type,$fileformat)){
    
    $path="pimages/$motherboardimage";
    move_uploaded_file($tmp,$path);    
    
    
    
}
else{
    echo "Please upload jpg & png images only";
}

include("dbconnect.php");

$sql="INSERT INTO motherboard (motherboardmodel,motherboardimage,motherboardtype,cpusocket,motherboardmemorymax,motherboardmemoryslots,motherboardpcislots,mprice,mqty,relationname,cpubrand,ramtype) VALUES ('$motherboardmodel','$path','$motherboardtype','$cpusocket',$motherboardmemorymax,$motherboardmemoryslots,$motherboardpcislots,$mprice,$mqty,'$relationname','$motherboardbrand','$ramtype')";

mysqli_query($con,$sql) or die(mysqli_error($con));

echo "motherboard Added";


?>