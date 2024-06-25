<?php
include 'circuit-breaker-pattern.php';
include 'service.php';

$circuitBreaker = new CircuitBreaker(3, 5); // Threshold of 3 failures, retry after 5 seconds

for ($i = 0; $i < 10; $i++) {
    $circuitBreaker->call('unreliableService');
    sleep(1);
}
?>
