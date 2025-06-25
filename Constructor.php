<?php

//-----------------2. Constructor------------


class Student {
    public $name;
    public $roll;

    // Constructor
    public function __construct($name, $roll) {
        $this->name = $name;
        $this->roll = $roll;
    }

    public function showInfo() {
        echo "Name: $this->name, Roll: $this->roll\n";
    }
}

$std1 = new Student("Hasan", 101);
$std1->showInfo();  // Output: Name: Hasan, Roll: 101

$std2 = new Student("Nadia", 102);
$std2->showInfo();  // Output: Name: Nadia, Roll: 102


//2nd example--------------

// class Rectangle {
//     public $length;
//     public $width;

//     // Constructor
//     public function __construct($length, $width) {
//         $this->length = $length;
//         $this->width = $width;
//     }

//     public function area() {
//         return $this->length * $this->width;
//     }
// }

// $rect = new Rectangle(5, 10);
// echo "Area: " . $rect->area();  // Output: Area: 50

?>


