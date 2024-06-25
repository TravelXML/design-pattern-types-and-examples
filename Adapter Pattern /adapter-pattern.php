<?php
//An application needs to integrate with a third-party library 
// where the interface is incompatible with the existing application code.


// Define the new library interface
class Adaptee {
    public function specificRequest() {
        return "Specific request.";
    }
}



class Adapter implements Target {
    private $adaptee;

    public function __construct(Adaptee $adaptee) {
        $this->adaptee = $adaptee;
    }

    public function request() {
        return $this->adaptee->specificRequest();
    }
}



function clientCode(Target $target) {
    echo $target->request();
}

$adaptee = new Adaptee();
$adapter = new Adapter($adaptee);
clientCode($adapter);



?>
