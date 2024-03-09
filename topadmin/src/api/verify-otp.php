<?php
include "../config/config.php";
include "../services/auth-service.php";
session_start();
$result=array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $jsonContent = file_get_contents('php://input');
    $requestData = json_decode($jsonContent, true); 

    $email = $requestData['email'];
    $otp = $requestData['otp'];
    $auth = new AuthService($conn);
    $verify= $auth->validateOtp($email,$otp);

    $result["message"] = $verify;


    }else{
         http_response_code(500);
        $result["message"] = "Method Type is POST"; 
    }
    




header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
echo json_encode($result);
?>