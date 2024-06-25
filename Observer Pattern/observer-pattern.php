<?php
//An application where the user interface needs to be updated 
// whenever the data model changes.
interface Observer {
    public function update();
}

class DataModel {
    private $observers = [];

    public function addObserver(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function changeData() {
        // Simulate data change
        $this->notifyObservers();
    }

    private function notifyObservers() {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}

class UserInterface implements Observer {
    public function update() {
        echo "UI Update: Data has changed!\n";
    }
}

// Example usage:
$dataModel = new DataModel();
$ui = new UserInterface();

$dataModel->addObserver($ui);
$dataModel->changeData();  // Will output: UI Update: Data has changed!
?>