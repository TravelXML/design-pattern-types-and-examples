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
