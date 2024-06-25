<?php

interface Control {
    public function render();
}

class Button implements Control {
    public function render() {
        echo "Render Button\n";
    }
}

class TextBox implements Control {
    public function render() {
        echo "Render TextBox\n";
    }
}

class ControlFactory {
    public static function createControl($type) {
        if (strtolower($type) == "button") {
            return new Button();
        } elseif (strtolower($type) == "textbox") {
            return new TextBox();
        }
        return null; // Optionally, throw an exception or handle errors as needed
    }
}

// Example usage:
$button = ControlFactory::createControl("button");
$button->render();

$textBox = ControlFactory::createControl("textbox");
$textBox->render();
?>