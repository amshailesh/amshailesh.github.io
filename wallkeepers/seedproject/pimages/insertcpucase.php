              <?php


$cabinetmodel=$_REQUEST["icabinetmodel"];

$cabinetimage=$_FILES["icabinetimage"]['name'];
$tmp=$_FILES["icabinetimage"]['tmp_name'];
$type=$_FILES["icabinetimage"]['type'];
$fileformat=["image/jpeg","image/png"];
$cabinettype=$_REQUEST["icabinettype"];
$externalbays=$_REQUEST["iexternalbays"];
$internalbays=$_REQUEST["iinternalbays"];

$cprice=$_REQUEST["icprice"];
$cqty=$_REQUEST["icqty"];
$relationname=$_REQUEST["irelationname"];

if(in_array($type,$fileformat)){
    
    $path="pimages/$cabinetimage";
    move_uploaded_file($tmp,$path);    
    
    
    
}
else{
    echo "Please upload jpg & png images only";
}


$con=mysqli_connect("localhost","root","","assembledcomputer") or die("Unable to connect");

$sql="INSERT INTO cabinet (cabinetmodel,cabinetimage,cabinettype,externalbays,internalbays,cprice,cqty,relationname) VALUES ('$cabinetmodel','$path','$cabinettype',$externalbays,$internalbays,$cprice,$cqty,'$relationname')";

mysqli_query($con,$sql) or die(mysqli_error($con));

echo "Cabinet Added";


?>