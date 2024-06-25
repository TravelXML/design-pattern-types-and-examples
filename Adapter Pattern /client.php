<?php

function clientCode(Target $target) {
    echo $target->request();
}

$adaptee = new Adaptee();
$adapter = new Adapter($adaptee);
clientCode($adapter);
?>