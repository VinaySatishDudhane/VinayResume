<?php
include("connection1.php");

$cname=$_POST["cname"];
$cemail=$_POST["cemail"];
$cnum=$_POST["cnum"];
$cmsg=$_POST["cmsg"];

$sql= " INSERT INTO ContactForm(cname,cemail,cnum,cmsg) VALUES ('$cname','$cemail','$cnum','$cmsg')";

if(mysqli_query($con,$sql))
{
  echo"Successfully data Stored!";
}
else {
  echo "Error while storing data into database";
}
 ?>
