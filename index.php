
 <?php

// -------------1. Class and Object-----------

class Car {
    public $brand = "Royale In Field ";

    public function honk() {
        echo "Beep! Beep!";
    }
}

$myCar = new Car(); // Creating object
echo $myCar->brand; // Output: Toyota
$myCar->honk();     // Output: Beep! Beep!





?>


