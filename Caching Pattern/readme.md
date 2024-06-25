# Caching Pattern

## Overview

This repository demonstrates the Caching Pattern, a structural design pattern that temporarily stores copies of data in accessible storage locations to reduce access time. This pattern helps in reducing database load and improving application performance.

## Use Case

The Caching Pattern is commonly used for storing frequently accessed data in a temporary storage area to improve performance and reduce load on the primary data source. It is often used in web applications to cache frequently accessed resources.

## Structure

- **Cache**: Stores temporary data for quick access.
- **Client**: Requests data from the Cache.
- **Data Source**: The primary source of data (e.g., database).

## Implementation

Here is the implementation of the Caching Pattern in PHP:

### Cache Class

```php
<?php
class SimpleCache {
    private $cache = [];
    private $maxSize;

    public function __construct($maxSize = 128) {
        $this->maxSize = $maxSize;
    }

    public function get($key) {
        return isset($this->cache[$key]) ? $this->cache[$key] : null;
    }

    public function set($key, $value) {
        if (count($this->cache) >= $this->maxSize) {
            array_shift($this->cache); // Remove the oldest item from the cache
        }
        $this->cache[$key] = $value;
    }
}
?>
```

### Fibonacci Class

```php
<?php
class Fibonacci {
    private $cache;

    public function __construct(SimpleCache $cache) {
        $this->cache = $cache;
    }

    public function fibonacci($n) {
        // Check if the result is in the cache
        $cachedResult = $this->cache->get($n);
        if ($cachedResult !== null) {
            return $cachedResult;
        }

        // Calculate the Fibonacci number
        if ($n < 2) {
            return $n;
        }
        $result = $this->fibonacci($n - 1) + $this->fibonacci($n - 2);

        // Store the result in the cache
        $this->cache->set($n, $result);

        return $result;
    }
}
?>
```

### Client

```php
<?php
include 'SimpleCache.php';
include 'Fibonacci.php';

// Create a cache instance
$cache = new SimpleCache();

// Create a Fibonacci instance with caching
$fibonacci = new Fibonacci($cache);

// Example usage
echo $fibonacci->fibonacci(10); // Outputs 55
?>
```

## How to Run

1. **Clone the repository:**
   ```sh
   git clone https://github.com/TravelXML/design-pattern-types-and-examples.git
   ```

2. **Navigate to the Caching Pattern directory:**
   ```sh
   cd design-pattern-types-and-examples/Caching\ Pattern
   ```

3. **Run the PHP script:**
   ```sh
   php client.php
   ```

## Conclusion

The Caching Pattern is a powerful structural pattern that helps improve application performance by reducing the load on the primary data source through temporary storage of frequently accessed data.
