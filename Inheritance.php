<<<<<<< HEAD
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

=======
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

>>>>>>> e796233e765274a548c1f805a4a249ea0f651356
