
# Repository Pattern

## Overview

This repository demonstrates the Repository Pattern, a structural design pattern used to encapsulate the logic needed to access data sources. It mediates between the domain and data mapping layers, providing a collection-like interface for accessing domain objects. This pattern helps to decouple the data access logic from the business logic, enhancing modularity and maintainability.

## Use Case

The Repository Pattern is commonly used in applications that require access to complex data or need an abstraction layer that decouples the service layer from the data layer. It centralizes data logic or business logic.

## Structure

- **Repository Interface**: Defines the contract for data access operations.
- **Concrete Repository**: Implements the Repository interface, handling the actual data operations.
- **Client**: Uses the Repository to perform data access operations.

## Implementation

Here is the implementation of the Repository Pattern in PHP:

### Repository Interface

```php
<?php
interface UserRepositoryInterface {
    public function addUser($userId, $userInfo);
    public function getUser($userId);
    public function updateUser($userId, $userInfo);
    public function deleteUser($userId);
}
?>
```

### Concrete Repository

```php
<?php
class UserRepository implements UserRepositoryInterface {
    private $users = [];

    public function addUser($userId, $userInfo) {
        $this->users[$userId] = $userInfo;
    }

    public function getUser($userId) {
        return isset($this->users[$userId]) ? $this->users[$userId] : null;
    }

    public function updateUser($userId, $userInfo) {
        if (isset($this->users[$userId])) {
            $this->users[$userId] = $userInfo;
        }
    }

    public function deleteUser($userId) {
        if (isset($this->users[$userId])) {
            unset($this->users[$userId]);
        }
    }
}
?>
```

### Client

```php
<?php
include 'UserRepositoryInterface.php';
include 'UserRepository.php';

// Create a UserRepository instance
$userRepo = new UserRepository();

// Add a user
$userRepo->addUser(1, ["name" => "John", "age" => 30]);

// Get a user
$user = $userRepo->getUser(1);
print_r($user);  // Outputs: Array ( [name] => John [age] => 30 )

// Update a user
$userRepo->updateUser(1, ["name" => "John Doe", "age" => 31]);

// Get the updated user
$user = $userRepo->getUser(1);
print_r($user);  // Outputs: Array ( [name] => John Doe [age] => 31 )

// Delete a user
$userRepo->deleteUser(1);

// Try to get the deleted user
$user = $userRepo->getUser(1);
var_dump($user);  // Outputs: NULL
?>
```

## How to Run

1. **Clone the repository:**
   ```sh
   git clone https://github.com/TravelXML/design-pattern-types-and-examples.git
   ```

2. **Navigate to the Repository Pattern directory:**
   ```sh
   cd design-pattern-types-and-examples/Repository\ Pattern
   ```

3. **Run the PHP script:**
   ```sh
   php client.php
   ```

## Conclusion

The Repository Pattern enhances the maintainability and modularity of a system by encapsulating data access logic, making it easier to manage and modify the data access layer without affecting the business logic.

