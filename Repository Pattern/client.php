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
