
# Load Balancer Pattern

## Overview

This repository demonstrates the Load Balancer Pattern, a structural design pattern used to distribute incoming network traffic across multiple servers to ensure no single server bears too much demand. This pattern improves application availability, reliability, and scalability.

## Use Case

The Load Balancer Pattern is commonly used in web applications to manage traffic, avoid server overload, and ensure high availability. It effectively distributes client requests to multiple servers, providing load distribution and fault tolerance.

## Structure

- **Load Balancer**: Distributes incoming requests to multiple servers.
- **Server**: Handles the requests distributed by the Load Balancer.
- **Client**: Sends requests to the Load Balancer.

## Implementation

Here is the implementation of the Load Balancer Pattern in PHP:

### Server Class

```php
<?php
class Server {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function handleRequest($request) {
        echo "Server " . $this->name . " handling request: " . $request . "\n";
    }
}
?>
```

### Load Balancer Class

```php
<?php
class LoadBalancer {
    private $servers = [];
    private $currentServerIndex = 0;

    public function addServer(Server $server) {
        $this->servers[] = $server;
    }

    public function handleRequest($request) {
        if (count($this->servers) == 0) {
            echo "No servers available to handle the request.\n";
            return;
        }

        $server = $this->servers[$this->currentServerIndex];
        $server->handleRequest($request);
        $this->currentServerIndex = ($this->currentServerIndex + 1) % count($this->servers);
    }
}
?>
```

### Client

```php
<?php
include 'Server.php';
include 'LoadBalancer.php';

$loadBalancer = new LoadBalancer();

$loadBalancer->addServer(new Server("Server1"));
$loadBalancer->addServer(new Server("Server2"));
$loadBalancer->addServer(new Server("Server3"));

$requests = ["Request1", "Request2", "Request3", "Request4", "Request5"];

foreach ($requests as $request) {
    $loadBalancer->handleRequest($request);
}
?>
```

## How to Run

1. **Clone the repository:**
   ```sh
   git clone https://github.com/TravelXML/design-pattern-types-and-examples.git
   ```

2. **Navigate to the Load Balancer Pattern directory:**
   ```sh
   cd design-pattern-types-and-examples/Load\ Balancer\ Pattern
   ```

3. **Run the PHP script:**
   ```sh
   php client.php
   ```

## Conclusion

The Load Balancer Pattern enhances the scalability and availability of a system by distributing incoming requests across multiple servers, preventing overload on a single server and ensuring high availability.

