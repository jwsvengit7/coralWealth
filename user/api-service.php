<?php

include "config/config.php";

require "../topadmin/src/services/auth-service.php";
require "../topadmin/src/services/user-service.php";


$service = new AuthService($conn);
$user_service = new UserService($conn);

$response= $service->mappbyResponse($_SESSION["login-email"]);

$userid = $response['userid'];
$username = $response['username'];
$email = $response['email'];
$role = $response['role'];
$token = $response['token'];
$phone = $response['phone'];
$image = $response['image'];
$badge_status=$response['badge_status'] == null ? 0 : $response['badge_status']  ;
$myownreferrerID=$response['myownreferrerID'];

$results= $user_service->getBalance($userid);
$userAmount = $results["amount"];
$interestAmount = $results["interestAmount"];


$badges = $user_service->viewBage();
$invets_running=count($user_service->totalInvestmentRunning("running"));
$total_invest=count($user_service->totalInvestment());
?>