<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "societymanagementsystem";


$con = mysqli_connect($servername,$username,$password,$database);

$db = mysqli_select_db($con,$database);

if($con){
    echo "Connection Successful";
}
else{
    echo "No connection";
    die("No connection" .mysqli_connnect_error());
}


?>