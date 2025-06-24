<<<<<<< HEAD
<?php

/**
 *  Access modifiers
 * 
 * Public -> Access from anywhere
 * Private -> Can't able to access from extended class only access on that class
 * Protected -> can be access inside extended class 
*/

class Father {

    public function __construct() {
        $this->house();
    }

    public function house(){
        echo "This is a house" . "<br>";
    }

    public function gold(){
        echo "This is a gold" . "<br>";
    }

    // can access from this class 
    private function houses() {
        echo "This is a house" . "<br>";
    }

    protected function kherkhana() {
        echo "This is a kherkhana" . "<br>";
    }

}


// Inheritance
class child extends Father {
    public function __construct() {
        $this->house();
        $this->gold();
        $this->kherkhana();
    }
}

// new child();
$Father = new child();
// $Father->gold();
// $Father->houses();
=======
<?php

/**
 *  Access modifiers
 * 
 * Public -> Access from anywhere
 * Private -> Can't able to access from extended class only access on that class
 * Protected -> can be access inside extended class 
*/

class Father {

    public function __construct() {
        $this->house();
    }

    public function house(){
        echo "This is a house" . "<br>";
    }

    public function gold(){
        echo "This is a gold" . "<br>";
    }

    // can access from this class 
    private function houses() {
        echo "This is a house" . "<br>";
    }

    protected function kherkhana() {
        echo "This is a kherkhana" . "<br>";
    }

}


// Inheritance
class child extends Father {
    public function __construct() {
        $this->house();
        $this->gold();
        $this->kherkhana();
    }
}

// new child();
$Father = new child();
// $Father->gold();
// $Father->houses();
>>>>>>> e796233e765274a548c1f805a4a249ea0f651356
// $Father->kherkhana();