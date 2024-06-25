<?php
//Implementing a basic circuit breaker in PHP
// to handle failures when making API calls.

class LoadBalancer {
    private $servers;
    private $currentServer;

    public function __construct(array $servers) {
        $this->servers = $servers;
        $this->currentServer = 0;
    }

    public function getServer() {
        $server = $this->servers[$this->currentServer];
        $this->currentServer = ($this->currentServer + 1) % count($this->servers);
        return $server;
    }
}

// Example usage
$servers = ["Server1", "Server2", "Server3"];
$loadBalancer = new LoadBalancer($servers);

// Simulating incoming requests
for ($i = 0; $i < 10; $i++) {
    echo $loadBalancer->getServer() . "\n";
}
?>