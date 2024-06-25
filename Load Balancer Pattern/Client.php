<?php
include 'Server.php';
include 'LoadBalancer.php';

$loadBalancer = new LoadBalancer();

$loadBalancer->addServer(new Server("Server1"));
$loadBalancer->addServer(new Server("Server2"));
$loadBalancer->addServer(new Server("Server3"));

$requests = ["Request1", "Request2", "Request3", "Request4", "Request5"];

foreach ($requests as $request) {
    $loadBalancer->handleRequest($request);
}
?>
