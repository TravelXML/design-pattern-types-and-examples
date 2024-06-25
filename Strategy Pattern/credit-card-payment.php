<?php
// step 2
// Next, we implement different payment strategies: 
//    Credit Card, PayPal, and Bitcoin.
class CreditCardPayment implements PaymentStrategy {
 private $name;
 private $cardNumber;
 private $cvv;
 private $dateOfExpiry;

public function __construct($name, $cardNumber, $cvv, $dateOfExpiry) {
 $this->name = $name;
 $this->cardNumber = $cardNumber;
 $this->cvv = $cvv;
 $this->dateOfExpiry = $dateOfExpiry;
 }

public function pay($amount) {
 echo "Paid $amount using Credit Card.\n";
 }
}

class PayPalPayment implements PaymentStrategy {
 private $email;
 private $password;

public function __construct($email, $password) {
 $this->email = $email;
 $this->password = $password;
 }

public function pay($amount) {
 echo "Paid $amount using PayPal.\n";
 }
}

class BitcoinPayment implements PaymentStrategy {
 private $walletAddress;

public function __construct($walletAddress) {
 $this->walletAddress = $walletAddress;
 }

public function pay($amount) {
 echo "Paid $amount using Bitcoin.\n";
 }
}
?>