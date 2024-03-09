<?php
$server = "localhost";
$username = "root";
$password = "";
$db="coralwealth";
$conn = new mysqli($server,$username,$password,$db);
if($conn->connect_error){
    die("Error Connecting to databse");
}


?>