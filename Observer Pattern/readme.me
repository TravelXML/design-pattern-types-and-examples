# Observer Pattern

## Overview

This repository demonstrates the Observer Pattern, a behavioral design pattern used to define a one-to-many dependency between objects. When one object changes state, all its dependents are notified and updated automatically. This pattern is useful for implementing distributed event-handling systems.

## Use Case

The Observer Pattern is commonly used in scenarios where changes to one object need to be propagated to a set of dependent objects. Examples include user interface frameworks where changes in a data model need to be reflected in multiple views.

## Structure

- **Subject**: The object that maintains a list of observers and sends notifications to them of any state changes.
- **Observer**: The objects that need to be notified of changes in the subject.
- **ConcreteSubject**: Implements the Subject interface to send notifications to observers.
- **ConcreteObserver**: Implements the Observer interface to receive updates from the subject.

## Implementation

Here is the implementation of the Observer Pattern in PHP:

### Subject Interface

```php
<?php
interface Subject {
    public function attach(Observer $observer);
    public function detach(Observer $observer);
    public function notify();
}
?>
```

### Observer Interface

```php
<?php
interface Observer {
    public function update(Subject $subject);
}
?>
```

### Concrete Subject

```php
<?php
class ConcreteSubject implements Subject {
    private $observers = [];
    private $state;

    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer) {
        $this->observers = array_filter($this->observers, function($o) use ($observer) {
            return $o !== $observer;
        });
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function getState() {
        return $this->state;
    }

    public function setState($state) {
        $this->state = $state;
        $this->notify();
    }
}
?>
```

### Concrete Observer

```php
<?php
class ConcreteObserver implements Observer {
    private $observerState;

    public function update(Subject $subject) {
        $this->observerState = $subject->getState();
        echo "Observer state updated to: " . $this->observerState . "\n";
    }
}
?>
```

### Client

```php
<?php
include 'Subject.php';
include 'Observer.php';
include 'ConcreteSubject.php';
include 'ConcreteObserver.php';

// Create subject
$subject = new ConcreteSubject();

// Create observers
$observer1 = new ConcreteObserver();
$observer2 = new ConcreteObserver();

// Attach observers to subject
$subject->attach($observer1);
$subject->attach($observer2);

// Change state and notify observers
$subject->setState("State 1");
$subject->setState("State 2");
?>
```

## How to Run

1. **Clone the repository:**
   ```sh
   git clone https://github.com/TravelXML/design-pattern-types-and-examples.git
   ```

2. **Navigate to the Observer Pattern directory:**
   ```sh
   cd design-pattern-types-and-examples/Observer\ Pattern
   ```

3. **Run the PHP script:**
   ```sh
   php client.php
   ```

## Conclusion

The Observer Pattern is a powerful behavioral pattern that facilitates a one-to-many dependency between objects, allowing changes in one object to be communicated to multiple dependent objects efficiently.

