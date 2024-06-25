# Singleton Pattern

## Overview

This repository demonstrates the Singleton Pattern, a creational design pattern that ensures a class has only one instance and provides a global point of access to it. This pattern is useful for managing shared resources such as configuration settings or database connections.

## Use Case

The Singleton Pattern is commonly used in scenarios where a single instance of a class is required to coordinate actions across the system. Examples include managing a connection to a database or a logging service.

## Structure

- **Singleton**: The class that contains a private static instance of itself and provides a public static method for retrieving the instance.

## Implementation

Here is the implementation of the Singleton Pattern in PHP:

### Singleton Class

```php
<?php
class Singleton {
    private static $instance = null;
    private $data;

    // Private constructor to prevent direct object creation
    private function __construct() {
        $this->data = "Singleton Data";
    }

    // Static method to get the single instance of the class
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function getData() {
        return $this->data;
    }
}
?>
```

### Client

```php
<?php
include 'Singleton.php';

$instance1 = Singleton::getInstance();
echo $instance1->getData(); // Outputs: Singleton Data

$instance2 = Singleton::getInstance();
echo $instance2->getData(); // Outputs: Singleton Data

// Verify both instances are the same
var_dump($instance1 === $instance2); // Outputs: bool(true)
?>
```

## How to Run

1. **Clone the repository:**
   ```sh
   git clone https://github.com/TravelXML/design-pattern-types-and-examples.git
   ```

2. **Navigate to the Singleton Pattern directory:**
   ```sh
   cd design-pattern-types-and-examples/Singleton\ Pattern
   ```

3. **Run the PHP script:**
   ```sh
   php client.php
   ```

## Conclusion

The Singleton Pattern ensures that a class has only one instance and provides a global point of access to this instance, making it ideal for managing shared resources and coordinating actions across a system.

