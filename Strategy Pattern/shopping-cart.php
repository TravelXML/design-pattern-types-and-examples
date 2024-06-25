<?php
// Step 3: Create the Context Class
// The context class uses a `PaymentStrategy` to perform the payment. 
// This class can change its payment strategy at runtime.
class ShoppingCart {
 private $paymentStrategy;
public function setPaymentStrategy(PaymentStrategy $paymentStrategy) {
 $this->paymentStrategy = $paymentStrategy;
 }
public function checkout($amount) {
 $this->paymentStrategy->pay($amount);
 }
}
?>