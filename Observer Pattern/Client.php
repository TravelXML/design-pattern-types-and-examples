<?php
include 'Subject.php';
include 'Observer.php';
include 'ConcreteSubject.php';
include 'ConcreteObserver.php';

// Create subject
$subject = new ConcreteSubject();

// Create observers
$observer1 = new ConcreteObserver();
$observer2 = new ConcreteObserver();

// Attach observers to subject
$subject->attach($observer1);
$subject->attach($observer2);

// Change state and notify observers
$subject->setState("State 1");
$subject->setState("State 2");
?>
