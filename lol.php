<?php



$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);

if(!$con) {
die("Connect to this database failed due to" . mysqli_connect_error());}
echo "Success connecting to the DB";

?>