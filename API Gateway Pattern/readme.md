# PHP API Gateway

## Overview

This project demonstrates a basic implementation of the API Gateway Pattern in PHP. An API Gateway provides a single entry point for all the microservices running within the system. It handles requests by routing them to the appropriate microservice and provides other cross-cutting features such as authentication, SSL termination, and cache management.

## Features

- Provides a single entry point for a set of microservices
- Routes requests to appropriate microservices based on the URL and HTTP method
- Simulates communication with user and order services
- Simplifies client interactions with microservices

## Directory Structure

```
.
├── ApiGateway.php
├── client.php
└── README.md
```

- `ApiGateway.php`: Contains the `ApiGateway` class that handles request routing and response management.
- `bootstrap.php`: Initializes and runs the API Gateway.
- `README.md`: This file, providing an overview and instructions.

## Installation

1. Clone the repository:

```sh
git clone https://github.com/yourusername/php-api-gateway.git
cd php-api-gateway
```

2. Ensure you have PHP installed on your system.

3. Start a PHP built-in server:

```sh
php -S localhost:8000
```

4. Open your browser or use a tool like `curl` or Postman to make requests to the API Gateway.

## Usage

### Get User

Fetch user data from the user service.

**Request:**
```
GET /api/users/{user_id}
```

**Example:**
```
GET http://localhost:8000/api/users/1
```

**Response:**
```json
{
    "id": 1,
    "name": "John Doe",
    "age": 30
}
```

### Get Order

Fetch order data from the order service.

**Request:**
```
GET /api/orders/{order_id}
```

**Example:**
```
GET http://localhost:8000/api/orders/1
```

**Response:**
```json
{
    "id": 1,
    "product": "Laptop",
    "quantity": 2,
    "price": 1500
}
```

## Implementation Details

### ApiGateway Class

The `ApiGateway` class handles routing and processing of incoming requests. It contains the following methods:

- `routeRequest()`: Routes the incoming request to the appropriate method based on the URL and HTTP method.
- `getUser($userId)`: Simulates a request to the user service and returns the user data.
- `getOrder($orderId)`: Simulates a request to the order service and returns the order data.
- `sendResponse($statusCode, $data)`: Sends a JSON response to the client with the specified status code and data.

### Bootstrap Script

The `bootstrap.php` script initializes and runs the API Gateway:

```php
<?php

include 'ApiGateway.php';

// Create an instance of the ApiGateway
$gateway = new ApiGateway();

// Route the incoming request
$gateway->routeRequest();
?>
```

## Notes

- In a real-world scenario, replace the `file_get_contents` calls with proper HTTP client requests (e.g., using `cURL` or a library like Guzzle) to communicate with the microservices.
- The URLs for the microservices (`http://user-service` and `http://order-service`) should be actual endpoints of your microservices.

