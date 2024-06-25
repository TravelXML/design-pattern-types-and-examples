<?php
include 'singleton.php';

$instance1 = Singleton::getInstance();
echo $instance1->getData(); // Outputs: Singleton Data

$instance2 = Singleton::getInstance();
echo $instance2->getData(); // Outputs: Singleton Data

// Verify both instances are the same
var_dump($instance1 === $instance2); // Outputs: bool(true)
?>
