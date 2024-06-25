<?php
interface UserRepositoryInterface {
    public function addUser($userId, $userInfo);
    public function getUser($userId);
    public function updateUser($userId, $userInfo);
    public function deleteUser($userId);
}
?>