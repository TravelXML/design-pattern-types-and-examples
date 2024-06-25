# Strategy Pattern

## Overview

This repository demonstrates the Strategy Pattern, a behavioral design pattern that enables selecting an algorithm's implementation at runtime. The Strategy Pattern defines a family of algorithms, encapsulates each one, and makes them interchangeable. This pattern allows the algorithm to vary independently from the clients that use it.

## Use Case

The Strategy Pattern is useful in scenarios where multiple algorithms are available for a specific task, and the selection of the algorithm is determined at runtime. Examples include different sorting algorithms or payment methods.

## Structure

- **Strategy Interface**: Declares the interface for a family of algorithms.
- **Concrete Strategies**: Implement the Strategy interface.
- **Context**: Maintains a reference to a Strategy object and uses it to perform the algorithm.

## Implementation

Here is the implementation of the Strategy Pattern in PHP:

### Strategy Interface

```php
<?php
interface PaymentStrategy {
    public function pay($amount);
}
?>
```

### Concrete Strategies

```php
<?php
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
?>
```

### Context

```php
<?php
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
```

### Client

```php
<?php
include 'PaymentStrategy.php';
include 'CreditCardPayment.php';
include 'PayPalPayment.php';
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
?>
```

## How to Run

1. **Clone the repository:**
   ```sh
   git clone https://github.com/TravelXML/design-pattern-types-and-examples.git
   ```

2. **Navigate to the Strategy Pattern directory:**
   ```sh
   cd design-pattern-types-and-examples/Strategy\ Pattern
   ```

3. **Run the PHP script:**
   ```sh
   php client.php
   ```

## Conclusion

The Strategy Pattern allows for flexible and interchangeable implementations of algorithms. It enables the selection of algorithms at runtime, improving the maintainability and scalability of the codebase.
