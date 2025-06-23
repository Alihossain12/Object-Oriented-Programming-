

<?php

//-----------------2. Constructor------------

class Car {
    public $brand;

    public function __construct($brandName) {
        $this->brand = $brandName;
    }

    public function showBrand() {
        echo "Brand: " . $this->brand;
    }
}

$car1 = new Car("Honda");
$car1->showBrand();  // Output: Brand: Honda



?>