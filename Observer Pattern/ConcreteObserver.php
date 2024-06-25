<?php
class ConcreteObserver implements Observer {
    private $observerState;

    public function update(Subject $subject) {
        $this->observerState = $subject->getState();
        echo "Observer state updated to: " . $this->observerState . "\n";
    }
}
?>
