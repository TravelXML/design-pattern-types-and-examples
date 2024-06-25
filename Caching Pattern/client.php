<?php
// 3rd
//Finally, we demonstrate how to use 
//the caching mechanism with the Fibonacci function.
include 'SimpleCache.php';
include 'Fibonacci.php';

// Create a cache instance
$cache = new SimpleCache();

// Create a Fibonacci instance with caching
$fibonacci = new Fibonacci($cache);

// Example usage
echo $fibonacci->fibonacci(10); // Outputs 55
?>
