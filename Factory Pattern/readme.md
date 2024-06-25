# Factory Pattern

## Overview

This repository demonstrates the Factory Pattern, a creational design pattern used to create objects without specifying the exact class of object that will be created. The Factory Pattern defines an interface for creating an object, but lets subclasses alter the type of objects that will be created.

## Use Case

The Factory Pattern is useful in scenarios where the exact types and dependencies of the objects to be created are not known until runtime. It provides a way to encapsulate the instantiation logic, making the system more modular and scalable.

## Structure

- **Product**: Defines the interface of objects the factory method creates.
- **ConcreteProduct**: Implements the Product interface.
- **Creator**: Declares the factory method, which returns an object of type Product.
- **ConcreteCreator**: Implements the factory method to return an instance of ConcreteProduct.

## Implementation

Here is the implementation of the Factory Pattern from this repository:

### Product Interface

```php
<?php
interface Product {
    public function getType();
}
?>
```

### Concrete Products

```php
<?php
class ConcreteProductA implements Product {
    public function getType() {
        return "Type A";
    }
}

class ConcreteProductB implements Product {
    public function getType() {
        return "Type B";
    }
}
?>
```

### Creator

```php
<?php
abstract class Creator {
    abstract public function factoryMethod();

    public function doOperation() {
        $product = $this->factoryMethod();
        return "Creator: The same creator's code has just worked with " . $product->getType();
    }
}
?>
```

### Concrete Creators

```php
<?php
class ConcreteCreatorA extends Creator {
    public function factoryMethod() {
        return new ConcreteProductA();
    }
}

class ConcreteCreatorB extends Creator {
    public function factoryMethod() {
        return new ConcreteProductB();
    }
}
?>
```

### Client

```php
<?php
include 'Product.php';
include 'ConcreteProducts.php';
include 'Creator.php';
include 'ConcreteCreators.php';

function clientCode(Creator $creator) {
    echo $creator->doOperation();
}

echo "App: Launched with the ConcreteCreatorA.\n";
clientCode(new ConcreteCreatorA());

echo "\n\n";

echo "App: Launched with the ConcreteCreatorB.\n";
clientCode(new ConcreteCreatorB());
?>
```

## How to Run

1. **Clone the repository:**
   ```sh
   git clone https://github.com/TravelXML/design-pattern-types-and-examples.git
   ```

2. **Navigate to the Factory Pattern directory:**
   ```sh
   cd design-pattern-types-and-examples/Factory\ Pattern
   ```

3. **Run the PHP script:**
   ```sh
   php client.php
   ```

## Conclusion

The Factory Pattern is a powerful creational pattern that provides a way to delegate the instantiation logic to subclasses, making the system more flexible and maintainable.

