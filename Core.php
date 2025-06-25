
 <?php

// -------------1. Class and Object-----------

class Baick {
    public $brand = "Royale In Field ";

    public function honk() {
        echo "Beep! Beep!";
    }
}

$myCar = new Baick(); // Creating object
echo $myCar->brand; // Output: Toyota
$myCar->honk();     // Output: Beep! Beep!








?>


