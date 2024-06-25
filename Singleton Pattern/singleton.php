<?php
class Logger {
    private static $instance = null;

    // Private constructor to prevent instantiation
    private function __construct() {
        // Initialize logging mechanism (e.g., open log file)
    }

    // Prevent cloning of the instance
    private function __clone() { }

    // Prevent unserializing of the instance
    private function __wakeup() { }

    // Public method to provide access to the single instance
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Logger();
        }
        return self::$instance;
    }

    // Method to log messages
    public function log($message) {
        // Log the message (e.g., write to a file)
        echo $message . PHP_EOL;
    }
}

// Usage
$logger = Logger::getInstance();
$logger->log("This is a log message.");

$anotherLogger = Logger::getInstance();
$anotherLogger->log("This is another log message.");

// Both $logger and $anotherLogger refer to the same instance
?>