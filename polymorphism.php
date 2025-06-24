<<<<<<< HEAD
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


=======
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


>>>>>>> e796233e765274a548c1f805a4a249ea0f651356
?>