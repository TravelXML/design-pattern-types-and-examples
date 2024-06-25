<?php
include 'Product.php';
include 'ConcreteProducts.php';
include 'Creator.php';
include 'ConcreteCreators.php';

function clientCode(Creator $creator) {
    echo $creator->doOperation();
}

echo "App: Launched with the ConcreteCreatorA.\n";
clientCode(new ConcreteCreatorA());

echo "\n\n";

echo "App: Launched with the ConcreteCreatorB.\n";
clientCode(new ConcreteCreatorB());
?>
