<?php
$servername="localhost";
$username="root";
$password="";
$dbname="school1";

$con = mysqli_connect($servername,$username,$password,$dbname);

if(!$con)
{
  echo "Error while connection";
}
?>
