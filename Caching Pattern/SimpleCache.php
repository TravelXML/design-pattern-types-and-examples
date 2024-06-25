<?php
// First, we create a simple cache class 
// that uses an associative array to store cached values.
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
