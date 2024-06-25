
# Adapter Pattern

## Overview

This repository contains an example implementation of the Adapter Pattern, a structural design pattern that allows incompatible interfaces to work together. The Adapter Pattern acts as a bridge between two incompatible interfaces, enabling them to collaborate.

## Use Case

The Adapter Pattern is commonly used in scenarios where an existing class needs to be used but its interface is not compatible with the rest of the code. It is often employed to integrate legacy code into new systems.

## Structure

The main components of the Adapter Pattern include:

- **Target Interface**: Defines the domain-specific interface that Client uses.
- **Adapter**: Implements the Target interface and adapts the Adaptee to the Target interface.
- **Adaptee**: Defines an existing interface that needs adapting.
- **Client**: Collaborates with objects conforming to the Target interface.

## Implementation

Here is an example implementation of the Adapter Pattern in PHP:

### Target Interface

```php
<?php

interface Target {
    public function request();
}
?>
```

### Adaptee

```php
<?php

class Adaptee {
    public function specificRequest() {
        return "Specific request.";
    }
}
?>
```

### Adapter

```php
<?php

class Adapter implements Target {
    private $adaptee;

    public function __construct(Adaptee $adaptee) {
        $this->adaptee = $adaptee;
    }

    public function request() {
        return $this->adaptee->specificRequest();
    }
}
?>
```

### Client

```php
<?php

function clientCode(Target $target) {
    echo $target->request();
}

$adaptee = new Adaptee();
$adapter = new Adapter($adaptee);
clientCode($adapter);
?>
```

## How to Run

1. **Clone the repository:**
   ```sh
   git clone https://github.com/TravelXML/design-pattern-types-and-examples.git
   ```

2. **Navigate to the Adapter Pattern directory:**
   ```sh
   cd design-pattern-types-and-examples/Adapter\ Pattern
   ```

3. **Run the PHP script:**
   ```sh
   php client.php
   ```

## Conclusion

The Adapter Pattern is a powerful tool in object-oriented design, enabling integration and compatibility between disparate systems and interfaces. By using this pattern, developers can create flexible and maintainable codebases that can adapt to changing requirements and legacy systems.

