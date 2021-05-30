<?php
include("connection1.php");

$uname=$_POST["uname"];
$uemail=$_POST["uemail"];
$upass=$_POST["upass"];
$cpass=$_POST["cpass"];
$checks=$_POST["checks"];

$sql= " INSERT INTO register(uname,uemail,upass,cpass,checks) VALUES ('$uname','$uemail','$upass','$cpass','$checks')";

if(mysqli_query($con,$sql))
{
  echo"Successfully Stored Register Data!";
}
else {
  echo "Error while storing data into database";
}
 ?>
