<?php
// Access modifiers in PHP (public, protected, private) define the visibility of class properties and methods, controlling access to them from outside or within the class and subclasses.
class Car {
    public $brand = "Toshiba";        // Public: accessible from anywhere
    private $engine = "23LTV Hamper";      // Private: accessible only within the class
    protected $wheels;    // Protected: accessible within the class and subclasses

    // Methods are public by default and there is no need to write the keyword Public for that, but it is allowed if you prefer.
    public function get_engine(){
        return $this->engine;
    }
}

$car1 = new Car();
echo "Brand = " . $car1->brand;
echo "<br>Engine = " . $car1->get_engine();

?>