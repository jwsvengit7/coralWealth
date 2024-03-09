<?php
include "../config/config.php";
include "../services/auth-service.php";
session_start();
$result=array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $jsonContent = file_get_contents('php://input');
    $requestData = json_decode($jsonContent, true); 

    $email = $requestData['email'];
    $password = $requestData['password'];
    $auth = new AuthService($conn);
    $data=$auth->login($email,$password);
   if($data=="Login Succesfully"){
    http_response_code(200);
   }else{
    http_response_code(202);

   }
   $result["msg"]= $data;

    
}



header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
echo json_encode($result);
?>