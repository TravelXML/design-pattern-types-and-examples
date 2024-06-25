<?php
class Singleton {
    private static $instance = null;
    private $data;

    // Private constructor to prevent direct object creation
    private function __construct() {
        $this->data = "Singleton Data";
    }

    // Static method to get the single instance of the class
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function getData() {
        return $this->data;
    }
}
?>