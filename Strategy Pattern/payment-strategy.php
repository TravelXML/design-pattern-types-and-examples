<?php
//Step 1: Define the Strategy Interface
//First, we create an interface that defines a method `pay` 
//which all concrete payment strategies will implement.

interface PaymentStrategy {
 public function pay($amount);
}
?>