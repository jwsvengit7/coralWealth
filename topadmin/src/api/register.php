<?php
include "../config/config.php";
include "../services/auth-service.php";
session_start();
$result=array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $jsonContent = file_get_contents('php://input');
    $requestData = json_decode($jsonContent, true); 

    $email = $requestData['email'];
    $username = $requestData['username'];
    $password = password_hash($requestData['password']);
    $auth = new AuthService($conn);
    $user = array("username"=>$username,"email"=>$email,"password"=>$password);
    $result["msg"]= $auth->register($user);
    
}



header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
echo json_encode($result);
?>