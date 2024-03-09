<?php

include "config/config.php";

require "../topadmin/src/services/user-service.php";

$user_service = new UserService($conn);





header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
echo json_encode($user_service->totalInvestmentRunning("running"));
?>