<?php 

class Animal {
    public function makeSound() {
        echo "The sound of the wind". "<br>";
    }
}

class Wind extends Animal {
    public function makeSound() {
        echo "The sound of the wind" . "<br>";
    }
}

class Whirlwind extends Animal {
    public function makeSound() {
        echo "The sound of the whirlwind" . "<br>";
    }
}

function speak(Animal $animal) {
    $animal->makeSound();
}

speak(new Wind()); // Output: The sound of the wind
speak(new Whirlwind()); // Output: The sound of the whirlwind


?>