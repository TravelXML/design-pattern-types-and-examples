<?php
class LoadBalancer {
    private $servers = [];
    private $currentServerIndex = 0;

    public function addServer(Server $server) {
        $this->servers[] = $server;
    }

    public function handleRequest($request) {
        if (count($this->servers) == 0) {
            echo "No servers available to handle the request.\n";
            return;
        }

        $server = $this->servers[$this->currentServerIndex];
        $server->handleRequest($request);
        $this->currentServerIndex = ($this->currentServerIndex + 1) % count($this->servers);
    }
}
?>
