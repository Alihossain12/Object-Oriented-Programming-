<<<<<<< HEAD


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



=======


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



>>>>>>> e796233e765274a548c1f805a4a249ea0f651356
?>