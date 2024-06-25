<?php
//Step 2: Bootstrap the API Gateway
//Next, we create a bootstrap script to initialize and run the API Gateway.

// Include the ApiGateway class
include 'ApiGateway.php';

// Create an instance of the ApiGateway
$gateway = new ApiGateway();

// Route the incoming request
$gateway->routeRequest();
?>
