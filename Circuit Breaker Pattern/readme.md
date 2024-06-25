# Circuit Breaker Pattern

## Overview

This repository demonstrates the Circuit Breaker Pattern, a behavioral design pattern used to detect failures and encapsulate the logic of preventing a failure from constantly recurring. This pattern helps to improve the stability and resilience of the system by stopping the flow of requests to a service that is currently failing.

## Use Case

The Circuit Breaker Pattern is commonly used in microservices architectures to handle failures gracefully and prevent cascading failures in the system. It temporarily blocks requests to a failing service and allows it to recover.

## Structure

- **Circuit Breaker**: Monitors requests and responses to a service. It can be in one of three states: Closed, Open, or Half-Open.
- **Service**: The service that the client interacts with.
- **Client**: Makes requests to the service through the Circuit Breaker.

## States of Circuit Breaker

- **Closed**: Requests pass through normally.
- **Open**: Requests are blocked immediately and a failure response is returned.
- **Half-Open**: A limited number of requests are allowed to pass through to check if the service has recovered.

## Implementation

Here is an example implementation of the Circuit Breaker Pattern in PHP:

### Circuit Breaker Class

```php
<?php
class CircuitBreaker {
    private $failureCount = 0;
    private $failureThreshold;
    private $retryTimePeriod;
    private $lastFailureTime;

    public function __construct($failureThreshold, $retryTimePeriod) {
        $this->failureThreshold = $failureThreshold;
        $this->retryTimePeriod = $retryTimePeriod;
    }

    public function call($serviceFunction) {
        if ($this->isOpen()) {
            echo "Circuit is open. Request blocked.\n";
            return false;
        }

        try {
            $serviceFunction();
            $this->reset();
        } catch (Exception $e) {
            $this->recordFailure();
            echo "Service call failed. Error: " . $e->getMessage() . "\n";
        }
    }

    private function isOpen() {
        if ($this->failureCount >= $this->failureThreshold) {
            if ((time() - $this->lastFailureTime) > $this->retryTimePeriod) {
                $this->halfOpen();
                return false;
            }
            return true;
        }
        return false;
    }

    private function recordFailure() {
        $this->failureCount++;
        $this->lastFailureTime = time();
    }

    private function reset() {
        $this->failureCount = 0;
    }

    private function halfOpen() {
        $this->failureCount = $this->failureThreshold / 2;
    }
}
?>
```

### Service Function

```php
<?php
function unreliableService() {
    if (rand(1, 10) <= 7) { // Simulate a 70% failure rate
        throw new Exception("Service failed");
    }
    echo "Service call succeeded.\n";
}
?>
```

### Client

```php
<?php
include 'CircuitBreaker.php';
include 'unreliableService.php';

$circuitBreaker = new CircuitBreaker(3, 5); // Threshold of 3 failures, retry after 5 seconds

for ($i = 0; $i < 10; $i++) {
    $circuitBreaker->call('unreliableService');
    sleep(1);
}
?>
```

## How to Run

1. **Clone the repository:**
   ```sh
   git clone https://github.com/TravelXML/design-pattern-types-and-examples.git
   ```

2. **Navigate to the Circuit Breaker Pattern directory:**
   ```sh
   cd design-pattern-types-and-examples/Circuit\ Breaker\ Pattern
   ```

3. **Run the PHP script:**
   ```sh
   php client.php
   ```

## Conclusion

The Circuit Breaker Pattern enhances the stability and resilience of a system by preventing requests to a failing service, allowing it to recover and avoid cascading failures.

