              <?php


$cpucoolermodel=$_REQUEST["icpucoolermodel"];

$cpucoolerimage=$_FILES["icpucoolerimage"]['name'];
$tmp=$_FILES["icpucoolerimage"]['tmp_name'];
$type=$_FILES["icpucoolerimage"]['type'];
$fileformat=["image/jpeg","image/png"];
$fanrpm=$_REQUEST["ifanrpm"];

$noiselevel=$_REQUEST["inoiselevel"];
$cputdp=$_REQUEST["icputdp"];
$sizel=$_REQUEST["isizel"];
$sizeb=$_REQUEST["isizeb"];
$sizeh=$_REQUEST["isizeh"];
$price=$_REQUEST["iprice"];
$coolerqty=$_REQUEST["icoolerqty"];
$relationname=$_REQUEST["irelationname"];

$img="p";
if(in_array($type,$fileformat)){
    
    $path="pimages/$img$cpucoolerimage";
    move_uploaded_file($tmp,$path);    
    
    
    
}
else{
    echo "Please upload jpg & png images only";
}


include("dbconnect.php");

$sql="INSERT INTO cpucooler (cpucoolermodel,cpucoolerimage,fanrpm,noiselevel,cputdp,sizel,sizeb,sizeh,price,qty,relationname) VALUES ('$cpucoolermodel','$path','$fanrpm','$noiselevel','$cputdp',$sizel,$sizeb,$sizeh,$price,$coolerqty,'$relationname')";

mysqli_query($con,$sql) or die(mysqli_error($con));

echo "CPUcooler Added";


?>