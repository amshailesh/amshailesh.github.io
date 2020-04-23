<?php
$con=mysqli_connect('localhost','ganeshvardam_asm','Mani1989@');

if(!$con)
{
echo "My Not connected";
}
if(!mysqli_select_db($con,'ganeshvardam_asm'))
{
echo "Database not connected";
}

?>