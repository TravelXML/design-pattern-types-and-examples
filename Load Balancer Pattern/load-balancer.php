<?php
// Implementing a simple round-robin load balancer in PHP 
// to distribute incoming requests evenly across a list of servers.


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