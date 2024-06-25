<?php
//Step 1: Define the User Repository Interface
//First, we define an interface for the User Repository to ensure 
// a consistent API for the repository.
interface UserRepositoryInterface {
    public function addUser($userId, $userInfo);
    public function getUser($userId);
    public function updateUser($userId, $userInfo);
    public function deleteUser($userId);
}
?>
