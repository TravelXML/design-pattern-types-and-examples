<?php
class ConcreteSubject implements Subject {
    private $observers = [];
    private $state;

    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer) {
        $this->observers = array_filter($this->observers, function($o) use ($observer) {
            return $o !== $observer;
        });
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function getState() {
        return $this->state;
    }

    public function setState($state) {
        $this->state = $state;
        $this->notify();
    }
}
?>
