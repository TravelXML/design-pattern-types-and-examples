<?php
//An application needs to integrate with a third-party library 
// where the interface is incompatible with the existing application code.


// Define the new library interface
interface NewLibraryInterface {
    public function newRequest();
}

// Define the old library class with an incompatible interface
class OldLibraryClass {
    public function oldRequest() {
        echo "Old request method\n";
    }
}

// Define the adapter class that implements the new interface and adapts the old class
class LibraryAdapter implements NewLibraryInterface {
    private $oldLibrary;

    public function __construct(OldLibraryClass $oldLibrary) {
        $this->oldLibrary = $oldLibrary;
    }

    public function newRequest() {
        $this->oldLibrary->oldRequest();
    }
}

// Client code that uses the new interface
function clientCode(NewLibraryInterface $library) {
    $library->newRequest();
}

// Usage
$oldLibrary = new OldLibraryClass();
$adapter = new LibraryAdapter($oldLibrary);

// Now the client can use the new interface to interact with the old library
clientCode($adapter);

?>