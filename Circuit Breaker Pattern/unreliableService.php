<?php
function unreliableService() {
    if (rand(1, 10) <= 7) { // Simulate a 70% failure rate
        throw new Exception("Service failed");
    }
    echo "Service call succeeded.\n";
}
?>
