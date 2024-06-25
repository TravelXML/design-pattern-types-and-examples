<?php
abstract class Creator {
    abstract public function factoryMethod();

    public function doOperation() {
        $product = $this->factoryMethod();
        return "Creator: The same creator's code has just worked with " . $product->getType();
    }
}
?>
