<?php
class Server {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function handleRequest($request) {
        echo "Server " . $this->name . " handling request: " . $request . "\n";
    }
}
?>
