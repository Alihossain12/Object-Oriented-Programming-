<?php

// Inheritance

class Animal {
    public function makeSound() {
        echo "Animal sound";
    }
}

class Cow extends Animal {
    public function makeSound() {
        echo "Hamba";
    }
}

$cow = new Cow();
$cow->makeSound(); // Output: Hamba
?>

