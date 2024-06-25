<?php
//Step 4: Using the Strategy Pattern
// Now, let’s use the strategy pattern in action.
// Include the files containing the strategy and context classes
include 'PaymentStrategy.php';
include 'CreditCardPayment.php';
include 'PayPalPayment.php';
include 'BitcoinPayment.php';
include 'ShoppingCart.php';
// Example usage
$shoppingCart = new ShoppingCart();
// Pay using Credit Card
$creditCardPayment = new CreditCardPayment("John Doe", "1234567890123456", "123", "12/23");
$shoppingCart->setPaymentStrategy($creditCardPayment);
$shoppingCart->checkout(100);
// Pay using PayPal
$payPalPayment = new PayPalPayment("john.doe@example.com", "securepassword");
$shoppingCart->setPaymentStrategy($payPalPayment);
$shoppingCart->checkout(200);
// Pay using Bitcoin
$bitcoinPayment = new BitcoinPayment("1HcMhzXxQ8zG4m6XZYr4U5RkR2D4w1L7Pe");
$shoppingCart->setPaymentStrategy($bitcoinPayment);
$shoppingCart->checkout(300);
?>
