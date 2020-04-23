              <?php

include("dbconnect.php");
$cusername=$_REQUEST["icusername"];
$password=$_REQUEST["icpassword"];
$securityanswer=$_REQUEST["isecurityanswer"];
$address=$_REQUEST["iaddress"];


$sql="UPDATE customers1 SET password='$password',securityanswer='$securityanswer',address='$address' WHERE username='$cusername' ";

mysqli_query($con,$sql) or die(mysqli_error($con));

echo "Cust info Updated";


?>