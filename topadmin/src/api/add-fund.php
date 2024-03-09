<?php
session_start();
include "../utils/headers.php";

$result=array();
$headers = new Headers($_SERVER['REQUEST_URI']);
$userId=$headers->getHeaders();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SESSION['start']!=null) {
  
    $jsonContent = file_get_contents('php://input');
    $requestData = json_decode($jsonContent, true); 


if (!empty($userId)) {
    $amount = $requestData['amount'];
    $type = $requestData['type'];


}

}else{
    $result = "User need to log in";
}

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
echo json_encode($result);
?>